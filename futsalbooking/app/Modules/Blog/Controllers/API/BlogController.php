<?php
namespace App\Modules\Blog\Controllers\API;
use Exception;
// use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Blog\Models\Blog; 
use App\Modules\Blog\Services\BlogService;

class BlogController extends Controller
{
/*Generated Controller Api*/

public $successStatus = 200;
    // protected $userService;
    protected $blogService;

     public function __construct(BlogService $blogService){
        // $this->userService=$userService;
        $this->blogService=$blogService;
    }
// public function getAllBlogs() {
//       $blogs = Blog::get()->toJson(JSON_PRETTY_PRINT);
//       return response($blogs, 200);
//     }

//   public function newBlog(Request $request){
//         $blog = new Blog;
//       $blog->title = $request->title;
//       $blog->highlights = $request->highlights;

//       $blog->description = $request->description;
//       $blog->image = $request->image;
//       $blog->status = $request->status;

//       $blog->save();

//       return response()->json([
//         "message" => "Blog created"
//       ], 201);
//   }

    public function blog(Request $request){
		  $data=$request->all();
		  // dd($request);
        try{
            $result1=$this->blogService->createblog($data);
            // $userId=$result1['id'];
            // $data['user_id']=$userId;
            // $result=$this->playerService->registerPlayer($data);
            // $result['token']=$result1['token'];
            return response()->json(['success'=>$result1], $this->successStatus); 
        }catch(ValidationException $e){
            return response()->json(['error'=>$e->errors()],422);
        }
	}

	public function getAllBlog(){ 
	        // $user = $this->userService->getAuthenticatedUser();

		$blogs = Blog::get()->toJson(JSON_PRETTY_PRINT);
	        return response()->json(['success' => $blogs], $this->successStatus); 
	}

}
