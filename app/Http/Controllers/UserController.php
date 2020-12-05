<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function all()
    {
    	$users = User::all();
    	return view('users.index',compact('users'));
    }

    public function delete(User $user)
    {
    	User::delete($user->id);
    	return back()->with('info','Suppression Reussie!');
    }
    
    public function forceDelete(User $user)
    {
    	User::withTrashed()->FindOrFail($user->id)->forceDelete();
    }
}
