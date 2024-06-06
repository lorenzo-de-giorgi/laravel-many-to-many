@extends('layouts.admin')
@section('title', $technology->name)

@section('content')
<section>
    <div class="d-flex justify-content-between align-items-center py-4">
        <h1>{{$technology->name}}</h1>
        <div>
            <a href="{{route('admin.technologies.edit', $technology->slug)}}" class="btn btn-secondary">Edit</a>
            <form action="{{route('admin.technologies.destroy', $technology->slug)}}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger"  data-item-title="{{ $technology->name }}">
                 Delete Technology</i>
                </button>

              </form>
        </div>

    </div>
</section>
@include('partials.modal-delete')
@endsection