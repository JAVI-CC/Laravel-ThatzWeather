@extends('layouts.header')

@section('content')

<div class="container_center"> 

@include('common.error')

<h5>Consulte el clima de cualquier ciudad:</h5>

{!! Form::open(['route' => 'ciudad.store', 'method' => 'POST']) !!}

{!! Form::text('Codigo', null, ['class'=>'form-control input_size ' .($errors->has('Codigo') ? 'border-danger':''), 'id'=>'codigo', 'onkeypress' => 'validar_number(event)', 'placeholder'=>'Introduzca codigo postal', 'maxlength'=>'5']) !!}
<br>

{!! Form::submit('Buscar', ['class' => 'btn btn-primary btn_size']) !!}

{!! Form::close()!!}

</div>

@endsection

@extends('layouts.footer')