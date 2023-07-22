<h1>Hello From index</h1>
{{--<a href="{{route("index.create")}}"><h4>Create Post</h4></a>--}}
<button>
    <a href="{{route("index.create")}}"> <h4>
            Create Post
        </h4>

    </a>
</button>
<hr>
@foreach($posts as $posts)
    <h3>{{$posts->title}}</h3>
    <h4>{{$posts->body}}</h4>
{{--    <a href="{{route("index.edit",$posts->id)}}" role="button"><h4>Edit</h4></a>--}}
    <button>
        <a href="{{route("index.edit",$posts->id)}}">
                Edit
        </a>
    </button>
    <br>
    <br>
    <form action="{{route("index.destroy",$posts->id)}}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>
    <hr>
@endforeach

{{--<button><a href="">Create</a></button>--}}
