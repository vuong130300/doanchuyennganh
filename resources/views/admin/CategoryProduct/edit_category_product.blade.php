@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục sản phẩm
            </header>
            <div class="panel-body">
                @foreach($edit_category_product as $key =>$edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}"
                        method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{$edit_value->category_name}}" name="category_product_name"
                                class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug danh mục</label>
                            <input type="text" value="{{$edit_value->category_product_slug}}"
                                name="category_product_slug" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea name="category_product_desc" style="resize:none" rows=8 class="form-control"
                                id="exampleInputPassword1">{{$edit_value->category_desc}}
                                    </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thuộc danh mục</label>
                            <select name="category_parent" class="form-control m-bot15">
                                <option value="0">---Danh mục cha---</option>
                                @foreach($category as $key => $val)
                                    @if($val->category_parent==0)
                                        <option {{$val->category_id == $edit_value->category_id ? 'selected' : ''}} value="{{$val->category_id}}">{{$val->category_name}}</option>
                                    @endif
                                    @foreach($category as $key => $val2)
                                        @if($val2->category_parent == $val->category_id)
                                            <option {{$val2->category_id == $edit_value->category_id ? 'selected' : ''}} value="{{$val2->category_id}}">---{{$val2->category_name}}---</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh
                            mục</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</div>
@endsection