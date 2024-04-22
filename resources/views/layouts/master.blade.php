<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portofolio Wenceslaus Antieka D</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  />
</head>
<body>
    <nav class="bg-purple py-2 mb-2">
        <h5 class="text-center text-white">Website Portofolio Wenceslaus Antieka D</h5>
    </nav>
    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif
    </div>
    @yield('content')
    
    <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('bootstrap/jquery.slim.min.js')}}"></script>
</body>
</html>