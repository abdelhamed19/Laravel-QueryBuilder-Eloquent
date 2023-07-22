<h1>All Posts</h1>
@foreach($posts as $post)
     <h2><li>
            {{$post->title}}
        </li></h2>
     <h4>
             {{$post->description}}
         <h4>
    <div>
        <a href="{{route('edit',$post->id)}}" role="button">Edit</a>
        <a href="{{route('delete',$post->id)}}" role="button">Delete</a>
    </div>
@endforeach
