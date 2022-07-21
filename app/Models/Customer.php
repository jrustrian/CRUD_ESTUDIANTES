<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    public $timestamps=false;
    protected $fillable=[
        'id', 'name','address','phone_number','created_at', 'uptaded_at', 'category_id'
    ];

    protected $primaryKey='id';
}
