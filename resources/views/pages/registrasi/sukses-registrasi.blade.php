@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Registrasi Online Berhasil</title>
@endsection

@section('pages')
<div class="container mx-auto p-6">
    <h1 class="text-xl font-bold text-center">Registrasi Berhasil</h1>
    <p class="text-center mb-6">Terima kasih telah melakukan registrasi! Berikut adalah data Anda:</p>

    <ul class="border p-4 rounded shadow-md bg-white mb-4">
        <li><strong>Nama Lengkap:</strong> {{ $registrasiData['nama_lengkap'] }}</li>
        <li><strong>No. Identitas:</strong> {{ $registrasiData['no_identitas'] }}</li>
        <li><strong>No. HP:</strong> {{ $registrasiData['no_hp'] }}</li>
        <li><strong>Email:</strong> {{ $registrasiData['email'] ?? 'Tidak Diisi' }}</li>
        @if(!empty($registrasiData['nama_pendamping']))
            <li><strong>Nama Pendamping:</strong> {{ $registrasiData['nama_pendamping'] }}</li>
        @endif
        <li><strong>Tanggal Reservasi:</strong> {{ $registrasiData['tanggal_reservasi'] }}</li>
    </ul>

    <div class="text-center mb-6">
        <h2 class="text-lg font-bold">Kode Registrasi Anda</h2>
        <div class="flex justify-center">
            {!! QrCode::size(150)->generate($registrasiData['qr_encrypted']) !!}
        </div>
        <small class="text-gray-600 mt-2 block">Gunakan QR Code ini untuk verifikasi oleh petugas.</small>
    </div>

    <div class="text-center">
        <a href="{{ route('download.pdf', $registrasiData) }}" class="btn btn-primary">Download Bukti Registrasi</a>
    </div>
</div>
@endsection

@section('script')

@endsection