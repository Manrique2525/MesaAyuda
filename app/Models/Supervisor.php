<?php

// app/Models/Supervisor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table = 'supervisores'; // Asegúrate de que coincida con el nombre de la tabla


    protected $fillable = [
        'nombre',
        'apellido_pat',
        'apellido_mat',
        'edad',
        'codigo_postal',
        'fecha_nacimiento',
        'sexo',
        'rol',
        'puesto',
    ];

    // Asegúrate de que `fecha_nacimiento` esté en formato de fecha
    protected $dates = ['fecha_nacimiento'];
}
