@extends('layouts.header')

@section('content')

<div class="table-responsive">
<table class="table table-sm table-dark table-bordered">
  <thead>
    <tr class="table-color-blue">
      <th scope="col">Ciudad</th>
      <th scope="col">Temperatura</th>
      <th scope="col">Humedad</th>
      <th scope="col">Descripción</th>
      <th scope="col">Ultima actualización</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$city}}</td>
      <td>{{$temperatura}}</td>
      <td>{{$humedad}}</td>
      <td>{{$descripcion}}</td>
      <td>{{$fecha}}</td>
    </tr>
  </tbody>
</table>
</div>

<br>
<h5>Top 5 de las zonas más frías según tus búsquedas:</h5>

<div class="table-responsive">

<table class="table table-sm table-dark table-bordered">
  <thead>
    <tr class="table-color-blue">
      <th scope="col">#</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Codigo postal</th>
      <th scope="col">Temperatura</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
  
  <div style="display: none">
    {{$cnt = 0}}
  </div>

  @foreach($ciudades_mostrar as $ciudad)
  <tr>
      <th scope="row">{{$cnt += 1}}</th>
      <td>{{$ciudad->ciudad}}</td>
      <td>{{$ciudad->codigo}}</td>
      <td>{{$ciudad->temperatura}}</td>
      <td>{{$ciudad->fecha}}</td>
    </tr>
  @endforeach

    </tbody>
</table>
</div>

@endsection

@extends('layouts.footer')