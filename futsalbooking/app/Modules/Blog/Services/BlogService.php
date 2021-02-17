<?php 

namespace App\Modules\Blog\Services;

use App\Modules\Blog\Repositories\BlogRepository;
use App\Modules\Player\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Auth;
use Illuminate\Validation\ValidationException;


class BlogService{
	/**
	 * @var $playerRepository 
	 **/
	protected $blogRepository;

	/*
	 * PlayerRepository Constructor
	 * @param UserRepository $userRepository  
	 */
	public function __construct(BlogRepository $blogRepository){
		$this->blogRepository=$blogRepository;
	}

	// public function login($data){
	// 	 if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
 //            $user = Auth::user();
 //            $success['token'] =  $user->createToken('booker')->accessToken; 
 //            return $success; 
 //        } 
 //        else{ 
 //            return null; 
 //        }
	// }


	 public function createblog($data){ 

        $validator = Validator::make($data, [ 
            'title' => 'required', 
            'highlights' => 'required', 
            'description' => 'required', 
            'status' => 'in:DEFAULT,0', 
            'image' => 'nullable', 
            
        ]);

		if ($validator->fails()) { 
	            throw new ValidationException($validator);
	        }
	    $blog=$this->blogRepository->save($data); 
	    if($blog){ 
		    return $blog;
	    }else{
	    	return null;
		}
	}

	public function getAuthenticatedUser(){
		return Auth::user();
	}
}
