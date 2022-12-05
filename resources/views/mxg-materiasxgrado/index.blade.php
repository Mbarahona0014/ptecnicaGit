@extends('layouts.app')

@section('template_title')
    Mxg Materiasxgrado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mxg Materiasxgrado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mxg-materiasxgrados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Id</th>
										{{-- <th>Id Grado</th> --}}
                                        <th>Grado</th>
										{{-- <th>Id Materia</th> --}}
                                        <th>Materia</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mxgMateriasxgrados as $mxgMateriasxgrado)
                                        <tr>
											<td>{{ $mxgMateriasxgrado->mxg_id }}</td>
											{{-- <td>{{ $mxgMateriasxgrado->mxg_id_grd }}</td> --}}
                                            <td>{{ $mxgMateriasxgrado->grdGrado->grd_nombre }}</td>
											{{-- <td>{{ $mxgMateriasxgrado->mxg_id_mat }}</td> --}}
                                            <td>{{ $mxgMateriasxgrado->matMaterium->mat_nombre }}</td>
                                            <td>
                                                <form action="{{ route('mxg-materiasxgrados.destroy',$mxgMateriasxgrado->mxg_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mxg-materiasxgrados.show',$mxgMateriasxgrado->mxg_id) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mxg-materiasxgrados.edit',$mxgMateriasxgrado->mxg_id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $mxgMateriasxgrados->links() !!}
            </div>
        </div>
    </div>
@endsection
