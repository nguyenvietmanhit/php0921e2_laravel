{{--resources/views/products/index.blade.php--}}

<a href="{{ url('them-moi-sp') }}">Thêm mới sp</a>
<h1>Danh sách sp</h1>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th></th>
    </tr>
    @foreach($products AS $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ number_format($product->price) }} vnd</td>
        <th>{!! $product->description !!}</th>
        <td>
            <a href="{{ url('sua-sp/' . $product->id) }}">Sửa</a>
            <a href="{{ url('xoa-sp/' . $product->id) }}" onclick="return confirm('Xóa?')">Xóa</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $products->links() }}
