<h1>Edit Post</h1>


{{--<form action="{{route("edit",$id)}}" method="post">--}}

<form action="{{route("update",$posts->id)}}" method="post">
    @csrf
    @method('put')
        <input type="text" name="title" value="{{$posts->title}}">
        <br>
        <br>
        <input type="text" name="body" value="{{$posts->description}}">
        <br>
        <br>


    <button type="submit">Edit</button>
</form>
