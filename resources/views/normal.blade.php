<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    body {
      background-color: DarkCyan;
    }

    mark {
      mark-color: white;
    }

    input {
      border-radius: 5px 20px 5px 20px;
    }
  </style>

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: DarkCyan;">
  {{-- @php
    dd(Auth::user()->name);
  @endphp --}}
  <br>
  {{-- <h2>Welcome: {{ Auth::user()->name }}</h2> --}}
  <h1 style="color: white;text-align: center;font-size: 100px;background-color: black;font-family: 'Aclonica';">Normal:
    {{ Auth::user()->name }}</h1>
    <h3 align="center">All Post</h3>
  <button class="btn btn-danger"><a href="{{ route('logout') }}" class="text-light">Logout</a></button>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<div class="container blog-page">
    <div class="row clearfix">

      @foreach ($post_data as $post_datas)
     <div class="container">
        <div class="col-sm-6" style="padding:12px;">
            <div class="row-3">
              <div class="card" style="width: 70rem;">
                <img class="rounded-circle" src="{{asset('upload').'/'.$post_datas->image }}" width="100" height="100" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Titel: {{ $post_datas->title }}</h5>
                  <h6 class="card-text">Descreption :- <br>{{ $post_datas->decs }}</h6>
                  <p>Date: {{ $post_datas->date }}</p>
                </div>
              </div>
            </div>
        </div>
     </div>
  @endforeach
  
</div>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>