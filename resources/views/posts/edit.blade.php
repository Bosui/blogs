@extends('main')

@section('title', '| Edit Blog Post' )

@section('content')
<div class="row">

  <div class="col-md-8">

    {!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT'])!!}
    <!-- 17 20 min -->
    {{ Form::label('title', 'Title')}}
    {{ Form::text('title', null,['class'=>'form-control input-lg'])}}

    {{Form::label('body', "Body:", ['class'=>'form-spacing-top'])}}
    {{ Form::textarea('body',null,['class'=> 'form-control'])}}
    <h1>{{ $post->title }}</h1>
      <p class="lead">{{ $post->body}} </p>
  </div>
  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Create At</dt>
        <dd>{{ date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd>{{ date('M j, Y h:ia',strtotime ($post->updated_at)) }}</dd>

      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">

          {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block'))!!}
          <!-- <a href="#" class="btn btn-primary bnt-block">Edit</a> -->
        </div>
        <div class="col-sm-6">
          {{ Form::submit('Save Changes', ['class'=> 'btn btn-success btn block']) }}
          <!-- {!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class'=>'btn btn-success btn-block'))!!} -->
        </div>

      </div>


    </div>

  </div>
{!! Form::close () !!}

</div>


@stop
