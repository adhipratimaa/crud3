<?php

namespace App\Modules\Authentication\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Authentication\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

use App\Modules\Authentication\Services\userService;

class UserController extends Controller
{
    public $successStatus = 200;
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService=$userService;
    }

	/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(Request $request){
        dd($request);
        $data=$request->only('email','password');
        // $data = array([
        //  'email' => "admin@admin.com",
        //  'password' => "admin123"
        // ]);
        
        $auth=$this->userService->login($data);

        if($auth){ 
            return response()->json(['success' => $auth], $this->successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        }
    }

	/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request){ 
        $data=$request->all();
        // $result=$this->userService->registerUser($data);
        // dd("sds");
        $data = array([
         'email' => "admin@admin.com",
         'password' => "admin123"
        ]);
        try{
            // $result=$this->userService->registerUser($data);
            // dd("fddv");
            return response()->json(['success'=>$data], $this->successStatus); 
        }catch(ValidationException $e){
            return response()->json(['error'=>$e->errors()],422);
        }
	}

	/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
	public function details(){ 
	        $user = $this->userService->getAuthenticatedUser();
	        return response()->json(['success' => $user], $this->successStatus); 
	} 
}
