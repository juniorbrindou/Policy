<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
	use HandlesAuthorization;


	/**
	 *
	 * @param  \App\User  $user
	 * @return bool
	 */
	public function index(User $user)
	{
	    if ($user->isAdmin()) {
	    	return true;
	    }
	}

}
