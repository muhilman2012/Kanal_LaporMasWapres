@extends('layouts.panel')

@section('pages')
<div class="container mx-auto p-6">
    <h1 class="text-xl font-bold text-center">Formulir Registrasi</h1>
    <form action="" method="POST">
        @csrf
        <input type="hidden" name="step" value="3">

        <!-- Nama Lengkap -->
        <div class="mb-4">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required>
        </div>

        <!-- NIK -->
        <div class="mb-4">
            <label for="no_identitas">No. Identitas (NIK)</label>
            <input type="text" name="no_identitas" required maxlength="16" pattern="\d+">
        </div>

        <!-- No HP -->
        <div class="mb-4">
            <label for="no_hp">No. HP</label>
            <input type="text" name="no_hp" required pattern="\d+">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email">Email (Opsional)</label>
            <input type="email" name="email">
        </div>

        <!-- Pendamping -->
        <div class="mb-4">
            <input type="checkbox" id="pendamping" name="is_pendamping">
            <label for="pendamping">Saya membutuhkan pendamping</label>
            <input type="text" name="nama_pendamping" placeholder="Nama Pendamping">
        </div>

        <!-- Tanggal Reservasi -->
        <div class="mb-4">
            <label for="tanggal_reservasi">Tanggal Reservasi</label>
            <input type="date" name="tanggal_reservasi" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
