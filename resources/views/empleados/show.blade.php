@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Datos personales</div>
    <div class="card-body mr-3 ml-3">
          <div class="card-body">
          <p class="card-title"><STRONG>Nombre :</STRONG> {{ $empleados->nombre }}</p>
          <p class="card-text"><STRONG>Email :</STRONG> {{ $empleados->email }}</p>
          <p class="card-text"><STRONG>Sexo :</STRONG> {{ $empleados->sexo }}</p>
          <p class="card-text"><STRONG>Area :</STRONG> {{ $empleados->area_id }}</p>
          <p class="card-text"><STRONG>Boletín :</STRONG> {{ $empleados->boletin }}</p>
          <p class="card-text"><STRONG>Descripcion :</STRONG> {{ $empleados->descripcion }}</p>
    </div>
  </div>
  <a href="{{ url('/empleados/') }}" class="btn btn-success " title="Añadir empleados">
            Atrás
          </a>
</div>