@extends('layouts.app')

@section('content')
    <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1 class="m-0 text-dark">Marca</h1>
               </div>
           </div>
       </div>
   </div>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="card p-4">
               <div class="row">
                   {!! Form::model($mark, ['route' => ['marks.update', $mark->id], 'method' => 'patch' ,'class'=>'col-12 row' ]) !!}

                        @include('marks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection