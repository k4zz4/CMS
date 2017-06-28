@extends('posts.base')
<!--@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection-->
@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>UNESI NOVOST</h1></div>
                
                
                <div class="panel-body">
                {!! Form::open(['route' => 'posts.store', 'files'=>true]) !!}
                    {{ Form::label('title', 'Naslov') }}
                    {{ Form::text('title', null, array('class'=>'form-control')) }}
                    
                    {{ Form::label('body', 'Sadrzaj') }}
                    {{ Form::textarea('body', null, array('class'=>'form-control')) }}
                    
                    {{ Form::label('featured_image', ('Postavite sliku')) }}
                    {{ Form::file('featured_image') }}
                    
                    {{ Form::submit('Kreiraj post', array('class' =>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;')) }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection-->