@if(\Session::has('message'))
    <div class="alert alert-danger">
        <p>{{ \Session::get('message') }}</p>
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <p><br>{{ \Session::get('success') }}</p>
    </div>
@endif
