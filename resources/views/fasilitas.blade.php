@extends('layouts.app')

@section('content')
<article class="container mt-28">
    <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
        Fasilitas B-University
    </h1>
    <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
        Menciptakan lingkungan pembelajaran yang nyaman dan lengkap
    </p>

    @if (empty($facilities))
        <p class="font-montserrat text-lg sm:text-xl font-semibold text-xneutral-200">No Data Available</p>
    @else
        @foreach ($facilities as $facility)
            <div class="grid grid-cols-1 items-start sm:grid-cols-12 gap-8 mt-8">
                <img src="{{ asset('storage/'. $facility->image) }}" alt="fasilitas"
                    class="w-full h-fit object-cover rounded-[30px] sm:col-span-5" />
                <div class="sm:col-span-7">
                    {!! $facility->content !!}
                </div>
            </div>
        @endforeach
    @endif
</article>
<style>
    h1, h2, h3, h4, h5, h6 {
        color: #333;
        font-family: 'Montserrat', 'sans-serif';
    }

    h1 {
        font-size: 2em;
    }

    h2 {
        font-size: 1.5em;
    }

    h3 {
        font-size: 1.17em;
    }

    h4 {
        font-size: 1em;
    }

    h5 {
        font-size: 0.83em;
    }

    h6 {
        font-size: 0.67em;
    }

    ul {
        list-style-type: disc;
        padding-left: 20px;
        margin-bottom: 1em;
    }

    ol {
        list-style-type: decimal;
        padding-left: 20px;
        margin-bottom: 1em;
    }

    li {
        color: #555;
    }

    p {
        margin-bottom: 1em;
        color: #555;
    }
</style>
@endsection
