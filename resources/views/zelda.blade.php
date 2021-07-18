@extends("layouts.app")

@section("title", "Gatti Matti | Zelda")

@section("content")
    <div class="container cat">
        <h1>Hey there, I'm Zelda!</h1>

        @foreach($photos as $photo)
            <div class="image">
                <img src="{{ asset('img/' . $photo . '.jpg') }}" alt="">
            </div>
        @endforeach
    </div>
@endsection