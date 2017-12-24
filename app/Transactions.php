<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = "transactions";

    protected $fillable = ["user_id", "service_id", "telephone", "address", "service_date", "payment_method", "status", "transac_id", "pay_token", "cust_ref", "admin_status"];

    protected $hidden = [];
}
