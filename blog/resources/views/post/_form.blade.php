@if (count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div class="form-group">
    {!! Form::label('slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('excerpt') !!}
    {!! Form::textarea('excerpt', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published') !!}
    {!! Form::checkbox('published', 1, false) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at') !!}
    {!! Form::input('date','published_at',date('Y-m-d'), ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit ('Create', ['class'=>'btn btn-primary'])!!}
</div>

