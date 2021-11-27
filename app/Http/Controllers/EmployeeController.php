<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'first_name' => 'required|max:60',
            'last_name' => 'required|max:60',
            'email' => 'required|max:60',
            'thumbnail' => 'required|max:60',
            'profile_pic' => 'required|max:60',
        ]);

        Employee::create($request->all());
        
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Display the searched employee.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    // public function search(Employee $employee)
    // {   
    //     $search = $employee->input('search');

    //     Employee::where('first_name', 'LIKE', "%{$employee->q}%")
    //         ->orWhere('last_name', 'LIKE', "%{$employee->q}%")
    //         ->get(id);
        
    //     return view('employees.index');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'first_name' => 'required|max:60',
            'last_name' => 'required|max:60',
            'email' => 'required|max:60',
            'thumbnail' => 'required|max:60',
            'profile_pic' => 'required|max:60',
        ]);

        \DB::table('employees')
            ->where('id', $employee->id)
            ->update($request->only(['first_name', 'last_name', 'email', 'thumbnail', 'profile_pic']));

        return redirect()->route('employees.show', compact('employee'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
