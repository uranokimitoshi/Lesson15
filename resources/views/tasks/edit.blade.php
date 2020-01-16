@extends('layouts.app')

@section('content')

    <h1>id: {{ $taskedit->id }} の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($taskedit, ['route' => ['tasks.update', $taskedit->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('status', '内容:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! Form::label('content', '内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection