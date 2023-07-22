<h1>Create Post</h1>
<form action="{{route("create")}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Post Title">
    <br>
    <br>
    <input type="text" name="body" placeholder="Post body">
    <br>
    <br>
    <button type="submit">Post</button>
</form>
