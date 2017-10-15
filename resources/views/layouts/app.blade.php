<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>Distance fetching</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

.mt-100 {
margin-top: 100px;
}
.mb-100 {
margin-bottom: 100px;
}

.icon {
width: 32px;
height: 32px;
text-align: center;
padding: 7px 8px;
border: 2px solid;
border-radius: 50%;
}

.header {
padding-top: 50px;
background-color: #eee;
overflow: hidden;
}
.footer {
color: #887;
background-color: #eee;
padding-top: 30px;
padding-bottom: 30px;
}

.content {
position: relative;
display: table;
width: 100%;
min-height: 100vh;
}
.pull-middle {
display: table-cell;
vertical-align: middle;
}

.btn {
padding-left: 25px;
padding-right: 25px;
}
.btn-circle {
border-radius: 20px;
}

.input-group input {
border: 0;
box-shadow: none;
padding-right: 30px;
}
.input-group input:focus,
.input-group input:active {
outline: 0;
box-shadow: none;
}
.input-group-btn:last-child>.btn {
z-index: 2;
margin-left: -18px;
border-radius: 20px;
}

.phone {
position: relative;
max-width: 263px;
margin: 0 auto;
padding: 65px 15px 55px;
border: 2px solid #ddd;
border-radius: 20px;
background-color: #222;
box-shadow: 20px 20px 40px #887;
}

</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            </div>

                        @guest
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                          </ul>
                        @else

                              <ul class="nav navbar-nav">
                                 <li><a href="{{ route('find_ride') }}">Find a ride </a></li>
                                 <li><a href="{{ route('offer_ride') }}">Offer a ride</a></li>
                              </ul>

                              <ul class="nav navbar-nav navbar-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                              </ul>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPaUzlKRaHBadwTNX5q2qsKwGs3lEMnDI&callback=initAutocomplete&libraries=places">
    </script>
</body>
</html>
