<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domainmetadata extends Model
{
    protected $table = 'domainmetadata';
    protected $fillable = ['id', 'domain_id','kind','content'];
}
