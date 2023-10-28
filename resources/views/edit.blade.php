<h1>Update</h1>
<form action="/edit" method="POSt">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}"> <br> <br>
    <input type="text" name="body" value="{{$data['body']}}"> <br> <br>
    <input type="text" name="head" value="{{$data['head']}}"> <br> <br>
    <input type="text" name="support" value="{{$data['support']}}"> <br> <br>
    <input type="text" name="buttons" value="{{$data['buttons']}}"> <br> <br>
    <input type="text" name="mama" value="{{$data['mama']}}"> <br> <br>
    <button type="submit" > Update</button>
</form>
