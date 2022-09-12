<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Rules\NullOrDate;
use Illuminate\Http\Request;


class ManagerController extends Controller
{

    public function edit(Manager $manager){

        return view('managers.edit',[
            'manager' => $manager]);
    }

    public function update(Manager $manager){

        $attributes = request()->validate(
            [
                'name' => ['required'],
                'position' => ['required'],
                'endDate' => [new NullOrDate]
            ]);

        $manager->update($attributes);

        return redirect('employees')->with('success','Manager details updated!');

    }

    public function delete(Manager $manager){

        $manager->delete();

        return redirect('employees')->with('success','Manager deleted from database');
    }
}
