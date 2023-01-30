@extends("layouts.main-layout")
@section("content")
<div class="main-part">
<div class="first-main-details">
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
<div class="second-main-details">
    <div class="cont">
     <div class="talent">
        <div class="text-title">
         Talent
        </div>
        <hr class=line>
        <div class="box">
         <div class="text1">
            <span>Art by:</span>
         </div>
         <div class="text2">
            <a href="">Robert Diner</a>,
            <a href="">Noah James</a>,
            <a href="">Richard Luke</a>,
            <a href="">Daniel Rhys</a>,
            <a href="">Mason Rob</a>,
         </div>
        </div>
        <hr>
        <div class="box">
            <div class="text1">
               <span>Written by:</span>
            </div>
            <div class="text2">
               <a href="">Jose Paolo</a>,
               <a href="">Oliver Jake</a>,
               <a href="">Thomas Rose</a>,
               <a href="">Luke Beith</a>,
               <a href="">John Dirven</a>,
            </div>
        </div>
        <hr>
     </div>
        <div class="specs">
            <div class="text-title">
                Specs
            </div>
            <hr class=line>
            <div class="box">
                <div class="text1">
                   <span>Series:</span>
                </div>
                <div class="text2">
                   <a href="">ACTION COMICS</a>
                 
                </div>
            </div>
            <hr>
            <div class="box">
                <div class="text1">
                   <span>U.S. Price:</span>
                </div>
                <div class="text2">
                   <span>&dollar;19.99</span>
                 
                </div>
            </div>
            <hr >
            <div class="box">
                <div class="text1">
                   <span>On Sale Date:</span>
                </div>
                <div class="text2">
                   <span>Oct 02 2016</span>
                 
                </div>
            </div>
            <hr>
    
        </div>
    </div>
    
</div>
<div class="cont-list">
<div class="list">
    <div class="card">
        <div class="text">
            DIGITAL COMICS
        </div>
        <div class="img">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class=img-comics>
        </div>
    </div>

    <div class="card">
        <div class="text">
           SHOP DC
        </div>
        <div class="img">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class=img-comics>
        </div>
    </div>

    <div class="card">
        <div class="text">
            SHOP LOCATION
        </div>
        <div class="img">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class=img-comics>
        </div>
    </div>

    <div class="card">
        <div class="text">
            MERCHANDISE
        </div>
        <div class="img">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class=img-comics>
        </div>
    </div>
</div>
</div> 
</div>
@endsection