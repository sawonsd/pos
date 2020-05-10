@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">Shop Setting</h3>

          <!-- Material input -->
			<form>
			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Shop Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Shop Name">
					 </div>
			  	</div>

			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
					 </div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Phone</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone">
					 </div>
			  	</div>

			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Invoice Massage</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Show Invoice Massage">
					 </div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Invoice Logo</label><br>
					    <input type="file" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					 </div>
			  	</div>


			  </div>


			  <button type="submit" class="btn btn-outline-info">Submit</button>
			</form>

        </div>

      






      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

