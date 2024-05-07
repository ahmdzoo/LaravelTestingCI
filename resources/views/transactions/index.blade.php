@extends('layouts.app')

@section('content')
    <h1>Daftar Transaksi</h1>
    <table>
        <thead>
            <tr>
                <th>Nomor Transaksi</th>
                <th>Tanggal</th>
                <th>Total Biaya</th>
                <th>Status Pembayaran</th>
                <th>Status Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->nomor_transaksi }}</td>
                    <td>{{ $transaction->tanggal_transaksi }}</td>
                    <td>{{ $transaction->total_harga }}</td>
                    <td>{{ $transaction->status_pembayaran }}</td>
                    <td>{{ $transaction->status_pengiriman }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
