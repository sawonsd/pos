@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">All Category List</h3>
          <div class="row">

          	<div class="col-md-6">
          		<!-- Button trigger modal -->
		<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
		  Add New Category
		</button>
          	</div>
          	<div class="col-md-6">
          		<!-- Search form -->
				<div class="md-form active-cyan active-cyan-2 mb-3">
				  <input class="form-control" type="text" placeholder="Search Category List" aria-label="Search">
				</div>
          	</div>
          </div>

		
		


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Account Details</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <!-- Material input -->
			<form>
			  <div class="row">
			  	<div class="col-md-12">
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Account Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
					 </div>
			  	</div>


			  </div>


			<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>

			</form>
		      </div>
		      
		    </div>
		  </div>
		</div>








 <div class="table-responsive mt-3">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>
        <td>Tangail Brach</td>
        <td>
			<a href="" class="btn btn-outline-info">Edit</a>
			<a href="" class="btn btn-outline-danger">Delete</a>
        </td>

      </tr>
     
    </tbody>
  </table>
</div>




        </div>

      

						


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

 