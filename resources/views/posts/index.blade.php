@extends('layouts.app')


@section('content')

	@foreach($posts as $post )

		
	
			<div class="row">
				<div class="col-md-12">
					<h2>
						<a href="{{ route('post_path', ['post' => $post->id]) }}"> {{ $post->title }} </a>
						
						@if($post->wasCreatedBy(Auth::user() ))

							<small class="pull-right">
								<a href="{{ route('edit_post_path', ['post' => $post->id]) }}" class="btn btn-info"> Editar </a>
								<form action=" {{ route('delete_post_path', ['post' => $post->id]) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<button type="submit" class="btn btn-danger">Eliminar</button>
									
								</form>
							</small> 

						@endif
					</h2>																		
 					<p>Posted {{ $post->created_at->diffForHumans() }}  By <a href=" {{ route('user_profile_path', ['user' => $post->id]) }}"><b>{{ $post->user->name }}</b></a></p>	
				</div>
			</div>
			<hr>


	@endforeach	

	{{ $posts->render() }}

@endsection
