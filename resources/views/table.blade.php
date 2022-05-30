<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>
@if(session()->has('msg'))
<div class="alert alert-success">
{{ session()->get('msg') }}
@endif

<table style="width:100%">
  <tr>
    <th>id</th>
    <th>product name</th>
    <th>image</th>
    <th>Action</th>
 m

  </tr>
@foreach ($data as$d )

<tr>
    <td>{{$d->id}}</td>
    <td>{{$d->name}}</td>
    <td><img src="{{asset('Image/'.$d->image)}}" width="100" height="100"/></td>


<td>
    <a href="{{route('edit',$d->id)}}"><button class="btn btn-success">Edit</a>
        <a href="{{route('delete',$d->id)}}"><button class="btn btn-success">Delete</a>

    </td>

</tr>
@endforeach
</table>


<p>To undestand the example better, we have added borders to the table.</p>

</body>
</html>
