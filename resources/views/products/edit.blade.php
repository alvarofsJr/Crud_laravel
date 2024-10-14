@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="container mt-5">
        <h1>Editar Produto</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
    </div>
@endsection
