@extends('layouts.admin.master')
@section('title', 'Edit Category - LaCommerce')

@section('styles')

@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" value="{{$category->title}}">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input class="form-control" type="text" name="description" value="{{$category->description}}">
                </div>
                <div class="mb-3">
                    <label for="image">Cover Image</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="mb-3">
                    <label for="meta_title">Meta Title</label>
                    <input class="form-control" type="text" name="meta_title" value="{{$category->meta_title}}">
                </div>
                <div class="mb-3">
                    <label for="meta_description">Meta Description</label>
                    <input class="form-control" type="text" name="meta_description" value="{{$category->meta_description}}">
                </div>
                <div class="mb-3">
                    <label for="meta_keyword">Meta Keyword</label>
                    <input class="form-control" type="text" name="meta_keyword" value="{{$category->meta_keyword}}">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
