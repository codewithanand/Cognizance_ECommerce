@extends('layouts.admin.master')
@section('title', 'Products - LaCommerce')

@section('styles')
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
            <a href="{{route('admin.product.create')}}" class="btn btn-primary">Create Product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="productDataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->discount_price }}</td>
                                <td><img src="{{asset("uploads/product/".$product->image)}}" alt="image" height="32"></td>
                                <td>
                                    <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#productDataTable').DataTable();
        });
    </script>
@endsection
