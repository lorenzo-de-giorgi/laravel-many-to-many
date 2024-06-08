@extends('layouts.admin')
@section('title', $category->name)

@section('content')
<section>
    <div class="d-flex justify-content-between align-items-center py-4">
        <h1>{{$category->name}}</h1>
        <div>
            <a href="{{route('admin.categories.edit', $category->slug)}}" class="btn btn-secondary">Edit</a>
            <form action="{{route('admin.categories.destroy', $category->slug)}}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger"  data-item-title="{{ $category->name }}">Delete Category</i></button>
            </form>
        </div>
    </div>
</section>
@include('partials.modal-delete')
@endsection