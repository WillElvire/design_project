<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	
	


@include('layout/script/head')

<title>@yield('title')</title>


<body>


    
   

    @yield('container')

   
    

<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')

@include('layout/script/script')


   
</body>

</html>