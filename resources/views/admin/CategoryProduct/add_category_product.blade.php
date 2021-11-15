@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <?php
                                $message=Session::get('message');
                                if($message){
                                    echo '<div class="alert alert-success">' .$message. '</div>';
                                Session::put('message',null);
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_product_name" class="form-control" id="slug"
                                placeholder="Enter email" onkeyup="ChangeToSlug();">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug danh mục</label>
                            <input type="text" name="category_product_slug" class="form-control" id="convert_slug"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea name="category_product_desc" style="resize:none" rows=8 class="form-control"
                                id="exampleInputPassword1" placeholder="Mô tả danh mục">
                                        </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thuộc danh mục</label>
                            <select name="category_parent" class="form-control m-bot15">
                                <option value="0">---Danh mục cha---</option>
                                @foreach($category as $key => $val)
                                <option value="{{$val->category_id}}">{{$val->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_product_status" class="form-control m-bot15">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>

                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                    </form>

                </div>
            </div>
        </section>

    </div>
</div>
@endsection