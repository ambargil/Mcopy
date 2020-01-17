@extends('layouts.appticket')
@section('nombre')
  Ticket
@endsection
@section('links')
  <meta charset="utf-8">
  <title>MagicCopy</title>
  <link rel="stylesheet" href="/css/contacto.css">

@endsection
@section('content')
@auth

    <div class="">
    
    <br>
    <h1 class="principal">Ticket: {{$tickets->codigo}}</h1>
    <br>
    <div class="boton">
        <a href="/tickets" class="btn btn-info"> Regresar </a>
    </div>
    <br>

    
         <h3><label style="color:Blue;"><strong>Contacto </strong></label></h3>
         @foreach ($maquinaContacto as $key => $tabla)
    
      <div class="">
        <h3><strong>Nombre: </strong><label>{{$tabla->connombre}}</label></h3>
      </div>
      <div class="">
        <h3><strong>Correo: </strong><label>{{$tabla->correo}}</label></h3>
      </div>
      <div class="">
        <h3><strong>Dui: </strong><label>{{$tabla->dui}}</label></h3>
      </div>
      <div class="">
        <h3><strong>Dirección: </strong><label>{{$tabla->direccion}}</label></h3>
      </div>
             
         @endforeach
      



     <br> 
    <div class="">
    <h3><label style="color:Blue;"><strong>Ticket </strong></label></h3>
      <div class="">
              <h3><strong>Estado: </strong><label>{{$tickets->estado}}.</label></h3>
      </div>
      
      <div class="">
        <h3><strong>Fecha inicio: </strong><label>{{$tickets->fecha_inicio}}.</label></h3>
      </div>
      
      <div class="">
        <h3><strong>Fecha Fin: </strong><label>{{$tickets->fecha_fin}}.</label></h3>
      </div>
      <div class="">
        <h3><strong>Comentario:</strong><label>{{$tickets->comentario}}.</label></h3>
      </div>
      <br>

        <h3><label style="color:Blue;"><strong>Servicios </strong></label></h3>
        <div class="">
        <h3><strong>Arrendamiento: $</strong><label>{{$tickets->arrendamiento}}.</label></h3>
      </div>
      
      <div class="">
        <h3><strong>Reparacion y mantenimiento de fotocopiadora: $</strong><label>{{$tickets->reparacionfc}}.</label></h3>
      </div>
      
      <div class="">
        <h3><strong>Reparacion y mantenimiento de computadora: $</strong><label>{{$tickets->reparacionpc}}.</label></h3>
      </div>
      <div class="">
        <h3><strong>Total servicios:</strong><label>{{$tickets->total}}.</label></h3>
      </div>
      <br>

      <div class="">
      <h3><label style="color:Blue;"><strong>Maquina </strong></label></h3>
           
      <div class="">
        <h3><strong>Marca: </strong><label>
          @foreach ($maquinas as $maquina)
            @if ($tickets->maquina_id == $maquina->id)
              <td> {{ $maquina->marca }}. </td>
            @endif
          @endforeach</label></h3>
        </div>
        <div class="">
        <h3><strong>Modelo: </strong><label>
          @foreach ($maquinas as $maquina)
            @if ($tickets->maquina_id == $maquina->id)
              <td> {{ $maquina->modelo }}. </td>
            @endif
          @endforeach</label></h3>
        </div>
        <div class="">
        <h3><strong>Contador: </strong><label>
          @foreach ($maquinas as $maquina)
            @if ($tickets->maquina_id == $maquina->id)
              <td> {{ $maquina->contador }}. </td>
            @endif
          @endforeach</label></h3>
        </div>
        <div class="">
        <h3><strong>Serie: </strong><label>
          @foreach ($maquinas as $maquina)
            @if ($tickets->maquina_id == $maquina->id)
              <td> {{ $maquina->serie }}. </td>
            @endif
          @endforeach</label></h3>
        </div>
        <div class="">
        <h3><strong>Descripcion: </strong><label>
          @foreach ($maquinas as $maquina)
            @if ($tickets->maquina_id == $maquina->id)
              <td> {{ $maquina->descripcion }}. </td>
            @endif
          @endforeach</label></h3>
        </div>
          
        
       </div>
      <br><br>
    @endauth
  @endsection
