<?php 

namespace App\Modules\Authentication\Repositories;
use App\Modules\Authentication\Models\User;

class UserRepository{
	/**
	 * @var User 
	 **/
	protected $user;

	/*
	 * UserRepository Constructor
	 * @param User $user  
	 */
	public function __construct(User $user){
		$this->user=$user;
	}

	public function save($data){
		$data['password'] = bcrypt($data['password']); 
	    $user = User::create($data);
	    return $user;
	}
	public function userDetails($user)
    {
        return $this->postRepository->getAll();
    }
}
