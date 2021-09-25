 @extends('main')
 
 
 @section('content')
	 

 
 <div class="container">
  
     @if(Session::has('message'))
     <p class="alert alert-success">{{ Session::get('message') }}</p>
     @endif
 <div class="panel panel-primary">
      <div class="panel-heading">
	 <a href="{{ route('students.create') }}" > Add New</a> 
      </div>
      <div class="panel-body">
	 	<table class="table table-hover table-bordered table-stripped">
	 		<thead>
	 			<tr>
	 			<th>S.N</th>
	 			<th>Name</th>
	 			<th>Batch</th>
	 			<th>Round</th>
	 			<th>TSP</th>
	 			<th>Photo</th>
	 			<th style="width:200px;">Action</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 		    @foreach ($students as $student)
	 			<tr>
	 			<td>{{ $loop->index+1 }}</td>
	 			<td>{{ $student->name }}</td>
	 			<td>{{ $student->batch }}</td>
	 			<td>{{ $student->round }}</td>
	 			<td>{{ $student->tsp }}</td>
	 			<td>{{ $student->photo }}</td>
	 			<td>
	 		<form  method="post" action="{{ route('students.destroy',$student->id) }}" class="delete_form">
                	        {{ csrf_field() }}
                		{{ method_field('DELETE') }}
                		<a href="{{ route('students.edit',$student->id) }}" class="btn btn-xs btn-primary">Edit</a>
                		
	 			<a href="{{ route('students.show',$student->id) }}" class="btn btn-xs btn-success">View</a>

                        <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</button>
                	</form>
	 		</td>
	 		</tr>
	 		@endforeach
	 		</tbody>
	 	</table>
	 	
   	  </div>
    </div>
</div>
 @endsection