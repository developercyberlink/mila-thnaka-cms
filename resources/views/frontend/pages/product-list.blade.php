@extends('frontend.include.master')

@section('meta-keywords') {!! strip_tags($category->first()->seo_keyword) !!} @endsection
@section('meta-description') {!! strip_tags($category->first()->seo_description) !!} @endsection

@section('title', $category->first()->name)

@section('image') 
@if($category->first()->image){{asset('images/categories/'.$category->first()->image)}}@else{{asset('images/logo.png')}}@endif
@endsection

@section('short_description', strip_tags($category->first()->description))


@section('content')

 <div class="page-title-overlap bg-dark pt-4">
   <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
         <h1 class="h3 text-light mb-0">{{$category->first()->name}}</h1>
      </div>
   </div>
</div>
<!-- Page Content-->
<div class="container pb-5 mb-2 mb-md-4">
   <div class="row">
      <!-- Sidebar-->
      <aside class="col-lg-3">
         <!-- Sidebar-->
         <div class="cz-sidebar rounded-lg box-shadow-lg" id="shop-sidebar">
            <div class="cz-sidebar-header box-shadow-sm">
               <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
            </div>
            <div class="cz-sidebar-body">
               <!-- Categories-->
               <div class="widget widget-categories mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Categories</h3>
                  <div class="accordion mt-n1" id="shop-categories">
                     <!-- Thangka-->
                     <div class="card">
                        <div class="card-header">
                           <h3 class="accordion-heading">
                              <a href="#Thangka" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="Thangka">Thangka<span class="accordion-indicator"></span></a>
                           </h3>
                        </div>
                        <div class="collapse show" id="Thangka" data-parent="#shop-categories">
                           <div class="card-body">
                              <div class="widget widget-links cz-filter">
                                 <!--<div class="input-group-overlay input-group-sm mb-2">-->
                                 <!--   <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">-->
                                 <!--   <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>-->
                                 <!--</div>-->
                                 <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Entire Collection</span><span class="font-size-xs text-muted ml-3">1,953</span></a></li>
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Mandalas & More</span><span class="font-size-xs text-muted ml-3">247</span></a></li>
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Gods & Goddesses</span><span class="font-size-xs text-muted ml-3">156</span></a></li>
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Silk Framed Thangkas</span><span class="font-size-xs text-muted ml-3">310</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Thangka -->
                     <!-- Statues & Crafts-->
                     <div class="card">
                        <div class="card-header">
                           <h3 class="accordion-heading"><a class="collapsed" href="" >Statues & Crafts </a></h3>
                        </div>
                     </div>
                     <!-- Statues & Crafts -->
                     <!-- Thangka-->
                     <div class="card">
                        <div class="card-header">
                           <h3 class="accordion-heading"><a class="collapsed" href="#Malaprayer" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="Malaprayer">Mala and prayer beads<span class="accordion-indicator"></span></a></h3>
                        </div>
                        <div class="collapse" id="Malaprayer" data-parent="#shop-categories">
                           <div class="card-body">
                              <div class="widget widget-links cz-filter">
                                 <!--<div class="input-group-overlay input-group-sm mb-2">-->
                                 <!--   <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">-->
                                 <!--   <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>-->
                                 <!--</div>-->
                                 <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">All Malas & Bracelets</span><span class="font-size-xs text-muted ml-3">1,953</span></a></li>
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">108 Beads Malas</span><span class="font-size-xs text-muted ml-3">247</span></a></li>
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Bracelets</span><span class="font-size-xs text-muted ml-3">156</span></a></li>
                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Tree Of Life</span><span class="font-size-xs text-muted ml-3">310</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Thangka -->
                  </div>
               </div>
               <!-- Price range-->
               <div class="widget mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Price</h3>
                  <div class="cz-range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                     <div class="cz-range-slider-ui"></div>
                     <div class="d-flex pb-1">
                        <div class="w-50 pr-2 mr-2">
                           <div class="input-group input-group-sm">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input class="form-control cz-range-slider-value-min" type="text">
                           </div>
                        </div>
                        <div class="w-50 pl-2">
                           <div class="input-group input-group-sm">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input class="form-control cz-range-slider-value-max" type="text">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                
            </div>
         </div>
      </aside>
      <!-- Content  -->
      <section class="col-lg-9">
         <!-- Toolbar-->
         <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
            <div class="d-flex flex-wrap">
               <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                  <label class="text-light opacity-75 text-nowrap mr-2 d-none d-sm-block" for="sorting">Sort by:</label>
                  <select class="item_sort form-control custom-select" id="sorting">
                        <option selected="selected" value="">--Select--</option>
                        {{-- <option value="popular">Popularity</option> --}}
                        <option value="low_to_high">Low - High Price</option>
                        <option value="high_to_low">High - Low Price</option>
                        <option value="a_to_z">A - Z Order</option>
                        <option value="z_to_a">Z - A Order</option>
                  </select>
                  <span class="font-size-sm text-light opacity-75 text-nowrap ml-2 d-none d-md-block">of {{$products->count()}} products</span>
               </div>
            </div>
            <div class="d-flex pb-3"><a class="nav-link-style nav-link-light mr-3" href="#"><i class="czi-arrow-left"></i></a><span class="font-size-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ml-3" href="#"><i class="czi-arrow-right"></i></a></div>
         </div>
         <!-- Products grid-->
            <div class="filter product_filter_result ">

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
             @else
           <h3>No Products to show!</h3>
            @endif
            <!-- Product-->
         
         </div>
      </div>
         <hr class="my-3">
         <!-- Pagination-->
          {!! $products->links('frontend.include.pagination') !!}

      </section>
   </div>
</div>
@endsection
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
