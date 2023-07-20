@extends('layouts.header')

@section('content')
<div class="container">
    <h4 class="mt-4">[一覧]</h4>
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="card-title">iYell 社員管理システム</h4>
        </div>
        <div class="card-body">
            <a href="employees/create">より多くのスタッフ</a>
            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">社員番号</th>
                        <th scope="col">氏名</th>
                        <th scope="col">部署</th>
                        <th scope="col">性別</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">
                            <a href="/employees/detail/{{ ++$id }}/{{ $employee->employee_id }}">
                                {{ $id }}
                            </a>
                        </th>
                        <td>
                            <a href="/employees/detail/{{ $id }}/{{ $employee->employee_id }}">
                                {{ $employee->employee_id }}
                            </a>
                        </td>
                        <td>{{ $employee->employee_name }}</td>
                        <td>{{ $employee->department->department_name }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>
                            <a href="/employees/update/{{ $id }}/{{ $employee->employee_id }}"
                                class="btn btn-primary btn-sm">編集</a>
                            <a href="/employees/delete/{{ $id }}/{{ $employee->employee_id }}"
                                class="btn btn-danger btn-sm">削除</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
        </div>
    </div>
</div>
@endsection