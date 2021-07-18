@extends("layouts.app")

@section("title", "Gatti Matti | Zelda")

@section("bodyClass", "zelda")

@section("content")
    <div class="container cat zelda">
        <h1 class="heading">Hey there, I'm Zelda!</h1>

        <div class="image-container">
            @foreach($photos as $photo)
                <div class="image">
                    <img src="{{ asset('img/' . $photo . '.jpg') }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection