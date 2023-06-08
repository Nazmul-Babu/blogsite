<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];




    public function createCategory(){
      return  $this->hasMany(Category::class);
    }
    public function createpost(){

        return $this->hasMany(Post::class);
    }
}
