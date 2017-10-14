<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <title>hackDtu</title>
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
      <nav class="navbar navbar-inverse">
      <div class="container-fluid">

            @if (Route::has('login'))
                    @auth
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/home') }}">WebSiteName</a>
                            <ul class="nav navbar-nav">
                               <li><a href="#">Find a ride </a></li>
                               <li><a href="#">Offer a ride</a></li>
                            </ul>
                            
                        </div>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                         </ul>
                    @endauth
                </div>
            @endif
          </nav>
    </body>
</html>
