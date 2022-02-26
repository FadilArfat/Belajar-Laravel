
@extends('layouts.main')
@section('container')

<h1 class="mb-5">Post Categories</h1>
<div class="continer">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="p-0 card-img-overlay d-flex align-items-center">
                  <h5 style="background-color: rgba(0, 0, 0, 0.7)" class="p-4 fs-3 card-title text-center flex-fill">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection


