@extends('layout')


@section('content')

 <!-- Back to top button -->
 <div class="back-to-top"></div>


 <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
   <div class="banner-section">
     <div class="container text-center wow fadeInUp">
       <nav aria-label="Breadcrumb">
         <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Blog</li>
         </ol>
       </nav>
       <h1 class="font-weight-normal">Articles</h1>
     </div> <!-- .container -->
   </div> <!-- .banner-section -->
 </div> <!-- .page-banner -->


 <div class="page-section">
    <div class="container">
        <div class="post-category">
            <h3 class="sidebar-title">{{$article->title}}</h3>
            <a href="blog-details" class="post-thumb">
                <img src="../assets/img/blog/blog_1.jpg" alt="">
              </a>
              <h4 class="sidebar-title">{{$article->excerpt}}</h4>
            <p>{{$article->body}}</p>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/articles/{{$article->id}}/edit">
                <button type="button" class="btn btn-outline-secondary btn-sm" +>Edit Article</button>
             </a>
          </div>
     </div>


 </div> <!-- .page-section -->

 <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
   <div class="container py-5 py-lg-0">
     <div class="row align-items-center">
       <div class="col-lg-4 wow zoomIn">
         <div class="img-banner d-none d-lg-block">
           <img src="../assets/img/mobile_app.png" alt="">
         </div>
       </div>
       <div class="col-lg-8 wow fadeInRight">
         <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
         <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
         <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
       </div>
     </div> <!-- .row -->
   </div> <!-- .container -->
 </div> <!-- .banner-home -->



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

@endsection
