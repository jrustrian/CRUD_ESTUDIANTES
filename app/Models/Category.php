<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    public $timestamps=false;
    protected $fillable=[
        'id_category', 'description'
    ];

    protected $primaryKey='id_category';
}
