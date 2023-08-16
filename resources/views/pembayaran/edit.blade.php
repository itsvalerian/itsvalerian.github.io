

@extends('layouts.app')

@section('content')

    <div class="container"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <h2>Edit pembayaran</h2>
                    @if ($errors->any()) 
                    <div class="alert alert-danger"> 
                        Something wrong 
                        <ul> 
                    @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                    @endforeach 
                    </ul>
                    </div> 
                @endif  
 
                    <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST"> 
                    @csrf 
                    @method('PUT') 
                    <div class="form-group"> 
                        <label for="nama">Nama</label> 
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $pembayaran->nama }}"> 
                    </div> 

                    <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="text" class="form-control" name="email" id="email" value="{{ $pembayaran->email }}"> 
                    </div> 

                    <div class="form-group"> 
                        <label>Merk</label> 
                            <select class="form-control" name="produk"> 
                                <option value="">Choose Merk</option> 
                                <option value="BMW" {{ $pembayaran->produk == 'BMW' ? 'selected' : '' }}>BMW</option>
                                <option value="Mercedez Benz" {{ $pembayaran->produk == 'Mercedez Benz' ? 'selected' : '' }}>Mercedez Benz</option>                                 
                                <option value="Porsche" {{ $pembayaran->produk == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                                <option value="Lamborgini" {{ $pembayaran->produk == 'Lamborgini' ? 'selected' : '' }}>Lamborgini</option>
                                <option value="Toyota" {{ $pembayaran->produk == 'Toyota' ? 'selected' : '' }}>Toyota</option>                     
                                
                            </select> 
                    </div>

                    <div class="form-group"> 
                        <label for="alamat">Alamat</label> 
                        <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ $pembayaran->alamat }}</textarea> 
                    </div> 

                    <div class="form-group"> 
                        <label>Status</label> 
                            <select class="form-control" name="status"> 
                                <option value="">Choose status</option> 
                                <option value="Selesai" {{ $pembayaran->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="Sedang dikerjakan" {{ $pembayaran->status == 'Sedang dikerjakan' ? 'selected' : '' }}>Sedang dikerjakan</option>
                                <option value="Belum selesai" {{ $pembayaran->status == 'Belum selesai' ? 'selected' : '' }}>Belum selesai</option> 
                            </select> 
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button> 
                    <button type="reset" class="btn btn-warning">Reset</button> 
                </form> 
                </div> 
            </div> 
        </div>
    @endsection
