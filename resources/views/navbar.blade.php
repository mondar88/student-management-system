<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">Students Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="{{url('/create')}}">Create</a>
    </div>
    <div class="navbar-nav ml-auto">
      @if(Auth::guard('web')->check())
          @if(Auth::guard('web')->user()->Designation == 'admin')
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Welcome  {{ Auth::guard('web')->user()->firstName }} , <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="nav-item nav-link btn btn-sm btn-secondary" href="{{url('/register')}}">Register</a>
                  <a class="dropdown-item" href="{{url('/logout')}}">
                      Logout
                  </a>
              </div>
          </li>
          @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Welcome  {{ Auth::guard('web')->user()->firstName }} , <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="#" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="{{url('/logout')}}">
                                Logout
                            </a>
                        </div>
                    </li>
          @endif
      @else

        <a class="nav-item nav-link btn btn-sm btn-primary" href="{{url('/login')}}">Login</a>&nbsp;
        @if(count($teachers)<1)
        <a class="nav-item nav-link btn btn-sm btn-secondary" href="{{url('/register')}}">Register</a>
        @endif


      @endif
    </div>
  </div>

</nav>
