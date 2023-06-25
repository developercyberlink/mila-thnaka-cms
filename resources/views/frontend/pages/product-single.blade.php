@extends('frontend.include.master')

@section('meta-keywords') @if($product->seo){!! strip_tags($product->seo->seo_keyword) !!}@endif @endsection
@section('meta-description') @if($product->seo){!! strip_tags($product->seo->seo_description) !!}@endif @endsection

@section('title', $product->product_name)
@section('image', asset('images/products/'.$product->images->where('is_main', 1)->first()->image))
@section('short_description', strip_tags($product->short_description))

@section('content')
<!-- Page Title-->
<div class="page-title-overlap bg-dark pt-4">
   <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
               <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
               <li class="breadcrumb-item"><a class="text-nowrap" href="shop-grid-ls.php">Mandalas & More</a></li>
               <li class="breadcrumb-item text-nowrap active" aria-current="page">Kalachakra Mandala Thangka</li>
            </ol>
         </nav>
      </div>
      <!-- <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
         <h1 class="h3 text-light mb-0">Kalachakra Mandala Thangka</h1>
         </div> -->
   </div>
</div>
<!-- Page Content-->
<div class="container">
   <!-- Gallery + details-->
   <div class="bg-white box-shadow-lg rounded-lg px-4 py-3 mb-5">
          <div class="row">
            <!-- Product gallery-->
            <div class="col-lg-6">
               <div class="cz-product-gallery">
                  <div class="cz-preview order-sm-2">
                     <div class="cz-preview-item active" id="first">
                        <img class="cz-image-zoom" src="img/shop/catalog/01.jpg" data-zoom="img/shop/catalog/01.jpg" alt="Product image">
                        <div class="cz-image-zoom-pane"></div>
                     </div>
                     <div class="cz-preview-item" id="second">
                        <img class="cz-image-zoom" src="img/shop/catalog/02.jpg" data-zoom="img/shop/catalog/02.jpg" alt="Product image">
                        <div class="cz-image-zoom-pane"></div>
                     </div>
                     <div class="cz-preview-item" id="third">
                        <img class="cz-image-zoom" src="img/shop/catalog/03.jpg" data-zoom="img/shop/catalog/03.jpg" alt="Product image">
                        <div class="cz-image-zoom-pane"></div>
                     </div>                     
                  </div>
                  <div class="cz-thumblist order-sm-1">
                     <a class="cz-thumblist-item active" href="#first">
                     <img src="img/shop/catalog/01.jpg" alt="Product thumb">
                     </a>
                     <a class="cz-thumblist-item" href="#second">
                     <img src="img/shop/catalog/02.jpg" alt="Product thumb">
                     </a>
                     <a class="cz-thumblist-item" href="#third">
                     <img src="img/shop/catalog/03.jpg" alt="Product thumb">
                     </a> 
                     <a class="cz-thumblist-item video-item" 
                     href="https://www.youtube.com/watch?v=1vrXpMLLK14" 
                     data-bs-toggle="video">
                    <div class="cz-thumblist-item-text"><i class="czi-video"></i>Video</div></a>                    
                  </div>
               </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-6 pt-4 pt-lg-0">
               <div class="product-details ms-auto pb-3 pt-5">
                  <h1 class="h3 mb-4">Kalachakra Mandala Black And Gold Thangka Painting </h1>
                  <div class="d-flex justify-content-between align-items-center mb-4">
                     <a href="#reviews" data-scroll>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                        <span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">5 Reviews</span>
                     </a>
                  </div>
                  <div class="mb-4"><span class="h3 font-weight-normal text-primary mr-1">Rs 33,700.<small>00</small></span>
                     <del class="text-muted font-size-lg mr-3">Rs 67,400.<small>00</small></del>
                     <span class="badge badge-danger badge-shadow align-middle mt-n2">New</span>
                  </div>
                  <form class="mb-grid-gutter" method="post">
                     <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center pb-1">
                           <label class="font-weight-medium text-success" >5 items available</label> 
                           <!-- <label class="font-weight-medium text-danger" >Out of stock</label> -->
                        </div>
                     </div>
                     <div class="form-group d-flex align-items-center">
                        <select class="custom-select mr-3" style="width: 6rem;">
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                        <a class="btn btn-primary btn-shadow btn-block" type="submit" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</a>
                     </div>
                  </form>
                  <!-- Product panels-->
                  <!-- Sharing-->
                  <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6>
                  <a class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a class="share-btn sb-instagram mr-2 my-2" href="#"><i class="czi-instagram"></i>Instagram</a><a class="share-btn sb-facebook my-2" href="#"><i class="czi-facebook"></i>Facebook</a>
               </div>
            </div>
         </div>
    </div>
   <!-- Product description section 1-->
   <div class="row justify-content-center py-md-3">
      <div class="col-lg-10">
         <div class="mb-5">
            <img src="https://cdn.shopify.com/s/files/1/0501/4834/3958/files/100_AUTHENTIC_5_600x.png?v=1624316354" alt="">
         </div>
         <div class="toggle-text">
            <h2 class="h3 mb-4 pb-2">High quality materialsThe Dalai Lama and the Kalachakra</h2>
            <p>Although thought to have once been a carefully guarded secret of the Shambhala Kingdom, the Kalachakra Tantra is now widely known. The Dalai Lama himself has given thirty-three separate initiations into this practice all over the world, including in Tibet, India, Switzerland, Canada, and the United States.</p>
            <p>In an essay on his website, His Holiness writes, “the Kalachakra initiations empower the disciple to practice the yoga of the Kalachakra tantra, and, ultimately, to achieve the state of Shri Kalachakra.” As with other mandala practices, the goal here is for the initiate to “enter” into the mandala and identify with the deity represented therein.</p>
            <h2 class="h3 mb-4 pb-2">Specification </h2>
            <ul>
               <li>Dimensions: 56 x 56 cm</li>
               <li>Materials:&nbsp;Tibetan&nbsp; Gold Dust With Tibetan Colors</li>
               <li>Canvas: Organic Cotton</li>
               <li>Hand Painted In Nepal</li>
               <li>Fine Quality Tibetan Thangka</li>
            </ul>
            <h2 class="h3 mb-4 pb-2">The Kalachakra Mandala </h2>
            <p>Through meditation on the Kalachakra mandala, monks invoke the qualities of the deity, striving in a ritualized way enter the mandala and become the deity themselves. This practice is not usually public, and mostly occurs behind temple walls.</p>
            <p>In the public realm, the Kalachakra mandala is sometimes rendered as a thangka, a traditional style of Tibetan art frequently used to depict mandalas, and also as a sand mandala. Sand mandalas are performed as a cultural display in universities or other institutions by traveling monks. Upon completion, they are destroyed in a ritual meant to honor the impermanent nature of reality.</p>
         </div>
      </div>
   </div>
