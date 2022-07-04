@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-3 row-cols-md-2 g-4">
        
        <div class="col">
            <div class="card border-secondary mb-3 w-100 text-center" >
                <div class="card-header">Actividades</div>
                <div class="card-body text-primary">
                  <h5 class="card-title">Gestión de Actividades</h5>
                  <a href="{{route('actividad.index')}}" class="btn btn-primary">Ir a Actividades</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card border-secondary mb-3 w-100 text-center">
                <div class="card-header">Mano de Obra</div>
                <div class="card-body text-primary">
                  <h5 class="card-title">Gestión de Mano de Obra</h5>
                  <a href="#" class="btn btn-primary">Ir a Mano de Obra</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card border-secondary mb-3 w-100 text-center">
                <div class="card-header">Materiales</div>
                <div class="card-body text-primary">
                  <h5 class="card-title">Gestión de Materiales</h5>
                  <a href="#" class="btn btn-primary">Ir a Materiales</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card border-secondary mb-3 w-100 text-center">
                <div class="card-header">Proyectos</div>
                <div class="card-body text-primary">
                  <h5 class="card-title">Gestión de Proyectos</h5>
                  <a href="#" class="btn btn-primary">Ir a Proyectos</a>
                </div>
              </div>
        </div>
      </div>
</div>
@endsection
