
<section class="col md-7">
  <div class="card mb-3 bg-secondary text-white">
    <div class="card-body">
      <form action="{{url('/signup')}}" method="get">
        @csrf
        <div class="form-group">
          <label>First Name</label>
          <input type="text" class="form-control form-control-sm" name="firstName">
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control form-control-sm" name="LastName">
        </div>
        <div class="form-group">
          <label>Employee ID</label>
          <input type="text" class="form-control form-control-sm" name="EmployeeID">
          <small id="employeeID" class="form-text text-white">This is important</small>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control form-control-sm" name="Password">
        </div>
        <div class="form-group">
          <label>Re-type Password</label>
          <input type="password" class="form-control form-control-sm">
        </div>
        <div class="form-group">
          <label>Designation</label>
          <input type="text" class="form-control form-control-sm" name="Designation">
        </div>
        <input type="submit" class="btn btn-primary" value="save">
        <input type="reset" class="btn btn-warning" value="reset">
      </form>
    </div>
  </div>

</section>
