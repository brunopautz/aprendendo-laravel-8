@extends('adminlte::page')

@section('title', 'Detalhes da permissão')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.index')}}">Perfis</a></li>
        <li class="breadcrumb-item"><a href="{{ route('permissions.show', $permission->id)}}" class=" ">{{ $permission->name }}</a></li>
    </ol>
    <h1>Detalhes da permissão <b> {{ $permission->name }} </b> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            @include('admin.includes.alerts')
            
            <div class="form-group">
                <label for="name">Nome: </label>
                <input disabled type="text" class="form-control" name="name" id="name" value="{{ $permission->name }}">
            </div>
            <div class="form-group">
                <label for="description">Descrição: </label>
                <input disabled type="text" class="form-control" name="description" id="description"  value="{{ $permission->description }}">
            </div>
            <form action="{{ route('permissions.destroy', $permission->id) }}" class="form" method="post">
                @csrf
                @method('delete')
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block">Remover permissão</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/admin_custom.css">
@stop
