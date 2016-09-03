<div>
    <a href="/articles/create">Leave an Article!!</a>
</div>
<div>
    @foreach($articles as $article)
        <h3>{{ $article->title }}, {{ $article->created_at->toFormattedDateString() }}</h3>


        <div>
            {{ $article->text }}
        </div>
        <br>
        <a href="/articles/edit/{!! $article->id !!}">Edit {!! $article->title !!}</a>


    @endforeach
</div>