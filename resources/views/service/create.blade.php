
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
                <h2>Create service</h2>
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
                <form action="{{ route('service.store') }}" method="POST"> 
                    @csrf 

                    <div class="form-group"> 
                        <label for="nama">Nama</label> 
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama"> 
                    </div> 

                    <div class="form-group"> 
                        <label>Jenis Kelamin</label> 
                        <div class="form-check"> 
                            <div class="radio"> 
                                <input class="form-check-input" type="radio" name="gender" value="1"> 
                                <label class="form-check-label"> 
                                    Laki-laki 
                                </label> 
                            </div> 

                            <div class="radio"> 
                                <input class="form-check-input" type="radio" name="gender" value="0"> 
                                <label class="form-check-label"> 
                                    Perempuan 
                                </label> 
                            </div> 
                        </div> 
                    </div>

                    <div class="form-group"> 
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"> 
                    </div> 

                    <div class="form-group"> 
                        <label>Merk</label> 
                            <select class="form-control" name="produk"> 
                                <option value="">Choose Merk</option> 
                                <option value="BMW">BMW</option>
                                <option value="Mercedez Benz">Mercedez Benz</option>  
                                <option value="Porsche">Porsche</option> 
                                <option value="Lamborgini">Lamborgini</option>
                                <option value="Toyota">Toyota</option>                                
                            </select> 
                    </div> 

                    <div class="form-group"> 
                        <label for="alamat">alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea> 
                    </div> 

                    <div class="form-group"> 
                        <label>Status</label> 
                            <select class="form-control" name="status"> 
                                <option value="">Choose Status</option> 
                                <option value="Selesai">Selesai</option> 
                                <option value="Sedang_dikerjakan">Sedang dikerjakan</option>
                                <!-- <option value="Belum Selesai">Belum selesai</option>   -->
                            </select> 
                    </div> 

                    <button type="submit" class="btn btn-primary">Save</button> 
                    <button type="reset" class="btn btn-warning">Reset</button> 
                </form> 
            </div> 
        </div> 
    </div>
@endsection

