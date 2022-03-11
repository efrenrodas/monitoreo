@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Velocidad:</strong>
                            {{ $registro->velocidad }}
                        </div>
                        <div class="form-group">
                            <strong>Corriente:</strong>
                            {{ $registro->corriente }}
                        </div>
                        <div class="form-group">
                            <strong>Torque:</strong>
                            {{ $registro->Torque }}
                        </div>
                        <div class="form-group">
                            <strong>Potencia:</strong>
                            {{ $registro->Potencia }}
                        </div>
                        <div class="form-group">
                            <strong>Sentido:</strong>
                            {{ $registro->sentido }}
                        </div>
                        <div class="form-group">
                            <strong>Regulador1:</strong>
                            {{ $registro->regulador1 }}
                        </div>
                        <div class="form-group">
                            <strong>Estadomotor:</strong>
                            {{ $registro->estadoMotor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
