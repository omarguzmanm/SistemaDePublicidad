@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::open(['route' => 'info.store', 'class' => 'form-control']) !!}

                {{ Form::label('title', 'Title:', ['class' => 'form-label']) }}
                {{ Form::text('title', null, ['class' => 'form-control mb-2']) }}

                {{ Form::label('description', 'Description:', ['class' => 'form-label']) }}
                {{ Form::textarea('description', null, ['class' => 'form-control mb-2 h-100', 'rows' => 2]) }}

                
                {{ Form::label('url', 'URL:',  ['class' => 'form-label']) }}
                {{ Form::text('url', null, ['class' => 'form-control mb-2'])  }}


                {{ Form::submit('Crear lanzamiento', ['class' => 'btn btn-primary mt-2']) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@endsection
