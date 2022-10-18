@extends('layouts.main')

@section('page')
<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <img src="/img/blog/{{ $blog->photo }}" alt="{{ $blog->job->name }}" class="img-fluid mt-5 mb-2">
            <h1 class="mb-0">{{ $blog->title }}</h1>
            <small class="text-primary mb-4">{{ $blog->created_at->diffForHumans() }}</small>

            <article class="my-3">
                <p>{!! $blog->body !!}</p>
            </article>

            <div class="row mb-5">
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

            <div class="row">
                <h4>Aspal Hotmix</h4>
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
                  <h4>Paving Block</h4>
                  <p style="text-align: justify;"><span class="ms-5"></span>Paving block adalah bahan bangunan yang dibuat dari campuran semen, pasir dan air sehingga karakteristiknya hampir mendekati dengan karakteristik mortar. Mortar adalah bahan bangunan yang dibuat dari pencampuran antara pasir dan agregat halus lainya dengan bahan pengikat sehingga manjadi keras dan mempunyai sifat-sifat seperti batuan.</p>
                <p>Paving block memiliki nilai estetika yang bagus, karena selain memiliki bentuk segiempat ataupun seibanyak dapat pula berwarna seperti aslinya ataupun diberikan zat pewarna dalam komposisi pembuatanya. Paving block inin sendiri berfungsi untuk lantai yang banyak digunakan di luar bangunan serta tidak mudah retak-retak dan cacat.</p>
                <p>Paving Block adalah solusi terbaik untuk lahan resapan saat hujan dan banjir. Pemasangannya tidak susah dan perawatannya pun mudah. Pemasangan dengan motif yang baik akan menambah keindahan bangunan sekitarnya. Paving block diproduksi dengan warna natural, reguler (merah, hitam) dan warna khusus (hijau, kuning, biru). Tersedia berbagai model, warna dan ukuran Paving Block Dengan pola dan pemasangan yang baik, Paving Block berkualitas akan lebih tambah menarik dan rapi. Tersedia banyak disain pemasangan paving block yang menarik.</p>
                  <p>Untuk anda yang membutuhkan Jasa Pengaspalan Jalan dengan menggunakan Aspal Hotmix dan Paving Block dengan kualitas baik serta harga yang ramah, kami siap membantu.</p>
            </div>
        
            <a class="badge bg-danger text-decoration-none" href="/blogs">Back to Blog</a>
        </div>
    </div>
</div>
@endsection