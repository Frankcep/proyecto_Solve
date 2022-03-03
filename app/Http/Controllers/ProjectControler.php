<?php

namespace App\Http\Controllers;
use App\Models\cartes_trucades;
use Illuminate\Http\Request;



class ProjectControler extends Controller
{
  
    public function index() //MOSTRAR TODOS LOS DATOS 
    {   $porfolio= cartes_trucades::get();
        //$porfolio= cartes_trucades::paginate(1);//esto es para poner cuanta info queremso pro apgina (paginate);
        return view('project.datos',compact('porfolio'));
    }

    public function show($id) //MOSTRAR TODOS LOS DATOS  de un campo en concreto
    {   
        $project = cartes_trucades::find($id); //tabla aa la que apuntamos
      
        return view('project.show',compact('project'));
       
    }

}