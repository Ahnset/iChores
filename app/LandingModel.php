<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingModel extends Model
{
    //
    protected $table = "messages";

    protected $fillable = ["name", "email", "message", "status"];

    protected $hidden = [];
}
