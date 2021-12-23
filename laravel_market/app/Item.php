<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['user_id', 'name', 'image','description','category_id','price'];
    public function user(){
      return $this->belongsTo('App\User');
    }
    
    public function orders(){
      return $this->hasMany('App\Order');
    }
    
    public function tobeorders () {
      return $this->hasMany('App\User','orders');
    }
    
    public function likes() {
      return $this->hasMany('App\Like');
    }
    
    public function likedUsers () {
      return $this->belongsToMany('App\User','likes');
    }
    
    public function isLikedBy($user) {
      $liked_users_ids = $this->likedUsers->pluck('id');
      $result = $liked_users_ids->contains($user->id);
      return $result;
    }
 
    public function orderUsers(){
      return $this->belongsToMany('App\User', 'orders');
    }
    
    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function order(){
        return $this->hasMany('App\Order');
    }
}
