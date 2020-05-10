<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h2 style="text-align: center;">Student Details</h2>
          	 <p style="text-align: center;">Student Copy</p>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="image">
					<a  href="{{asset($student->image)}}" target="_blank"><img src="{{asset($student->image)}}" style="width: 120px; border:1px solid #ddd;" alt=""></a>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tbody>
							<tr>
								<th style="text-align: right;">First Name</th>
								<td>{{$student->name}}</td>
								<th style="text-align: right;">Last Name</th>
								<td>{{$student->surname}}</td>
							</tr>
							<tr>
								<th style="text-align: right;">Email</th>
								<td>{{$student->email}}</td>
								<th style="text-align: right;">Phone</th>
								<td>{{$student->phone}}</td>
							</tr>
							<tr>
								<th style="text-align: right;">Address</th>
								<td>{{$student->address}}</td>
								<th style="text-align: right;">Registion date</th>
								<td>{{$student->created_at}}</td>
							</tr>
							<tr>
								<th style="text-align: right;">Class</th>
								<td>{{$student->class}}</td>
								<th style="text-align: right;">Roll</th>
								<td>{{$student->roll}}</td>
							</tr>
							<tr>
								
							</tr>
						</tbody>
					</table>
				</div>

				<p class="text-right mt-5" style="margin-top:70px; margin-right: 20px">Signature</p>
				</div>
				<div class="col-md-2"></div>
			</div>

			<hr>

			<h2 style="text-align: center;">Student Details</h2>
          	 <p style="text-align: center;">College Copy</p>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="image">
					<a  href="{{asset($student->image)}}" target="_blank"><img src="{{asset($student->image)}}" style="width: 120px; border:1px solid #ddd;" alt=""></a>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tbody>
							<tr>
								<th style="text-align: right;">First Name</th>
								<td>{{$student->name}}</td>
								<th style="text-align: right;">Last Name</th>
								<td>{{$student->surname}}</td>
							</tr>
							<tr>
								<th style="text-align: right;">Email</th>
								<td>{{$student->email}}</td>
								<th style="text-align: right;">Phone</th>
								<td>{{$student->phone}}</td>
							</tr>
							<tr>
								<th style="text-align: right;">Address</th>
								<td>{{$student->address}}</td>
								<th style="text-align: right;">Registion date</th>
								<td>{{$student->created_at}}</td>
							</tr>
							<tr>
								<th style="text-align: right;">Class</th>
								<td>{{$student->class}}</td>
								<th style="text-align: right;">Roll</th>
								<td>{{$student->roll}}</td>
							</tr>
							<tr>
								
							</tr>
						</tbody>
					</table>
				</div>

				<p class="text-right mt-5" style="margin-top:70px; margin-right: 20px">Signature</p>
				</div>
				<div class="col-md-2"></div>
			</div>
        </div>

      

						
		

      </div><!-- /.container-fluid -->
    </section>

</body>
</html>