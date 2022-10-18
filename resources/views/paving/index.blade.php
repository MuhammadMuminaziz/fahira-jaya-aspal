@extends('layouts.main')

@section('jumbotron')
<div class="mt-5">
    <img src="/img/block1.jpg" class="w-100 img-fluid" alt="fahira jaya aspal">
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
      <h1 class="text-center mb-4">Jasa Paving Block</h1>

      <p style="text-align: justify;"><span class="ms-5"></span>Paving block adalah bahan bangunan yang dibuat dari campuran semen, pasir dan air sehingga karakteristiknya hampir mendekati dengan karakteristik mortar. Mortar adalah bahan bangunan yang dibuat dari pencampuran antara pasir dan agregat halus lainya dengan bahan pengikat sehingga manjadi keras dan mempunyai sifat-sifat seperti batuan.</p>
      <p>Paving block memiliki nilai estetika yang bagus, karena selain memiliki bentuk segiempat ataupun seibanyak dapat pula berwarna seperti aslinya ataupun diberikan zat pewarna dalam komposisi pembuatanya. Paving block inin sendiri berfungsi untuk lantai yang banyak digunakan di luar bangunan serta tidak mudah retak-retak dan cacat.</p>
      <p>Paving Block adalah solusi terbaik untuk lahan resapan saat hujan dan banjir. Pemasangannya tidak susah dan perawatannya pun mudah. Pemasangan dengan motif yang baik akan menambah keindahan bangunan sekitarnya. Paving block diproduksi dengan warna natural, reguler (merah, hitam) dan warna khusus (hijau, kuning, biru). Tersedia berbagai model, warna dan ukuran Paving Block Dengan pola dan pemasangan yang baik, Paving Block berkualitas akan lebih tambah menarik dan rapi. Tersedia banyak disain pemasangan paving block yang menarik.</p>

    </div>
  </section>
  <!-- End Content -->

  {{-- Sales --}}
  <section>
    <div class="container mx-auto py-5 mt-5">
        <h3 class="text-center mb-4">Daftar Paket Paving Block</h3>

        <div class="row justify-content-center" data-masonry='{"percentPosition": true }'>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 1</h5></div>
                <p class="text-center text-white fw-bold">Pasang Paving dari 0 sampe finishing</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pempersihan lokasi</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemadatan area dengan mesin Walls</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu/sirdam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu abu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pasang Paving Vibrator tebal 6cm</small></li>
                  <li class="list-group-item bg-info text-white"><small>Upah tenaga pasang</small></li>
                  <li class="list-group-item bg-info text-white"><small>Finishing dengan mesin Stamper</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketBc1">Rp 135.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketBc1">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 2</h5></div>
                <p class="text-center text-white fw-bold">Upah pemasangan Paving tebal 6cm</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Gelar batu abu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemasangan Paving Block tebal 6cm</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketBc2">Rp 22.00 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketBc2">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 3</h5></div>
                <p class="text-center text-white fw-bold">Pasang Paving dari 0 sampe finishing mutu hydrolic</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemadatan area dengan mesin Walls</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu makadam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu abu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pasang Paving Block tebal 6cm</small></li>
                  <li class="list-group-item bg-info text-white"><small>Upah tenaga pasang</small></li>
                  <li class="list-group-item bg-info text-white"><small>Finishing dengan mesin Stamper</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketBc3">Rp 165.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketBc3">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 4</h5></div>
                <p class="text-center text-white fw-bold">Upah pasang Paving block  tebal 8cm</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Gelar batu abu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemasangan Paving Block tebal 8cm</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketBc4">Rp 25.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketBc4">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 5</h5></div>
                <p class="text-center text-white fw-bold">Pasang Paving dari 0 sampe finishing tebal 8cm</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu makadam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemadatan area menggunakan mesin Walls</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar abu batu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Upah tenaga pasang</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemasangan Paving Block tebal 8cm</small></li>
                  <li class="list-group-item bg-info text-white"><small>Finishing dengan mesin Stamper</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketBc5">Rp 185.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketBc5">Pilih Paket</a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-6">
              <div class="card bg-info p-1 shadow mb-2">
                <div class="text-center text-white shadow p-0 card-header mb-1"><h5>Paket 6</h5></div>
                <p class="text-center text-white fw-bold">Pasang Grass Block dari 0 sampe finishing tebal 6cm press mesin</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-info text-white"><small>Pembersihan lokasi</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemadatan area menggunakan mesin Walls</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar batu makadam</small></li>
                  <li class="list-group-item bg-info text-white"><small>Gelar abu batu</small></li>
                  <li class="list-group-item bg-info text-white"><small>Pemasangan Grass block tebal 6cm press mesin</small></li>
                  <li class="list-group-item bg-info text-white"><small>Upah tenaga pasang</small></li>
                  <li class="list-group-item bg-info text-white"><small>Finishing dengan mesin Stamper</small></li>
                </ul>
                <a class="btn btn-primary btn-sm paketBc6">Rp 210.000 /m<sup>2</sup></a>
                <a class="btn btn-warning btn-sm mt-1 text-white paketBc6">Pilih Paket</a>
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
          @foreach($blockPhoto as $block)
          <div class="col-lg-3 col-md-4 col-6 mb-2">
            <a href="/img/gallery/{{ $block->name }}" data-lightbox="image-1" data-title="">
              <img src="/img/gallery/{{ $block->name }}" alt="" class="img-fluid">
            </a>
          </div>
          @endforeach
        </div>          
      </div>
      
    </div>
  </section>
  {{-- EndGallery --}}
@endsection