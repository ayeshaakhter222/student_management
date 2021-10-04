 
 
 @extends('main')
 
 @section('content')
	 
 
 <div class="container">
  
 
    <div class="panel panel-success">
      <div class="panel-heading">
      	<button class="btn btn-secondary"> Create New Student</button>
      </div>
      <div class="panel-body">
      	@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
	 	 <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
	 	 	{{ csrf_field() }}
			  <div class="row">
			  
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="name"> Name <span class="required">*</span></label>
				    <input type="text" class="form-control"  name="name" id="name">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="batch">Batch</label>
				    <input type="text" class="form-control"  name="batch" id="batch">
				 </div>
			  	</div>
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="round">Round</label>
				    <input type="text" class="form-control"  name="round" id="round">
				 </div>
			  	</div>
			        <div class="col-md-6">
			  	<div class="form-group">
				    <label for="tsp">TSP</label>
				    <input type="text" class="form-control" name="tsp" id="tsp">
				 </div>
			  	</div>
				     <div class="col-md-6">
			  	<div class="form-group">
				    <label for="photo">Photo</label>
				    <input type="file" class="form-control"  name="photo" id="photo">
				 </div>
			  	</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Add</button>
			  <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
			</form> 
   	  </div>
    
</div>
 </div>
 @endsection
    