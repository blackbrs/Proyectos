@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif 
    <table class="table table-bordered table-hover ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Unidad</th>
                <th>Porcentaje</th>
                <th>Costo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
            <tr>
                <td>{{$actividad->id}}</td>
                <td>{{$actividad->descripcion}}</td>
                <td>{{$actividad->unidad}}</td>
                <td>{{number_format($actividad->porcentaje,2)}}%</td>
                <td>${{$actividad->costo}}</td>
                <td>
                    <a href="{{route('actividad.edit',$actividad->id)}}" class="btn btn-warning">Editar</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $actividades->links('pagination::bootstrap-4') !!}
    </div>
  
</div>
@endsection