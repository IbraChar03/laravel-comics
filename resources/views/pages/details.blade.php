@extends("layouts.main-layout")
@section("content")
<div class="action">
    
</div>
<div class="details">
 <div class="cont">
    <div class="text">
     <div class="title">
       ACTION COMICS #1000: THE DELUXE EDITION
    </div>
    <div class="buttons">
    <button class=button-price>
        <div class=price>US PRICE: 
            <span>&dollar;19.99</span> </div>
        <span>AVAILABLE</span>
    </button>
    <button class=button-av>
        Check Availability
    </button>
</div>
    <div class="description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sed, voluptate qui iure ullam cumque quae fuga earum minima nisi recusandae officiis modi? Blanditiis rem odit nulla, hic repudiandae facilis!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sed, voluptate qui iure ullam cumque quae fuga earum minima nisi recusandae officiis modi? Blanditiis rem odit nulla, hic repudiandae facilis!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sed, voluptate qui iure ullam cumque quae fuga earum minima nisi recusandae officiis modi? Blanditiis rem odit nulla, hic repudiandae facilis!
    </div>
    </div>
    <div class="img-cont">
        <div class="text-img">
            <span>ADVERTISEMENT</span>
        </div>
        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" class=img>

    </div>
 </div>
</div>
@endsection