@extends("layouts.app")

@section("title", "Gatti Matti | Zelda")

@section("content")
    <div class="container cat">
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