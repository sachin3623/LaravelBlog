@extends('layout.main')
@section('title', '| Home')




@section('content')
  @include('inc.title')

<div class="row">
  <div class="col-sm-1">
    
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header">
        Author
      </div>
       @foreach($posts as $post)

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="display-4">{{ $post->title }}</h2> 
            <p class="lead">{{ substr($post->body, 0, 400) }}{{ (strlen($post->body)>400 ? "..." : "")}}</p>

            <a class="btn btn-secondary" href="/posts" role="button">View details &raquo;</a>
          </div>
          
        </div>

        <hr class="featurette-divider">
        @endforeach
    </div>

  </div>
  <div class="col-sm-3">
    <div class="card" style="width: 20rem;">
  <div class="card-header bg-info text-white">
    <b>ABOUT</b>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="https://facebook.com/manish.s1999">Facebook</a></li>
  </ul>
</div><br>
    <div class="card bg-light text-dark" style="width: 20rem;">
      <img class="card-img-top" src="" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title ">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

@endsection