</div>
<!-- Product description-->
<!-- Reviews-->
<div class="border-top  my-lg-3 py-5">
   <div class="container  pt-md-2" id="reviews">
      <div class="row justify-content-center  pb-3">
         <div class="col-lg-10">
            <div class="row">
               <div class="col-lg-4 col-md-5">
                  <h2 class="h3 mb-4">74 Reviews</h2>
                  <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-primary mr-1"></i><i class="czi-star-filled font-size-sm text-primary mr-1"></i><i class="czi-star-filled font-size-sm text-primary mr-1"></i><i class="czi-star-filled font-size-sm text-primary mr-1"></i><i class="czi-star font-size-sm text-muted mr-1"></i></div>
                  <span class="d-inline-block align-middle">4.1 Overall rating</span>
                  <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
               </div>
               <div class="col-lg-8 col-md-7">
                  <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                     <div class="w-100">
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <span class="text-muted ml-3">43</span>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                     <div class="w-100">
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <span class="text-muted ml-3">16</span>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                     <div class="w-100">
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <span class="text-muted ml-3">9</span>
                  </div>
                  <div class="d-flex align-items-center mb-2">
                     <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                     <div class="w-100">
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <span class="text-muted ml-3">4</span>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
                     <div class="w-100">
                        <div class="progress" style="height: 4px;">
                           <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <span class="text-muted ml-3">2</span>
                  </div>
               </div>
            </div>
            <hr class="mt-4 pb-2">
         </div>
      </div>
     
      <div class="row justify-content-center">
         <!-- Reviews list-->
         <div class="col-lg-10">
            <div class="d-flex justify-content-between align-items-center pb-4 mb-4 border-bottom">
             
               <div class="form-inline flex-nowrap">
                  <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                  <select class="custom-select custom-select-sm" id="sort-reviews">
                     <option>Newest</option>
                     <option>Oldest</option>
                     <option>Popular</option>
                     <option>High rating</option>
                     <option>Low rating</option>
                  </select>
               </div>
               <div>
               <a class="btn btn-primary"  href="#review" data-toggle="modal"><i class="czi-add mr-2"></i>Write a review</a>
               </div>
            </div>
            <!-- Review-->
            <div class="product-review card card-body fs-md text-muted border-0 shadow-sm pb-4 mb-4 border-bottom">
               <div class="d-flex mb-3">
                  <div class="media media-ie-fix align-items-center mr-4 pr-2">
                     <img class="rounded-circle" width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez"/>
                     <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-0">Rafael Marquez</h6>
                        <span class="font-size-ms text-muted">June 28, 2019</span>
                     </div>
                  </div>
                  <div>
                     <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                     </div>
                    
                  </div>
               </div>
               <p class="font-size-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
             
               
            </div>
            <!-- Review-->
            <div class="product-review card card-body fs-md text-muted border-0 shadow-sm pb-4 mb-4 border-bottom">
               <div class="d-flex mb-3">
                  <div class="media media-ie-fix align-items-center mr-4 pr-2">
                     <img class="rounded-circle" width="50" src="img/shop/reviews/02.jpg" alt="Barbara Palson"/>
                     <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-0">Barbara Palson</h6>
                        <span class="font-size-ms text-muted">May 17, 2019</span>
                     </div>
                  </div>
                  <div>
                     <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                     </div>
                     
                  </div>
               </div>
               <p class="font-size-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               
             
            </div>
            <!-- Review-->
            <div class="product-review card card-body fs-md text-muted border-0 shadow-sm pb-4 mb-4 border-bottom">
               <div class="d-flex mb-3">
                  <div class="media media-ie-fix align-items-center mr-4 pr-2">
                     <img class="rounded-circle" width="50" src="img/shop/reviews/03.jpg" alt="Daniel Adams"/>
                     <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-0">Daniel Adams</h6>
                        <span class="font-size-ms text-muted">May 8, 2019</span>
                     </div>
                  </div>
                  <div>
                     <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                     </div>
                    
                  </div>
               </div>
               <p class="font-size-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
              
              
            </div>
            <div class="text-center">
               <button class="btn btn-outline-primary" type="button" ><i class="czi-reload mr-2"></i>Load more reviews</button>
            </div>
         </div>
         <!-- Leave review form-->
         <!-- <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
            <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
               <h3 class="h4 pb-2">Write a review</h3>
               <form class="needs-validation" method="post" novalidate>
                  <div class="form-group">
                     <label for="review-name">Your name<span class="text-danger">*</span></label>
                     <input class="form-control" type="text" required id="review-name">
                     <div class="invalid-feedback">Please enter your name!</div>
                     <small class="form-text text-muted">Will be displayed on the comment.</small>
                  </div>
                  <div class="form-group">
                     <label for="review-email">Your email<span class="text-danger">*</span></label>
                     <input class="form-control" type="email" required id="review-email">
                     <div class="invalid-feedback">Please provide valid email address!</div>
                     <small class="form-text text-muted">Authentication only - we won't spam you.</small>
                  </div>
                  <div class="form-group">
                     <label for="review-rating">Rating<span class="text-danger">*</span></label>
                     <select class="custom-select" required id="review-rating">
                        <option value="">Choose rating</option>
                        <option value="5">5 stars</option>
                        <option value="4">4 stars</option>
                        <option value="3">3 stars</option>
                        <option value="2">2 stars</option>
                        <option value="1">1 star</option>
                     </select>
                     <div class="invalid-feedback">Please choose rating!</div>
                  </div>
                  <div class="form-group">
                     <label for="review-text">Review<span class="text-danger">*</span></label>
                     <textarea class="form-control" rows="6" required id="review-text"></textarea>
                     <div class="invalid-feedback">Please write a review!</div>
                     <small class="form-text text-muted">Your review must be at least 50 characters.</small>
                  </div>
                  <div class="form-group">
                     <label for="review-pros">Pros</label>
                     <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                  </div>
                  <div class="form-group mb-4">
                     <label for="review-cons">Cons</label>
                     <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                  </div>
                  <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
               </form>
            </div>
            </div> -->
      </div>
   </div>
