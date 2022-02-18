@extends('admin.dashboard')

@section('content')

<div class="container">

  <hr />

  <form enctype="multipart/form-data" action="{{ route('admin.post.store') }}" method="post">
   @csrf
    {{-- Form include --}}
    @include('admin.posts.partials.form')

  </form>
</div>

@endsection
