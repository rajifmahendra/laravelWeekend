<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

   <div class="container text-center mt-3 p-4 bg-white">
       <h1>Halaman Admin</h1>
       <div class="row">
           <div class="col-md-12">
               @component('layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    100 Data karyawan perlu di perbaiki
               @endcomponent
               @component('layout.alert')
                    @slot('class')
                        danger
                    @endslot
                    Hari ini deadline laporan perjalanan dinas!
               @endcomponent
               @component('layout.alert')
                    @slot('class')
                        success
                    @endslot
                    Hari ini libur
               @endcomponent
              
           </div>
       </div>
   </div>

<script src="/js/jquery-3.5.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>