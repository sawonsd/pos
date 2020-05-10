@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
 

		      <div class="modal-body">
		        <!-- Material input -->
			<form action="{{url('/create.store')}}" method="post">
				@csrf
			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="accout-name">Account Name</label>
					    @error('name')
				    <div class="alert-danger p-1">{{ $message }}</div>
				@enderror
					    <input type="text" class="form-control" id="accout-name" name="name" aria-describedby="emailHelp" placeholder="Account Name">
					 </div>
			  	</div>

			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="balance">Balance</label>
					    <input type="number" class="form-control" id="balance" name="balance" aria-describedby="emailHelp" placeholder="Enter Balance">
					 </div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="description">Description</label>
					    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Description">
					 </div>
			  	</div>

			  	<div class="col-md-6">

			  	</div>
			  </div>

			<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" name="submit"class="btn btn-primary">sumbit</button>
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

 