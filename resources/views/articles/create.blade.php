@extends('layout')

@section('bootstrap')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
            <h2>Create A New Article</h2>
                
            </div>
            
            <form method="POST" action="/articles">
                @csrf
                <div class="form-group row">
                  <label for="title" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                  <input type="text" value='{{old('title')}}' class="form-control" name='title' id="inputEmail3">
                    @error('title')
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('title')}}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="excerpt" class="col-sm-2 col-form-label">Excerpt</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value='{{old('excerpt')}}' name='excerpt' id="inputPassword3">
                    
                    @error('excerpt')
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('excerpt')}}
                    </div>
                    @enderror
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="body"></label>
                  <textarea class="form-control" name="body"  id="body" rows="3">{{old('body')}}</textarea>
                  
                  @error('excerpt')
                  <div class="alert alert-danger" role="alert">
                    {{$errors->first('body')}}
                </div>
                @enderror
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  </div>
                  <select class="custom-select" name='tags[]' id="inputGroupSelect01" multiple>
                    
                    @foreach ($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                  </select>
                  @error('tags')
                  <div class="alert alert-danger" role="alert">
                    {{$errors->first('tags')}}
                </div>
                @enderror
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