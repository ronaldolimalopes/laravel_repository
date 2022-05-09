@extends('adminlte::page')

@section('title', 'Listagem Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastrar Categorias</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-6">
                @include('admin.includes.alerts')
                <form action="{{ route('categories.store') }}" method="POST">
                    @include('admin.categories._partials.form')
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
