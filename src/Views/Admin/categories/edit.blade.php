@extends('layouts.master')

@section('title')
Sửa Danh Mục
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Sửa Danh Mục</h1>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

                <form action="{{ url("admin/categories/{$category['id']}/update") }}" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 mt-3">
                                <label for="id" class="form-label">ID:</label>
                                <input type="text" class="form-control " id="id" value="{{ $category['id'] }}" readonly name="id">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" value="{{ $category['name'] }}" name="name">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-info" href="{{ url('admin/categories') }}">Trở về</a>

                </form>



            </div>
        </div>
    </div>
</div>
@endsection