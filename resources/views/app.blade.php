<!DOCTYPE html>
<html lang="en">
<head>

      <!--Import Google Icon Font-->
      <link href="{{ url('http://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }}"  media="screen,projection"/>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
<body>

	  @include('menu')
        <div class="page-content">
        <div class="container">
    	<div class="no-overflow" style="padding-top: 40px">
    	@yield('content')
    	</div>
    	</div>
    	</div>
        @yield('footer')

	<!-- Scripts
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
      <script type="text/javascript" src="{{ url('ckeditor/ckeditor.js') }}"></script>
      <script type="text/javascript" src="{{ url('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>


</body>
</html>
