<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')->paginate(5);

        $id = 0;

        return view('employees.index', [
            'employees' => $employees,
            'id' => $id
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $departments = Department::all();

        return view('employees.create', ['departments' => $departments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|unique:employees',
            'employee_name' => 'required',
            'department_id' => 'required',
            'employee_gender' => 'required'
        ]);

        $employee = Employee::create([
            'employee_id' => $request->input('employee_id'),
            'employee_name' => $request->input('employee_name'),
            'department_id' => $request->input('department_id'),
            'gender' => $request->input('employee_gender')
        ]);

        $employee->save();

        return redirect('/');
    }

    public function detail($id, $employeeId)
    {
        $employee = Employee::where('employee_id', $employeeId)
            ->with('department')
            ->first();

        return view('employees.detail', [
            'id' => $id,
            'employee' => $employee
        ]);
    }

    public function edit($id, $employeeId)
    {
        $employee = Employee::where('employee_id', $employeeId)
            ->with('department')
            ->first();

        $departments = Department::all();

        return view('employees.edit', [
            'id' => $id,
            'employee' => $employee,
            'departments' => $departments
        ]);
    }

    public function update(Request $request, $id, $employeeId)
    {
        $employee = Employee::where('employee_id', $employeeId)
            ->update([
                'employee_id' => $request->input('employee_id'),
                'employee_name' => $request->input('employee_name'),
                'department_id' => $request->input('department_id'),
                'gender' => $request->input('employee_gender')
            ]);

        return redirect('/employees');
    }

    public function destroy($id, $employeeId)
    {
        $employee = Employee::where('employee_id', $employeeId)
            ->first();

        $employee->where('employee_id', $employeeId)->delete();

        return redirect('/employees');
    }

    public function delete($id, $employeeId)
    {
        $employee = Employee::where('employee_id', $employeeId)
            ->with('department')
            ->first();

        return view('employees.delete', [
            'id' => $id,
            'employee' => $employee
        ]);
    }
}
