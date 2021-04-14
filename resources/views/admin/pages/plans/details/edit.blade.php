@extends('adminlte::page')

@section('title', 'Editar detalhe')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url)}}" class=" ">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.plan.index', $plan->url)}}" class=" ">Detalhes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.plan.edit', [$plan->url, $detail->id])}}" class=" ">Editar</a></li>
    </ol>
    <h1>Editar detalho {{ $detail->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('detail.plan.update', [$plan->url, $detail->id])}}" method="post" class="from">
                @method('PUT')
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
    </div>
@endsection