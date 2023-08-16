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
        <h2>Create News</h2> 

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

        <form action="{{ route('news.store') }}" method="POST"> 
            @csrf 
            <div class="form-group"> 
                <label for="title">Title</label> 
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"> 
            </div> 
            
            <div class="form-group"> 
            <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="3"></textarea> 
            </div> 

            <div class="form-group"> 
                <label>Country</label> 
                    <select class="form-control" name="country_id"> 
                        <option value="">Choose country</option> 
                        @foreach($countries as $country) 
                            <option value="{{ $country->id }}"> 
                                {{ $country->country_name }} 
                            </option>           
                        @endforeach 
                    </select> 
                </div>
            
            <button type="submit" class="btn btn-primary">Save</button> 
            <button type="reset" class="btn btn-warning">Reset</button> 
        </form>
        
    </div>
@endsection