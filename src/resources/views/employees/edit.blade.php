@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title">iYell XXX</h4>
            </div>
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 font-weight-bold">ID</label>
                        <div class="col-sm-3">{{ $id }}</div>
                    </div>
                    <div class="form-group row">
                        <label for="employee_id" class="col-sm-2 font-weight-bold">社員番号</label>
                        <div class="col-sm-3">
                            <input type="text" name="employee_id" class="form-control" id="employee_id" required
                                value="{{ $employee->employee_id }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="employee_name" class="col-sm-2 font-weight-bold">氏名</label>
                        <div class="col-sm-3">
                            <input type="name" name="employee_name" class="form-control" id="employee_name" required
                                value="{{ $employee->employee_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-sm-2 font-weight-bold">部署</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="department_id" id="department">
                                <option value="{{ $employee->department_id }}">{{ $employee->department->department_name }}
                                </option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->department_id }}">{{ $department->department_name }}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 font-weight-bold">性別</label>
                        <div class="col-sm-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="employee_gender" id="genderMale"
                                    value="男" {{ $employee->gender == '男' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="genderMale">男</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="employee_gender" id="genderFemale"
                                    value="女" {{ $employee->gender == '女' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="genderFemale">女</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-sm-3 ml-2">
                            <a href="/">戻る</a>
                            <input class="btn btn-primary ml-5" type="submit" name="submit" id="" value="登録">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
