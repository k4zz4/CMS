@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>SVE NOVOSTI</h1></div>
                @foreach ($postovi as $post)
                <div>
                    <h2>{{ $post->title }}</h2>
                    <img src="{{ asset('images/' . $post->image) }}">
                    <p>{{ $post->body }}</p>
                </div>
                @endforeach
                <div class="panel-body">
<!--                    @component('components.who')
                    @endcomponent-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
