@include('../layuot.header')
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">description</th>
    </tr>
  </thead>
  
@foreach($departments as $department)
<tr>
      
      <td>{{$department->id;}}</td>
      <td>{{$department->name;}}</td>
      <td>{{$department->description;}}</td>
      <td><a href="{{url('department/delete/'.$department->id)}}" class="btn btn-danger">Delete</a></td>
      <td><a href="{{url('department/show/'.$department->id)}}" class="btn btn-success">Show</a></td>
      <td><a href="{{url('department/edit/'.$department->id)}}" class="btn btn-primary">Edite</a></td>
    </tr>

@endforeach
</table>
{{$departments->links();}}
</div>

@include('../layuot.footer')