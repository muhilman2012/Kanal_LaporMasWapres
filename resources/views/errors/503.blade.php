@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - 503 Website Maintenance</title>
    <meta property="og:title" content="Lapor Mas Wapres! - 500 Internal Server Error">
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 150px); /* Adjust as needed */
        }

        .error-code {
            font-size: 4rem;
            font-weight: bold;
            color: #e74c3c; /* Example error color */
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            color: #34495e; /* Example text color */
            margin-bottom: 2rem;
        }
    </style>
@endsection

@section('pages')
<div class="error-container">
    <div class="error-code">503</div>
    <div class="error-message">Mohon Maaf, Halaman sedang dalam perbaikan</div>
</div>
@endsection
