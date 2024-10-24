<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
class Invite extends Model
{
    use HasFactory;
    protected $table = "invite";

    protected $fillable = [
        "invdate",
        "details",
        "idUser"
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
