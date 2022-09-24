<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2></h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('student.create') }}"> Create Student</a>
</div>
</div>
</div>
@if(Session::has('successMsg'))
<div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
@endif
<table class="table table-bordered">
<tr>
{{-- <th>S.No</th> --}}
<th>Student Name</th>
<th>Student Email</th>
<th>Student Address</th>
<th width="280px">Action</th>
</tr>
@foreach ($Student as $students)
<tr>
{{-- <td><a href="{{route('student.show'," $students->id")}}">{{ $students->id }}</a></td> --}}
<td><a href="{{route('student.show'," $students->id")}}">{{ $students->name }}</a></td>
<td>{{ $students->email }}</td>
<td>{{ $students->address }}</td>
<td>
<form action="{{ route('student.destroy',$students->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('student.edit',$students->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $Student->links() !!}
</body>
</html>
