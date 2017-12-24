<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruits extends Model
{
    protected $table = "recruits";

    protected $fillable = ["name", "date_of_birth", "address"];

    protected $hidden = [];
}
