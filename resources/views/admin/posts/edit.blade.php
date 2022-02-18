@extends('admin.dashboard')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-2">
    @if (count($posts->images)>0)
    <p>Картинки галереї:</p>
    @foreach ($posts->images as $img)

    <form action="/deleteimage/{{ $img->id }}" method="post">
        <button class="btn text-danger">X</button>
        @csrf
        @method('delete')
        </form>

            <img src="/images/gallery/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
    @endforeach


    @endif
</div>
  <hr />
  <div class="col-md-10">
  <form enctype="multipart/form-data" action="{{route('admin.post.update', $posts->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf

    <label for="title">Назва</label>
    <input type="text" class="form-control" name="title" placeholder="Заголовок товару" value="{{ old('title') ?? $posts->title ?? ''}}" required>
    <label for="">Категорія</label>
    <div class="form-group">
    <select class="form-select" name="category" aria-label="Default select example">
        <option selected value="{{ old('category') ?? $posts->category ?? ''}}">Категорія</option>
        <option value="swimtrainer">Надувні круги SWIMTRAINER</option>
        <option value="neopren">Неопреновий одяг та взуття</option>
        <option value="accessories">Аксесуари для пляжу</option>
      </select>
    </div>
      <hr>
      <div class="form-group">
        <label for="articul">Артикул товару</label>
        <input class="form-control" id="articul" name="articul" type="number" value="{{ old('articul') ?? $posts->articul ?? ''}}">
    </div>
    <label for="slug">Адреса сторінки</label>
    <input class="form-control" type="text" id="slug" name="slug" placeholder="Адреса сторінки для SEO приклад: (swimtrainer-red)" value="{{ old('slug') ?? $posts->slug ?? ''}}" required>
    <div class="form-group">
    <label for="intro">Короткий опис</label>
    <textarea class="form-control" id="intro" name="intro" cols="30" rows="4">{{ old('intro') ?? $posts->intro ?? ''}}</textarea>
    </div>
    <div class="form-group">
    <label class="form-label" for="price">Ціна товару</label>
      <input class="form-control" id="price" name="price" type="number" value="{{ old('price') ?? $posts->price ?? ''}}">
      <span class="helper-text" data-error="Введіть ціну"></span>
    </div>
    <div class="form-group">
        <label class="form-label" for="img">Головне фото</label>
      <input type="file" name="img" class="form-control m-2" value="{{ old('img') ?? $posts->img ?? ''}}">
    </div>

    <div class="form-group">
        <label class="form-label" for="images[]">Галерея картинок</label>
      <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
    </div>
    <div class="form-group">
    <label for="content">Повний опис товару</label>
    <textarea class="form-control" id="content" name="content" cols="30" rows="20">{{ old('content') ?? $posts->content ?? ''}}</textarea>
    </div>
    <div class="form-group">
        <label for="features">Особливості товару</label>
        <textarea class="form-control" id="features" name="features" cols="30" rows="20">{{ old('features') ?? $posts->features ?? ''}}</textarea>
    </div>
    <div class="form-group">
        <label for="features_neopren">Особливості товару (Неопрен)</label>
        <textarea class="form-control" id="features_neopren" name="features_neopren" cols="30" rows="20">{{ old('features_neopren') ?? $posts->features_neopren ?? ''}}</textarea>
    </div>
    <div class="form-group">
        <label for="carousel">Відео</label>
        <input type="text" class="form-control" name="carousel" placeholder="Посилання на відео" value="{{ old('carousel') ?? $posts->carousel ?? ''}}">
    </div>
    <div class="form-group">
    <label for="">Опис для SEO</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="2">{{ old('description') ?? $posts->description ?? ''}}</textarea>
    </div>

    <hr />

    <input class="btn btn-outline-primary" type="submit" value="Зберегти">


    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>
</div>
</div>
@endsection
