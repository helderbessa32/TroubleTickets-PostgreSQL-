<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Subject extends Model
{
    use HasFactory;

    protected $table = "subject";

    protected $fillable = [
        "code",
        "course",
        "year",
        "name"
    ];

    public function project(){
        return $this->hasOne(Project::class);
    }
}
