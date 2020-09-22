<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company_name',
        'company_website',
        'description',
        'portfolio',
        'password',
    ];
}
