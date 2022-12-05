@extends('layouts.app')

@section('template_title')
    Crear Grado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Grado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('grd-grados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('grd-grado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
