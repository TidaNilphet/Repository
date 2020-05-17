<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = "staffs";

    protected $fillable = ["name","age","salary","phone"];    
    //Primary Key
    protected $primaryKey = "id";

}
