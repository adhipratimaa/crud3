<?php 

namespace App\Modules\Authentication\Services;

use App\Modules\Authentication\Repositories\UserRepository;
use App\Modules\Authentication\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Auth;
use Illuminate\Validation\ValidationException;


class UserService{
	/**
	 * @var $userRepository 
	 **/
	protected $userRepository;

	/*
	 * UserRepository Constructor
	 * @param UserRepository $userRepository  
	 */
	public function __construct(UserRepository $userRepository){
		$this->userRepository=$userRepository;
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


	 public function registerUser($data){ 

        $validator = Validator::make($data, [ 
            'name' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);

		if ($validator->fails()) { 
	            throw new ValidationException($validator);
	        }
	    $user=$this->userRepository->save($data); 
	    if($user){
		    $user['token'] =  $user->createToken('MyApp')->accessToken; 
		    return $user;
	    }else{
	    	return null;
		}
	}

	public function getAuthenticatedUser(){
		return Auth::user();
	}
}
