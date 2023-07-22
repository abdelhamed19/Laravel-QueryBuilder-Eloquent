<h1>Edit Your Post from Here</h1>
<form action="{{route("index.update",$posts->id)}}" method="post">
    @csrf
    @method("put")
    <input type="text" name="title" value="{{$posts->title}}">
    <br>
    <br>
    <input type="text" name="body" value="{{$posts->description}}">
    <br>
    <br>

    <button type="submit">Submit</button>
</form>
