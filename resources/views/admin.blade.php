@extends('admin.admin_main')
@section('content')
@endsection
<h2 class="text-info">Welcome : {{ Auth::user()->name }}</h2>
