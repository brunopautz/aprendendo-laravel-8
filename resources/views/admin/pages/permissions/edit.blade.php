@extends('adminlte::page')

@section('title', 'Editar permissão')

@section('content_header')
    <h1>Editar <b> {{ $permission->name }} </b> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id) }}" class="form" method="post">
                @csrf
                @method('put')
                
                @include('admin.pages.permissions._partials.form')
                
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Editar perfil</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/admin_custom.css">
@stop
