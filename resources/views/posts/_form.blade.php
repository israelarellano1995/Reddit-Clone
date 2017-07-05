@if ( $post->exists )

	<form action=" {{ route('update_post_path', ['post' => $post->id]) }} " method="POST">

	{{ method_field('PUT') }}

@else 

	<form action=" {{ route('store_post_path') }} " method="POST">

@endif

	{{ csrf_field() }}

	<div class="form-group">
		<label for="title">Titulo:</label>
		<input type="text" name="title" class="form-control"  value=" {{ $post->title or old('title') }} " />
	</div>

	<div class="form-group">
		<label for="description">Descripción:</label>
		<textarea  rows="5" name="description" class="form-control">{{ $post->description or old('description')  }}</textarea>
	</div>

	<div class="form-group">
		<label for="url">URL:</label>
		<input type="text" name="url" class="form-control" placeholder="http://example.com" value=" {{ $post->url or old('url') }} " />
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Guardar Post</button>
	</div>
			
</form>