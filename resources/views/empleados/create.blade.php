@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Crear nuevo empleado</div>
  <div class="card-body mr-3 ml-3">
    <form action="{{ url('empleados') }}" name="form" method="post">
      {!! csrf_field() !!}
    
      <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Nombre completo *</label>
        </div>
        <div class="col-md">
          <input type="text" name="nombre" id="nombre" placeholder="Nombre completo del empleado" class="form-control" required>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-4">
          <label>Completo electrónico *</label>
        </div>
        <div class="col-md">
          <input type="email" name="email" placeholder="Correo Electrónico" id="email" class="form-control" required>
        </div>
      </div>

      <div class="row justify-content-center mt-2">
        <div class="col-md-4 ">
          <label>Sexo *</label></br>
        </div>
        <div class="col-md">
          <div class="form-check">
            <label for="sexo" class="form-check-label">
              <input type="radio" name="sexo" id="sexo" value="M" class="form-check-input" required>
              Masculino
            </label>
          </div>
          <div class="form-check">
            <label for="sexo" class="form-check-label">
              <input type="radio" name="sexo" id="sexo" value="F" class="form-check-input" required>
              Femenino
            </label>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Área *</label>
        </div>
        <div class="col-md">
          <select name="area_id" id="area_id" class="form-control" required>
            @foreach ($areas as $area)
              <option value="{{ $area['id'] }}">{{$area['nombre']}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Descripcion *</label>
        </div>
        <div class="col-md mt-2">
          <textarea rows="10" cols="50" name="descripcion" id="descripcion" placeholder="Descripción de la experiencia del empleado" class="form-control" required></textarea>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-4">
          <label><input type="checkbox" name="boletin" value="1" id="boletin">&nbsp;Deseo recibir boletín de información?</label>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Roles *</label>
        </div>
      
        <div class="col-md mt-2">
          @foreach ($roles as $rol)
            <label><input type="checkbox" id="roles" value="{{ $rol['id'] }}">&nbsp;{{$rol['nombre']}}</label><br>
          @endforeach
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <input type="submit" value="Guardar" class="btn btn-primary" onclick="valida_envia()">
        </div>
        <div class="col-md">
          <a href="{{ url('/empleados/') }}" class="btn btn-success " title="Añadir empleados">
            Atrás
          </a>
        </div>
      </div>      
    </form>
  </div>
</div>
  
@stop