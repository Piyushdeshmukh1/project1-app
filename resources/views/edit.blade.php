<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>


<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li> {{$error}}</li>

            @endforeach
        </ul>
    </div>

    @endif
  <label for="fname">Product name:</label><br>
  <input type="text" id="fname" name="name" ><br>
  <input type="file" id="fname" name="image" ><br>

  <input type="submit" value="Submit">
</form>


</body>
</html>

