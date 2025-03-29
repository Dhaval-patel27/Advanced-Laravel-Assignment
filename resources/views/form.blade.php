<!doctype html>
<html lang="en">
  <head>
    <title>Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h2 class="text-center text-dark mt-5"></h2>
          <div class="text-center mb-5 text-dark"></div>
          <div class="card my-5">
  
            <form class="card-body cardbody-color p-lg-5" method="POST">
              <h2 class="text-center">User Register Form</h2>
              @csrf
              <div class="text-center">
                <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                  width="200px" alt="profile">
              </div>
  
              <div class="mb-3">
                <input type="text" name="name" class="form-control" id="Username" 
                  placeholder="User Name">
                  <span class="text-danger">
                    @error('name')
                      {{ $message }}
                    @enderror
                  </span>
              </div>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" id="Username" aria-describedby="emailHelp"
                  placeholder="Email">
                  <span class="text-danger">
                    @error('email')
                      {{ $message }}
                    @enderror
                  </span>
              </div>
              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="password">
                <span class="text-danger">
                  @error('password')
                    {{ $message }}
                  @enderror
                </span>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" value="Admin" name="status" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Admin
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="Normal" name="status" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Normal
                </label>
                <span class="text-danger">
                  @error('status')
                    {{ $message }}
                  @enderror
                </span>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-info px-5 mb-5 w-50">Submit</button></div>
              <div id="emailHelp" class="form-text text-center mb-5 text-dark">Alrady have
                Account? <a href="{{ route('userlogin') }}" class="text-dark fw-bold">Login here</a>
              </div>
              
            </form>
          </div>
  
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
          document.querySelector('.cont').classList.toggle('s--signup');
        });
      </script>

</body>
</html>