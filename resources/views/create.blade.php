
@extends('layouts.app')

@section('content')
<form method="POST" action="/create">
    @csrf
   
    
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" >
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname" >
        </div>
        
        <div class="form-group">
            <label for="hone_number">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" id="hone_number" >
        </div>
        
        <div class="form-group">
            <label for="gmail">Gmail</label>
            <input type="text" name="gmail" class="form-control" id="gmail" >
        </div>
        
        
        
        
        
        <button class="btn btn-success">Create</button>
  
</form>
@endsection