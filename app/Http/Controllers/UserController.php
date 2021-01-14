<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class  UserController extends Controller
{
    public function data(){
        $users = DB::table('users')->get();
        return view('user.data', ['user' =>$users]);    
    }

    public function add()
    {
        return view ('user.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('users')->insert([
            'role_id'   =>$request->role_id,
            'name'      =>$request->name,
            'username'   =>$request->username,
            'password'      =>$request->password,
            'email'   =>$request->email,
            'created_at'   =>$request->created_at,
            'updated_at'   =>$request->updated_at
        ]); 
        return redirect('user')->with('status', 'User behasil ditambahkan');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('user/edit', compact('user'));
    }

    public function editProcess(Request $request, $id)
    {
        $user = DB::table('users')->where('id', $id)
            ->update([
            'role_id'   =>$request->role_id,
            'name'      =>$request->name,
            'username'   =>$request->username,
            'password'      =>$request->password,
            'email'          =>$request->email,
            'created_at'   =>$request->created_at,
            'updated_at'   =>$request->updated_at
            ]);
            return redirect('user')->with('status', 'User behasil diedit');
    }

    public function delete($id)
    {
      
        DB::table('users')->where('id', '=', $id)->delete();
       
        return redirect('user')->with('status', 'User behasil Dihapus');
    }
}