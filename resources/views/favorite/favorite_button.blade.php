    @if (Auth::user()->is_favorites($micropost->id))

        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "button btn btn-warning btn-sm"]) !!}
        {!! Form::close() !!}

    @else

        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "button btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}

    @endif

