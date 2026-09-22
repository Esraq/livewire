@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-9">

            <div class="card shadow-sm">

                @if($alumni->image)
                    <img
                        src="{{ asset('storage/' . $alumni->image) }}"
                        class="card-img-top"
                        alt="{{ $alumni->title }}"
                    >
                @endif

                <div class="card-body">

                    <h2>
                        {{ $alumni->title }}
                    </h2>

                    @if($alumni->description)
                        <p>
                            {{ $alumni->description }}
                        </p>
                    @endif

                    <a href="{{ route('alumni.index') }}"
                       class="btn btn-secondary">
                        Back
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection