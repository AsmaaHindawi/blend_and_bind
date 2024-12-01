@extends('layouts.app')

@section('title', 'Edit Admins')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Edit Admin Count</h1>
    <form action="{{ route('admin.admins.update') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group mb-4">
            <label for="adminCount" class="form-label">Update Admin Count</label>
            <input type="number" name="adminCount" id="adminCount" value="{{ $adminCount ?? '0' }}" min="1" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
    </form>
</div>
@endsection

<style>
    .form-container {
        margin: 30px auto;
        padding: 20px;
        max-width: 800px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #343a40;
        text-align: center;
        margin-bottom: 20px;
    }
</style>
