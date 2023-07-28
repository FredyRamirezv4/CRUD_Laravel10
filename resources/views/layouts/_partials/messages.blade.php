@if ( $message = Session::get('success'))
<div class="container">
    <p class=" mt-2 text-bg-primary p-3">
        {{$message}}
    </p>
</div>
    
@endif

@if ( $message = Session::get('danger'))
<div class="container">
    <p class=" mt-2 text-bg-danger p-3">
        {{$message}}
    </p>
</div>
    
@endif