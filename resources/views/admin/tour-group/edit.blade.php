@extends('admin.dashboard')

@section('content')

<div class="container">

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{route('admin.page.update', $page)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf

    {{-- Form include --}}
    @include('admin.pages.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection

