<h1>Create Your Post from Here</h1>
<form action="{{route("index.store")}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter Title">
    <br>
    <br>
    <input type="text" name="body" placeholder="Enter Body">
    <br>
    <br>

    <button type="submit">Submit</button>
</form>
