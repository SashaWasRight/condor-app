<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Rules\NullOrDate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{

    public function edit(Employee $employee){

        return view('employees.edit',[
            'employee' => $employee]);
    }

    public function update(Employee $employee){

        $attributes = request()->validate(
            [
                'name' => ['required'],
                'position' => ['required'],
                'endDate' => [new NullOrDate],
                'superior' => ['required', Rule::exists('managers','id')]
            ]);

        $employee->update($attributes);

        return redirect('employees')->with('success','Employee details updated!');

    }

    public function delete(Employee $employee){

        $employee->delete();

        return redirect('employees')->with('success','Employee deleted from database');
    }


}
