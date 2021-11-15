<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CouponController extends Controller
{
	
    //Admin
    public function insert_coupon(){
    	return view('admin.coupon.insert_coupon');
    }
    
    public function insert_coupon_code(Request $request){
    	$data = $request->all();

    	$coupon = new Coupon;

        $coupon->coupon_code = $data['coupon_code'];
    	$coupon->coupon_name = $data['coupon_name'];
    	$coupon->coupon_number = $data['coupon_number'];
    	$coupon->coupon_time = $data['coupon_time'];
    	$coupon->coupon_condition = $data['coupon_condition'];
    	$coupon->save();

    	Session::put('message','Thêm mã khuyến mãi thành công');
        return Redirect::to('insert-coupon');

    }

    public function list_coupon(){
    	$coupon = Coupon::orderby('coupon_id','DESC')->paginate(2);
    	return view('admin.coupon.list_coupon')->with(compact('coupon'));
    }

    public function delete_coupon($coupon_id){
    	$coupon = Coupon::find($coupon_id);
    	$coupon->delete();
    	Session::put('message','Xóa mã khuyến mãi thành công');
        return Redirect::to('list-coupon');
    }

    //User
    public function unset_coupon(){
		$coupon = Session::get('coupon');
        if($coupon==true){
            Session::forget('coupon');
            return redirect()->back()->with('message','Xóa mã khuyến mãi thành công');
        }
	}

}
