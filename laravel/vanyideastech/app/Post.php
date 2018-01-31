<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //Table Name
   protected $table = 'posts';
   //Primary Key
   public $primaryKey = 'id';
   //Timestamps
   public $timestamps = true;

   /* -declaring model relationships
      -from posts table has a relationship with a user table and belongs to a user (user_id) 
      -a post belongs to a user
      */
   public function user(){
       return $this->belongsTo('App\User');
   }
}
