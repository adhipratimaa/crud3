<?php
namespace App\Modules\Team\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Authentication\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use InvalidArgumentException;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use App\Modules\Team\Models\Team;
use App\Modules\Authentication\Services\UserService;
use App\Modules\Team\Services\TeamService;
use App\Modules\Player\Models\Player;



class TeamControllerApi extends Controller
{ 	

	public $successStatus = 200;
    protected $teamService;

     public function __construct(TeamService $teamService){
        $this->teamService=$teamService;
    }

	public function registerTeam(Request $request){
    // dd($request);
		  $data=$request->all();
          $currentUser=Auth::user();
          $requestingUser=Player::where('id',$data['player_id'])->first();
          $hasTeam=Team::where("player_id",$data['player_id'])->first();
          if($requestingUser->user_id!=$currentUser->id){
            return response()->json(['error'=>'Not Allowed'],400);
          }
          
          if($hasTeam){
            return response()->json(['error'=>'Cannot create multiple teams'],422);
          }   

            try{
                $result=$this->teamService->registerTeam($data);
                return response()->json(['success'=>$result], $this->successStatus); 
            }catch(ValidationException $e){
                return response()->json(['error'=>$e->errors()],422);
            }
	}
}
