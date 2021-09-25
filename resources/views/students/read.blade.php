@extends('main')
   
@section('content')
   
   <div class="container">
  
 <div class="panel panel-success">
      <div class="panel-heading">
      	View Student Details
      </div>
      <div class="panel-body">
			  <div class="row">
			  
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="roll">Student Name</label>
				    <input type="text" disabled value="{{ $student->name }}" class="form-control"  name="name" id="name">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="batch">Batch</label>
				    <input type="batch" disabled value="{{ $student->batch}}" class="form-control"  name="batch" id="batch">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="round">Round</label>
				    <input type="text" disabled value="{{ $student->round}}" class="form-control"  name="round" id="round">
				 </div>
			  	</div>
			        <div class="col-md-6">
			  	<div class="form-group">
				    <label for="tsp">TSP</label>
				    <input type="text" disabled value="{{ $student->tsp }}" class="form-control"  name="tsp" id="tsp">
				 </div>
			  	</div>
                     <div class="col-md-6">
			  	<div class="form-group">
				    <label for="photo">Photo</label>
				    <input type="text" disabled value="{{ $student->photo}}" class="form-control" name="photo" id="photo">
				 </div>
			  	</div>
			  </div>
			  <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
   	  </div>
    </div>
</div>
    
@endsection