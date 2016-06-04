@extends('main')

@section('title', '| All Posts')

@section('content')

	<br><br><br><br>
	
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-space">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr class="featurette-divider">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th class="col-md-5">Body</th>
					<th>Created At</th>
					<th></th>
				</thead>
					
				<tbody>
					
					@foreach ($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ str_limit($post->body, $limit = 100, $end = ' ...') }}</td>
							<td>{{ $post->created_at->diffForHumans() }}</td>
							<td>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
							</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>

@stop