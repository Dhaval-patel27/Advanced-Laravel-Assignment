@extends('admin.admin_main')
@section('content')
    {{-- navbar --}}
    <h2 class="text-info">{{ Auth::user()->name }}'s Post</h2>
    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Image</th>
                    <th>Data</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $show)
                    <tr>
                      <td>{{ $show->id }}</td>
                      <td>{{ $show->title }}</td>
                      <td>{{ $show->decs }}</td>
                      <td><img class="rounded-circle" src="{{asset('upload').'/'.$show->image }}" width="100" height="100"></td>
                      <td>{{ $show->date }}</td>
                      <td><button class="btn btn-info"><a href="{{ route('formedit',$show->id) }}" class="text-light">Edit</a></button></td>
                      <td><button class="btn btn-danger"><a href="{{ route('postdelete', $show->id) }}" class="text-light">Delete</a></button></td>
                  </tr>    
                @endforeach
                
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</body>
</html>
@endsection