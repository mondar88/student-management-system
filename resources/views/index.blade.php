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
    @if($layout=='master')
      <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
          <div class="row justify-content-center align-items-center">
            <section class="col md-7">

                @include("welcome")

            </section>
            </div>
          </div>
      </div>
      @elseif($layout=='register')
           @include("registration")

      @elseif($layout=='login')
      <div class="container mt-3">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
        <form method="post" action="{{ url('authenticate') }}">
                <div class="card shadow">
                    <div class="car-header bg-success pt-2">
                        <div class="card-title font-weight-bold text-white text-center"> User Login </div>
                    </div>

                    <div class="card-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp

                                </div>
                            @endif


                        <div class="form-group">
                            <label for="email"> Employee ID </label>
                            <input type="text" class="form-control form-control-sm" name="EmployeeID">
                        </div>

                        <div class="form-group">
                            <label for="password"> Password </label>
                            <input type="password" class="form-control form-control-sm" name="Password">
                        </div>
                    </div>

                    <div class="card-footer d-inline-block">
                        <button type="submit" class="btn btn-success"> Login </button>
                        <p class="float-right mt-2"> Don't have an account?  <a href="{{ url('user-registration')}}" class="text-success"> Register </a> </p>
                    </div>
                    @csrf
                </div>
            </form>
        </div>
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
