<?php 

namespace App\Modules\Team\Services;

use App\Modules\Team\Repositories\TeamRepository;
use App\Modules\Team\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Auth;
use Illuminate\Validation\ValidationException;


class TeamService{
	/**
	 * @var $teamRepository 
	 **/
	protected $teamRepository;

	/*
	 * TeamRepository Constructor
	 * @param UserRepository $userRepository  
	 */
	public function __construct(TeamRepository $teamRepository){
		$this->teamRepository=$teamRepository;
	}

	 public function registerTeam($data){ 

        $validator = Validator::make($data, [ 
            'name' => 'required',
            'player_id'=>'required',
        ]);

		if ($validator->fails()) { 
	            throw new ValidationException($validator);
	        }
	    $team=$this->teamRepository->save($data); 
	    if($team){ 
		    return $team;
	    }else{
	    	return null;
		}
	}

	public function getAuthenticatedUser(){
		return Auth::user();
	}
}
