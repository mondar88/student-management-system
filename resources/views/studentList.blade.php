<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2016/02/03/18/49/students-1177702_1280.jpg" class="card-img-top" style="width:100%;height: 30vw; object-fit:cover; " alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">This is a comprehensive panel for student management. Click buttons to make changes.</p>


    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">CNE</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <td>{{ $student->cne }}</td>
          <td>{{ $student->firstName }}</td>
          <td>{{ $student->LastName }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->Speciality }}</td>
          <td>
            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>&nbsp;
            <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>&nbsp;
            <!--<span><a href="#" class="btn btn-sm btn-warning">Delete</a></span>&nbsp;  {{url('/update/'.$student->id)}}-->
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
