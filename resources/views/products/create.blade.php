@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container mt-5">
    <div class="card" style="max-width: 400px; margin: auto;">
        <div class="card-header">
            <h3>Criar Produto</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Preço</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Criar Produto</button>
            </form>
        </div>
    </div>
</div>
@endsection
