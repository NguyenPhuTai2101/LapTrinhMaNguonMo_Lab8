@extends('layouts.app')

@section('title', 'Danh sách sinh viên')

@section('content')
<h2 class="mb-4 text-center fw-bold text-primary">👩‍🎓 Danh sách sinh viên và môn học</h2>

<table class="table table-striped table-hover align-middle">
    <thead class="table-primary">
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Môn học đã đăng ký</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>
                @foreach($s->courses as $c)
                <span class="badge bg-info text-dark">{{ $c->title }}</span>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
