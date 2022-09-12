<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Manager;
use App\Rules\NullOrDate;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AllEmployeeController extends Controller
{


    public function index(){

            return view('employees.index',[
                'employees' => Employee::filter(
                    request('search'))->get(),
                'managers' => Manager::filter(request('search'))->get()
            ]);
    }

    public function create(){

        return view('employees.create');
    }

    public function store(){

        $attributes = request()->validate(
            [
                'name' => ['required'],
                'position' => ['required'],
                'startDate' => ['required','date'],
                'superior' => ['required', Rule::exists('managers','id')]
            ]);

        if(Str::contains(request('position'),['Manager','manager']) || request('Manager') == 'on'){
            Manager::create(Arr::except($attributes, ['superior','Manager']));

            return redirect('employees')->with('success','Manager successfully added!');
        }

        Employee::create($attributes);

        return redirect('employees')->with('success','Employee successfully added!');
    }



}
