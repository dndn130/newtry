<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'domains';
    protected $fillable = ['id', 'name','master','type','last_check','notified_serial','account'];
}
