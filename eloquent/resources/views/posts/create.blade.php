<h1>Create Posts</h1>
<form action="{{route("index.store")}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter Post Title">
    <br>
    <br>
    <input type="text" name="body" placeholder="Enter Post Body">
    <br>
    <br>
    <button type="submit">Post</button>
</form>
