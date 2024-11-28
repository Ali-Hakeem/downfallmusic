<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/x-icon" href="{{url('/')}}/assets/icons/logo.ico">

        <title>@yield('page_title', 'Downfall Music')</title>

        <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
        <script src="https://use.fontawesome.com/a03fb08303.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    </head>
    <body style="background-color: #000;">
        @include('layouts.navbar')
        <div>
            <div class="row">

                @yield('content')
                
                @include('layouts.widget')

            </div>
        </div>

        <!-- Footer-->
        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                @auth
                <form action="/logout" method="POST">
                 @csrf
                 <button type="submit" class="btn rounded-0 text-white fw-bold" style="background-color:#483d8b">Logout</button>
                </form>
                   @else
                   Made with 💗 by Downfall Music</p>
                @endauth
            </div>
            <!-- Copyright -->
          </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <link rel="stylesheet" href="{{url('/')}}/assets/js/scripts.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });

            var quote = $('<blockquote class="quote">hello<footer>world</footer></blockquote>')[0];
$('.editor').summernote('insertNode', quote);
          </script>
    </body>
</html>
