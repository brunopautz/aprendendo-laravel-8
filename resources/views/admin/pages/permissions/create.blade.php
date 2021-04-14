@extends('adminlte::page')

@section('title', 'Cadastrar nova permissão')

@section('content_header')
    <h1>Cadastrar nova permissão </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.store') }}" method="POST" class="form">
                @csrf
                @include('admin.pages.permissions._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>    
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/admin_custom.css">
@stop
