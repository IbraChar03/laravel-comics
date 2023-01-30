@extends("layouts.main-layout")
@section("content")
<div class=main-cont>
    <a href="" class="text-current">CURRENT SERIES </a>

    <div class="container">
        <ul>

            <li >
                <a href="">
                    <img  src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                    <div class="text">Action Comics</div>
                </a>
            </li>
            <li >
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="">
                    <div class="text">American Vampire 1976</div>
                </a>
            </li>
            <li >
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="">
                    <div class="text">Aquaman</div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="">
                    <div class="text">Batgirl </div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="">
                    <div class="text">Batman </div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="">
                    <div class="text">Batman Beyond</div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="">
                    <div class="text">Batman/Superman </div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="">
                    <div class="text">Batman/Superman Annual</div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="">
                    <div class="text">Batman: The Joker War Zone</div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="">
                    <div class="text">Batman: Three Jokers</div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="">
                    <div class="text">Batman: White Knight Presents: Harley Quinn</div>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="">
                    <div class="text">Catwoman</div>
                </a>
            </li>
            
            
    
        </ul>
        <div class="cont-btn">
            <a href="" class="btn">LOAD MORE</a>
        </div>
    
    </div>
</div>
<div class=second-main>
    <div class="container">
        <ul>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="img">
                <a href="">
                    DIGITAL COMICS
                </a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="img">
                <a href="">
                    DC MERCHANDISE
                </a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="img">
                <a href="">
                    SUBSCRIPTION
                </a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="img">
                <a href="">
                    COMIC SHOP LOCATOR
                </a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="img">
                <a href="">
                    DC POWER VISA
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection