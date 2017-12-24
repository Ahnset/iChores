<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    //
    protected $table = "services";

    protected $fillable = ["name", "ionicon"];

    protected $hidden = [];
}
