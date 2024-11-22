<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .footer { text-align: center; position: fixed; bottom: 0; left: 0; width: 100%; font-size: 10px; color: gray; }
        .page-break { page-break-after: always; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table th, table td { border: 1px solid #000; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <!-- Halaman 1 -->
    <div class="header">
        <img src="{{ public_path('assets/LaporMasWapres.png') }}" alt="Logo Lapor Mas Wapres" style="height: 50px;">
        <h3>Bukti Reservasi Pengaduan</h3>
    </div>
    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td>{{ $registrasiData['nama_lengkap'] }}</td>
        </tr>
        <tr>
            <th>No. Identitas</th>
            <td>{{ $registrasiData['no_identitas'] }}</td>
        </tr>
        <tr>
            <th>No. HP</th>
            <td>{{ $registrasiData['no_hp'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $registrasiData['email'] ?? 'Tidak Diisi' }}</td>
        </tr>
        @if(!empty($registrasiData['nama_pendamping']))
        <tr>
            <th>Nama Pendamping</th>
            <td>{{ $registrasiData['nama_pendamping'] }}</td>
        </tr>
        @endif
        <tr>
            <th>Tanggal Reservasi</th>
            <td>{{ $registrasiData['tanggal_reservasi'] }}</td>
        </tr>
    </table>
    <div class="qr-code">
        <h4>QR Code</h4>
        <div>{!! $qrCode !!}</div>
    </div>
    <div class="footer">Sekretariat Wakil Presiden - Jln. Kebon Sirih No. 14, Jakarta Pusat</div>

    <!-- Page Break -->
    <div class="page-break"></div>

    <!-- Halaman 2 -->
    <div class="header">
        <img src="{{ public_path('assets/LaporMasWapres.png') }}" alt="Logo Lapor Mas Wapres" style="height: 50px;">
        <h3>Tata Tertib Pelayanan Program <b>LaporMasWapres!</b></h3>
    </div>
    <div class="content">
        {!! $tataTertib !!}
    </div>
    <div class="footer">Sekretariat Wakil Presiden - Jln. Kebon Sirih No. 14, Jakarta Pusat</div>
</body>
</html>
