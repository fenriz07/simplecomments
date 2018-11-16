<?php

namespace Cmantikweb\Simplecomments\Http\Controllers;
 
use Flash;
use Cmantikweb\Simplecomments\Models\Comments;
use Cmantikweb\Simplecomments\Http\Requests\CreateCommentRequest;

class CommentController extends BaseController
{

    public function __construct()
    {
        $this->middleware('web');  
    }


    public function store(CreateCommentRequest $request)
    {
        Comments::create($request->all());

        Flash::success('Comentario agregado con exito!');

        return back();
    }

}
