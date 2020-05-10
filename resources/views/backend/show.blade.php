@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">Student Details</h3>
          <a href="{{url('/student')}}" class="btn btn-outline-info">All Student</a>
          <a href="{{url('genaratepdf',$student->id)}}" target="blank" class="btn btn-outline-primary">Genarate PDF</a>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
								<table class="table table-bordered">
				<div class="pb-2 float-right">
					<a  href="{{asset($student->image)}}" target="_blank"><img src="{{asset($student->image)}}" style="width: 150px; border:1px solid #ddd;" alt=""></a>
				</div>
			
				<tbody>

					<tr>
						<th scope="col">First Name</th>
						<td>{{$student->name}}</td>
						<th scope="col">Last Name</th>
						<td>{{$student->surname}}</td>
					</tr>
					<tr>
						<th scope="col">Email</th>
						<td>{{$student->email}}</td>
						<th scope="col">Phone</th>
						<td>{{$student->phone}}</td>
					</tr>

					<tr>
						<th scope="col">Address</th>
						<td>{{$student->address}}</td>
						<th scope="col">created_at</th>
						<td>{{$student->created_at}}</td>

					</tr>

					<tr>
						<th scope="col">Class</th>
						<td>{{$student->class}}</td>
						<th scope="col">Roll</th>
						<td>{{$student->roll}}</td>
					</tr>

					<tr>
						
					</tr>
				</tbody>
			</table>
				</div>
				<div class="col-md-2"></div>
			</div>
        </div>

      

						


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

 