<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excel extends Model
<<<<<<< HEAD
{

=======
{   
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
    use HasFactory;
    protected $table='excel';
    protected $fillable=
    [
        'id',
<<<<<<< HEAD
        'ma_nv',
        'ten_nv',
        'tong_cong',
    ];
=======
        'name', 
        'email',
         'age',


    ];
   
>>>>>>> 16af195cfcd85fbf52c7291857f06d2ffc54d44a
}
