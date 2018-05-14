@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">Crear Tarea</div>
            <form class="formulario" role="form" method="POST" action="{{ route('tarea.store') }}">
               {{ csrf_field() }}
               <div class="form-2">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input id="nombre" type="text" class="form-text" name="nombre" value="{{ old('nombre') }}">
               </div>
                 <div class="form-2">
                  <label for="descripcion" class="form-label">Descripcion</label>
                  <input id="descripcion" type="text" class="form-text" name="descripcion" value="{{ old('descripcion') }}">
               </div>
               <div class="form-group">
                  <button type="submit" class="btn-submit">
                  <i class=></i> Crear
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection