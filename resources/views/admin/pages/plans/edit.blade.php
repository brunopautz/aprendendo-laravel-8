@extends('adminlte::page')

@section('title', 'Editar plano')

@section('content_header')
    <h1>Editar <b> {{ $plan->name }} </b> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.update', $plan->url) }}" class="form" method="post">
                @csrf
                @method('put')
                
                @include('admin.pages.plans._partials.form')
                
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Editar plano</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../vendor/adminlte/dist/css/admin_custom.css">
@stop
