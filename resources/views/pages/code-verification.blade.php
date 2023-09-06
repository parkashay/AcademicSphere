<form action="/verify-code" method="POST">
    @csrf
<input type="text" name="access_code" required>
<input type="submit" value="Get Access">
</form>
@error('access_code')
    <div >{{$message}}</div>
@enderror