</div>
<!-- Toast: Added to Cart-->
<div class="toast-container toast-bottom-center">
   <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-success text-white">
         <i class="czi-check-circle mr-2"></i>
         <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
         <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="toast-body">This item has been added to your cart.</div>
   </div>
</div>
<!-- Footer-->

@stop

@push('scripts')
    <script>

        let selectedColor = 0;
        let selectedSize = 0;
        let max = 0;

        $(document).ready(function(){
            if({{$product->totalStock()}} <= 0){
               $("#quantity").val(0);
            }
        });

        $("#order-now-form").submit(function(){
         $("#hidden-quantity-order-now").val($("#quantity").val());
         $("#hidden-size-order-now").val(selectedSize);
        });

        // Quotation Form
        $("#quotation-form").submit(function( event ) {
            event.preventDefault();
            let myform = document.getElementById('quotation-form');
            let formData = new FormData(myform);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('quotation-submit')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        toastr.success(data.success);
                        $('#quotation-form').trigger("reset");
                    }
                    jQuery.each(data.errors, function (key, value) {

                        toastr.error(value);
                        // hideLoading();
                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });

         });

         // Review Form
         $("#review-form").submit(function( event ) {
            event.preventDefault();
            let myform = document.getElementById('review-form');
            let formData = new FormData(myform);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('add-review')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {
                        toastr.success(data.message);
                        $('#review-form').trigger("reset");
                    }
                    jQuery.each(data.errors, function (key, value) {

                        toastr.error(value);
                        // hideLoading();
                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });

         });

        $("#size").change(function() {

            selectedSize = $(this).children(":selected").attr("data-size-id");
            ajaxCall();

         });

         // If both size and color field exists
         $(".color-item-variation a").click(function(event){
            
            event.preventDefault()
            $(this).addClass("uk-active");
            let colorName = $(this).attr("uk-tooltip");
            $("#hidden-color").val(colorName);

            selectedColor = $(this).attr("data-color-id");
            ajaxCall();

            // For order now
            let selectedcolor = $(this).attr("uk-tooltip");
            $("#hidden-color-order-now").val(selectedcolor);

         });

         function ajaxCall(){
            let productId = {{$product->id}};

            $.ajax({
                type: 'GET',
                url: "/product-stock/{id}/{color_id}/{size_id}",
                data:{id:productId, color_id:selectedColor, size_id:selectedSize},
                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {

                     $("#quantity").attr("max", data);
                     max = data;
                     adjustVal(data);
                    }
                    jQuery.each(data.errors, function (key, value) {
                        toastr.error(value);
                        // hideLoading();
                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });

         }

         function adjustVal(stockSize){
            if($("#quantity").val() > parseInt(stockSize)){
               $("#quantity").val(stockSize);
            }
            if(parseInt(stockSize)>0 && $("#quantity").val()==0){
               $("#quantity").val(1);
            }
         }

         $(".color-item a").click(function(event){
            event.preventDefault();

            $(this).addClass("uk-active");
            let selectedColor = $(this).attr("uk-tooltip");
            $("#hidden-color").val(selectedColor);
            let maxStock = $(this).attr("data-color-stock");
            $("#quantity").attr("max",maxStock);
            max = maxStock;
            adjustVal(maxStock);

            // For order now
            $("#hidden-color-order-now").val(selectedColor);
         });

         

         $('#cart_btn').on('click', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

               let myform = document.getElementById('add_to_cart');
               let formData = new FormData(myform);
               $.ajax({
                type: 'POST',
                url: '{{route('cart-add')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    // console.log(data);
                    if (!data.errors) {

                        $('.mini-cart').replaceWith($('.mini-cart')).html(data);
                        toastr.success('Item added to cart');
                        // alert({{Gloudemans\Shoppingcart\Facades\Cart::count();}});
                        // $(".uk-cart-count").replaceWith($(".uk-cart-count")).html("c");

                    }
                    jQuery.each(data.errors, function (key, value) {

                        toastr.error(value);
                        // hideLoading();

                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });


        });
    </script>
@endpush 