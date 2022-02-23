{{--resources/views/products/create.blade.php--}}
{{-- Template Engine: Blade của Laravel: hỗ trợ cú pháp của PHP
theo dạng clear
- Echo dùng blade chống lỗi bảo mật XSS
--}}
@extends('layouts.main')
@section('page_title', 'Form thêm mới')

@section('content')
<form method="post" action="{{ url('luu-sp') }}">
    @csrf
    Tên sp:
    <input type="text" name="name" value="" />
    <br />
    Giá sp:
    <input type="number" name="price" value="" />
    <br />
    Chi tiết sp:
    <textarea name="description"></textarea>
    <br />
    <input type="submit" name="submit" value="Lưu sp" />
</form>
@endsection()
