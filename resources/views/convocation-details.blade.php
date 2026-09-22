@extends('layouts.app')

@section('title', $convocation->title . ' | Khwaja Yunus Ali University')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-12 col-md-10 col-lg-9">

            <div class="card shadow-sm border">

                @if(!empty($convocation->image))

                    <div class="convocation-image-wrapper">

                        <img
                            src="{{ asset('storage/' . $convocation->image) }}"
                            alt="{{ $convocation->title }}"
                            class="convocation-image"
                        >

                    </div>

                @endif

                <div class="card-body p-4">

                    <h2 class="convocation-title">
                        {{ $convocation->title }}
                    </h2>

                    @if(!empty($convocation->description))

                        <div class="convocation-description">
                            {!! $convocation->description !!}
                        </div>

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

<style>

    .convocation-image-wrapper {
        width: 100%;
        padding: 20px;
        text-align: center;
        background-color: #f8f9fa;
    }

    .convocation-image {
        width: 100%;
        height: auto;
        max-width: 900px;
        max-height: 550px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    .convocation-title {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #222;
    }

    .convocation-description {
        font-size: 16px;
        line-height: 1.8;
        color: #444;
    }

    @media (max-width: 768px) {

        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .convocation-image-wrapper {
            padding: 15px;
        }

        .convocation-image {
            max-height: 400px;
        }

        .convocation-title {
            font-size: 26px;
        }

        .card-body {
            padding: 20px !important;
        }

    }

    @media (max-width: 576px) {

        .convocation-image-wrapper {
            padding: 10px;
        }

        .convocation-image {
            max-height: 300px;
        }

        .convocation-title {
            font-size: 22px;
        }

        .card-body {
            padding: 15px !important;
        }

        .convocation-description {
            font-size: 15px;
        }

    }

</style>

@endsection