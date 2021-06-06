@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? 'Show Dato' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver datos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $dato->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $dato->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $dato->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $dato->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $dato->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $dato->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
