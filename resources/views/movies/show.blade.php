@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 lg:flex">
            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="movie-banner" class="lg:w-96">
            <div class="lg:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex items-center text-gray-400">
                    <span>
                        <i class="fas fa-star text-orange-500 w-4 fill-current"></i>
                    </span>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach($movie['genres'] as $genre)
                                {{ $genre['name'] }}@if (!$loop->last), @endif
                            @endforeach
                        </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach($movie['credits']['crew'] as $crew)
                            @if($loop->index < 3)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @if(count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <i class="fas fa-play w-6 fill-current"></i>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{--  CAST  --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-8 gap-8">
                @foreach($movie['credits']['cast'] as $cast)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w300'.$cast['profile_path'] }}" alt="profile" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                            <div class="flex items-center text-gray-400">
                                <span>{{ $cast['character'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--  END  --}}

    {{--  Movie Images  --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                @foreach($movie['images']['backdrops'] as $image)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$image['file_path'] }}" alt="movie-image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--  END  --}}
@endsection
