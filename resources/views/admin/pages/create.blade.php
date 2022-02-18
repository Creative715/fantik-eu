
@extends('admin.dashboard')
@section('content')

<div class="container">

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{ route('admin.page.store') }}" method="post">
   @csrf
    {{-- Form include --}}
    @include('admin.pages.partials.form')

  </form>
</div>

@endsection
