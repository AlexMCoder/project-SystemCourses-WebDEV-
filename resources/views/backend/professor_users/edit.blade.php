@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Professor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($professorUser, ['route' => ['professorUsers.update', $professorUser->id], 'method' => 'patch']) !!}

                        @include('backend.professor_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
