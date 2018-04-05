@extends('main')

@section('title','| All Post')


@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			
			<a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new Post</a>
		</div>
	</div> <!--end of the row-->

	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Created At</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<td>{{$post->title}}</td>
							<td>{{substr($post->body,0,50)}} {{strlen($post->body)>50 ? "...." : ""}}</td>
							<td>{{date('M j, Y',strtotime($post->created_at))}}</td>
							<td><a href="{{route('posts.show',$post->id)}}" class="btn btn-success">View</a>&nbsp;<a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection