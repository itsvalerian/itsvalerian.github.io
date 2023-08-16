
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
            <div class="col-md-12"> 
                <h2>Service</h2> 
                
                <p><a class="btn btn-primary" href="{{ route('service.create') }}">Tambah service</a></p> 
                
                @if(session()->get('success')) 
                <div class="alert alert-success"> 
                    {{ session()->get('success') }} 
                </div> 
                @endif 
                
                <table class="table table-striped">
                    <thead> 
                        <tr> 
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>  
                            <th scope="col">Email</th> 
                            <th scope="col">Merk</th>
                            <th scope="col">Alamat</th> 
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                    
                        @foreach($service as $n) 
                            <tr> 
                                <td>{{ $n->nama }}</td>
                                <td>{{ $n->gender ? 'Laki-laki' : 'Perempuan' }}</td> 
                                <td>{{ $n->email }}</td> 
                                <td>{{ $n->produk }}</td>
                                <td>{{ $n->alamat }}</td>
                                <td>{{ $n->status }}</td>
                                <td><a class="btn btn-warning" href="{{ route('service.edit', $n->id) }}">Edit</a> </td> 
                                <td> 
                                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('service.destroy', $n->id) }}" method="POST"> 
                                        @csrf 
                                        @method('DELETE') 
                                        <button class="btn btn-danger" type="submit">Delete</button> 
                                    </form> 
                                </td> 
                            </tr> 
                            @endforeach 
                            
                        </tbody> 
                    </table> 
                </div> 
            </div> 
        </div>
@endsection

</body>
</html>