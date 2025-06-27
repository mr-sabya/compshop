@extends('frontend.layouts.app')

@section('content')
<!-- Slider Start -->
<livewire:frontend.home.slider />
<!-- Slider End -->


<!-- Static Area Start -->
<livewire:frontend.home.feature />
<!-- Static Area End -->

<!-- Banner Area Start -->
<livewire:frontend.home.ad-banner adCount="3" />
<!-- Banner Area End -->

<!-- category Area Start -->
<livewire:frontend.home.categories />
<!-- category Area End -->

<!-- Feature Area start -->
<livewire:frontend.home.feature-products />
<!-- Feature Area End -->

<!-- Deal Area Start -->
<livewire:frontend.home.deal />
<!-- Deal Area End -->

<div class="mt-60px"></div>

<!-- Category Tab Area Start -->
<livewire:frontend.home.category />
<!-- Category Tab Area end -->

<!-- Category Tab Area Start -->
<livewire:frontend.home.category />
<!-- Category Tab Area end -->

<!-- Brand area start -->
<livewire:frontend.home.brand />
<!-- Brand area end -->

<!-- Recently Add area start -->
<livewire:frontend.home.recent-products />
<!-- Recently Add area end -->

<!-- Banner Area Start -->
<livewire:frontend.home.ad-banner adCount="2" />
<!-- Banner Area End -->
@endsection