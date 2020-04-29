@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
        @forelse ($articles as $article)
        <div id="content">
            <div class="title">
                
            <h2><a href="{{route('articles.show',$article)}}">{{$article->title}}</a></h2>
        <span class="byline">{{$article->excerpt}}</span> </div>
        <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
        
		</div>
        @empty 
            <p>No relevant Articles</p>
        @endforelse
		</div>
         
	</div>
</div>

@endsection
