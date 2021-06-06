@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="integrantes">
        <h1 class="text-center fw-bold">Integrantes:</h1>
        <h2 class="text-center">Luis Jose Arias Reyes</h2>
        <h2 class="text-center">Stephanie Paola Cruz Lazo</h2>
        <h2 class="text-center">Jeremy Ernesto Aguilar Saravia</h2>
        <h2 class="text-center">Luis Ernesto Gomez Escobar</h2>
    </div>
</div>
@endsection
