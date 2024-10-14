@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <div class="container mt-5">
        <h1>Produtos</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a class="btn btn-success" href="{{ route('products.create') }}">Adicionar Produto</a>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Preço:</strong> ${{ number_format($product->price, 2) }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
