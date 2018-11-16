<?php namespace Cmantikweb\Simplecomments\Models;

use Model;

/**
 * comments Model
 */
class Comments extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'cmantikweb_simplecomments_comments';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name','comment','email','post_id'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
    ];
    public $belongsToMany = [
        'posts' => ['Rainlab\Blog\Models\Post','key' => 'post_id'],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
