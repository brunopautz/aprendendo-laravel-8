@extends('adminlte::page')

@section('title', 'Detalhos do plano')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index')}}">Planos</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('plans.show', $plan->url)}}" class=" ">{{ $plan->name }}</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('detail.plan.index', $plan->url)}}" class=" ">Detalhes</a>
        </li>
    </ol>
    <h1>Detalhes do {{ $plan->name }}<a href="{{ route('detail.plan.create', $plan->url) }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="200" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td> {{ $detail->name }}</td>
                            <td width="200"> 
                                <a href="{{ route('plans.edit', $plan->url )}}" class="btn btn-info">Editar</a>

                                <a href="{{ route('plans.show', $plan->url )}}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            @if (isset($filters))
                {{ $details->appends($filters)->links() }}
            @else
                {{ $details->links() }}
            @endif
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/admin_custom.css">
@stop
