@extends('adminlte::page')

@section('title', 'Listagem Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $category->title }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-6">
               <p><strong>ID: </strong> {{ $category->id }}</p>
               <p><strong>Título: </strong> {{ $category->title }}</p>
               <p><strong>URL: </strong> {{ $category->url }}</p>
               <p><strong>Descrição: </strong> {{ $category->description }}</p>

               <hr>

               <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
               </form>
            </div>
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
