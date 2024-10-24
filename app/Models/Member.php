<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Project;
use app\Models\User;
class Member extends Model
{
    use HasFactory;
    protected $table = "members";
    public $timestamps  = false;
    protected $fillable = [
        "coordinator",
        "user_id",
        "project_id"
    ];

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function project(){
        return $this->hasOne(Project::class);
    }

}
