<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .active {

            background-color: blueviolet;
        }

        li {
            float: left;
            list-style: none;
            padding: 2px;
        }

        li a {
            text-decoration: none;
            padding: 5px 25px;
            background-color: #cdb2e6;
            color: white;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h1>Hello, world! {{__('Register')}}</h1>
    <div style="float: right;" class="mb-3">
        <ul style="margin: 0px; float: left;">
            <li>
                <a href="{{ route('lang.change', 'en') }}">English</a>
            </li>
            <li>
                <a href="{{ route('lang.change', 'bn') }}" class="active">Bangla</a>
            </li>
            <li>
                <a href="{{ route('lang.change', 'zhh') }}">Goga</a>
            </li>
        </ul>
    </div>
    {{-- @dd(Session::get("locale")) --}}


    <div class="container mt-5">
        <div class="row">
            <div class="card shadow">
                <div class="card-title mt-2"><h2>{{ __('Hello Bangladesh') }} {{ __('message.welcome') }}</h2></div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptatum ipsum necessitatibus
                    amet natus laboriosam numquam consequatur ipsam reiciendis dolorem, distinctio aliquid cum
                    consequuntur tenetur quis minus dicta rerum quos?Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Impedit voluptatum ipsum necessitatibus amet natus laboriosam numquam consequatur ipsam
                    reiciendis dolorem, distinctio aliquid cum consequuntur tenetur quis minus dicta rerum quos?
                </div>
            </div>
        </div>
    </div>




    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <ul class="list-group list">
          <li class="list-group-item border-0">
              <a href="{{route('lang.change','en')}}">English</a>
          </li>
          <li class="list-group-item border-0">
              <a href="{{route('lang.change','jpn')}}">Japanese</a>
          </li>
          <li class="list-group-item border-0">
              <a href="{{route('lang.change','ko')}}">Korea</a>
          </li>
           <li class="list-group-item border-0">
              <a href="{{route('lang.change','hi')}}">Hindi</a>
          </li>
        </ul>
    </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
