@extends('adminlte::page')

@section('title', 'Adicionar novo detalhe')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url)}}" class=" ">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.plan.index', $plan->url)}}" class=" ">Detalhes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.plan.create', $plan->url)}}" class=" ">Novo</a></li>
    </ol>
    <h1>Adicionar novo datalhe ao {{ $plan->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('detail.plan.store', $plan->url)}}" method="post" class="from">
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
    </div>
@endsection