@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Categorias</h1>
                </div>
                <!-- /.col -->
                @can('haveaccess', 'categories.create')
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="btn btn-primary ml-auto mr-0" href="{{ route('categories.create') }}">Añadir nueva</a>
                    </ol>
                </div>
                @endcan
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="card p-4">
                    @include('categories.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

