<h1>All Your Posts Here</h1>
<a href="tocreate"><h3>Create Post?</h3></a>
<hr>
@foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->description}}</p>

    <div>
        <a href="{{route("edit",$post->id)}}" role="button"><h4>Edit</h4></a>
        <a href="#" role="button"><h4>Delete</h4></a>
    </div>
    <hr>
@endforeach

