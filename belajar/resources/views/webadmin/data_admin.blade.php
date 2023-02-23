@extends('webadmin.navside')
@section('isi')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Struktur Karang Taruna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
        <li class="breadcrumb-item">Data Admin</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-17 ms-auto me-auto">
        
        
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Teriama Pendaftaraam</h5>  
            <input type="text" class="form-control mb-3" placeholder="Search&hellip;">
            
            
            
           
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Propinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Photo Surat Persetujuan</th>
                  <th scope="col">Aksi</th>


                  
                
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Ngijo</td>
                  <td>Jatim</td>                       
                  <td>Malang</td>                       
                  <td>karangploso</td>                       
                  <td><img style="margin-left: 30px;"  src="img/surat.webp" width="100px" height="100px" alt=""></td>   
                  <td><a href="lihat-desa.html"><button class="button-79 mb-2" role="button">Lihat</button></a> <br> <a href=""></a> <a href=""><button class="button-79" role="button">Terima</button></a> <a href=""></a> <a href=""><button class="button-79" role="button">Tolak</button></a> <a href=""></a></td>              
                </tr>
              

                
              </tbody>
            </table>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>

      
  </section>

  <section class="section" style="margin-top: 40px;">
    <div class="row">
      <div class="col-lg-17 ms-auto me-auto">
        
        
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Edit Pendaftaran</h5>  
            <input type="text" class="form-control mb-3" placeholder="Search&hellip;">
            
            
            
           
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Desa</th>
                  <th scope="col">Propinsi</th>
                  <th scope="col">Kabupaten</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Photo Surat Persetujuan</th>
                  <th scope="col">Aksi</th>


                  
                
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Ngijo</td>
                  <td>Jatim</td>                       
                  <td>Malang</td>                       
                  <td>karangploso</td>                       
                  <td><img style="margin-left: 30px;"  src="img/surat.webp" width="100px" height="100px" alt=""></td>   
                  <td><a href="lihat-desa.html"></a> <br> <a href=""></a> <a href="lihat-desa.html"><button class="button-79" role="button">Lihat</button></a> <a href=""></a> <a href=""><button class="button-79" role="button">Hapus</button></a> <a href=""></a></td>              
                </tr>
              

                
              </tbody>
            </table>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>
       
      
  </section>

  

</main><!-- End #main -->
@endsection