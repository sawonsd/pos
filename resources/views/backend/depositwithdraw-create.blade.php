@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
 

		      <div class="modal-body">
		        <!-- Material input -->
			<form action="{{url('deposit-or-withdraw')}}" method="post">
				@csrf
			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
			  		<label for="description">Account</label>
			  		

					<select class="custom-select" name="account">
						  @foreach($account as $row)
						  <option value="{{$row->id}}">{{$row->name}}</option>
						  @endforeach
					</select>

					 
					</div>
			  	</div>

			  	<div class="col-md-6">
			  		<div class="form-group">
			  		<label for="description">Deposit Or Withdraw</label>
			  		<select class="custom-select" name="deposit_withdraw">
						  <option selected disabled>Select</option>
						  <option value="Deposit">Deposit</option>
						  <option value="Withdraw">Withdraw</option>
					</select>
					</div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="col-md-6">
			  		<div class="form-group">
					    <label for="balance">Balance</label>
					    <input type="text" class="form-control" id="balance" name="balance" aria-describedby="emailHelp" placeholder="Balance">
					 </div>
			  	</div>

			  	<div class="col-md-6">

			  	</div>
			  </div>

			<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" name="submit"class="btn btn-primary">Sumbit</button>
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

 