@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Contato
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contato, ['route' => ['contatos.update', $contato->id], 'method' => 'patch']) !!}

                        @include('backend.contatos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
