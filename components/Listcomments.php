<?php namespace Cmantikweb\Simplecomments\Components;

use Cms\Classes\ComponentBase;
use Cmantikweb\Simplecomments\Models\Comments;

class Listcomments extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'List of comments',
            'description' => '',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function comments()
    {
        $post = $this->page['post'];

        $comments = Comments::where('post_id',$post->id)->get();

        return $comments;
    }
}
