@extends('layouts.app')

@section('content')
 @if(Auth::check())
 <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                
                    <div class="card-header">
                        こんにちは
                        <p class="card-title">{{ Auth::user()->name }}　さん</p>
                    </div>
                    
                </div>
            </aside>
            
</div>
     @if (count($tasks) > 0)
      <table class="table table-striped">
            <thead>
               <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>内容</th>
                    <th>time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                   
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->created_at }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
     @endif
     {{ $tasks->links('pagination::bootstrap-4') }}
{!! link_to_route('tasks.create', '投稿ページへ',[],['class' => 'btn btn-lg btn-primary']) !!}

 @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>ユーザー登録してください</h1>
            {!! link_to_route('signup.get', '登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endif

@endsection
