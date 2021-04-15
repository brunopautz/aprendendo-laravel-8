@extends('adminlte::page')

@section('title', 'Permissões do perfil')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('profiles.index')}}" class=" ">Perfis</a>
        </li>
    </ol>
    <h1>Permissões do perfil  {{ $profile->name }} <a href="{{ route('profile.permission.available', $profile->id) }}" class="btn btn-dark">ADD NOVA PERMISSÃO</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="50" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td> {{ $permission->name }}</td>
                            <td width="50"> 
                                <a href="{{ route('profile.permission.detach', [$profile->id, $permission->id] )}}" class="btn btn-danger">DESVINCULAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            @if (isset($filters))
                {{ $permissions->appends($filters)->links() }}
            @else
                {{ $permissions->links() }}
            @endif
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../../vendor/adminlte/dist/css/admin_custom.css">
@stop
