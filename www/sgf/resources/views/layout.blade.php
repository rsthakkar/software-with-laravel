<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		li a{
			color: white;
		}
	</style>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fa.css')}}" rel="stylesheet">
      
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color: #e57917;border-radius: 0">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:white" class="navbar-brand" href="/">GopaljiFarm</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="color:white" href="{{ route('create') }}">Add customer</a></li>
      <li><a style="color:white" href="add_data">Add data</a></li> 
      <li><a style="color:white" href="/">View current customer</a></li>
      <li><a style="color:white" href="disabled_C">View Disabled customer</a></li>
    </ul>
    
  </div>
</nav>

<div class="fluid-container">
    @yield('content')
</div>
</body>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my.js')}}"></script>
</html>