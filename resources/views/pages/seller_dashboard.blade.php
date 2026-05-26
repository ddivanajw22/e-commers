<h2>Dashboard Seller - Konfirmasi Pesanan</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID Order</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>#{{ $order->id }}</td>
            <td>Rp {{ number_format($order->total_harga) }}</td>
            <td>
                @if($order->status == 'belum_dikonfirmasi')
                    <span style="color: orange; font-weight: bold;">Belum Dikonfirmasi</span>
                @else
                    <span style="color: green; font-weight: bold;">Sudah Dikonfirmasi</span>
                @endif
            </td>
            <td>
                @if($order->status == 'belum_dikonfirmasi')
                    <form action="{{ route('seller.konfirmasi', $order->id) }}" method="POST">
                        @csrf
                        <button type="submit" style="background-color: green; color: white; cursor: pointer;">Konfirmasi Pesanan</button>
                    </form>
                @else
                    <button disabled style="background-color: grey; color: white;">Selesai</button>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>