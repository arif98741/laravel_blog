@extends('main')

@section('title','| View Post')


@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{$post->title}}</h1>
			<p class="lead">{{$post->body}}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<dt>Created at:</dt>
					<dd>{{date('M j, Y H:ia',strtotime($post->created_at))}}</dd>
				</div>

				<div class="dl-horizontal">
					<dt>Last Updated: </dt>
					<dd>{{date('M j, Y H:ia',strtotime($post->updated_at))}}</dd>
				</div>

				<hr>

				<div class="row">
					<div class="col-md-6">

						{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
						
					</div>

					<div class="col-md-6">
						{!! Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}						
						
					</div>
					
				</div>



			</div>
		</div>
	</div>

@endsection

