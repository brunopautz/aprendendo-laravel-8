@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('profiles.index')}}" class=" ">Perfis</a>
        </li>
    </ol>
    <h1>Perfis <a href="{{ route('profiles.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('profiles.search') }}" class="form form-inline" method="post">
                @csrf
                <input type="text" name="filter" id="filter" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="250" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr>
                            <td> {{ $profile->name }}</td>
                            <td width="250"> 
                                {{-- <a href="{{ route('detail.plan.index', $plan->url )}}" class="btn btn-primary">Detalhes</a> --}}
                                <a href="{{ route('profiles.edit', $profile->id )}}" class="btn btn-info">Editar</a>
                                <a href="{{ route('profiles.show', $profile->id )}}" class="btn btn-warning">Ver</a>
                                <a href="{{ route('profile.permission', $profile->id)}}" class="btn btn-primary"> <i class="fas fa-lock"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            @if (isset($filters))
                {{ $profiles->appends($filters)->links() }}
            @else
                {{ $profiles->links() }}
            @endif
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/admin_custom.css">
@stop
