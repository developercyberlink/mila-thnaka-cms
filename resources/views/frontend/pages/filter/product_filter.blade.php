
 <div class="row">
            <!-- Product-->
               @if($products->isNotEmpty())
              @foreach($products as $value) 

            <div class="col-md-4 col-sm-6 px-2 mb-4">
               <div class="card product-card card-static"> 
                  <a class="btn-wishlist btn-sm" href="account-wishlist.php" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></a>
                  <!--<span class="badge badge-danger badge-shadow">New</span>-->
                  <a class="card-img-top d-block overflow-hidden" href="{{route('product-single',$value->slug)}}">
               <img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="{{$value->product_name}}">
                  </a>
                  <div class="card-body py-3">
                     <h3 class="product-title font-size-sm"><a href="{{route('product-single',$value->slug)}}">{{$value->product_name}}</a></h3>
                     <div class="">
                        <div class="product-price font-size-sm"><span class="text-primary">${{$value->discount_price}} </span> <del class="fs-sm text-muted">${{ $value->price }}</del></div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i> <span class="product-meta font-size-xs">11 reviews</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @endif
            <!-- Product-->
         
         </div>


@push('scripts')
    <script>
        // filter
        $(document).ready(function () {

            $('.item_sort').change(function (e) {
                var val = $(this).find(':checked').val();

                $.ajax({
                    url: document.URL,
                    type: 'get',
                    data: {
                        value: val,
                    },
                    success: function (result) {

                        $('.product_filter_result').replaceWith($('.product_filter_result')).html(result);
                    }
                });

            })


        });
    </script>
@endpush
