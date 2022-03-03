@extends('layout')
<!-- TITULO DE LA WEB-->

@section('titulo')
{{ ('Ficha | '. $pepe =  $project -> id) }}
@endsection
@section('content')

{{$project}}


<h1>Datos  llamadas<h1>


    <h1>------------------------<h1>

  
        <head>
          <tr>
            <th scope="col">id -></th>{{ $project -> id }} <br>
            <th scope="col">codi_trucada -> </th>{{ $project -> codi_trucada }}<br>
            <th scope="col">data_hora -></th> {{ $project -> data_hora }}<br>
            <th scope="col">temps_trucada -></th>{{ $project -> temps_trucada }}<br>
            <th scope="col">dades_personals_id -></th>{{ $project -> dades_personals_id }}<br>
            <th scope="col">telefon -></th>{{ $project -> telefon }}<br>
            <th scope="col">procedencia_trucada -></th>{{ $project -> procedencia_trucada }}<br>
            <th scope="col">origen_trucada -></th>{{ $project -> origen_trucada }}<br>
            <th scope="col">nom_trucada -></th>{{ $project -> nom_trucada }}<br>
            <th scope="col">municipis_id_trucada -></th>{{ $project -> municipis_id_trucada }}<br>
            <th scope="col">adreca_trucada -></th>{{ $project -> adreca_trucada }}<br>
            <th scope="col">fora_cataluña -></th>{{ $project -> fora_cataluña }}<br>
            <th scope="col">provincies_id -></th>{{ $project -> provincies_id }}<br>
            <th scope="col">municipis_id -></th>{{ $project -> municipis_id }}<br>
            <th scope="col">tipus_localitzacions_id -></th>{{ $project -> tipus_localitzacions_id }}<br>
            <th scope="col">descripcio_localitzacio -></th>{{ $project -> descripcio_localitzacio }}<br>
            <th scope="col">detalls_localitzacio -></th>{{ $project -> detalls_localitzacio }}<br>
            <th scope="col">altres_ref_localitzacio -></th>{{ $project -> altres_ref_localitzacio }}<br>
            <th scope="col">incident_id -></th>{{ $project -> incident_id }}<br>
            <th scope="col">nota_comuna -></th>{{ $project -> nota_comuna }}<br>
            <th scope="col">expedientes_id -></th>{{ $project -> expedientes_id }}<br>
            <th scope="col">usuaris_id -></th>{{ $project -> usuaris_id }}<br>
          </tr>
     
            
           
        
       
@endsection