@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="container mt-5">
        <div class="row">
            <div class="mb-3">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary" style="color: #ffffff;">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    BACK</a>
                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary" style="color: #ffffff;">
                    <i class="fa-solid fa-pencil"></i>
                    EDIT</a>
            </div>
            @include('partials._card')
        </div>
    </section>
@endsection
