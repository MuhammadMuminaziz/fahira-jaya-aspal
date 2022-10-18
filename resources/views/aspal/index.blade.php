@extends('layouts.main')

@section('jumbotron')
<div class="mt-5">
    <img src="/img/aspal3.jpg" class="w-100 img-fluid" alt="fahira jaya aspal">
</div>
@endsection
@section('page')
{{-- box services --}}
<section style="margin-top: -50px;">
  <div class="container mx-auto">
      <div class="row justify-content-center">
          <div class="col-lg-3 mb-2">
              <a href="/aspal" class="text-dark text-decoration-none">
                  <div class="card bg-white" style="height: 100px;">
                      <div class="card-body d-flex align-items-center justify-content-center">
                        <h5>
                          Aspal Hotmix
                        </h5>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 mb-2">
              <a href="/paving" class="text-dark text-decoration-none">
                  <div class="card bg-white" style="height: 100px;">
                      <div class="card-body d-flex align-items-center justify-content-center">
                        <h5>
                          Paving Block
                        </h5>
                      </div>
                  </div>
              </a>
          </div>
      </div>
  </div>
</section>
{{-- end box services --}}

<!-- Content -->
<section id="content">
    <div class="container pt-5">
      <h1 class="text-center mb-4">Jasa Aspal Hotmix</h1>

      <p style="text-align: justify;"><span class="ms-5"></span>Kami tau bahwa kebutuhan untuk kontruksi jalan masih sangat tinggi, terutama pada jenis jenis aspal hostmix. jenis aspal ini adalah jenis yang paling banyak dipakai karena banyak kelebihannya di bandingkan dengan jenis yang lain. Aspal Hotmix sering di pakai untuk jalan raya, jalan di perumahan atau bisa juga di pakai pada lapangan pesawat terbang.</p>
      <p>Aspal Hotmix itu sendiri terbuat dari campuran berbagai bahan. Antara lain Agregat halus (abu batu), Agregat kasar (batu split) serta Filler. Sehingga membuat Aspal Hotmix jauh lebih kuat dibandingkan dengan jenis aspal lainnya. Beberapa kelebihannya antara lain:</p>
      <ul>
        <li>
          <p class=" fw-bold mb-0">Pengerjaan Yang Cepat</p>
          <p>Aspal Hotmix di buat dengan bahan-bahan yang siap pakai dan Aspal Hotmix juga cenderung lebih cepat kering. Hal itu bisa membuat pekerjakan pengaspalan menjadi lebih efisien dan cepat.</p>
        </li>
        <li>
          <p class="fw-bold mb-0">Jalan Yang Kuat</p>
          <p>Maksudanya Aspal Hotmix bisa bertahan di berbagai cuaca extrim.</p>
        </li>
        <li>
          <p class="fw-bold mb-0">Stabil dan Fleksibel</p>
          <p>Kestabilan Aspal Hotmix bisa menahan beban lalu lintas tanpa mengalami deformasi. Sifatnya yang fleksibel membuat aspal ini tidak mudah merenggang, serta bikin pengendara nyaman untuk melintasinya.</p>
        </li>
      </ul>
      <p>Untuk anda yang membutuhkan Jasa Pengaspalan Jalan dengan menggunakan Aspal Hotmix dengan kualitas baik serta harga yang ramah, kami siap membantu.</p>

    </div>
  </section>
  <!-- End Content -->

  {{-- Sales --}}
  <section>
    <div class="container mx-auto py-5 mt-5">
        <h3 class="text-center mb-4">Daftar Paket Aspal Hotmix</h3>

        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 1</h5></div>
                <p class="text-center text-white fw-bold">Pelapisan Hotmix/Overlay</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pelapisan Tecoting/Aspal Cair</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar Aspal Hotmix</small></li>
                  <li class="list-group-item bg-info text-white"><small>Dipadatkan dengan mesin Baby Roller</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketAs1">Rp 70.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketAs1">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 2</h5></div>
                <p class="text-center text-white fw-bold">Pekerjaan tambal sulam makadam + split</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi pekerjaan</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu makadam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu Split</small></li>
                  <li class="list-group-item bg-info text-white"><small>Dipadatkan dengan mesin Baby Roller</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pengecoran ermusion</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar asmal hotmix</small></li>
                  <li class="list-group-item bg-info text-white"><small>Finishing atau dipadatkan</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketAs2">Rp 100.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketAs2">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 3</h5></div>
                <p class="text-center text-white fw-bold">Pembuatan jalan baru dari nol</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi pekerjaan</small></li>
                  <li class="list-group-item bg-info text-white"><small>Dipadatkan dengan mesin Walls</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu makadam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu split</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar Aspal Hotmix 2cm</small></li>
                  <li class="list-group-item bg-info text-white"><small>Perapihan</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketAs3">Rp 150.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketAs3">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 4</h5></div>
                <p class="text-center text-white fw-bold">Pengaspalan Penetrasi</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi pekerjaan</small></li>
                  <li class="list-group-item bg-info text-white"><small>Dipadatkan dengan mesin Walls</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu Makadam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar cor tecoting/aspal bakar</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar Batu split</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar Batu abu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Perapihan</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketAs4">Rp 140.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketAs4">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 5</h5></div>
                <p class="text-center text-white fw-bold">Pekerjaan aspal tambal sulam batu split</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi pekerjaan</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu Split</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemadatan dengan mesin Baby Roller</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pengecoran elmusion</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar Aspal Hotmix</small></li>
                  <li class="list-group-item bg-info text-white"><small>Perapihan</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketAs5">Rp 75.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketAs5">Pilih Paket</a>
              </div>
            </div>
          </div>
    </div>
  </section>
  {{-- End Sales --}}

  <!-- Pesanan -->
  <section id="pesanan">
    <div class="container mx-auto">
      <h2 class="text-center mb-4">Buat Pesanan</h2>

      <div class="row justify-content-center mb-4">
        <div class="col-lg-6">
          <div class="alert alert-warning">
            Mohon maaf untuk sekarang tidak bisa menggunakan fitur order langsung! Silahkan hubungi kami via <a href="https://api.whatsapp.com/send?phone=6285316769950" class="text-decoration-none">WhatsApp</a> atau <a href="mailto:ahmadwahyudi1883@gmail.com" class="text-decoration-none">email</a> untuk mendapatkan penawaran yang terbaik.
          </div>
          <div class="card p-2">
            <div class="card-body">
              <form method="post" action="/aspal">
                <div class="mb-2">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control form-control-sm" id="nama" placeholder="Masukan nama lengkap anda" name="nama" value="">
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Masukan email anda" value="">
                </div>
                <div class="mb-2">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="masukan alamat lengkap anda" value="">
                </div>
                <div class="mb-2">
                  <label for="kota" class="form-label">Kota</label>
                  <input type="text" class="form-control form-control-sm" id="kota" name="kota" placeholder="Masukan kota anda" value="">
                </div>
                <div class="mb-2">
                  <label for="kode_pos" class="form-label">Kode Pos</label>
                  <input type="number" class="form-control form-control-sm" id="kode_pos" name="kode_pos" placeholder="Masukan kode pos anda" value="">
                </div>
                <div class="mb-2">
                  <label for="nomer" class="form-label">Nomer Telepon</label>
                  <input type="number" class="form-control form-control-sm" id="nomer" name="nomer" placeholder="Masukan nomer telepon anda" value="">
                </div>
                <div class="mb-5">
                  <label for="paket" class="form-label">Paket</label>
                  <div class="pilihAs">
                    <select class="form-select form-select-sm" aria-label="Default select example" name="paket">
                      <option selected>Paket 1</option>
                      <option value="Paket 2">Paket 2</option>
                      <option value="Paket 3">Paket 3</option>
                      <option value=" Paket 4">Paket 4</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <button href="" class="btn btn-sm btn-primary" type="submit" name="mail">Pesan Sekarang</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <img src="/img/banner.jpg" width="100px" class="img-fluid mb-2" alt="fahira jaya aspal">
        <div class="col text-center">
            <h4>Silahkan Hubungi Kami Untuk Info Lebih Lanjut</h4>
            <h5 class="m-0">Ahmad Wahyudi</h5>
            <p class="m-0">0812-9020-0437</p>
            <p class="m-0">email: ahmadwahyudi1883@gmail.com</p>
            <h4 class="text-center mt-5 mb-2">Atau bisa hubungi Customer kami di :</h4>
            <div class="row justify-content-center">
                <div class="col d-flex justify-content-center">
                <a href="https://api.whatsapp.com/send?phone=6285316769950">
                    <img src="/logo/Gmail.jpg" height="55" alt="">
                </a>
                <a href="mailto:ahmadwahyudi1883@gmail.com">
                    <img src="/logo/WhatsApp.png" height="55" alt="">
                </a>
                </div>
            </div>
        </div>
    </div>
    </div>
  </section>
  <!-- Akhir Pesanan -->

  {{-- Blog --}}
  <section id="blog">
    <div class="container py-5 mt-5">
      <h3 class="text-center mb-4">Blog</h3>
      <div class="row justify-content-center">
        @foreach($blogs as $blog)
        <div class="col-lg-4 col-6 mb-2">
          <a href="" class="text-decoration-none text-dark">
            <div class="card">
              <img src="{{ asset('storage/'. $blog->photo) }}" class="card-img-top" alt="{{ $blog->job->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->excerpt }}</p>
                <a href="#" class="btn btn-primary shadow-none btn-sm mt-3">Lihat</a>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  {{-- EndBlog --}}

  {{-- Gallery --}}
  <section id="gallery">
    <div class="container py-5 mb-5">
      <h3 class="text-center mb-4">Gallery</h3>

      <div>
        <div class="row justify-content-center">
          @foreach($aspalPhoto as $aspal)
          <div class="col-lg-3 col-md-4 col-6 mb-2">
            <a href="/img/gallery/{{ $aspal->name }}" data-lightbox="image-1" data-title="">
              <img src="/img/gallery/{{ $aspal->name }}" alt="" class="img-fluid">
            </a>
          </div>
          @endforeach
        </div>          
      </div>
      
    </div>
  </section>
  {{-- EndGallery --}}
@endsection