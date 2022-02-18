@extends('admin.dashboard')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Редагування категорії @endslot
    @slot('parent') Головна @endslot
    @slot('active') категорії @endslot
  @endcomponent

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{route('admin.category.update', $category)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf

    {{-- Form include --}}
    @include('admin.categories.partials.form')

  </form>
</div>

@endsection
