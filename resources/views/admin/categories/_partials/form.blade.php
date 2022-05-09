@csrf
<div class="form-group">
    <input type="text" name="title" class="form-control" value="{{  $category->title ??  old('title') }}"
        placeholder="Título">
</div>
<div class="form-group">
    <input type="text" name="url" class="form-control" value="{{ $category->url ?? old('url') }}" placeholder="Url">
</div>
<div class="form-group">
    <textarea type="text" name="description" cols="30" rows="10" class="form-control"
        placeholder="Descrição">{{ $category->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
