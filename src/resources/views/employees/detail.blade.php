@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title">iYell XXX</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2 font-weight-bold mt-2">ID</div>
                    <div class="col-10 mt-2">{{ $id }}</div>
                </div>
                <div class="row">
                    <div class="col-2 font-weight-bold mt-2">社員番号</div>
                    <div class="col-10 mt-2">{{ $employee->employee_id }}</div>
                </div>
                <div class="row">
                    <div class="col-2 font-weight-bold mt-2">氏名</div>
                    <div class="col-10 mt-2">{{ $employee->employee_name }}</div>
                </div>
                <div class="row">
                    <div class="col-2 font-weight-bold mt-2">部署</div>
                    <div class="col-10 mt-2">{{ $employee->department->department_name }}</div>
                </div>
                <div class="row">
                    <div class="col-2 font-weight-bold mt-2">性別</div>
                    <div class="col-10 mt-2">{{ $employee->gender }}</div>
                </div>
                <div class="row mt-4">
                    <a href="/" class="col-2">性別</a>
                </div>
            </div>
        </div>
    </div>
@endsection
