@extends('layouts.app')

@section('content')
 @if (count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
            </ul>
                @endif


    <h1>id = {{ $taskshow->id }} の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $taskshow->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $taskshow->status }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $taskshow->content }}</td>
        </tr>
        
    </table>
    {!! link_to_route('tasks.edit', '編集', ['id' => $taskshow->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($taskshow,["route"=>["tasks.destroy",$taskshow->id],"method"=>"delete"]) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
     {!! Form::close() !!}
@endsection