@extends("./layouts/master")



@section("content")
<div class="container py-5">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @foreach ($movies as $movie )
        <div class="col my-2">
            <x-card :movie="$movie"></x-card>
        </div>

        @endforeach
    </div>
</div>
@endsection