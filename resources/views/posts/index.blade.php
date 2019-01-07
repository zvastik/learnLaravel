@extends ('layouts.app')

@section('content')
   <h2>Posts</h2>
   @if(count($posts)>0)
      @foreach($posts as $post) 
        <div class="card card-body bg-light">
          <div class="row">
            <div class="col-md-4 col-sm-4">
            <img style="width:100%" src="/learnLaravel/public/storage/cover_images/{{$post->cover_image}}">
            </div>
            <div class="col-md-8 col-sm-8">
                <h4><a href="/learnLaravel/public/posts/{{$post->id}}">{{$post->title}}</a></h4>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
          </div>
       
        </div>
      @endforeach
      {{$posts->links()}}
   @else
    <p>No posts found</p>
   @endif
@endsection   