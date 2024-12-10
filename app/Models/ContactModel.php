<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact_models';
    protected $fillable = ['name', 'email', 'message'];
}
