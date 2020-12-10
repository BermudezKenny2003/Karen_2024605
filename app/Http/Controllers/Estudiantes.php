<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
public function estudiante()
{
    $nombres = ['Karen tatiana Martinez','Luisa fernanda herrera','Yarlid hoyos','Danilve zoel','Kenny Bermudez','Enuer daniel majin','yuliana vanessa araujo','karol cañas','david sebastian ','Hanier Maya'];
return view('Estudiante.estudiante', compact('nombres'));
}

}//End Class
