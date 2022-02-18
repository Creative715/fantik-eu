<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок товару" value="{{ old('title') ?? $page->title ?? ''}}" required>
<label for="">Адреса</label>
<input class="form-control" type="text" name="slug" placeholder="Адреса сторінки" value="{{ old('slug') ?? $page->slug ?? ''}}" required>
<div class="form-group">
<label for="">Текст сторінки</label>
<textarea class="form-control" id="content" name="content" cols="30" rows="20">{{ old('content') ?? $page->content ?? ''}}</textarea>
</div>
<div class="form-group">
<label for="">Опис</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="2">{{ old('description') ?? $page->description ?? ''}}</textarea>
</div>

<hr />

<input class="btn btn-outline-primary" type="submit" value="Зберегти">


