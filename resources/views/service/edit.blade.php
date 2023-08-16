

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service Booking</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <h2>Edit service</h2>
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
 
                    <form action="{{ route('service.update', $service->id) }}" method="POST"> 
                    @csrf 
                    @method('PUT') 
                    <div class="form-group"> 
                        <label for="nama">Nama</label> 
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $service->nama }}"> 
                    </div> 

                    <div class="form-group"> 
                        <label>gender</label> 
                            <div class="form-check"> 
                            <div class="radio"> 
                                <input class="form-check- input" type="radio" name="gender" value="1" {{ $service->gender== '1' ? 'checked' : '' }}> 
                                <label class="form-check-label"> 
                                    Laki-laki 
                                </label> 
                            </div> 
                            
                            <div class="radio"> 
                                <input class="form-check-input" type="radio" name="gender" value="0" {{ $service->gender=='0' ? 'checked' : '' }}> 
                                <label class="form-check-label"> 
                                    Perempuan 
                                </label> 
                            </div> 
                        </div> 
                    </div>

                    <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="text" class="form-control" name="email" id="email" value="{{ $service->email }}"> 
                    </div> 

                    <div class="form-group"> 
                        <label>Merk</label> 
                            <select class="form-control" name="produk"> 
                                <option value="">Choose Merk</option> 
                                <option value="BMW" {{ $service->produk == 'BMW' ? 'selected' : '' }}>BMW</option>
                                <option value="Mercedez Benz" {{ $service->produk == 'Mercedez Benz' ? 'selected' : '' }}>Mercedez Benz</option>                                 
                                <option value="Porsche" {{ $service->produk == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                                <option value="Lamborgini" {{ $service->produk == 'Lamborgini' ? 'selected' : '' }}>Lamborgini</option>
                                <option value="Toyota" {{ $service->produk == 'Toyota' ? 'selected' : '' }}>Toyota</option>                     
                                
                            </select> 
                    </div>

                    <div class="form-group"> 
                        <label for="alamat">Alamat</label> 
                        <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ $service->alamat }}</textarea> 
                    </div> 

                    <div class="form-group"> 
                        <label>Status</label> 
                            <select class="form-control" name="status"> 
                                <option value="">Choose status</option> 
                                <option value="Selesai" {{ $service->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="Sedang dikerjakan" {{ $service->status == 'Sedang dikerjakan' ? 'selected' : '' }}>Sedang dikerjakan</option>
                                <!-- <option value="Belum Selesai" {{ $service->status == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>  -->
                            </select> 
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button> 
                    <button type="reset" class="btn btn-warning">Reset</button> 
                </form> 
                </div> 
            </div> 
        </div>
    @endsection
