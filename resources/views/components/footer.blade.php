<div class=first-footer>
    <div class="container">
        <div class="cont-footer">
            <div class="cont">
                <ul>
                    <li class="sub" >
                        <a href="" class="title-text ">DC COMICS</a>
                        <a href="">Characters </a>
                        <a href="">Comics </a>
                        <a href="">Movies </a>
                        <a href="">TV </a>
                        <a href="">Games </a>
                        <a href="">Videos</a>
                        <a href="">News</a>

                    </li>
                </ul>
            </div>
            <div class="cont">
                <ul>
                    <li class="sub" >
                        <a href="" class="title-text ">DC</a>
                        <a href="">Terms Of Use </a>
                        <a href="">Privacy Policy </a>
                        <a href="">Ad Choices </a>
                        <a href="">Advertising </a>
                        <a href="">Jobs </a>
                        <a href="">Subscriptions</a>
                        <a href="">Talent Workshops</a>
                        <a href="">CPSC Certificates</a>
                        <a href="">Ratings</a>
                        <a href="">Shop Help</a>
                        <a href="">Contact Us</a>

                    </li>
                </ul>
            </div>
            <div class="cont">
                <ul>
                    <li class="sub" >
                        <a href="" class="title-text ">SITES </a>
                        <a href="" >DC </a>
                        <a href="" >MAD Magazine </a>
                        <a href="" >DC Kids</a>
                        <a href="" >DC Universe</a>
                        <a href="" >DC Power Visa</a>

                    </li>
                </ul>
            </div>
            <div class="cont height">
                <ul>
                    <li class="sub" >
                        <a href="" class="title-text "> SHOP</a>
                        <a href="" >Shop DC </a>
                        <a href="" >Shop DC Collectibles</a>

                    </li>
                </ul>
            </div>

        </div>

        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" class="img">

    </div>
</div>
<div class="second-footer">
    <div class="container">
        <a href="" class="sign">SIGN-UP NOW!</a>
        <div class="cont-socials">

            <strong class="text-follow">FOLLOW US</strong>


            <a href="" v-for="(item, index) in imgSocial" :key="index">
                <img class="social-img" :src="item.img" alt="">
            </a>
        </div>
    </div>
</div>