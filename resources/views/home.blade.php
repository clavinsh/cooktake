@extends('layouts.main')
@section('pagestyle')
    <style>
        img {
            height: 170px;
            position: relative;
            transform: translateX(calc(170px - 100%));
            object-fit: fill;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        @foreach ($suggestedRecipes as $recipe)
            <div class="row justify-content-md-center">
                <div class="card mb-3 bg-gray" style="max-width: 1300px;min-height:200px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $recipe->title }}</h5>
                                <p class="card-text">{{ $recipe->description }}</p>
                                <span class="allign-bottom" style="position: absolute;bottom:0.5rem;">
                                    <p class="card-text">
                                        <small class="text-muted">{{ $recipe->user->display_name }}
                                            /{{ $recipe->user->username }} <br> Last updated:
                                            {{ $recipe->updated_at }} Created: {{ $recipe->created_at }}
                                        </small>
                                    </p>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="px-3 py-3">
                                <div class="float-end rounded-circle bg-light"
                                    style="height:170px;width:170px; overflow: hidden;border-style:solid;border-color:gray;border-width: 1px;">
                                    @if ($recipe->image_path != null)
                                        <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="Recipe thumbnail"
                                            class="bg-light" style="border: 0;" />
                                    @else
                                        <img src="{{ asset('placeholder.png') }}" alt="Recipe thumbnail" class="bg-light"
                                            style="border: 0" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
