<div class="container">

   {{-- BANNER --}}
   <div class="banner">
      <img src="{{ url('https://cdn.statically.io/img/epsikologi.com//wp-content/uploads/2020/09/seva-pusat-mobil-murah.png') }}" alt="">
   </div>

   {{-- PILIH MERK  --}}
   <section class="pilih-merk mt-4">
      <h3><strong>Pilih Merk</strong></h3>
      <div class="row mt-4">
         @foreach($merks as $merk)
         <div class="col">
            <a href="{{ route('products.merk', $merk->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/logo') }}/{{ $merk->gambar }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT  --}}
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Best Products</strong>
         <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
      </h3>
      <div class="row mt-4">
         @foreach($products as $product)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/mobil') }}/{{ $product->gambar }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h5><strong>{{ $product->nama }}</strong> </h5>
                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT  --}}
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Informasi & Pengumuman</strong>
         
      </h3>
      <div class="row mt-4">
         @foreach($news as $n) 
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                 
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h1><strong>-{{ $n->title }}-</strong> </h1>
                        <h5>{{ $n->content }}</h5>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>

</div>