@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">Customer Deu List</h3>
          <div class="row">

          	<div class="col-md-4">
          		<!-- Button trigger modal -->
		<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
		  Add Customer Deu Receives
		</button>
          	</div>
          	<div class="col-md-4">
          		<!-- Search form -->
				<div class="md-form active-cyan active-cyan-2 mb-3">
				  <input class="form-control" type="text" placeholder="Search Item List" aria-label="Search">
				</div>
          	</div>
          	<div class="col-md-4">
          		<!-- Search form -->
				<div class="md-form active-cyan active-cyan-2 mb-3">
				  <input class="form-control" type="text" placeholder="Search Item List" aria-label="Search">
				</div>
          	</div>
          </div>

		
		


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel"> Add Customer Deu Receives</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <!-- Material input -->
			<form>


      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Reference No</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" disabled="" id="inputPassword" placeholder="005">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Date</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" id="inputPassword" placeholder="Sale Price">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Customer</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Purchase Price">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Amount</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Whole Sale Price">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Account</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Opening Stock">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Note</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Category">
        </div>
      </div>




			<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-info">Submit</button>
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
        <th scope="col">Reference No</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Amount Price</th>
        <th scope="col">Account</th>
        <th scope="col">Note</th>
        <th scope="col">Added By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>
        <td>059</td>
        <td>mobile</td>
        <td>1000</td>
        <td>Bkash</td>
        <td>Glass paper</td>
        <td>Admin</td>
        <td>
			<a href="" class="btn btn-outline-info">Edit</a>
			<a href="" class="btn btn-outline-danger">Delete</a>
			<a href="" class="btn btn-outline-success">Receipt</a>
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

 