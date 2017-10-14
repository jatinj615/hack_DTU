<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style type="text/css" media="screen">
		.list-group{
			overflow-y: scroll;
			height:200px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="color:black;">
		<div class="container-fluid">
			<div class="navbar-header">
					<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<div class="btn-group" >
				 <li><button class="btn "><a href="#">Find a ride </a></button></li>
				 <li><button class="btn " ><a href="#">Offer a ride</a></button></li>
			 </div>
			</ul>
		</div>
	</nav>
		<div class="row" id="app">
			<div class="col-6 mx-auto">
				<li class="list-group-item active">Chat</li>
				<div class="badge badge-pill badge-primary">@{{ typing }}</div>
				<ul class="list-group" v-chat-scroll>
				  <message
					v-for = "value,index in chat.message"
					:key = value.index
					:color = chat.color[index]
					:user = chat.user[index]
					:time = chat.time[index]
				  >
				  	@{{ value }}
				  </message>
				 </ul>
				 <input type="text" class="form-control" placeholder="Type your message here" v-model='message' @keyup.enter="send">
			</div>
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
