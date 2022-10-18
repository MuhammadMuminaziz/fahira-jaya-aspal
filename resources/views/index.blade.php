@extends('layouts.main')

@section('jumbotron')
<div class="mt-5">
  <img src="/img/aspal1.jpg" class="w-100 img-fluid" alt="fahira jaya aspal">
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
  
  {{-- Content --}}
    <section class="mt-3 mb-5">
        <div class="container mx-auto py-5">
            <div class="row">
                <div class="row text-center">
                    <p class="display-6">Selamat Datang di <a href="/" style="text-decoration: none;" class="fw-bold">Fahira Jaya Aspal</a></p>
                  </div>
                  <div class="row">
                    <p style="text-align: justify;"><span class="ms-5"></span>Fahira Jaya Aspal adalah sebuah Perusahaan kontraktor yang bergerak di Bidang Pengaspalan selama belasan tahun. Tentunya, kami bekerja bukan hanya untuk mempentingkan kepentingan pribadi atau organisasi tapi juga untuk mendapatkan hasil yang maksimal serta kepuasan pada klien kami. Disini kami menyediakan jasa pengaspalan jalan dan pemasangan Paving Block serta pekerjaan lainnya yang dikerjakan oleh para tukang yang berpengalaman serta berkualitas sehingga kualitas kerja kami dapat di andalkan dengan baik. Kami memahami betul apa yang di butuhkan klien kami, oleh karena itu kami jamin bisa bekerja secara objektif dan tepat waktu.</p>
          
                    <p style="text-align: justify;"><span class="ms-5"></span>Tentunya kami juga menggunakan bahan-bahan dan peralatan yang memadai serta harga yang dapat bersaing di pasaran. Kami adalah solusi terbaik bagi anda yang sedang membutuhkan jasa pengaspalan atau pemasangan Paving Block yang berada di daerah Jabodetabek. Untuk info lebih lengkap silahkan <a href="https://api.whatsapp.com/send?phone=6285316769950" class="text-decoration-none">klik link dibawah ini.</a></p>
                  </div>
            </div>
        </div>
    </section>
    {{-- End Content --}}

    {{-- Services --}}
    <section id="services" class="py-5 mt-5">
        <div class="container mx-auto">
            <h3 class="text-center mb-4">Services</h3>
            <div class="row justify-content-center">
                <div class="col-lg-5 mb-2">
                    <a href="/aspal" class="text-decoration-none text-dark">
                      <div class="card">
                        <img src="/img/aspal3.jpg" class="card-img-top" alt="Aspal Hotmix">
                        <div class="card-body">
                          <h5 class="card-title">Aspal Hotmix</h5>
                          <p class="card-text">Aspal Hotmix merupakan layanan utama kami yang tersedia dengan harga terjangkau serta kualitas yang bermutu.</p>
                          <a href="/aspal" class="btn btn-primary btn-sm">Info lebih lanjut</a>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="col-lg-5 mb-2">
                    <a href="/block" class="text-decoration-none text-dark">
                      <div class="card">
                        <img src="/img/block1.jpg" class="card-img-top" alt="Paving Block">
                        <div class="card-body">
                          <h5 class="card-title">Paving Block</h5>
                          <p class="card-text">Kami menyediakan juga jasa pemasangan paving block yang siap di pasang dimana saja.</p>
                          <a href="/paving" class="btn btn-primary btn-sm mt-4">Info lebih lanjut</a>
                        </div>
                      </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Services --}}

    {{-- Comment --}}
    <section id="comment" class="mt-5" style="background-image: url('/img/aspal2.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; height: 600px; background-position: center;">
        <div class="container mx-auto py-5">
            <h3 class="text-center mb-4 text-white">Comment</h3>
            <p class="text-center text-white mb-2">Dapatkan Pengalaman Terbaikmu Bersama Kami</p>
            <div class="row justify-content-center">
              <div class="col-lg-6 col-10 rounded px-3 overflow-auto pt-4" style="background-color: rgba(255, 255, 255, .3); height: 400px;">
                @foreach ($comments as $comment)
                <div class="d-flex align-items-center">
                    <img src="/img/comment/{{ $comment->photo }}" class="rounded-circle me-4" width="70" height="70" alt="">
                    <div>
                      <figcaption class="blockquote-footer mt-1 mb-0">
                        <cite title="Source Title">{{ $comment->nama }}</cite>
                      </figcaption>
                      <p class="fst-italic text-primary ms-4"><small>{{ $comment->created_at->diffForHumans() }}</small></p>
                      <p>{{ $comment->comment }}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-6 col-10 justify-content-end d-flex">
                <button class="btn btn-primary btn-sm mt-2" type="button" data-bs-toggle="modal" data-bs-target="#commentModel">Comment</button>
              </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="commentModel" tabindex="-1" aria-labelledby="commentModelLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="commentModelLabel">Comment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/addComment" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control shadow-none @error('name') is-invalid @enderror" id="name" value="{{ old('nama') }}" required autofocus>
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <label for="commet" class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-10">
                  <textarea type="text" name="comment" class="form-control shadow-none @error('comment') is-invalid @enderror" id="comment" required></textarea>
                  @error('comment')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <label for="photo" class="form-label">Photo</label>
                <input class="shadow-none @error('photo') is-invalid @enderror" name="photo" type="file" id="photo">
                @error('photo')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm">Comment now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- End Comment --}}

    {{-- Blog --}}
    <section id="blog">
      <div class="container py-5">
        <h3 class="text-center mb-4">Blog</h3>
        <div class="row justify-content-center">
          @foreach($blogs as $blog)
          <div class="col-lg-4 mb-2">
            <a href="" class="text-decoration-none text-dark">
              <div class="card">
                <img src="/img/blog/{{ $blog->photo }}" class="card-img-top" alt="{{ $blog->job->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $blog->title }}</h5>
                  <p class="card-text mb-3">{{ $blog->excerpt }}</p>
                  <a href="/blogs/{{ $blog->slug }}" class="btn btn-primary shadow-none btn-sm">Lihat</a>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          <div class="row mt-3">
            <div class="col text-center">
              <a href="/blogs" class="btn btn-sm btn-info text-white">Lihat blog lainnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- EndBlog --}}

    {{-- Gallery --}}
    <section id="gallery">
      <div class="container py-5">
        <h3 class="text-center mb-4">Gallery</h3>

        <div class="row justify-content-center my-4">
          <div class="col-lg-2 col-sm-3 col-4">
            <button id="semuabtn" class="btn klik btn-outline-primary rounded-pill shadow-none w-100 btn-sm mb-1 active">Semua</button>
          </div>
          <div class="col-lg-2 col-sm-3 col-4">
            <button id="aspalbtn" class="btn klik btn-outline-primary rounded-pill shadow-none w-100 btn-sm mb-1">Aspal Hotmix</button>
          </div>
          <div class="col-lg-2 col-sm-3 col-4">
            <button id="blockbtn" class="btn klik btn-outline-primary rounded-pill shadow-none w-100 btn-sm mb-1">Paving Block</button>
          </div>
        </div>

        <div id="semua">
          <div class="row justify-content-center">
            @foreach($allPhoto as $all)
            <div class="col-lg-3 col-md-4 col-6 mb-2">
              <a href="/img/gallery/{{ $all->name }}" data-lightbox="image-0" data-title="">
                <img src="/img/gallery/{{ $all->name }}" alt="" class="img-fluid">
              </a>
            </div>
            @endforeach
          </div>
        </div>

        <div id="aspal">
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

        <div id="block">
          <div class="row justify-content-center">
            @foreach($blockPhoto as $block)
            <div class="col-lg-3 col-md-4 col-6 mb-2">
              <a href="/img/gallery/{{ $block->name }}" data-lightbox="image-2" data-title="">
                <img src="/img/gallery/{{ $block->name }}" alt="" class="img-fluid">
              </a>
            </div>
            @endforeach
          </div>
        </div>
        
      </div>
    </section>
    {{-- EndGallery --}}

    {{-- About --}}
    <section id="about">
      <div class="container py-5">
        <h3 class="text-center mb-4">About</h3>
        <div class="row justify-content-center mb-5">
          <div class="col-lg-7">
            <p style="text-align: justify;"><span class="ms-5 fs-2">Hallo...</span> selamat datang di <a href="/" class="text-decoration-none">Fahira Jaya Aspal</a>, Kami adalah sebuah perusahaan kontraktor yang bergerak di bidang pemasangan atau perbaikan khususnya pada jalan. Kami sudah berdiri sejak tahun 1990 yang di prakarsai oleh <a href="https://api.whatsapp.com/send?phone=6285316769950" class="text-decoration-none">Ahmad Wahyudi,</a> hingga saat ini beliau masih berkontribusi sekaligus menjadi pengawas/pekerja langsung di lapangan agar hasil yang dihasilkan bisa mencapai tujuan atau melebihi ekspetasi klien kami.</p>
            <p style="text-align: justify;"><span class="ms-5"></span>Tentunya kami menyadari masih banyak kekurangan namun dengan pengalaman kerja kami, kami yakin bisa menjadi partner klien kami dengan sangat baik. <a href="/" class="text-decoration-none">Fahira Jaya Aspal</a> bertempat di Jl. Joe Kelapa Tiga RT 001/RW 006 No. 95A, Kelurahan Lenteng Agung, Kecamatan Jagakarsa, RT.1/RW.6, Kota, Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520, Indonesia.</p>
          </div>
          <div class="col-lg-5">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.556205346798!2d106.83085751419446!3d-6.321872363619926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ede3f94a7729%3A0x3caff01aa4db8fb1!2sFahira%20Jaya%20Aspal!5e0!3m2!1sid!2sid!4v1651562225625!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="row mt-3">
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
    {{-- Endabout --}}

    <!-- Contact -->
  <section id="contact">
    <div class="container py-5 mb-5">
      <h2 class="text-center my-5">Contact</h2>
      <div class="row justify-content-center">

        <!-- Customer -->
        <div class="col-lg-4 mb-5">
          <small class="fw-bold text-muted">Customer</small>
          <ul class="list-group list-group-flush ms-2" style="line-height: 0px;">
            <li class="list-group-item fst-italic" style="border: none;">
              <a href="#" class="text-decoration-none text-dark"> <i class="bi bi-envelope-open me-2"></i>kontraktor@fahirajayaaspal.com</a>
            </li>
            <li class="list-group-item fst-italic" style="border: none;">
              <a href="#" class="text-decoration-none text-dark"> <i class="bi bi-envelope-open me-2"></i>ahmadwahyudi1883@gmail.com</a>
            </li>
            <li class="list-group-item" style="border: none;"><i class="bi bi-telephone me-2"></i>0853 1676 9950</li>
            <li class="list-group-item" style="border: none;">
              <a href="https://api.whatsapp.com/send?phone=6285316769950" class="text-decoration-none text-dark"><i class="bi bi-whatsapp me-2"></i>Ahmad Wahyudi</a>
            </li>
            <li class="list-group-item" style="border: none;"><i class="bi bi-instagram me-2"></i>Fahira_Jaya_Aspal</li>
            <li class="list-group-item" style="border: none;"><i class="bi bi-facebook me-2"></i>Fahira Jaya Aspal</li>
          </ul>
        </div>

        <!-- Kirim Email -->
        <div class="col-lg-6">
          <h5 class="text-center">Kirim Email</h5>
          <div class="alert alert-warning">
            Mohon maaf untuk sekarang tidak bisa menggunakan fitur order langsung! Silahkan hubungi kami via <a href="https://api.whatsapp.com/send?phone=6285316769950" class="text-decoration-none">WhatsApp</a> atau <a href="mailto:ahmadwahyudi1883@gmail.com" class="text-decoration-none">email</a> untuk mendapatkan penawaran yang terbaik.
          </div>
          <div class="card p-1">
            <div class="card-body">
              <form method="post" action="">
                @csrf
                <div class="mb-3">
                  <label for="kepada" class="form-label">Kepada</label>
                  <input type="email" class="form-control form-control-sm" id="kepada" placeholder="kontraktor@fahirajayaaspal.com" disabled>
                </div>
                <div class="mb-3">
                  <label for="subjek" class="form-label">Subjek</label>
                  <input type="text" class="form-control form-control-sm" id="subjek" name="subject" required disabled>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control form-control-sm" id="pesan" rows="3" name="pesan" required disabled></textarea>
                </div>
                <div class="d-flex justify-content-end">
                  <button href="" class="btn btn-sm btn-primary" type="submit" name="mail">Kirim Email</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- EndContact -->
@endsection
