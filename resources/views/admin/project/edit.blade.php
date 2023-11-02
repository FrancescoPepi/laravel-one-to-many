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
                <a href="{{ route('admin.project.index') }}" class="btn btn-primary">GO BACK</a>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Inserisci il tuo articolo</h3>
                    </div>
                    <form action="{{ route('admin.project.update', $project) }}" method="POST" class="card-body">
                        @csrf
                        @method('put')
                        <div class="d-flex">
                            <div class="mb-3  me-2 col">
                                <label for="name" class="form-label">Nome Progetto</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ $project->name }}" id="name" name="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col">
                                <label for="genre" class="form-label">Genere</label>
                                <input type="text" class="form-control @error('genre') is-invalid @enderror"
                                    value="{{ $project->genre }}" id="genre" name="genre">
                                @error('genre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" rows="3" name="description">{{ $project->description }}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-5">INVIA</button>
                        </div>
                    </form>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
