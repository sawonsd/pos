@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
 

		      <div class="modal-body">
		        <!-- Material input -->
			<form action="{{url('/customer')}}" method="post" enctype="multipart/form-data">
				@csrf
			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="accout-name">Customer Name</label>
					    @error('name')
						    <div class="alert-danger p-1">{{ $message }}</div>
						@enderror
					    <input type="text" class="form-control auto-save" id="customer-name" name="name"  placeholder="Customer Name">
					 </div>
			  	</div>

			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="phone">Phone</label>
					    @error('phone')
						    <div class="alert-danger p-1">{{ $message }}</div>
						@enderror
					    <input type="number" class="form-control auto-save" id="phone" name="phone"  placeholder="Enter Phone">
					 </div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="email">Email</label>
					    @error('email')
						    <div class="alert-danger p-1">{{ $message }}</div>
						@enderror
					    <input type="email" class="form-control auto-save" id="email" name="email"  placeholder="Email">
					 </div>
			  	</div>

			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="address">Address</label>
					    @error('address')
						    <div class="alert-danger p-1">{{ $message }}</div>
						@enderror
					    <input type="text" class="form-control auto-save" id="address" name="address"  placeholder="Village, Upzila, Zila.">
					 </div>
			  	</div>

			  </div>


			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="image">Image</label><br>
					    @error('image')
						    <div class="alert-danger p-1">{{ $message }}</div>
						@enderror
					    <input type="file" id="image" name="image">
					 </div>
			  	</div>

			  	<div class="col-md-6">
					<div class="form-group">
						@error('Current_Due')
						    <div class="alert-danger p-1">{{ $message }}</div>
						@enderror
					    <label for="Current_Due">Current Due</label><br>
					    <input class="form-control" value="0" type="text" id="Current_Due" name="Current_Due">
					 </div>
			  	</div>
			  </div>

			<div class="modal-footer">
		        
		        <button type="submit" name="submit"class="btn btn-outline-info">Sumbit</button>
		        <button type="button" class="btn btn-outline-danger" name="button" onclick="dstry()">Clear data</button>
		      </div>

			</form>
		      </div>
		      
		    </div>
		  </div>
		</div>
						


      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

 