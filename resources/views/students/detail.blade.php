<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Student Form - Laravel 9 CRUD Tutorial</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Student View</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('student.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(Session::has('successMsg1'))
<div class="alert alert-success"> {{ Session::get('successMsg1') }}</div>
@endif
<form action="{{ route('student.update',$Student->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Student Name:</strong>{{ $Student->name }}
{{-- <input type="label" name="name" value=" class="form-control" placeholder="Student name"> --}}
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Student Email:</strong>{{ $Student->email }}
{{-- <input type="label" name="email" class="form-control" placeholder="Student Email" value="{{ $Student->email }}"> --}}
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Student Address:</strong>{{ $Student->address }}
{{-- <input type="label" name="address" value="{{ $Student->address }}" class="form-control" placeholder="Student Address"> --}}
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
</div>
</form>
</div>
</body>
</html>
