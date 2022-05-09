@extends('adminlte::page')

@section('title', 'Listagem Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categorias</h3>
        </div>
        <div class="row px-3 py-3">
            <div class="col-md-3">
                <form action="{{ route('categories.search') }}" class="form form-inline">
                    <input type="text" name="search" class="form-control" placeholder="Pesquisar...">
                    <button type="submit" class="btn btn-primary ml-2">Pesquisar</button>
                </form>
            </div>
        </div>
        <div class="row px-3 py-3">
            <div class="col-md-3">
                <a class="btn btn-primary" href="{{ route('categories.create') }}" role="button">Add</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Url</th>
                    <th scope="col">Descrição</th>
                    <th width="200px" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->url }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="badge bg-yellow">Editar</a>
                            <a href="{{ route('categories.show', $category->id) }}" class="badge bg-yellow">Detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
