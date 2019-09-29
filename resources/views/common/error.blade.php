@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <a>{{ $error }}</a>
        @endforeach
    </div>
@endif