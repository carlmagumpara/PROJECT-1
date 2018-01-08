<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository as Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function __construct(
        Post $post
    ) {
        $this->middleware('admin');
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->getAllByAttributes([], 'created_at', 'desc');
        return view('Admin::posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('Admin::posts.create');
    }

    public function store(PostRequest $request)
    {
        $request['admin_id'] = \Auth::guard('admins')->user()->id;
        $request['slug'] = str_slug($request->title, '-');
        if ($this->post->store($request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Post created!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Theres a problem creating your post!'));
    }

    public function show($id)
    {
        $post = $this->post->getById($id);
        return view('admin.posts.show', ['post' => $post]);
    }


    public function edit($id)
    {
        $post = $this->post->getById($id);
        return view('Admin::posts.edit', ['post' => $post]);
    }

    public function update($id, PostRequest $request)
    {
        if ($this->post->update($id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Theres a problem updating your post!'));
    }

    public function destroy($id)
    {
        if ($this->post->destroy($id)) {
            return json_encode(array('result'=>'success', 'message'=>'Deleted successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Theres a problem deleting your post!'));
    }

}
