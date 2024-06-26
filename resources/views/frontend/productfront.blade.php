@include('header');
<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>

       <div class="row">
          @foreach ($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                     
                     <form action="{{route('checkout',$product->id)}}" method="POST" >
                        @method('put')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="option2" >  Buy Now</button>
                    </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="{{$product->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                      {{$product->name}}
                   </h5>
                   <h6>
                      ${{$product->price}}
                   </h6>
                </div>
             </div>
          </div>

          @endforeach
       
       </div>
       <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div>
    </div>
 </section>
@include('footer');
