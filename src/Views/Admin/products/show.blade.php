@extends('layouts.master')

@section('title')
Xem chi tiết
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1>Xem chi tiết
                        </h1>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>TRƯỜNG</th>
                        <th>GIÁ TRỊ</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($product as $key => $value)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{!! $value !!}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <a class="btn btn-info" href="{{ url('admin/products') }}">Trở về</a>
        </div>
    </div>
</div>
</div>
</div>
@endsection