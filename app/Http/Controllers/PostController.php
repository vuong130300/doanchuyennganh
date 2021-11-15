<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Post;
use App\CategoryPost;
use Illuminate\Support\Facades\Redirect;
session_start();

class PostController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_post(){
        $this->AuthLogin();
        $cate_post = CategoryPost::orderBy('category_post_id','DESC')->get();
    	return view('admin.Post.add_post')->with(compact('cate_post'));
    }

    public function list_post(){
        $this->AuthLogin();

        $all_post = Post::with('category_post')->orderBy('post_id','DESC')->paginate(4);
    	
    	return view('admin.Post.list_post')->with(compact('all_post',$all_post));
    }

    public function save_post(Request $request){
        $this->AuthLogin();
    	$data = $request->all();
        $post = new Post();
    	$post->post_title = $data['post_title'];
        $post->post_slug = $data['post_slug'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_meta_desc = $data['post_meta_desc'];
        $post->post_meta_keywords = $data['post_meta_keywords'];
        $post->post_status = $data['post_status'];
        $post->category_post_id = $data['category_post_id'];

        $get_image = $request->file('post_image');
      
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post',$new_image);
            $post->post_image=$new_image;
            $post->save();
            Session::put('message','Thêm bài viết thành công');
            return Redirect()->back();
        }else{
            Session::put('error','Vui lòng thêm hình ảnh');
            return Redirect()->back();
        }

    }
    
    public function edit_post($post_id){
        $this->AuthLogin();

        $cate_post = CategoryPost::orderBy('category_post_id','DESC')->get();
        $post = Post::find($post_id);
        
        return view('admin.Post.edit_post')->with(compact('post'))->with(compact('cate_post'));
    }

    public function update_post(Request $request,$post_id){
        $this->AuthLogin();
        
        $data = $request->all();
        $post = Post::find($post_id);
    	$post->post_title = $data['post_title'];
        $post->post_slug = $data['post_slug'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_meta_desc = $data['post_meta_desc'];
        $post->post_meta_keywords = $data['post_meta_keywords'];
        $post->post_status = $data['post_status'];
        $post->category_post_id = $data['category_post_id'];
        $post_image = $post->post_image;
        $get_image = $request->file('post_image');
      
        if($get_image){
            $post_image_old = $post->post_image;
            $path = 'public/uploads/post/'.$post_image;
            unlink($path);

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post',$new_image);
            $post->post_image=$new_image;
            
        }
        $post->save();
        Session::put('message','Cập nhật bài viết thành công');
        return Redirect::to('/list-post');
    }

    public function delete_post($post_id){
        $this->AuthLogin();
        $post = Post::find($post_id);
        $post_image = $post->post_image;
        if($post_image){
            unlink('public/uploads/post/'.$post_image);
        }
        $post->delete();
        Session::put('message','Xóa bài viết thành công');
        return Redirect()->back();
    }

    public function unactive_post($post_id){
        $this->AuthLogin();
        DB::table('tbl_posts')->where('post_id',$post_id)->update(['post_status'=>1]);
        Session::put('message','Hiển thị bài vết ');
        return Redirect::to('list-post');

    }

    public function active_post($post_id){
        $this->AuthLogin();
        DB::table('tbl_posts')->where('post_id',$post_id)->update(['post_status'=>0]);
        Session::put('message','Ẩn bài viết');
        return Redirect::to('list-post');
    }

    //Front End

    public function show_category_post_home(Request $request,$post_slug){
      
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 

        $catepost = CategoryPost::where('category_post_slug',$post_slug)->take(1)->get();

        $category_post = CategoryPost::orderBy('category_post_id','DESC')->get();

        foreach($catepost as $key =>$cate){
            $cate_id = $cate->category_post_id;
        }
        
        $post = Post::with('category_post')->where('post_status','1')->where('category_post_id',$cate_id)->paginate(12);

        return view('pages.blog.category_blog')->with('category',$cate_product)->with('post',$post)->with('category_post',$category_post);
    }

    public function show_post_home(Request $request,$post_slug){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 

        $category_post = CategoryPost::orderBy('category_post_id','DESC')->get();

        $post = Post::with('category_post')->where('post_status','1')->where('post_slug',$post_slug)->take(1)->get();

        foreach($post as $key =>$pst){
            $cate_id = $pst->category_post_id;
            $title = $pst->post_title;
            $cate_post_id = $pst->category_post_id;
        }

        $related = Post::with('category_post')->where('post_status','1')->where('category_post_id',$cate_post_id)->whereNotIn('post_slug',[$post_slug])->take(3)->get();

        return view('pages.blog.blog_details')->with('category',$cate_product)->with('post',$post)->with('category_post',$category_post)->with('title',$title)->with('related',$related);
    }
}
