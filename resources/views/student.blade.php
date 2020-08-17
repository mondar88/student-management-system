<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>School Management System</title>
  </head>
  <body>

    @include("navbar")
    @if($layout=='index')
      <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
          <div class="row justify-content-center align-items-center">
            <section class="col md-7">
                @include("studentList")
            </section>
            </div>
          </div>
      </div>
    @elseif($layout=='create')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col md-7">
            @include("studentList")
        </section>
        <section class="col md-5">
                        <div class="card mb-3">
                          <img src="https://cdn.pixabay.com/photo/2016/07/26/19/05/pokemon-1543556_1280.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Enter the information of new student</h5>
                            <form action="{{url('/store')}}" method="get">
                              @csrf
                                  <div class="form-group">
                                      <label>CNE</label>
                                      <input type="text" class="form-control" name="cne" placeholder="Enter CNE">
                                  </div>
                                  <div class="form-group">
                                      <label>FirstName</label>
                                      <input type="text" class="form-control" name="firstName" placeholder="Enter the first Name">
                                  </div>
                                  <div class="form-group">
                                      <label>Last Name</label>
                                      <input type="text" class="form-control" name="LastName" placeholder="Enter the Last Name">
                                  </div>
                                  <div class="form-group">
                                      <label>Age</label>
                                      <input type="text" class="form-control" name="age" placeholder="Enter Age">
                                  </div>
                                  <div class="form-group">
                                      <label>Speciality</label>
                                      <input type="text" class="form-control" name="Speciality" placeholder="Enter the speciality">
                                  </div>
                                  <input type="submit" class="btn btn-info" value="save">
                                  <input type="reset" class="btn btn-warning" value="reset">
                            </form>
                          </div>
                        </div>
        </section>
      </div>
    </div>
    @elseif($layout=='edit')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col md-7">
            @include("studentList")
          </section>
          <section class="col md-5">
            <div class="card mb-3">
              <img src="https://cdn.pixabay.com/photo/2014/05/05/19/53/keyboard-338502_1280.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Enter the corrected information</h5>
                  <form action="{{url('/update/'.$student->id)}}" method="get">
                        @csrf
                        <div class="form-group">
                        <label>CNE</label>
                        <input  value="{{ $student->cne }}" type="text" class="form-control" name="cne" readonly>
                        </div>
                        <div class="form-group">
                        <label>FirstName</label>
                        <input value="{{ $student->firstName }}" type="text" class="form-control" name="firstName"  readonly>
                        </div>
                        <div class="form-group">
                        <label>Last Name</label>
                        <input value="{{ $student->LastName }}" type="text" class="form-control" name="LastName" placeholder="Enter the Last Name">
                        </div>
                        <div class="form-group">
                        <label>Age</label>
                        <input value="{{ $student->age }}" type="text" class="form-control" name="age" >
                        </div>
                        <div class="form-group">
                        <label>Speciality</label>
                        <input value="{{ $student->Speciality }}" type="text" class="form-control" name="Speciality" placeholder="Enter the speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="update">
                        <input type="reset" class="btn btn-warning" value="reset">
                      </form>
                  </div>
              </div>
          </section>
      </div>
    </div>
    @elseif($layout=='delete')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col md-7">
          <div class="card mb-3">
            <img src="https://cdn.pixabay.com/photo/2013/03/29/13/38/trash-97586_960_720.png" class="card-img-top" style="width:100%; height: 18vw; object-fit:cover;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Are you sure you want to delete</h5>
                <form action="{{url('/destroy/'.$student->id)}}" method="get">
                      @csrf
                      <div class="form-group">
                      <label>CNE</label>
                      <input  value="{{ $student->cne }}" type="text" class="form-control" name="cne"  readonly>
                      </div>
                      <div class="form-group">
                      <label>FirstName</label>
                      <input value="{{ $student->firstName }}" type="text" class="form-control" name="firstName"  readonly>
                      </div>
                      <div class="form-group">
                      <label>Last Name</label>
                      <input value="{{ $student->LastName }}" type="text" class="form-control" name="LastName"  readonly>
                      </div>
                      <div class="form-group">
                      <label>Age</label>
                      <input value="{{ $student->age }}" type="text" class="form-control" name="age"  readonly>
                      </div>
                      <div class="form-group">
                      <label>Speciality</label>
                      <input value="{{ $student->Speciality }}" type="text" class="form-control" name="Speciality" placeholder="Enter the speciality"  readonly>
                      </div>
                      <input type="submit" class="btn btn-info" value="yes">
                      <a href="{{url('/')}}" class="btn btn-warning">Cancel</a>
                      <!--<input type="reset" class="btn btn-warning" value="no">-->
                    </form>
                </div>
            </div>
        </section>

      </div>
    </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
