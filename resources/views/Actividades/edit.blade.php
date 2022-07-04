@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Actualizar Actividad</div>
                <div class="card-body">
                   
                    <form action="{{route('actividad.update',$actividad->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                    <div class="row mb-3">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end">Descripción</label>

                        <div class="col-md-6">
                            <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $actividad->descripcion }}" required autocomplete="name" autofocus>

                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="unidad" class="col-md-4 col-form-label text-md-end">Unidad de medida</label>

                        <div class="col-md-6">
                            <select name="unidad" id="unidad"  class="form-control @error('unidad') is-invalid @enderror" name="unidad" value="{{ old('unidad') }}"  autocomplete="unidad" required autofocus>
                                <option value="{{$actividad->unidad}}" selected>{{$actividad->unidad}}</option>
                                <option value="BOLSA">BOLSA</option>
                                <option value="C/U">C/U</option>
                                <option value="CUARTO">CUARTO</option>
                                <option value="GALON">GALON</option>
                                <option value="GRAMO">GRAMO</option>
                                <option value="H/H">H/H</option>
                                <option value="H/MAQ">H/MAQ</option>
                                <option value="JDR">JDR</option>
                                <option value="LAMINA">LAMINA</option>
                                <option value="LIBRA">LIBRA</option>
                                <option value="LITRO">LITRO</option>
                                <option value="M2">M2</option>
                                <option value="M2/GALON">M2/GALON</option>
                                <option value="M3">M3</option>
                                <option value="ML">ML</option>
                                <option value="PC">PC</option>
                                <option value="PIE">PIE</option>
                                <option value="PLIEGO">PLIEGO</option>
                                <option value="QUINTAL">QUINTAL</option>
                                <option value="ROLLO">ROLLO</option>
                                <option value="S.G">S.G</option>
                                <option value="TUBO">TUBO</option>
                                <option value="UNIDAD">UNIDAD</option>
                                <option value="VARA">VARA</option>
                                <option value="VRS">VRS</option>
                                <option value="YARDA">YARDA</option>
                                


                                
                            </select>

                            @error('unidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="porcentaje" class="col-md-4 col-form-label text-md-end">Porcentaje</label>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <span class="input-group-text">%</span>
                            <input id="porcentaje" type="number" class="form-control @error('porcentaje') is-invalid @enderror" name="porcentaje" value="{{ $actividad->porcentaje }}" required autocomplete="porcentaje" autofocus>

                            @error('porcentaje')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="costo" class="col-md-4 col-form-label text-md-end">Costo</label>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input id="costo" type="number" class="form-control @error('costo') is-invalid @enderror" name="costo" value="{{ $actividad->costo }}" required autocomplete="costo" autofocus>

                            @error('costo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar actividad
                            </button>
                        </div>
                    </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection