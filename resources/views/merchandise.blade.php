@extends('dashboard')

@section('content')
<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-color: #23141E;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    h2, h4, h5, p {
        font-family: goldenbook, serif;
        font-style: normal;
        color: #FFFFFF;
        text-align: center;
    }
    .title:hover h2 {
        color: #D6B56E;
    }
    .title p {
        color: #FFFFFF;
        margin-bottom: 2px;
        margin-right: 10px;
    }
    .card {
        background-color: #23141E;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: none;
        border-radius: 10px;
        max-width: 300px; 
        color: #FFFFFF;
        margin: 10px; 
    }
    .gambar {
        max-width: 100%;
        max-height: 200px; 
        height: auto;
        display: block;
        margin: 0 auto;
        border: 1px solid transparent;
        transition: border-color 0.3s;
    }
    .gambar:hover {
        border-color: #D6B56E;
    }
</style>

<div class="table-container">
    <div class="content-index">
        <div class="title">
            <h2 class="mt-3">2022 IU CONCERT〈The Golden Hour: Under The Orange Sun〉</h2>
        </div>

        <div class="ml-4">
            <h4>Our Official Merchandise</h4>
            @foreach ($merchandise as $item)
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="gambar" src="{{ asset( 'images/poster.jpeg' ) }}" alt="gambar">
                        {{ $item->name }}
                        <br>IDR {{ $item->price }}</br>
                        Stock : {{ $item->stock }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</style>
@endsection