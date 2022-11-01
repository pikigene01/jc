<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'Customer_Name',
        'Customer_password',
        'Consultant_LastName',
        'Customer_email',
    ];
}
