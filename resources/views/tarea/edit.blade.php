@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">Editar Tarea {!! $tarea->nombre !!}</div>
            <form class="formulario" role="form" method="POST" action="{{ route('tarea.update',$tarea->id) }}">
               {{ csrf_field() }}
               {{ method_field('PUT') }}
               <div class="form-2">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input id="nombre" type="text" class="form-text" name="nombre" value="{{ $tarea->nombre }}">
               </div>
                 <div class="form-2">
                  <label for="descripcion" class="form-label">Descripcion</label>
                  <input id="descripcion" type="text" class="form-text" name="descripcion" value="{{$tarea->descripcion}}">
               </div>
               <div class="form-group">
                  <button type="submit" class="btn-submit">
                  <i class=></i> Editar
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection