@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col">
                    <div class="card shadow">  
                        <div class="pl-lg-4">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Listagem De Revandas</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="{{ route('revendas.create') }}" class="btn btn-sm btn-primary">Cadastrar Revenda</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Usuário</th>
                                        <th>Créditos</th>
                                        <th>Dono</th>
                                        <th>Master</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($revendas as $revenda)
                                        <tr>
                                            <td>{{ $revenda->id }}</td>
                                            <td>{{ $revenda->usuario }}</a></td>
                                            <td>{{ $revenda->creditos }}</td>
                                            <td>{{ auth()->user()->name }}</td>
                                            <td> {{ $revenda->master }}</td>
                                            
                                            <td class="td-actions ">
                                                @csrf

                                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>   
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection