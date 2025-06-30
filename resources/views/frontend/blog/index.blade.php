@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumb Area Start -->
<livewire:frontend.components.breadcrumb title="Blog" />
<!-- Breadcrumb Area End-->


<!-- Blog Area End -->
<livewire:frontend.blog.index />
<!-- Blog Area End -->
@endsection