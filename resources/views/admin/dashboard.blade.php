@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    {{-- <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
<div class="container mt-5">
    <div class="row ">
        {{-- Projects section --}}
        <div class="col-xl-6 col-lg-6">
            <div class="card ldg-card-bg">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large dashboard-icon">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Projects</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">{{ count($projects) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Categories section --}}
        <div class="col-xl-6 col-lg-6">
            <div class="card ldg-card-bg">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large dashboard-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">{{ count($categories) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Technologies card--}}
        <div class="col-xl-6 col-lg-6 container-sm">
            <div class="card ldg-card-bg">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large dashboard-icon">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Technologies</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">{{ count($technologies) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection