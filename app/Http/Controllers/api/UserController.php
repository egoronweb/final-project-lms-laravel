<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return response()->json([
            'status' => 200,
            'users' => $users,
        ]);
    }

    public function create(Request $request){
        $user = new User;
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'Users Added Successfully'
        ]);
    }


    public function edit($id){
        $user = User::find($id);
    
        return response()->json([
            'status' => 200,
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'Students updated Successfully',
        ]);
    }


    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Users deleted Successfully',
        ]);
    }
}
