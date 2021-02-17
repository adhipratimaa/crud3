<?php
namespace App\Modules\Player\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Authentication\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use App\Modules\Player\Models\Player;
use App\Modules\Authentication\Services\UserService;
use App\Modules\Player\Services\PlayerService;


class PlayerControllerApi extends Controller
{ 	

	public $successStatus = 200;
    protected $userService;
    protected $playerService;

     public function __construct(UserService $userService,PlayerService $playerService){
        $this->userService=$userService;
        $this->playerService=$playerService;
    }

	public function registerPlayer(Request $request){
		  $data=$request->all();
        try{
            $result1=$this->userService->registerUser($data);
            $userId=$result1['id'];
            $data['user_id']=$userId;
            $result=$this->playerService->registerPlayer($data);
            $result['token']=$result1['token'];
            return response()->json(['success'=>$result], $this->successStatus); 
        }catch(ValidationException $e){
            return response()->json(['error'=>$e->errors()],422);
        }
	}
}
