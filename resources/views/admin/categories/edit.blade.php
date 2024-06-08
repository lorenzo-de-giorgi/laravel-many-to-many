@extends('layouts.admin')

@section('title', 'Category Project')

@section('content')
    <section>
        <h2>Edit Category</h2>
        <form action="{{ route('admin.categories.update', $category->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $category->name) }}" minlength="3" maxlength="200">
                {{-- @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">Conferma Modifica</button>
                <button type="reset" class="btn btn-danger">Svuota campi</button>
            </div>
        </form>


    </section>

@endsection