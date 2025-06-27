@if($adCount == 1)
<div class="banner-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="{{ url('assets/frontend/images/banner-image/4.jpg') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($adCount == 2)
<div class="banner-area mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="{{ url('assets/frontend/images/banner-image/7.jpg') }}" alt="" /></a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="{{ url('assets/frontend/images/banner-image/8.jpg') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($adCount == 3)
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="{{ url('assets/frontend/images/banner-image/1.jpg') }}" alt="" /></a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="{{ url('assets/frontend/images/banner-image/2.jpg') }}" alt="" /></a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="banner-wrapper">
                    <a href="shop-4-column.html"><img src="{{ url('assets/frontend/images/banner-image/3.jpg') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif