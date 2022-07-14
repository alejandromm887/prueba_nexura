@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('empleados/' .$empleados->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$empleados->id}}" id="id" />

<!-- 


        <label>Nombre</label></br>
        <input type="text" name="name" id="nombre" value="{{$empleados->nombre}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$empleados->email}}" class="form-control"></br>
        <label>sexo</label></br>
        <input type="text" name="sexo" id="sexo" value="{{$empleados->sexo}}" class="form-control"></br>
        <label>Área *</label></br>
        <select name="area">
          <option value="1">Value 1</option></br>
          <option value="2" selected>Value 2</option></br>
          <option value="3">Value 3</option></br>
        </select>
        </br></br>
        <label>Descripcion *</label></br>
        <textarea name="textarea" rows="10" cols="50" name="descripcion" id="descripcion">{{$empleados->descripcion}}</textarea></br>
        

        <label>Roles *</label></br>
        <label>Administrativa y Financiera<input type="checkbox" id="roles" value="1"></label><br>
        <label>Ingeniería<input type="checkbox" id="roles" value="2"></label><br>
        <label>Desarrollo de Negocio<input type="checkbox" id="roles" value="5"></label><br>
        <label>Proyectos<input type="checkbox" id="roles" value="6"></label><br>
        <label>Servicios<input type="checkbox" id="roles" value="7"></label><br>
        <label>Calidad<input type="checkbox" id="roles" value="8"></label><br>
        <br> -->

        <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Nombre completo *</label>
        </div>
        <div class="col-md">
          <input type="text" name="nombre" id="nombre" placeholder="Nombre completo del empleado"  value="{{$empleados->nombre}}"class="form-control" required>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-4">
          <label>Completo electrónico *</label>
        </div>
        <div class="col-md">
          <input type="email" name="email" placeholder="Correo Electrónico" id="email"  value="{{$empleados->email}}" class="form-control" required>
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
          <label>Descripcion *</label>
        </div>
        <div class="col-md mt-2">
          <textarea rows="10" cols="50" name="descripcion" id="descripcion"  placeholder="Descripción de la experiencia del empleado" class="form-control" required>{{$empleados->descripcion}}</textarea>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-4">
          <label><input type="checkbox"  value="{{$empleados->boletin}}" id="boletin">&nbsp;Deseo recibir boletín de información?</label>
        </div>
      </div>
        <div class="row">
          <div class="col-md-2">
            <input type="submit" value="Actualizar" class="btn btn-primary"></br>
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