{!! Form::open(['url' => '/articles/create']) !!}
    @include('articles.form')
{!! Form::submit('Submit', ['class' => 'button']) !!}
{!! Form::close() !!}

