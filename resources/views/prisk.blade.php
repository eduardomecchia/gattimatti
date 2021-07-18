@extends("layouts.app")

@section("title", "Gatti Matti | Prisk")

@section("content")
    <div class="container cat">
        <h1 class="heading">I'm Whiskey! But everybody calls me Prisk...</h1>

        <div class="image-container">
            @foreach($photos as $photo)
                <div class="image">
                    <img src="{{ asset('img/' . $photo . '.jpg') }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection