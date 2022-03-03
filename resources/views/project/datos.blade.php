@extends('layout')
<!-- TITULO DE LA WEB-->

@section('titulo')
    Portafolios
@endsection

@section('content')
    <h1>Datos  llamadas<h1>




<table class="table table-white table-hover">
    <head>
      <tr>
        <th scope="col">id</th>
        <th scope="col">codi_trucada</th>
        <th scope="col">data_hora</th>
        <th scope="col">temps_trucada</th>
        <th scope="col">dades_personals_id</th>
        <th scope="col">telefon</th>
   
      </tr>
    @forelse ($porfolio as $item)
        <tr>
        <td><a href="{{route('datos.show',$item)}}">{{ $item -> id }}</a></td> <!-- tiene link para ver mas informacion-->
        <td>{{ $item -> codi_trucada }}</td>
        <td>{{ $item -> data_hora }}</td>
        <td>{{ $item -> temps_trucada }}</td>
        <td>{{ $item -> dades_personals_id }}</td>
        <td>{{ $item -> telefon }}</td>
     
        </tr>
    
        @empty  

        <li> esta vacio</li>
      @endforelse 
    
    </table> <!-- fin tabla -->
  
@endsection

