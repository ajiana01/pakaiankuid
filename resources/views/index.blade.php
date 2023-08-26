<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.png" type="image/favicon">
    <title>PakaiankuId</title>
    <script type="module" src="./js/main.js"></script>
    
  </head>
  <body>
   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg">
    <div class="container-fluid ms-4 me-4">
        <a class="navbar-brand" href="#">
            <img src="assets/img/LogoPakaiankuID.png" alt="Logo" width="170" height="43" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
            <ul class="navbar-nav nav-underline">
              <li class="nav-item">
                <a class="nav-link" href="pages/teSell.html">TeSell</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="pages/teChange.html">TeChange</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/tePair.html">TePair</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/teUp.html">TeUp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/teDonation.html">TeDonation</a>
              </li>
            </ul>
          </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari Pakaian" aria-label="Cari Pakaian">
        <button class="btn rounded-circle position-absolute search-button" type="submit"><i class="bi bi-search fs-6"></i></button>
      </form>
        <ul class="navbar-nav">
          <li class="nav-item ms-2 me-2">
            <button type="button" class="btn rounded-circle position-relative">
                <i class="bi bi-heart"></i>
                <span class="position-absolute top-0 start-80 translate-middle badge rounded-pill bg-danger">2 <span class="visually-hidden">unread messages</span></span>
              </button>
          </li>
          <li class="nav-item ms-2 me-2">
            <button type="button" class="btn rounded-circle position-relative">
                <i class="bi bi-bag"></i><span class="position-absolute top-0 start-80 translate-middle badge rounded-pill bg-danger">2 <span class="visually-hidden">unread messages</span></span>
              </button>
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item ms-2 me-2">
            <a class="btn bg-primary rounded-0 text-bg-primary" href="#" role="button">Masuk</a>
        </li>
        </ul>
      
    </div>
  </nav>
   <!-- Navbar End -->

   <!-- Main Slider -->
   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/Slide 1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption text-start position-absolute top-50 start-0 translate-middle-y ms-5" style="width: 50%;">
            <h1 style="font-weight: 600;">SELAMATKAN BUMI DENGAN TETAP FASHIONABLE BERSAMA <a class="bg-white text-wrap" style="width:fit-content;color:#1766B0;font-weight: 600; text-decoration:none;">PAKAIANKUID</a></h1>
            <p style="font-weight: 200;">Kami butuh orang seperti anda yang peduli lingkungan dengan mengelola pakaian bekasmu</p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/Slide 1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/Slide 1.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="visually-hidden">Next</span>
      </button>
  </div>
   <!-- Main Slide End -->

   <!-- Cart Start -->
   <div class="container text-center mt-5">
    <div class="row">
      <div class="col">
        <img src="assets/img/Content 1.png" class="mx-4 d-block img-fluid" alt="PengertianPakainakuid">
      </div>
      <div class="col text-start ms-4" style="padding-top:auto;">
        <h1>Apa itu PakainakuId?</h1>
        <p>Platform yang didedikasikan untuk mengelola pakaian bekas dengan cara inovatif dan fokus pada mode berkelanjutan menggunakan konsep mengoptimalkan style fashion dan meminimkan limbah fashion.</p>
      </div>
    </div>
  </div>

  
  <div class="container mt-5">
    <h3><a href="#" class="text-black fw-bold mt-5" >Rekomendasi Produk</a></h3>
    <div class="grid row gap-0 text-center">
      <div class="col-md-4 mb-3">
        <div class="card rounded-0">
            <img src="assets/img/Item.png" class="card-img-top rounded-0" alt="produk" href="#" style="cursor:pointer;">
            <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
            <div class="card-body">
                <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium">Blue And White Sleeveless Top Wanita
                </h6></a>
              <p class="card-text text-start fw-bold fs-5">Rp 55.000</p>
            </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card rounded-0">
            <img src="assets/img/Item.png" class="card-img-top rounded-0" alt="produk" href="#" style="cursor:pointer;">
            <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
            <div class="card-body">
                <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium">Blue And White Sleeveless Top Wanita
                </h6></a>
              <p class="card-text text-start fw-bold fs-5">Rp 55.000</p>
            </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card rounded-0">
            <img src="assets/img/Item.png" class="card-img-top rounded-0" alt="produk" href="#" style="cursor:pointer;">
            <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
            <div class="card-body">
                <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium">Blue And White Sleeveless Top Wanita
                </h6></a>
              <p class="card-text text-start fw-bold fs-5">Rp 55.000</p>
            </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card rounded-0">
            <img src="assets/img/Item.png" class="card-img-top rounded-0" alt="produk" href="#" style="cursor:pointer;">
            <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
            <div class="card-body">
                <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium">Blue And White Sleeveless Top Wanita
                </h6></a>
              <p class="card-text text-start fw-bold fs-5">Rp 55.000</p>
            </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card rounded-0">
            <img src="assets/img/Item.png" class="card-img-top rounded-0" alt="produk" href="#" style="cursor:pointer;">
            <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
            <div class="card-body">
                <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium">Blue And White Sleeveless Top Wanita
                </h6></a>
              <p class="card-text text-start fw-bold fs-5">Rp 55.000</p>
            </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card rounded-0">
            <img src="assets/img/Item.png" class="card-img-top rounded-0" alt="produk" href="#" style="cursor:pointer;">
            <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
            <div class="card-body">
                <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium">Blue And White Sleeveless Top Wanita
                </h6></a>
              <p class="card-text text-start fw-bold fs-5">Rp 55.000</p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="text-center">
      <button class="btn btn-primary rounded-0">Lihat semua produk</button>
    </div>
  </div>
   <!-- Cart End -->

   <!-- Layanan Start -->
   <div class="container mt-5">
    <h3><p class="text-center"><a href="#" class="text-center text-black fw-bold mt-5" >Layanan Kami</a></p></h3>
    <div class="row row-cols-3">
      <div class="col p-5">
        <figure class="figure text-center">
          <img src="assets/img/TeSell.png" class="figure-img img-fluid rounded" alt="TeSell">
          <h4 class="fw-bold pt-3">TeSell</h4>
          <figcaption class="figure-caption">Platform yang nyaman dan aman untuk jual beli pakaian bekas maupun aksesoris pakaian.</figcaption>
        </figure>
      </div>
      <div class="col">
        <div class="col p-5">
          <figure class="figure text-center">
            <img src="assets/img/TeChange.png" class="figure-img img-fluid rounded" alt="TeChange">
            <h4 class="fw-bold pt-3">TeChange</h4>
            <figcaption class="figure-caption">Tukar menukar pakaian bekas yang layak dengan model bervariasi antar sobat pakaiankuid.</figcaption>
          </figure>
        </div>
      </div>
      <div class="col">
        <div class="col p-5">
          <figure class="figure text-center">
            <img src="assets/img/TePair.png" class="figure-img img-fluid rounded" alt="TePair">
            <h4 class="fw-bold pt-3">TePair</h4>
            <figcaption class="figure-caption">Layanan permak pakaian yang diintegrasikan dengan mitra penjahit lokal.</figcaption>
          </figure>
        </div>
      </div>
  </div>

  <div class="row row-cols-2"> 
    <div class="col"><div class="col p-5">
      <figure class="figure text-center">
        <img src="assets/img/TeUp.png" class="figure-img img-fluid rounded" alt="TeUp">
        <h4 class="fw-bold pt-3">TeUp</h4>
        <figcaption class="figure-caption px-5 p-custom">Manfaatkan kembali pakaian bekas dengan merubah model pakaian menjadi yang unik, kreatif, dan menarik.</figcaption>
      </figure>
    </div>
  </div>
    <div class="col">
      <div class="col p-5">
        <figure class="figure text-center">
          <img src="assets/img/TeDonation.png" class="figure-img img-fluid rounded" alt="TeDonation">
          <h4 class="fw-bold pt-3">TeDonation</h4>
          <figcaption class="figure-caption p-custom">Penggalangan donasi pakaian layak pakai untuk masyarakat yang membutuhkan.</figcaption>
        </figure>
      </div>
    </div>
  </div>
  </div>
   <!-- Layanan End -->

   <!-- Kata Sobat Start -->
   <h3><p class="text-center"><a href="#" class="text-center text-black fw-bold mt-5" >Kata Sobat PakaiankuId</a></p></h3>
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-4">
              <!-- card here -->
              <div class="col card mb-3 p-3">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Fery D Sambo</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Hasil permak pakianku ukurannya pas dan sesuai dengan keinginan serta cepat dalam pengerjaannya.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
            <div class="col-4">
              <!-- card here -->
              <div class="card mb-3 p-3">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Mario D Andy</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Ga nyangka pakaianku yang uda lama gakepake karena modelnya udah lama dirubah melalui TeUp jadi kece abis.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
            <div class="col-4">
              <!-- card here -->
              <div class="card mb-3 p-3">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Al D Taher</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Awalnya bersih bersih lemari ternyata banyak pakaian yang modelnya uda bosen namun untung ada TeChange bisa bertukar pakaian.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col">
              <!-- card here -->
              <div class="card mb-3 p-3" style="max-width: 500px;">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Fery D Sambo</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Hasil permak pakianku ukurannya pas dan sesuai dengan keinginan serta cepat dalam pengerjaannya.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
            <div class="col">
              <!-- card here -->
              <div class="card mb-3 p-3" style="max-width: 500px;">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Mario D Andy</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Ga nyangka pakaianku yang uda lama gakepake karena modelnya udah lama dirubah melalui TeUp jadi kece abis.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
            <div class="col">
              <!-- card here -->
              <div class="card mb-3 p-3" style="max-width: 500px;">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Al D Taher</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Awalnya bersih bersih lemari ternyata banyak pakaian yang modelnya uda bosen namun untung ada TeChange bisa bertukar pakaian.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col">
              <!-- card here -->
              <div class="card mb-3 p-3" style="max-width: 500px;">
                <div class="col">
                  <div class="row justify-content-start ">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Fery D Sambo</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Hasil permak pakianku ukurannya pas dan sesuai dengan keinginan serta cepat dalam pengerjaannya.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
            <div class="col">
              <!-- card here -->
              <div class="card mb-3 p-3" style="max-width: 500px;">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Mario D Andy</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Ga nyangka pakaianku yang uda lama gakepake karena modelnya udah lama dirubah melalui TeUp jadi kece abis.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
            <div class="col">
              <!-- card here -->
              <div class="card mb-3 p-3" style="max-width: 500px;">
                <div class="col">
                  <div class="row justify-content-start">
                    <div class="col-3 text-center">
                      <img src="assets/img/photo-profil.png" class="img-fluid rounded-start" alt="profile-photo">
                    </div>
                    <div class="col pt-1">
                      <h5 class="card-title">Al D Taher</h5>
                      <p class="card-text"><small class="text-muted">Kota Semarang</small></p>
                    </div>
                  </div>
                  <p class="card-text pt-3">Awalnya bersih bersih lemari ternyata banyak pakaian yang modelnya uda bosen namun untung ada TeChange bisa bertukar pakaian.</p>
                </div>
              </div>
              <!-- card end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container carousel-custom">
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
   <!-- Kata Sobat End -->

   <!-- FAQ start -->
   <div class="container mt-5 text-center">
    <h3><p class="text-center"><a href="#" class="text-center text-black fw-bold mt-5" >FAQ</a></p></h3>
    <!-- content faq start -->
    <p><a class="btn border-2 border-dark width-faq text-start fs-4 rounded-0" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Apa itu PakaiankuId?</a></p>
    <div class="col">
      <div class="collapse multi-collapse mb-3" id="multiCollapseExample1">
        <div class="card card-body">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et veritatis, magnam quae quis fugiat unde dolore dolorem voluptates accusantium sequi saepe, vitae molestiae alias iure.
        </div>
      </div>
    </div>
    <!-- content faq end -->

    <!-- content faq start -->
    <p><button class="btn border-2 border-dark width-faq text-start fs-4 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">PakaiankuId menyediakan fitur apa saja?</button></p>
    <div class="col">
      <div class="collapse multi-collapse mb-3" id="multiCollapseExample2">
        <div class="card card-body">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam magni commodi aliquid veniam nam odit sint inventore itaque magnam, tempora dicta nobis ipsam delectus veritatis.
        </div>
      </div>
    </div>
    <!-- content faq end -->

    <!-- content faq start -->
    <p><button class="btn border-2 border-dark width-faq text-start fs-4 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Apakah dapat request model jika ingin menginovasikan pakaian?</button></p>
    <div class="col">
      <div class="collapse multi-collapse mb-3" id="multiCollapseExample3">
        <div class="card card-body">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam magni commodi aliquid veniam nam odit sint inventore itaque magnam, tempora dicta nobis ipsam delectus veritatis.
        </div>
      </div>
    </div>
    <!-- content faq end -->

    <!-- content faq start -->
    <p><button class="btn border-2 border-dark width-faq text-start fs-4 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Jika menggunakan fitur atau layanan PakaiankuId pembayarannya melalui apa?</button></p>
    <div class="col">
      <div class="collapse multi-collapse mb-3" id="multiCollapseExample4">
        <div class="card card-body">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam magni commodi aliquid veniam nam odit sint inventore itaque magnam, tempora dicta nobis ipsam delectus veritatis.
        </div>
      </div>
    </div>
    <!-- content faq end -->

    <!-- content faq start -->
    <p><a class="btn border-2 border-dark width-faq text-start fs-4 rounded-0" data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5">Apa itu PakaiankuId?</a></p>
    <div class="col">
      <div class="collapse multi-collapse mb-3" id="multiCollapseExample5">
        <div class="card card-body">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et veritatis, magnam quae quis fugiat unde dolore dolorem voluptates accusantium sequi saepe, vitae molestiae alias iure.
        </div>
      </div>
    </div>
    <!-- content faq end -->
    </div>
   <!-- FAQ end -->

   <!-- Ayo Bergabung Start -->
  <div class="bg-primary text-center p-4 mt-5">
    <h3 class="tx-white fw-bold mb-3">Ayo Bergabung Bersama Kami</h3>
    
    <div class="d-grid gap-2 col-7 mx-auto mb-3">
      <p class="fs-5 tx-white">Nikmati layanan pakaiankuid dengan mudah dan dapatkan newsletter mengenai informasi menarik lainnya, segera bergabung dengan kami sebagai agent of change untuk menyelamatkan bumi</p>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
      <button class="btn bg-white rounded-0 text-primary" type="button">Bergabung Sekarang</button>
    </div>
  </div>
  <div class="blank-space"></div>
    <!-- Ayo Bergabung End -->

    <!-- Footer-start -->
    <div class="container p-0 mb-4">
      <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 gy-4 justify-content-center text-center">
        <div class="col-3 pe-5">
          <div >
            <img src="assets/img/footer-logo.png" class="card-img-top" alt="PakaiankuId">
          </div>
        </div>
        <div class="col-3">
          <ul class="list-group text-start">
            <li class="list-group-item mb-2 fw-bold border-0 text-uppercase bg-no">Layanan Kami</li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">TeSell</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">TeChange</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">TePair</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">TeUp</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">TeDonation</a></li>
          </ul>
        </div>
        <div class="col-3">
          <ul class="list-group text-start bg-no">
            <li class="list-group-item mb-2 fw-bold border-0 text-uppercase bg-no">Informasi</li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">Tentang Kami</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">Aturan Pengguna</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">Kebijakan Privasi</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">Kebijakan Hak Cipta</a></li>
            <li class="list-group-item border-0 bg-no"><a href="#" class="text-decoration-none text-black">Syarat & Ketentuan Berlaku</a></li>
          </ul>
        </div>
        <div class="col-3">
          <ul class="list-group text-start">
            <li class="list-group-item mb-2 fw-bold border-0 text-uppercase bg-no">Pelayanan</li>
            <li class="list-group-item border-0 bg-no">09:00 - 17:00 WIB</li>
            <li class="list-group-item border-0 bg-no">(Senin - Minggu)</li>
            <li class="list-group-item border-0 fw-bold text-uppercase bg-no">Sosial Media</li>
            <li class="list-group-item border-0 bg-no m-0 p-0">
              <ul class="list-group list-group-horizontal">
                <li class="list-group-item border-0 bg-no"><a href="#"><img src="assets/img/facebook.png" alt="facebook"></a></li>
                <li class="list-group-item border-0 bg-no"><a href="#"><img src="assets/img/youtube.png" alt="youtube"></a></li>
                <li class="list-group-item border-0 bg-no"><a href="#"><img src="assets/img/instagram.png" alt="instagram"></a></li>
                <li class="list-group-item border-0 bg-no"><a href="#"><img src="assets/img/tik_tok.png" alt="tiktok"></a></li>

              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </div>

    <div class="bg-primary">
      <footer class="text-white text-center py-3">
        <p class="p-0 m-0">Copyright &copy; PakaiankuId 2023 All Rights Reserved</p>
      </footer>
   </div>
    <!-- Footer End -->
  </body>
</html>