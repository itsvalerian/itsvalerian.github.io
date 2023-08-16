@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>History</h2> 
        <!-- <p><a href="{{ route('news.create') }}">Tambah berita</a></p>  -->
            <table class="table table-striped">
                <thead> 
                    <tr> 
                        <td>No.</td>
                        <th>Tanggal Pesan</th>
                        <th>Kode Pemesanan</th>
                        <th>Pesanan</th>
                        <th>Status</th>
                        <th><strong>Total Harga</strong></th>
                        <!-- <th>Edit</th>  -->
                        <th>Delete</th>
                        
                    </tr> 
                </thead> 
                <tbody> 
                <?php $no = 1 ?>
                        @forelse ($pembayaran as $n)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $n->created_at }}</td>
                            <td>{{ $n->kode_pemesanan }}</td>
                            <td>
                                <?php $n_details = \App\PesananDetail::where('pesanan_id', $n->id)->get(); ?>
                                @foreach ($n_details as $n_detail)
                                <img src="{{ url('assets/') }}/{{ $n_detail->product->gambar }}"
                                    class="img-fluid" width="50">
                                {{ $n_detail->product->nama }}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                @if($n->status == 1)
                                Belum Lunas
                                @else
                                Lunas
                                @endif
                            </td>
                            <td><strong>Rp. {{ number_format($n->total_harga) }}</strong></td>
                            <!-- <td><a class="btn btn-warning" href="{{ route('pembayaran.edit', $n->id) }}">Edit</a> </td>  -->
                                <td> 
                                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('pembayaran.destroy', $n->id) }}" method="POST"> 
                                        @csrf 
                                        @method('DELETE') 
                                        <button class="btn btn-danger" type="submit">Delete</button> 
                                    </form> 
                                </td> 
                        </tr>
                        @empty
                        @endforelse 
                    </tbody> 
                </table>
    </div> 
@endsection