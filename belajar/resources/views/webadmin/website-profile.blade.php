@extends('webadmin.navside')
@section('isi')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Profile Desa</h5>

            <!-- General Form Elements -->
            <form>

              <div class="row mb-4">
                <div class="col-lg-12">
           <div class="card-sa col-12 mb-3 d-flex flex-row">
           <div class="col-3 mx-auto">
             <label class="d-block" for="">Gambar 1</label>
             <img src="assets/img/card.jpg"  class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
             <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
           </div>
           <div class="col-3 mx-auto">
             <label for="" class="d-block">Gambar 2</label>
             <img src="assets/img/card.jpg" class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
             <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
           </div>
           <div class="col-3 mx-auto">
             <label for="" class="d-block">Gambar 3</label>
             <img src="assets/img/card.jpg" class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
             <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
           </div>
           
             </div>
             
          
                </div>
             </div>


              <div class="row mb-5">
                <label class="mb-4" for="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis minima laboriosam aut! Possimus a cum atque! Tempora reprehenderit ab eligendi culpa!</label>
                <label for="inputText" class="col-sm-2 col-form-label">Visi Website</label>
                <div class="col-sm-10">
                  <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
              </div>
              <div class="row mb-5">
                <label class="mb-4" for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fuga harum dolor deserunt provident ab, optio unde dignissimos suscipit eligendi facilis reprehenderit iste vitae velit nemo adipisci quisquam.</label>
                <label for="inputEmail" class="col-sm-2 col-form-label">Misi Website</label>
                <div class="col-sm-10">
                  <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
              </div>

              <div class=" d-flex">
                <!-- Card with an image on top -->
                <div class="card col-2 mx-auto">
                  <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card with an image on top</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm  ">Pilih</button>
                  </div>
                </div><!-- End Card with an image on top -->
                          <!-- Card with an image on top -->
                          <div class="card col-2 mx-auto">
                            <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                              <h5 class="card-title">Card with an image on top</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <button type="button" class="btn btn-primary btn-sm mx-auto">Pilih</button>
                            </div>
                          </div><!-- End Card with an image on top -->
                          <div class="card col-2 mx-auto">
                            <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                              <h5 class="card-title">Card with an image on top</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <button type="button" class="btn btn-primary btn-sm mx-auto">Pilih</button>
                            </div>
                          </div><!-- End Card with an image on top -->
                                    <!-- Card with an image on top -->
                <div class="card col-2 mx-auto">
                  <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card with an image on top</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-primary btn-sm ">Pilih</button>
                  </div>
                </div><!-- End Card with an image on top -->
              </div>

              

  
              </div>
             

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

      

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection