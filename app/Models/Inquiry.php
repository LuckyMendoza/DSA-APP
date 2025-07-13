<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'subject',
        'full_name',
        'email',
        'contact_number',
        'message',
        'status'
    ];
}
