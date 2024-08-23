<?php 
$bg   = DB::table('heading')->where('halaman','AWS')->orderBy('id_heading','DESC')->first();
 ?>
   <!--About Txt Video End--> 
<?php 
$bg2   = DB::table('heading')->where('halaman','Team')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p100 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg2->gambar) }}'); background-position: bottom center;">
   <div class="container text-center">
      <h1>{{ $bg2->judul_heading }}</h1>
   </div>
</section>
   <!--Causes Start-->
<section class="wf100 p30 events justify-content-center">
   <div class="event-grid-2">
      <div class="container">
         <div class="row text-center  d-flex justify-content-center">
            <?php foreach($kategori_staff as $kategori_staff) { 
               $id_kategori_staff = $kategori_staff->id_kategori_staff;
               $staff    = DB::table('staff')->where(array('status_staff'=>'Ya','id_kategori_staff'=>$id_kategori_staff))->orderBy('urutan','ASC')->get();
               if($staff) {
               ?>
            <div class="col-lg-12">
               <div class="about-text">
             <h2>{{ $kategori_staff->nama_kategori_staff }}</h2>
                  <p><?php echo nl2br($kategori_staff->keterangan) ?></p>
                  <br><br>
               </div>
            </div>
            <?php foreach($staff as $staff) { ?>
            <!--Blog Post Start-->
            <div class="col-lg-3 col-md-6">
               <div class="event-post">
                  <div class="event-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/staff/'.$staff->gambar) }}" alt="{{ $staff->nama_staff }}"></div>
                  <div class="event-txt">
                     <h6><a href="#">{{ $staff->nama_staff }}</a></h6>
                     <p class="venue"><span>{{ $staff->jabatan }}</span></p>
                  </div>
               </div>
            </div>
            <!--Blog Post End--> 
            <?php } ?>
            <?php }} ?>
      </div>
   </div>
</section>
<!--Causes End--> 
<div class="clearfix"><br><br></div>
