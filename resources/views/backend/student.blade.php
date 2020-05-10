@extends('backend.dashboard')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="container">
          <h3 class="mt-3">All Student List</h3>
          <div class="row">
            <div class="col-md-4">
               <a href="{{url('/student/create')}}" class="btn btn-outline-info mb-2">Add Student</a>
            </div>
            <div class="col-md-8">

                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Search">
                  </div>
                </div>
            </div>
          </div>
         
         

          <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col" class="text-center">Image</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($student as $row)
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->surname}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
      <td class="text-center"><a href="{{$row->image}}" target="_blank"><img src="{{$row->image}}" alt="pdf" style="width: 40px;"></a></td>

      <td class="text-center">
          <a class="btn btn-outline-danger" href="{{URL::to('/delete/'.$row->id)}}" id="delete"><i class="fas fa-trash-alt custom-icon"></i></a>
          <a class="btn btn-outline-info" href="{{URL::to('student/'.$row->id.'/edit')}}"><i class="ml-2 fas fa-edit custom-icon"></i></a>
          <a class="btn btn-outline-success" href="{{URL::to('/student/'.$row->id)}}"><i class="ml-2 fas fa-eye custom-icon"></i></a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
        </div>

      

<span>{{$student->links()}}</span>





      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

