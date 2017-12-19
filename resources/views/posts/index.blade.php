@extends('layout.main')
@section('title', '| Edit')
@section('content')
<div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    All Posts
                </div>

                <div class="links">
                    <a href="/posts">All Posts</a>
                    <a href="/posts/create">Create</a>
                    <a href="*">Login</a>
                    
                </div>
                
            </div>
        </div>
            
<div class="container"><hr></div><br>
<div class="container"> 
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Body</th>
      <th scope="col">Created At</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{ $post->title }}</th>
      <td>{{ $post->author }}</td>
      <td>{{ substr($post->body, 0,50) }} {{ strlen($post->body ) > 50 ? "..." : "" }}</td>
      <td>{{ date('M j,Y', strtotime($post->created_at)) }}</td>
      <td><a href="{{ route('posts.show', $post->id)}}" class="btn btn-info">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="container" style="text-align: center;">
  {!! $posts->links(); !!}
  
</div>


@endsection