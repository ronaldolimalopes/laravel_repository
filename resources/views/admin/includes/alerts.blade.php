@if ($errors->any())
<div class="alert alert-warning">
    @foreach ($errors as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif