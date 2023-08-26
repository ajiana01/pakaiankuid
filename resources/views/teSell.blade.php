<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/img/favicon.png" type="image/favicon">
    <title>PakaiankuId</title>
    <script type="module" src="../js/main.js"></script>
    
  </head>
  <body>

    <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg">
    <div class="container-fluid ms-4 me-4">
        <a class="navbar-brand" href="../index.html">
            <img src="../assets/img/LogoPakaiankuID.png" alt="Logo" width="170" height="43" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
            <ul class="navbar-nav nav-underline">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="teSell.html">TeSell</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="teChange.html">TeChange</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tePair.html">TePair</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teUp.html">TeUp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teDonation.html">TeDonation</a>
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

   <!-- banner teChange start -->
  
    <div class="card border-0">
      <img src="../assets/img/BannerTeSell.png" alt="Banner Techange" style="width: 100%;">
      <div class="card-img-overlay text-center d-flex justify-content-center">
        <div class="container align-items-center row">
          <h3>Lorem ipsum dolor sit amet.</h3>
        </div>
      </div>
    </div>
   <!-- banner teChange end -->

    <div class="container p-0">
    <!-- Product start -->
    <div class="container row mt-3">
      <!-- sidebar- start -->
      <div class="col-2">
        <ul class="list-group text-start">
          <li class="list-group-item fw-bold fs-5">Filter Produk</li>
          <li class="list-group-item fw-bold border-bottom-0">Kategori</li>
          <li class="list-group-item border-bottom-0">Pria</li>
          <li class="list-group-item border-bottom-0">Wanita</li>
          <li class="list-group-item">Anak-anak</li>
          <li class="list-group-item border-bottom-0 fw-bold">Ukuran</li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="45" id="ukuran45">
            <label class="form-check-label stretched-link" for="ukuran45">45</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="44" id="ukuran44">
            <label class="form-check-label stretched-link" for="ukuran44">44</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="43" id="ukuran43">
            <label class="form-check-label stretched-link" for="ukuran43">43</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="42" id="ukuran42">
            <label class="form-check-label stretched-link" for="ukuran42">42</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="41" id="ukuran41">
            <label class="form-check-label stretched-link" for="ukuran41">41</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="40" id="ukuran40">
            <label class="form-check-label stretched-link" for="ukuran40">40</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="S" id="ukuranS">
            <label class="form-check-label stretched-link" for="ukuranS">S</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="M" id="ukuranM">
            <label class="form-check-label stretched-link" for="ukuranM">M</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="L" id="ukuranL">
            <label class="form-check-label stretched-link" for="ukuranL">L</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="XL" id="ukuranXL">
            <label class="form-check-label stretched-link" for="ukuranXL">XL</label>
          </li>
          <li class="list-group-item border-bottom-0 fw-bold">Warna</li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="merah" id="warnamerah">
            <label class="form-check-label stretched-link" for="warnamerah">Merah</label>
          </li>
          <li class="list-group-item border-bottom-0">
            <input class="form-check-input me-1" type="checkbox" value="hitam" id="warnahitam">
            <label class="form-check-label stretched-link" for="warnahitam">Hitam</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" value="putih" id="warnaputih">
            <label class="form-check-label stretched-link" for="warnaputih">Putih</label>
          </li>
        </ul>
      </div>
      <!-- sidebar end -->
      
      <!-- main item start -->
      <div class="container col-10">

        <div class="container text-center">
          <div class="row">
            
            <div class="col-sm-5 col-md-6 text-start">
              <button type="button" class="btn btn-outline-secondary" disabled>16 Item ditemukan</button>
            </div>
            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 text-end">
              <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Terbaru</a></li>
                  <li><a class="dropdown-item" href="#">Terfavorit</a></li>
                  <li><a class="dropdown-item" href="#">Termurah</a></li>
                  <li><a class="dropdown-item" href="#">Termahal</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- item here -->
            <div class="col-12 mt-3 p-0">
              <div class="container text-center">
                <div class="row row-cols-4 align-items-start">

                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-3 m-0 px-2">
                    <div class="card">
                      <img src="../assets/img/Item.png" class="card-img-top" alt="produk" href="#" style="cursor:pointer;">
                      <a href="#" class="btn position-absolute end-0 rounded-circle text-danger" role="button" data-bs-toggle="button"><i class="bi bi-heart text-black"></i></a>
                      <div class="card-body">
                          <a href="#" class="disable-link"><h6 class="card-text text-start fw-medium fs-6">Blue And White Sleeveless Top Wanita
                          </h6></a>
                          <p class="card-text text-start fs-4 fw-bold m-0">Rp. 55.000</p>
                        <p class="card-text text-start">Feri AD - Kota Semarang</p>
                      </div>
                    </div>
                  </div>
                  
                  
                  
                
                </div>
              </div>
            </div>

          </div>
        </div>
        
        <div class="container col-10 d-flex justify-content-center my-3">
            <nav aria-label="Page navigation">
                <ul class="pagination rounded-4">
                  <li class="page-item mx-1">
                    <a class="page-link m-0" href="#" aria-label="Previous">
                      <span class="bi bi-chevron-left" aria-hidden="true"> </span>
                    </a>
                  </li>
                  <li class="page-item mx-1"><a class="page-link" href="#">1</a></li>
                  <li class="page-item mx-1"><a class="page-link" href="#">2</a></li>
                  <li class="page-item mx-1"><a class="page-link" href="#">3</a></li>
                  <li class="page-item mx-1">
                    <a class="page-link" href="#" aria-label="Next">
                      <span class="bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
      </div>

      

      <!-- main item end -->

        </div>
    <!-- Product End -->
    <div class="blank-space"></div>
</div>

    <!-- footer start -->
    <div class="container p-0 mb-4">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 gy-4 justify-content-center text-center">
          <div class="col-3 pe-5">
            <div >
              <img src="../assets/img/footer-logo.png" class="card-img-top" alt="PakaiankuId">
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
                  <li class="list-group-item border-0 bg-no"><a href="#"><img src="../assets/img/facebook.png" alt="facebook"></a></li>
                  <li class="list-group-item border-0 bg-no"><a href="#"><img src="../assets/img/youtube.png" alt="youtube"></a></li>
                  <li class="list-group-item border-0 bg-no"><a href="#"><img src="../assets/img/instagram.png" alt="instagram"></a></li>
                  <li class="list-group-item border-0 bg-no"><a href="#"><img src="../assets/img/tik_tok.png" alt="tiktok"></a></li>
  
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