<?php 

namespace App\Modules\Blog\Repositories;
use App\Modules\Blog\Models\Blog;

class BlogRepository{
	/**
	 * @var User 
	 **/
	protected $blog;

	/*
	 * UserRepository Constructor
	 * @param User $user  
	 */
	public function __construct(Blog $blog){
		$this->blog=$blog;
	}

	public function save($data){
	    $blog = Blog::create($data);
	    return $blog;
	}
	// public function userDetails($user)
 //    {
 //        return $this->postRepository->getAll();
 //    }
}
