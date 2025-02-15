@extends('welcome')

@section('content')
<style>
    /* Style général */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    body {
        background-color: #333;
        color: #fff;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .form-container {
        position: relative;
        background-color: #444;
        padding: 30px;
        border-radius: 8px;
        width: 350px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    h2 {
        margin-bottom: 30px;
        font-size: 24px;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        float: left;
    }

    .input-group input,
    .input-group select,
    form textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #555;
        border-radius: 4px;
        background-color: #555;
        color: #fff;
    }

    .input-group input:focus,
    .input-group select:focus,
    form textarea:focus {
        border-color: #ff6f61;
        outline: none;
    }

    .name-group {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }

    .name-group .input-group {
        flex: 1;
    }

    .name-group .input-group input {
        width: 100%;
        margin: auto;
    }

    form textarea {
        resize: none;
        height: 100px;
        width: 100%;
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background-color: #ff6f61;
        border: none;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #ff5a4e;
    }

    .error {
        color: red;
        position: absolute;
        bottom: -30px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 12px;
        font-weight: 500;
    }
</style>
<div class="form-container">
    <h2 class="text-white font-medium">Create an unity</h2>
    <form action="{{ route('new-unity') }}" method="POST">
        @csrf
        <div class="input-group">
            <label for="name">Unity's name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="input-group hidden">
            <label for="description">Description</label>
            <textarea id="description" name="description" value="{{ old('description') }}" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Add Unity</button>
    </form>
</div>
<div class="container mt-4 text-center" hidden>
    <div class="btn btn-green hover:white">
        <a href="{{ route('list-unity')}}" class="text-white hover:blue">List all unities</a>
    </div>
</div>
@endsection