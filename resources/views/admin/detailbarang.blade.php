<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-4 py-1 text-white font-light tracking-wider bg-green-400 rounded" >
        <a href="{{route('dashboard')}}">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="container">
  <div class="row mt-4">
    <div class="col col-lg-8 col-md-8">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        
          <div class="carousel-item active">
              <img src="https://images.k24klik.com/product/large/apotek_online_k24klik_20200908101228359225_BETADINE-ANTISEPTIC-60-ML.jpg" class="d-block w-50" alt="...">
          </div>
       
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- deskripsi produk -->
    <div class="col col-lg-4 col-md-4">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <span class="small"></span>
              <h5></h5>
              <!-- cek apakah ada promo -->
              
              <p>
                </del>
                <br />
                
              </p>
              
              <p>
             
              </p>
            
              <button class="btn btn-sm btn-outline-secondary">
              <i class="far fa-heart"></i> Tambah ke wishlist
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
                <button class="px-2 py-2 text-white font-light tracking-wider bg-green-400 rounded">
                <a href="{{route('daftarbarang')}}" >
              <i class="fa fa-shopping-cart"></i> Tambahkan Ke Keranjang
              </a>
                </button>
              
              <button class="px-2 py-2 text-white font-light tracking-wider bg-green-400 rounded"><a href="{{route('cekout')}}" >
              <i class="fa fa-shopping-basket"></i> Beli Sekarang
              </a></button>
              
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <b>Deskripsi</b>
        </div>
        <div class="card-body">
        BETADINE SOLUTION mengandung zat aktif Povidone Iodine 10%. Povidone iodine merupakan zat anti mikroba dengan spektrum paling luas yang mampu membunuh bakteri, virus, jamur, dan protozoa. Zat ini juga tidak menimbulkan resistensi kuman. Obat ini digunakan untuk mengobati panu, kurap, kutu air dan gatal karena jamur, untuk pertolongan pertama dan mencegah timbulnya infeksi pada luka-luka seoerti lecet, terkelupas, tergores, terpotong, terkoyak atau luka khitan, untuk perawatan tali pusar bayi, untuk melindungi luka-luka operasi terhadap timbulnya infeksi. Hanya untuk bagian luar badan.
        <div class="card-body">
        Kategori
        P3K
            <div class="card-body">
            Komposisi
            Povidone iodine 10%
                <div class="card-body">
                Dosis
                Dapat digunakan beberapa kali dalam sehari dengan konsentrasi penih baik untuk mengoles maupun kompres.
                    <div class="card-body">
                    Aturan Pakai
                    Teteskan pada kulit yang luka atau infeksi.
                        <div class="card-body">
                        Kemasan
                        Dus, Botol @ 15 ml
                            <div class="card-body">
                            BPOM : PKD20501710078
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
        </div>
      </div>
  </div>
</div>
</x-admin-layout>