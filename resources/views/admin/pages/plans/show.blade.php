@extends('adminlte::page')

@section('title', 'Detalhes do plano')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url)}}" class=" ">{{ $plan->name }}</a></li>
    </ol>
    <h1>Detalhes do <b> {{ $plan->name }} </b> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            @include('admin.includes.alerts')
            
            <div class="form-group">
                <label for="name">Nome: </label>
                <input disabled type="text" class="form-control" name="name" id="name" value="{{ $plan->name }}">
            </div>
            <div class="form-group">
                <label for="url">URL: </label>
                <input disabled type="text" class="form-control" name="url" id="url" value="{{ $plan->url }}">
            </div>
            <div class="form-group">
                <label for="price">Preço: </label>
                <input disabled type="text" class="form-control" name="price" id="price"  value="R$ {{  number_format($plan->price, 2, ',', '.') }}">
            </div>
            <div class="form-group">
                <label for="description">Descrição: </label>
                <input disabled type="text" class="form-control" name="description" id="description"  value="{{ $plan->description }}">
            </div>
            <form action="{{ route('plans.destroy', $plan->url) }}" class="form" method="post">
                @csrf
                @method('delete')
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block">Remover plano</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/admin_custom.css">
@stop
