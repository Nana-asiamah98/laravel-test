@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
            <h2>Edit Article</h2>
                
            </div>
            
        <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="title" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$article->title}}" name='title' id="inputEmail3">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="excerpt" class="col-sm-2 col-form-label">Excerpt</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$article->excerpt}}" name='excerpt' id="inputPassword3">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="body"></label>
                  <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" name='submit' class="btn btn-primary">Add Article</button>
                  </div>
                </div>
              </form>
		</div>
	</div>
</div>

@endsection