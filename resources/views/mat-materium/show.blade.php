@extends('layouts.app')

@section('template_title')
    {{ $matMaterium->name ?? 'Mostrar Materias' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Materias</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mat-materia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $matMaterium->mat_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $matMaterium->mat_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
