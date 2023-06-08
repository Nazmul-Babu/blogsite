<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function AdminforCategory(){
        return  $this->belongsTo(Admin::class);
      }
      public function Post_category(){
        return $this->belongsTo(Category::class);
    }
}
