<?php 
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profilf  = $myprofil->nav_profil();
$nav_layananf = $myprofil->nav_layanan();
?>
<!--Footer Start-->
<footer class="h3footer wf100">
   <div class="container">
      <div class="row">
         <!--Footer Widget Start-->
         <div class="col-md-4 col-sm-6">
            <div class="footer-widget">
               <h3>{{ $site_config->namaweb }}</h3>
               <p>{{ $site_config->deskripsi }}</p>
               <hr style="border-top: solid thin #EEE;padding:0; margin: 5px 0;">
               <p><strong>Alamat Kampus:</strong>
                  <?php echo nl2br($site_config->alamat) ?>
                  <br><strong>Phone:</strong> {{ $site_config->telepon }}
                  <br><strong>Fax:</strong> {{ $site_config->fax }}
                  <br><strong>Email:</strong> {{ $site_config->email }}
            </div>
         </div>
         <!--Footer Widget End--> 
         <!--Footer Widget Start-->
         <div class="col-md-5 col-sm-6">
            <div class="footer-widget">
               <h3>Prodi</h3>
               <ul class="lastest-products">
                  <?php foreach($nav_layananf as $nav_layananf) { ?>
                  <li>< <strong><a href="#">{{ $nav_layananf->judul_berita }}</a></strong> <span class="pdate"></span> </li>
                  <?php } ?>
               </ul>
            </div>
         </div>
         <!--footer link-->
         <!--Footer Widget End--> 
         <!--Footer Widget Start-->
         <div class="col-md col-sm-9">
            <div class="footer-widget">
               <h3>Link Terkait</h3>
               <div class="link-websites">
                  <ul class="lastest-website">
                     <li><a href="https://binadarma.ac.id">Bina Darma</a></li>
                     <li><a href="http://perpustakaan.binadarma.ac.id/">Perpustakaan</a></li>
                     <li><a href="https://educsirt.binadarma.ac.id/">Edu CSIRT</a></li>
                     <li><a href="https://elearning2.binadarma.ac.id/">E-learning</a></li>
                  </ul>
               </div>
               <div class="footer-social">
                  <a href="#"><i class="fab fa-facebook-f"></i></a> 
                  <a href="#"><i class="fab fa-linkedin-in"></i></a> 
                  <a href="https://www.instagram.com/ubd_palembang/"><i class="fab fa-instagram"></i></a> 
                  <a href="#"><i class="fab fa-youtube"></i></a> </div>
            </div>
         </div>
         <!--Footer Widget End--> 
      </div>
      <div class="row footer-copyr">
         <div class="col-md-4 col-sm-4"> <img src="{{ asset('assets/upload/image/'.$site_config->logo) }}" alt="" style="max-height: 50px; width: auto;"> </div>
         <div class="col-md-8 col-sm-8">
               <p>Version: 1.0</p>
            </div>
      </div>
   </div>
</footer>
<!--Footer End--> 
</div>
<!--   JS Files Start  --> 
<script src="{{ asset('assets/aws/js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery-migrate-1.4.1.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/popper.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/jquery.prettyPhoto.js') }}"></script> 
<script src="{{ asset('assets/aws/js/isotope.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/slick.min.js') }}"></script> 
<script src="{{ asset('assets/aws/js/custom.js') }}"></script>

</body>
</html>