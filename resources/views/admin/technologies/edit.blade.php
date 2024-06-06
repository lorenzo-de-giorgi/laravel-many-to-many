@extends('layouts.admin')

@section('title', 'Edit Technology')

@section('content')
    <section>
        <h2>Edit Technology</h2>
        <form action="{{ route('admin.technologies.update', $technology->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('name', $technology->name) }}" minlength="3" maxlength="200">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div id="titleHelp" class="form-text text-white">Inserire minimo 3 caratteri e massimo 200</div>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Conferma Modifica</button>
                <button type="reset" class="btn btn-danger">Svuota campi</button>
            </div>
        </form>
    </section>

@endsection