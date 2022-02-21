@extends('admin.dashboard')

@section('content')

<div class="container">

  <hr />

  <form enctype="multipart/form-data" action="{{ route('admin.tour.store') }}" method="post">
   @csrf
    {{-- Form include --}}
    @include('admin.tour.partials.form')

  </form>
</div>

@endsection
