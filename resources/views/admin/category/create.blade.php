@extends('layouts.admin.master')
@section('title', 'Create Category - LaCommerce')

@section('styles')

@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create a new category</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input class="form-control" type="text" name="description">
                </div>
                <div class="mb-3">
                    <label for="image">Cover Image</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="mb-3">
                    <label for="meta_title">Meta Title</label>
                    <input class="form-control" type="text" name="meta_title">
                </div>
                <div class="mb-3">
                    <label for="meta_description">Meta Description</label>
                    <input class="form-control" type="text" name="meta_description">
                </div>
                <div class="mb-3">
                    <label for="meta_keyword">Meta Keyword</label>
                    <input class="form-control" type="text" name="meta_keyword">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
