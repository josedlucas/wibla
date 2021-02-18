@extends('layouts.app')

@section('content')
   <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editar Rol</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="card p-4">
               <div class="row">
                   {!! Form::model($roles, ['route' => ['roles.update', $roles->id], 'method' => 'patch','class'=>'col-12 row']) !!}

                        @include('roles.fieldsEdit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
