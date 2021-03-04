<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    //fillable es para indicar los campos que se permiten ingresar y lo que no esté dentro del array lo ignora
    
    /* protected $fillable =['name', 'description', 'category']; */
    //guarded es para proteger un campo, un campo protegido no puede ser enviado desde el formularion 'status' en nuestro ejemplo
    protected $guarded = [];
}
