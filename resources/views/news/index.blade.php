@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita & Pengumuman</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <h2></h2> 
        
        <p><a class="btn btn-primary" href="{{ route('news.create') }}">Tambah berita</a></p> 
        
        @if(session()->get('success')) 
            <div class="alert alert-success"> 
                {{ session()->get('success') }} 
            </div> 
        @endif 


    <div class="container">
      <div class="main">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                
                <br>
            </div>
          </div>

            <div class=""> 
                @foreach($news as $n)
                <h1>
                    -{{ $n->title }}-
                </h1>

                <p>
                    From:{{ $n->country->country_name }}
                </p>

                
                <h6>{{ $n->content }}</h6>
                <a class="btn btn-warning" href="{{ route('news.edit', $n->id) }}">Edit</a>
                <br>
                <div> 
                    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('news.destroy', $n->id) }}" method="POST"> 
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button> 
                    </form> 
                    <p> ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                </div>
                
                
                
                @endforeach 
            </div>

          
        </div>
      </div>
    </div>


    <!-- <table class="table table-striped">        
                    <thead> 
                        <tr> 
                            <th scope="col">ID</th> 
                            <th scope="col">Title</th> 
                            <th scope="col">Content</th> 
                            <th scope="col">Edit</th> 
                            <th scope="col">Delete</th> 
                        </tr> </thead>
                    <tbody> 
                    
                    @foreach($news as $n) 
                        <tr> 
                            <td>{{ $n->id }}</td> 
                            <td>{{ $n->title }}</td> 
                            <td>{{ $n->content }}</td> 
                            <td><a class="btn btn-warning" href="{{ route('news.edit', $n->id) }}">Edit</a> </td> 
                            <td> 
                                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('news.destroy', $n->id) }}" method="POST"> 
                                    @csrf @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button> 
                                </form> 
                            </td> 
                        </tr> 
                    @endforeach 
                </tbody> 
        </table> -->
@endsection