<?php 

namespace App\Modules\Player\Services;

use App\Modules\Player\Repositories\PlayerRepository;
use App\Modules\Player\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Auth;
use Illuminate\Validation\ValidationException;


class PlayerService{
	/**
	 * @var $playerRepository 
	 **/
	protected $playerRepository;

	/*
	 * PlayerRepository Constructor
	 * @param UserRepository $userRepository  
	 */
	public function __construct(PlayerRepository $playerRepository){
		$this->playerRepository=$playerRepository;
	}

	public function login($data){
		 if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('booker')->accessToken; 
            return $success; 
        } 
        else{ 
            return null; 
        }
	}


	 public function registerPlayer($data){ 

        $validator = Validator::make($data, [ 
            'name' => 'required', 
        ]);

		if ($validator->fails()) { 
	            throw new ValidationException($validator);
	        }
	    $player=$this->playerRepository->save($data); 
	    if($player){ 
		    return $player;
	    }else{
	    	return null;
		}
	}

	public function getAuthenticatedUser(){
		return Auth::user();
	}
}
