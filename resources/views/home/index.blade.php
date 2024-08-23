<!--Slider Start-->
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <?php foreach($slider as $slider) { ?>
            <div class="item">
               <div class="slider-caption h3slider">
                  <div class="container">
                     <?php if($slider->status_text=="Ya") { ?>
                     <strong>{{ strip_tags($slider->isi) }}</strong>
                     <h1>{{ $slider->judul_galeri }}</h1>
                     <a href="{{ $slider->website }}">Baca detail</a>
                     <?php } ?>
                  </div>
               </div>
               <img src="{{ asset('assets/upload/image/'.$slider->gambar) }}" alt=""> 
            </div>
            <?php } ?>
         </section>
         <!--Slider End--> 
         <!--katasambutandekan-->
         <section class="home2-about wf100 p100 gallery">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                        <div class="video-img"><img src="{{ asset('assets/aws/images/rektor.png') }}" alt=""> </div>
                  </div>
                  <div class="col-md-7">
                     <div class="h2-about-txt">
                        <h1>Kata Sambutan Kaprodi</h1>
                        <h6> Selamat Datang Di Website Prodi Magister Teknik Sipil Universitas Bina Darma</h6>
                        <p>Prodi Magister Teknik Sipil merupakan salah satu prodi yang berada di bawah naungan Universitas Bina Darma. PRodi ini memiliki visi untuk menjadi pusat keunggulan dalam pengembangan ilmu pengetahuan dan teknologi yang berkontribusi pada kesejahteraan masyarakat dan lingkungan. Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi dan menghasilkan lulusan yang siap bersaing di dunia kerja global.</p>

                           <p>Terima kasih atas kunjungan Anda di website Prodi Magister Teknik Sipil.</p>
                           
                           <p>Hormat kami,</p>
                           
                           <p>
                             Ketua Prodi Magister Teknik Sipil</p>
                     </div>
                  </div>
               </div>
            </div>
            
         </section>
         <!--katasambutandekanend-->
         <!--Service Area End--> 
         <section class="wf100 about">
            <!--About Txt Video Start-->
            <div class="about-video-section wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="about-text">
                           <h5>TENTANG KAMI</h5>
                           <h2>{{ $site_config->nama_singkat }}</h2>
                           <?php echo $site_config->tentang ?>

                           <a href="#" class="btn btn-info btn-lg">Detail</a> 
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <a href="#"><img src="{{ asset('assets/upload/image/'.$site_config->gambar) }}" alt="{{ $site_config->nama_singkat }}" class="img img-fluid img-thumbnail">
                     </div>
                  </div>
               </div>
            </div>
            <!--About Txt Video End--> 
            <!--About Section Start-->
         <section class="home2-about wf100 p100 gallery">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                        <div class="video-img"> <a href="https://youtu.be/{{ $video->video }}" data-rel="prettyPhoto" title="{{ $video->judul }}"><i class="fas fa-play"></i></a> <img src="{{ asset('assets/upload/image/'.$video->gambar) }}" alt=""> </div>
                  </div>
                  <div class="col-md-7">
                     <div class="h2-about-txt">
                        <h3>Webinar</h3>
                        <h2>{{ $video->judul }}</h2>
                        <p><?php echo strip_tags($video->keterangan) ?></p>
                        <a class="aboutus" href="#">Lihat Detail</a> 
                     </div>
                  </div>
               </div>
            </div>
            
         </section>
         <!--About Section End--> 
         
<!--Testimonials Start-->
<section class="testimonials-section bg-white wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title-2 text-center">
               <h2>Download</h2>
            </div>
            <div id="testimonials" class="owl-carousel owl-theme">
               <?php 
               $kategori_download = DB::table('kategori_download')
                    ->orderBy('kategori_download.urutan','ASC')
                    ->get();
               foreach($kategori_download as $kategori_download) {
               ?>
               <!--testimonials box start-->
               <div class="item">
                  <h4><?php echo $kategori_download->nama_kategori_download ?></h4>
                  <hr>
                  <?php echo \Illuminate\Support\Str::limit(strip_tags($kategori_download->keterangan), 100, $end='...') ?>
                  <div class="tuser">
                     <a href="{{ asset('download/kategori/'.$kategori_download->slug_kategori_download) }}" a class="aboutus"><i class="fa fa-laptop"></i> Lihat Detail</a>
                  </div>
               </div>
               <!--testimonials box End--> 
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
   
            <!--Blog Start-->
<section class="h2-news wf100 p100 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div class="section-title-2">
                  <h5>Baca update kami</h5>
                  <h2>Berita & Updates</h2>
               </div>
            </div>
            <div class="col-md-6"> <a href="{{ asset('berita') }}"  a class="aboutus">Lihat berita lainnya</a> </div>
            <div class="col-md-12">
               <hr>
            </div>
         </div>
         <div class="row" style="background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
            <?php foreach($berita as $berita) { ?>
            <!--Blog Small Post Start-->
            <div class="col-md-4 col-sm-6" >
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php echo $berita->judul_berita ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="{{ asset('berita/read/'.$berita->slug_berita) }}">{{ $berita->judul_berita }}</a></h5>
                     <ul class="post-meta">
                        <li> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-calendar-alt"></i> {{ tanggal('tanggal_id',$berita->tanggal_post)}}</a> </li>
                        <li> <a href="{{ asset('berita/kategori/'.$berita->slug_berita) }}"><i class="fas fa-sitemap"></i> {{ $berita->nama_kategori }}</a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?></p>
                     <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="btn btn-success">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End--> 
            <?php } ?>
         </div>
         
      </div>
   </div>
</section>
<!--Blog End--> 

</section>
<section class="home2-about wf100 p100 gallery" style="background: url({{ asset('assets/aws/images/news-artilcesbg.jpg') }}) no-repeat; background-size: cover;">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
               <div class="video-img"> <a href="https://youtu.be/{{ $video->video }}" data-rel="prettyPhoto" title="{{ $video->judul }}"><i class="fas fa-play"></i></a> <img src="{{ asset('assets/upload/image/'.$video->gambar) }}" alt=""> </div>
         </div>
         <div class="col-md-7">
            <div class="h2-about-txt">
               <h3>Video Profile Fakultas</h3>
               <h2>{{ $video->judul }}</h2>
               <a class="aboutus" href="#">Lihat Detail</a> 
            </div>
         </div>
      </div>
   </div>
   
</section>
<!--Testimonials End--> 