@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">All Item List</h3>
          <div class="row">

          	<div class="col-md-4">
          		<!-- Button trigger modal -->
		<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
		  Add New Item
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
		        <h5 class="modal-title" id="exampleModalLabel">Add Item Details</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <!-- Material input -->
			<form>


      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Item Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Item Name">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Sale Price *</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Sale Price">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Purchase Price</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Purchase Price">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Whole Sale Price</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Whole Sale Price">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Opening Stock</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Opening Stock">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Category</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Category">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Code</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Code">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Supplier</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Supplier">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Purchase Unit</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Purchase Unit">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Sale Unit</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Sale Unit">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Conversion Rate</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Conversion Rate">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Brand</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Brand">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Usual Sale Qty/Amt</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Usual Sale Qty/Amt">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Low Qty/Amt</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword" placeholder="Low Qty/Amt">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Image</label>
        <div class="col-sm-8">
          <input type="file"  id="inputPassword" placeholder="Low Qty/Amt">
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
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Purchase Price</th>
        <th scope="col">Sale Price</th>
        <th scope="col">Added By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">1</td>
        <td>059</td>
        <td>mobile</td>
        <td>Glass paper</td>
        <td>14000.00</td>
        <td>15000.00</td>
        <td>Admin</td>
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

 