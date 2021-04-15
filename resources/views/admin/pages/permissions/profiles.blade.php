@extends('adminlte::page')

@section('title', 'Perfis da permissão')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="" class=" ">Permissões</a>
        </li>
        <li class="breadcrumb-item">
            <a href="" class=" ">{{$permission->name}}</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('profile.permission.profile', $permission->id)}}" class=" ">Perfis</a>
        </li>
    </ol>
    <h1>Perfis da permissão  {{ $permission->name }} </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                @foreach ($profiles as $profile)
                    <li> {{ $profile->name }} </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/admin_custom.css">
@stop
