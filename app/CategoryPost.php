<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'category_post_name', 'category_post_slug','category_post_status','category_post_desc'
    ];
    protected $primaryKey = 'category_post_id';
 	protected $table = 'tbl_category_post';

     public function post(){
        $this->hasMany('App\Post');
    }
}
