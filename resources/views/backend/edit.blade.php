@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

		
<div class="row">
	<div class="col-md-12 mt-3">
<!-- Material form contact -->
		<a href="{{url('student')}}" class="btn btn-success">All Student</a>
<br>
<br>
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Update Student</strong>
    </h5>
<br>
<!--Card content-->
<div class="card-body px-lg-5 pt-0">
	<!-- Form -->
	<form action="{{url('student/'.$student->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="name">Fast Name</label>
				
				<input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
				@error('name')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="surname">Last Name</label>
				<input type="text" class="form-control" name="surname" id="surname" value="{{$student->surname}}">
				@error('surname')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email" value="{{$student->email}}">
				@error('email')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="phone">Phone</label>
				<input type="number" class="form-control" name="phone" id="phone" value="{{$student->phone}}">
				@error('phone')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" id="address" value="{{$student->address}}">
			@error('address')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="image">Image</label><br>
				<input type="file" name="image" id="image"><br>
				<span style="color:red">image size: mix 1024kb 600px by 600px</span>
				<input type="hidden" name="old_photo" id="image" value="{{$student->image}}"> <br>
				@error('image')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="class">Class</label>
				<select name="class" id="class"  selected class="form-control">

					<option value="{{$student->class}}" selected>{{$student->class}}</option>
					<option value="Six">Six</option>
					<option value="Seven">Seven</option>
					<option value="Eight">Eight</option>
					<option value="Nine">Nine</option>
					<option value="Ten">Ten</option>

				</select>
				@error('class')
				    <span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="roll">Roll</label>
				<input type="number" class="form-control" value="{{$student->roll}}" name="roll" id="roll">

				@error('roll')
				    <span class="text-danger">{{ $message }}</span>
				@enderror

			</div>
				
		</div>
		<div class="form-group col-md-4">
			<label for="roll">Old Photo</label><br>
			<img class="mb-3" src="{{asset($student->image)}}" style="width: 80px;" alt="">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="button" class="btn btn-danger" name="button" onclick="dstry()">Clear data</button>
	</form>
</div>

</div>
<!-- Material form contact -->
	</div>
</div>






    







      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection