@extends('admin.admin_main')
@section('content')
    {{-- navbar --}}
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h2 class="text-center text-dark mt-5"></h2>
          <div class="text-center mb-5 text-dark"></div>
          <div class="card my-5">
  
            <form class="card-body cardbody-color p-lg-5" method="POST" enctype="multipart/form-data">
              <h2 class="text-center">Add Post</h2>

              @csrf
              <div class="text-center">
                <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                  width="200px" alt="profile">
              </div>
  
              <div class="mb-3">
                <input type="text" name="title" class="form-control" 
                  placeholder="Title">
                  <span class="text-danger">
                    @error('title')
                      {{ $message }}
                    @enderror
                  </span>
              </div>
              <div class="mb-3">
                <textarea name="decs" id="" cols="57" rows="5" placeholder="description"></textarea>
                  <span class="text-danger">
                    @error('desc')
                      {{ $message }}
                    @enderror
                  </span>
              </div>

              <div class="mb-3">
                <input type="date" name="date" class="form-control" id="date">
                <span class="text-danger">
                  @error('date')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <input type="file" name="image" accept="image/*" class="form-control" id="image">
                <span class="text-danger">
                  @error('image')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-info px-5 mb-5 w-50">Add Post</button></div>  
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


</body>
</html>
@endsection