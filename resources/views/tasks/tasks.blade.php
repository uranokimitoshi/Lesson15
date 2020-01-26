<ul class="list-unstyled">
    @foreach ($tasks as $task)
        <li class="media mb-3">
            
            <div class="media-body">
                <div>
                    タイトル　{!! link_to_route('tasks.show', $task->status,["id"=>$task->id]) !!}
                    　 <span class="text-muted"> {{ $task->created_at }}</span>
                </div>
                <div>
                <p class="mb-0">内容　　　{!! nl2br(e($task->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $task->user_id)
                        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>

{{ $tasks->links('pagination::bootstrap-4') }}
{!! link_to_route('tasks.create', '投稿ページへ',[],['class' => 'btn btn-lg btn-primary']) !!}
