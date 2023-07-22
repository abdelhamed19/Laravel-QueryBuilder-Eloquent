<h1>All Your Posts Here</h1>
{{--<a href="{{route("index.create")}}"><h3>Create Post</h3></a>--}}
<button type="submit"><a href="{{route("index.create")}}"><h3>Create Post</h3></a></button>
<hr>
@foreach($posts as $posts)
    <h2>{{$posts->title}}</h2>
    <h4>{{$posts->description}}</h4>
    <div>
        <a href="{{route("index.edit",$posts->id)}}" role="button"><h4>Edit</h4></a>
        <form action="{{route("index.destroy",$posts->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit">Delete</button>
        </form>
    </div>
    <hr>

@endforeach
