<?php

namespace Cmantikweb\Simplecomments\Http\Requests;


class CreateCommentRequest extends Base
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_id' => 'required|integer|exists:rainlab_blog_posts,id',
            'comment' => 'required|string',
            'name'    => 'required|string',
            'email'   => 'required|email',
        ];
    }

}
