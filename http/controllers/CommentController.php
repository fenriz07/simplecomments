<?php

namespace Cmantikweb\Simplecomments\Http\Controllers;

class CommentController extends BaseController
{
    protected $posts;

    public function __construct(Posts $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {

        return $this->posts->all();
    }

    public function show($id)
    {
        return $this->posts->find($id);
    }

    public function store(CreatePostRequest $request)
    {
        return $request->all();
    }

}
