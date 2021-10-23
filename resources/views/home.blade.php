@extends('layouts.app')

@section('content-adm')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-primary mb-3">
                <div class="card-header">{{ __('Dashboard') }} ADMIN</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                    <h5 class="font-weight-bold mb-3">{{ auth()->user()->nombre }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ auth()->user()->email }}</li>
                        <li class="list-group-item">Cedula: {{ auth()->user()->cedula }} - Celular {{ auth()->user()->celular }} </li>
                        <li class="list-group-item">Fecha Nacimiento: {{ auth()->user()->fec_nac }}</li>
                    </ul>
                    
                </div>                
            </div>
            
            <div class="card border-success mb-3">
                <div class="card-header">Show USER</div>
                <div class="card-body text-primary">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Fecha de Nac.</th>
                            <th scope="col">Cod. Ciudad</th>
                            <th scope="col">Acciones</th>

                          </tr>
                        </thead>
                        <tbody>                          
                            @foreach($userReg as $user)
                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>{{ $user->nombre}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->cedula}}</td>
                                <td>{{ $user->celular}}</td>
                                <td>{{ $user->fec_nac}}</td>
                                <td>{{ $user->cod_ciudad}}</td>
                                <td>Acciones</td>
                            </tr>  
                            @endforeach                                                   
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content-user')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} USER</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                      Panel EMAIL
                    </div>
                    <div class="panel-footer">Panel footer</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
