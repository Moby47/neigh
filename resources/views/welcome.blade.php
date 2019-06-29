<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Web Application Manifest -->
<link rel="manifest" href="/manifest.json">

        <title>NEIGH ENERGY LTD</title>

    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">   

<!--vuetify material icons-->
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">

<!--nprogress-css-->
<link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />

	<!-- css files -->
	<link rel="stylesheet" href="/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<!-- //css files -->
    
    <!-- Fix - for safari / ios -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="DStreet">

  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#3f51b5">

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--//web font-->
    
<link href="/css/custom.css" rel="stylesheet" />
<link href="/css/wicked.min.css" rel="stylesheet" />

 <!--fav icon -->
 <link rel="icon" href="{{ asset('images/neigh-logo.jpeg') }}">
        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body>
        <div id='app' v-cloak>

     <transition name='anime' enter-active-class='animated fadeIn' :duration='200' leave-active-class='animated fadeOut'>
                     <router-view></router-view>	
      </transition>
              
              
                    </div>
                    <noscript><h5 class='text-center text-danger'>JavaScript is required.</h5></noscript>

                   
         <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
        <script src="{{asset('/js/app.js')}}"></script>

        <script src="{{asset('/js/wow.min.js')}}"></script>
        <script>
            //wow
            new WOW().init();
                </script>

        <script src="{{asset('/js/promise.min.js')}}"></script>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

 <!-- register service worker -->
 <script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.' 
        }).then(function (registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>
 <!-- register service worker-->
    </body>
</html>
