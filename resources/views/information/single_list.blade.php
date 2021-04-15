@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">

<form action="{{ route('information_update') }}" method="post">
  @csrf

       <div class="form-group">
         <input name="information_id"  type="text" value="{{$single_information->id}}">
         <div class="form-group">
             <label for="name">Full Name</label>
             <input name=name type="text" value="{{$single_information->name}}" class="form-control" id="name" aria-describedby="emailHelp">

       </div>

       <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" value="{{$single_information->email}}"class="form-control" id="email">
       </div>

       <div class="form-group">
           <label for="projectname">Company Name</label>
           <input name="companyname" type="text" value="{{$single_information->companyname}}" class="form-control" id="companyname" aria-describedby="emailHelp">

       </div>

      <div class="form-group">
           <label for="github">Address</label>
           <input name="address" type="text" value="{{$single_information->address}}" class="form-control" id="address" aria-describedby="emailHelp">

      </div>

  <button type="submit" class="btn btn-primary">Update</button>
  <a  href="{{ route('information_list') }}"><button type="button"class="btn btn-primary">Go back</button>
  </a>
</form>

@endsection
