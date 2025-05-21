@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            Product Information
                        </div>
                        <div class="float-end">
                            <a href="{{ route('products.index') }}" class="btn
    btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row mb-2">
                                        <label for="code"
                                            class="col-md-4 col-form-label text-md-end"><strong>Code:</strong></label>
                                        <div class="col-md-6">{{ $product->code }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end"><strong>Name:</strong></label>
                                        <div class="col-md-6">{{ $product->name }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="quantity"
                                            class="col-md-4 col-form-label text-md-end"><strong>Quantity:</strong></label>
                                        <div class="col-md-6">{{ $product->quantity }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="price"
                                            class="col-md-4 col-form-label text-md-end"><strong>Price:</strong></label>
                                        <div class="col-md-6">{{ $product->price }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="description"
                                            class="col-md-4 col-form-label text-md-end"><strong>Description:</strong></label>
                                        <div class="col-md-6">{{ $product->description }}</div>
                                    </div>
                                </div>

                                <div class="col-md-4 d-flex flex-column align-items-end">
                                    <div>
                                        <label for="picture"
                                            class="font-bold mb-2 text-end"><strong>Image:</strong></label>
                                        @if ($product->file_path)
                                            <img src="{{ Storage::url($product->file_path) }}" alt="{{ $product->name }}"
                                                class="img-fluid w-100">
                                        @else
                                            <p class="text-end">No image available</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @endsection
