<h1>Edit Posts</h1>
<form action="{{route("index.update",$post->id)}}" method="post">
    @csrf
    @method("put")
    <input type="text" name="title" value="{{$post->title}}">
    <br>
    <br>
    <input type="text" name="body" value="{{$post->body}}">
    <br>
    <br>
    <button type="submit">Edit</button>
</form>
