<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Bank</title>

    {{-- fonts google  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    {{-- styling --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>
<body>

    {{-- javascript file --}}
    <script src="{{ asset('js/script.js') }}"></script>


    <div class="container">

        {{-- Navbar sidebar  --}}

        <div class="sidebar">

            <div class="header">
                <div class="list-item">
                    <img src="{{ URL('images/logo.png') }}" alt="" style="max-width: 20.8vw">
                        <span class="description-header"></span>
                </div>

                <div class="main" >
                    <div class="list-item">
                         <a href="/dashboard" style="text-decoration: none">
                            <img src="images/menu.png" alt="" class="icon" style="max-width: 25px; padding-top: 50px ; padding-left: 35px ;">
                            <span class="description">Dashboard</span>
                         </a>
                    </div>
                 </div>

                 <div class="main">
                    <div class="list-item">
                        <a href="/transaction">
                            <img src="images/transfer.png" alt="" class="icon" style="max-width: 25px; padding-top: 50px ; padding-left: 35px">
                            <span class="description">Transfer</span>
                        </a>
                    </div>
                </div>
                 
                 <div class="main">
                    <div class="list-item">
                         <a href="/transaction_history" style="text-decoration: none">
                            <img src="images/history.png" alt="" class="icon" style="max-width: 25px; padding-top: 50px ; padding-left: 35px">
                            <span class="description">History</span>
                        </a>
                    </div>
                 </div>

                 <div class="main">
                    <div class="list-item">
                         <a href="/personal_login" style="text-decoration: none">
                            <img src="images/logout.png" alt="" class="icon" style="max-width: 25px; padding-top: 215px ; padding-left: 35px">
                            <span class="description" >Logout</span>
                        </a>
                    </div>
                 </div>

            </div>
               
        </div>

       
        <div class="main-content">
            @yield('content')
        </div>

    </div>
</body>
</html>