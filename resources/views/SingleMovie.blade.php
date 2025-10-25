@extends("./layouts/master")



@section("content")

<div class="container-fluid py-5">
    <x-card-single :movie="$movie"></x-card-single>
    <div>
        <a class="text-center" href={{ route("index") }}>Torna alla Home</a>
    </div>

</div>

@endsection