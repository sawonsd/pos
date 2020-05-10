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
        <strong>Add New Student</strong><br>
    </h5>
    <p style="color:red; text-align: center;">Requred * </p>
<br>
<!--Card content-->
<div class="card-body px-lg-5 pt-0">
	<!-- Form -->
	<form action="{{url('student')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="name">Fast Name <span style="color:red">*</span></label>
				
				<input type="text" class="form-control auto-save capitalize" name="name" id="name" placeholder="Fast Name">
				@error('name')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="surname">Last Name <span style="color:red">*</span></label>
				<input type="text" class="form-control auto-save capitalize" name="surname" id="surname" placeholder="Last Name">
				@error('surname')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">Email <span style="color:red">*</span></label>
				<input type="text" class="form-control auto-save" name="email" id="email" placeholder="Email">
				@error('email')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="phone">Phone <span style="color:red">*</span></label>
				<input type="number" class="form-control auto-save" name="phone" id="phone" placeholder="01700000000">
				@error('phone')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>
		</div>
		<div class="form-group">
			<label for="address">Address <span style="color:red">*</span></label>
			<input type="text" class="form-control auto-save capitalize" name="address" id="address" placeholder="Village, Post office, Upzila, Zila">
			@error('address')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="image">Image <span style="color:red">*</span></label><br>
				<input type="file" name="image" id="image"> <br>
				<span style="color:red">image size: mix 1024kb 1500px by 1500px</span>
				@error('image')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="class">Class <span style="color:red">*</span></label>
				<select name="class" id="class" class="form-control auto-save">
					<option value="" selected>Choose...</option>
					<option value="Six">Six</option>
					<option value="Seven">Seven</option>
					<option value="Eight">Eight</option>
					<option value="Nine">Nine</option>
					<option value="Ten">Ten</option>
				</select>
				@error('class')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="roll">Roll <span style="color:red">*</span></label>
				<input type="number" class="form-control auto-save" name="roll" id="roll">
				@error('roll')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
			</div>
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