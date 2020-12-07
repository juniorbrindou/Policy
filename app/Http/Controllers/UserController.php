<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
// index
	public function index()
	{
		$users = User::all();
		return view('users.index',compact('users'));
	}


// afficher les supprimés
	public function showDeleted()
	{
		$users = User::onlyTrashed()->get();
		return view('users.trash',compact('users'));
	}


// restaurer
	public function restaure($user)
	{
		User::withTrashed()->where('id',$user)->restore();
		// $user->restaure();
		return back()->with('info','Restauration Reussie');
	}


// suppression
	public function destroy(User $user)
	{
		$this->authorize('delete',$user);
		User::destroy($user->id);
		return back()->with('info','Suppression Reussie!');
	}

// suppression definitive
	public function forceDelete(User $user)
	{
		User::withTrashed()->FindOrFail($user->id)->forceDelete();
	}
}