@extends('adminlte::page')

@section('title', 'Ver detalhe')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url)}}" class=" ">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.plan.index', $plan->url)}}" class=" ">Detalhes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('detail.plan.show', [$plan->url, $detail->id])}}" class=" ">{{ $detail->name }}</a></li>
    </ol>
    <h1>Ver detalhe {{ $detail->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $detail->name ?? ' ' }}" disabled>
            </div>

            <form action="{{ route('detail.plan.destroy', [$plan->url, $detail->id])}}" method="post" class="from">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block">Remover detalhe</button>
                </div>
            </form>
        </div>
    </div>
@endsection