<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Project;
use App\Models\Task;
class Project extends Model
{
    use HasFactory;
    protected $table = "project";
    public $timestamps  = false;
    protected $fillable = [
        "name",
        "grade",
        "details",
        'subject',
        "archive",
        "idSubject"
    ];

    public function subject(){
        return $this->hasOne(Subject::class);
    }

    public function member(){
        return $this->hasMany(Project::class);
    }

    public function task(){
        return $this->belongsTo(Task::class);
    }
}
