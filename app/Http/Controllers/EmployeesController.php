<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function listemployee(){
        $employees = User::where('id', '!=', auth()->id())->get();
        return view('admin.listemployee', compact('employees'));
    }

    public function addemployee(){
        return view('admin.addemployee');
    }
    
    // public function create()
    // {
        
    // }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'ic' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'leave' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $employee = new User;
        $employee->name = $request->input('name');
        $employee->ic = $request->input('ic');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->leave = $request->input('leave');
        $employee->email = $request->input('email');
        $employee->password = Hash::make($request->input('password'));

        $employee->save();

        if($employee->save()){
          return redirect('/listemployee')->with('success','Employee information has been added.');
        }
        else{
          return redirect('/listemployee')->with('error','Some error has occured during the process.');
        }

    }

    public function show($id)
    {
        $employee = User::find($id);
        return view('admin.showemployee', compact('employee'));
    }

    public function edit($id)
    {
        $employee = User::find($id);
        return view('admin.editemployee', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'ic' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'leave' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $employee = User::find($id);
        $employee->name = $request->input('name');
        $employee->ic = $request->input('ic');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->leave = $request->input('leave');
        $employee->email = $request->input('email');
        $employee->password = Hash::make($request->input('password'));
        $employee->save();

        if($employee->save()){
          return redirect('/listemployee')->with('success','Employee information has been updated.');
        }
        else{
          return redirect('/listemployee')->with('error','Some error has occured during the process.');
        }
    }

    public function destroy($id)
    {
        $employee = User::find($id);
        $employee->delete();

        return redirect('/listemployee')->with('deleted', 'Data has been successfully deleted.');
    }
}
