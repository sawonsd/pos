@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">Account Details</h3>
          <div class="row">

          	<div class="col-md-6">
          		<!-- Button trigger modal -->
		<a href="{{url('create.account')}}"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
		  Add Account
		</button></a>

          	</div>
          	<div class="col-md-6">
          		<!-- Search form -->
				<div class="md-form active-cyan active-cyan-2 mb-3">
				  <input class="form-control" type="text" placeholder="Search Account List" aria-label="Search">
				</div>
          	</div>
          </div>

		
		


		








          <div class="table-responsive mt-3">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">Account Name</th>
        <th scope="col">Balance</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($account as $row)
      <tr>
        <td scope="row">{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->balance}}</td>
        <td>{{$row->description}}</td>
        <td>
			<a href="" class="btn btn-outline-info">Edit</a>
			<a href="" class="btn btn-outline-danger">Delete</a>
        </td>

      </tr>
     @endforeach
    </tbody>
    <thead>
      <tr>
        <th scope="col-2" colspan="2">Total</th>
        <th scope="col"colspan="3">{{$accoun}}</th>

      </tr>
    </thead>

  </table>






        </div>

      

						


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

 