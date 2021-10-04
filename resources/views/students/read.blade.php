@extends('main')
   
@section('content')
   
   <div class="container">
  
 <div class="panel panel-success">
      <div class="panel-heading">
      	<button class="btn btn-secondary">View Student Details</button>
      </div>
	  <form action="">
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
						 <div class="from-group mb-1 mt-1">
							  <img src="{{ asset($student->photo) }}" alt="" width="80">
						  </div>
			  	<div class="form-group">
				    <label for="photo">Photo</label>
				    <input type="file"  class="form-control" name="photo" id="photo">
				 </div>
			  	</div>
			  </div>
			  <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
   	  </div>
	  </form>
    </div>
</div>
    
@endsection