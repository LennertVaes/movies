<x-home-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('My Favourite movies') }}
        </h2>
    </x-slot>
    <div class="py-12 bg-dark">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            @foreach($favourite_movies as $movie)
                            <div class="col col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body flex">
                                        <div class="mx-3">
                                            <img src="{{$movie->Poster}}" width="250">
                                        </div>
                                        <div class="d-flex justify-content-between w-100 align-items-start">
                                            <div>
                                                <h1 class="card-title">{{$movie->Title}}<span> ({{$movie->Year}})</span></h1>
                                                <small>{{$movie->Plot}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>
