 @extends('main')
 
 @section('content')
     
 
 <div class="container">
  
 <div class="panel panel-success">
      <div class="panel-heading">
      	<button class="btn btn-secondary">Edit Student</button>
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
	 	 <form action="{{ route('students.update',$student->id) }}" method="post" enctype="multipart/form-data">
	 	 	{{ csrf_field() }}
	 	 	{{ method_field('PATCH') }}
			  <div class="row">
			  
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="name"> Name</label>
				    <input type="text" value="{{ $student->name }}" class="form-control"  name="name" id="name">
				 </div>
			  	</div>
			  
			  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="batch">Batch</label>
				    <input type="text" value="{{ $student->batch }}" class="form-control"  name="batch" id="batch">
				 </div>
			  	</div>
                  	<div class="col-md-6">
			  	<div class="form-group">
				    <label for="round">Round</label>
				    <input type="round" value="{{ $student->round }}" class="form-control"  name="round" id="round">
				 </div>
			  	</div>
			        <div class="col-md-6">
			  	<div class="form-group">
				    <label for="tsp">TSP</label>
				    <input type="text" value="{{ $student->tsp }}" class="form-control"  name="tsp" id="tsp">
				 </div>
			  	</div>
                  	<div class="col-md-6">
						  <div class="from-group mb-1 mt-1">
							  <img src="{{ asset($student->photo) }}" alt="" width="80">
						  </div>
			  	<div class="form-group">
				    <label for="photo">Photo</label>
				    <input type="file" class="form-control"  name="photo" id="photo">
				 </div>
			  	</div>
			  </div>
			  <button type="submit" class="btn btn-success">Update</button>
			  <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
			</form> 
   	  </div>
    </div>
</div>
@endsection