@extends('layouts/app')


@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            {!! link_to_route('posts', 'published') !!}
                            &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.unpublished', 'unpublished') !!}
                            &nbsp;&nbsp;&nbsp; {!! link_to_route('post.create', 'new') !!}
                        </div>
                    </div>
                    <div class="panel-body">


                        @foreach($posts as $post)
                            <article>
                                <h2>{{ $post->title }}</h2>
                                <p>{!! $post->excerpt !!}</p>
                                <p>
                                    published: {{$post->published_at}}
                                </p>
                            </article>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop