<label for="title">Tour Title</label>
<input type="text" class="form-control" name="title" placeholder="Tour Title" value="{{ old('title') ?? $tour->title ?? ''}}" required>
<label for="">Tour Group</label>
<div class="form-group">
    <select class="form-select" name="tour_groups" aria-label="tour_groups">
        <option selected value="{{ old('tour_groups') ?? $tour->tour_groups ?? ''}}">Tour Group</option>
    </select>
    <select class="form-control" multiple="" name="tour_groups[]">
        @include('admin.tour.partials.tour_groups', ['tour_groups' => $tour_groups])
    </select>
</div>
<hr>
<div class="form-group">
    <label for="seo_title">Seo Title</label>
    <input class="form-control" id="seo_title" name="seo_title" type="text" value="{{ old('seo_title') ?? $tour->seo_title ?? ''}}">
</div>
<div class="form-group">
    <label for="seo_h1">Seo H1</label>
    <input class="form-control" id="seo_h1" name="seo_h1" type="text" value="{{ old('seo_h1') ?? $tour->seo_h1 ?? ''}}">
</div>
<div class="form-group">
    <label for="seo_description">SEO Description</label>
    <textarea class="form-control" name="seo_description" id="seo_description" cols="30" rows="2">{{ old('seo_description') ?? $tour->seo_description ?? ''}}</textarea>
</div>
<label for="slug">URL</label>
<input class="form-control" type="text" id="slug" name="slug" placeholder="URL generate automatical" value="{{ old('slug') ?? $tour->slug ?? ''}}" >
<div class="form-group">
    <label class="form-label" for="price">Price</label>
    <input class="form-control" id="price" name="price" type="number" value="{{ old('price') ?? $tour->price ?? ''}}">
    <span class="helper-text" data-error="Введіть ціну"></span>
</div>
<div class="form-group">
    <label class="form-label" for="img">Main Photo</label>
    <input type="file" name="img" class="form-control m-2" value="{{ old('img') ?? $tour->img ?? ''}}">
</div>
<div class="form-group">
    <label class="form-label" for="images[]">Gallery</label>
    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
</div>
<div class="form-group">
    <label for="video">Video</label>
    <input type="text" class="form-control" name="video" placeholder="url for video" value="{{ old('video') ?? $tour->video ?? ''}}">
</div>
<div class="form-group">
    <label for="content">About Tour</label>
    <textarea class="form-control" id="content" name="content" cols="30" rows="20">{{ old('content') ?? $tour->content ?? ''}}</textarea>
</div>
<label class="form-label" for="price">Number of nights</label>
<input class="form-control" id="price" name="price" type="number" value="{{ old('night') ?? $tour->night ?? ''}}">
<span class="helper-text" data-error="Введіть ціну"></span>

<label class="form-label" for="price">Duration</label>
<input class="form-control" id="duration" name="price" type="number" value="{{ old('duration') ?? $tour->duration ?? ''}}">
<span class="helper-text" data-error="Введіть ціну"></span>


<hr />

<input class="btn btn-outline-primary" type="submit" value="Save">


