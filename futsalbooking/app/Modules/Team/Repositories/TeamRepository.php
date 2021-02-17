<?php 

namespace App\Modules\Team\Repositories;
use App\Modules\Team\Models\Team;

class TeamRepository{
	/**
	 * @var User 
	 **/
	protected $team;

	/*
	 * UserRepository Constructor
	 * @param User $user  
	 */
	public function __construct(Team $team){
		$this->team=$team;
	}

	public function save($data){
	    $team = Team::create($data);
	    return $team;
	}
}
