@extends("layouts.app")

@section("title", "Gatti Matti | Prisk")

@section("content")
    <div class="container cat">
        <h1>I'm Whiskey! But everybody calls me Prisk...</h1>

        @foreach($photos as $photo)
            <div class="image">
                <img src="{{ asset('img/' . $photo . '.jpg') }}" alt="">
            </div>
        @endforeach
    </div>
@endsection