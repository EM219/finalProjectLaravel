<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <title>InstaGram</title>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f5f5dc;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
           
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
           
            .m-b-md {
                margin-bottom: 30px;
            }
            .link{
              
              border: 0 solid #E5E7EB;
              box-sizing: border-box;
              color: #636b6f;
              display: flex;
              font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
              font-size: 30px;
              font-weight: 700;
              justify-content: center;
              line-height: 1.75rem;
              padding: .75rem 1.65rem;
              position: relative;
              text-align: center;
              text-decoration: none #000000 solid;
              text-decoration-thickness: auto;
              width: 20%;

              max-width: 460px;
              position: relative;
              cursor: pointer;
              transform: rotate(-2deg);
              user-select: none;
              -webkit-user-select: none;
              touch-action: manipulation;
             

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="link" href="{{ ('/home') }}">Home</a>

                    @else
                        <a class="link" href="{{ route('login') }}">Login</a>
                        <br>

                        @if (Route::has('register'))
                            <a class="link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome!
                </div>

                <div class="links">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/1-instagram.gif" alt="instagram pic">
                </div>
            </div>
        </div>


        <div id="app">
        </div>
         <script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
          </script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
  
</html>