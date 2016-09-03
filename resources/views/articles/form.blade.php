<div>
    {!! Form::label('title', 'Enter the title of your article') !!}
    <br>
    {!! Form::text('title', null, []) !!}
</div>

<div>
    {!! Form::label('text', 'Enter the content of your article') !!}
    <br>
    {!! Form::textarea('text', null, []) !!}
</div>