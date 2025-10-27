@extends('layouts.app')

@section('title', 'Danh sách sản phẩm')

@section('content')
<h2 class="mb-4 text-center fw-bold text-primary">🛒 Danh sách sản phẩm</h2>

<table class="table table-hover align-middle">
    <thead>
        <tr>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Danh mục</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td><span class="text-success fw-semibold">{{ number_format($p->price) }} đ</span></td>
            <td>{{ $p->category->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $products->links() }}
</div>
@endsection
