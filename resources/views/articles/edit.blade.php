{!! Form::model($article, ['url' => '/articles/update/'. $article->id]) !!}
@include('articles.form')
{!! Form::submit('Update', ['class' => 'button']) !!}
{!! Form::close() !!}