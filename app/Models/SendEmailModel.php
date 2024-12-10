<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendEmailModel extends Model
{
    protected $table = 'send_email_models';
    protected $fillable = ['message'];
}
