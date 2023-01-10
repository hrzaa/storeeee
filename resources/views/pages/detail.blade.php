 @extends('layouts.app')
 @section('title')
     Store Detail Page
 @endsection
 @section('content')
    <div class="page-content page-details">
      <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Product Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img 
                  :src="photos[activePhoto].url" 
                  :key="photos[activePhoto].id" 
                  class="w-100 main-image"
                  alt="">
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div class="col-3 col-lg-12 mt-2 mt-lg-0" 
                v-for="(photo, index) in photos"
                :key="photo.id"
                data-aos="zoom-in"
                data-aos-delay="100"
                >
                <a href="#" @click="changeActive(index)">
                  <img 
                  :src="photo.url" class="w-100 thumbnail-image" 
                  :class="{active:index == activePhoto}" 
                  alt=""
                  >
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Hareza Yoan</div>
                <div class="price">$500</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a href="/cart.html" class="btn btn-success nav-link px-4 text-white btn-block mb-3">
                  Add to Cart
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint sunt nihil blanditiis laborum magni quo suscipit accusamus! Ullam, fugit. Voluptatem enim est deserunt ducimus molestias, soluta similique facilis reprehenderit?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illum eos natus doloribus eligendi harum voluptatum delectus, nobis quasi consectetur voluptas neque architecto hic! Quos, minus. Est reprehenderit nihil harum?</p>
              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb3">
                <h5>Customers Review(3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img src="/images/icon-testimonial-1.png" alt="" class="mr-3 rounded-dircle">
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hareza Yoan</h5>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, quibusdam totam. Repellendus laudantium sint mollitia illum. Optio ut officia cumque?
                    </div>
                  </li>
                  <li class="media">
                    <img src="/images/icon-testimonial-2.png" alt="" class="mr-3 rounded-dircle">
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hareza Yoan</h5>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, quibusdam totam. Repellendus laudantium sint mollitia illum. Optio ut officia cumque?
                    </div>
                  </li>
                  <li class="media">
                    <img src="/images/icon-testimonial-3.png" alt="" class="mr-3 rounded-dircle">
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Hareza Yoan</h5>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, quibusdam totam. Repellendus laudantium sint mollitia illum. Optio ut officia cumque?
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
     
 @endsection

 @push('addon-script')
      <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery", 
        mounted(){
           AOS.init();
        },
        data:{
          activePhoto: 0, 
          photos:[
            {
              id:1,
              url:"/images/product-details-1.jpg"
            },
            {
              id:2,
              url:"/images/product-details-2.jpg"
            },
            {
              id:3,
              url:"/images/product-details-3.jpg"
            },
            {
              id:4,
              url:"/images/product-details-4.jpg"
            },
          ],
        },
        methods:{
          changeActive(id){
            this.activePhoto = id;
          },
        },
      });
    </script>
 @endpush
 