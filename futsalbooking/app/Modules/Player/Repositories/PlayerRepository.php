<?php 

namespace App\Modules\Player\Repositories;
use App\Modules\Player\Models\Player;

class PlayerRepository{
	/**
	 * @var User 
	 **/
	protected $player;

	/*
	 * UserRepository Constructor
	 * @param User $user  
	 */
	public function __construct(Player $player){
		$this->player=$player;
	}

	public function save($data){
	    $player = Player::create($data);
	    return $player;
	}
	public function userDetails($user)
    {
        return $this->postRepository->getAll();
    }
}
