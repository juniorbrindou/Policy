<?php

namespace App\Policies;
use Illuminate\Auth\Access\Response;
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
	    return true;
	}

	public function showDeleted(User $user)
	{
		if ($user->isAdmin()) {
			return true;
		}else{
			return false
			? Response::allow()
            : Response::deny("Vous n'avez pas le droit requis");
		}

	}

}
