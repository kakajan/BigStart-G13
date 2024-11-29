@extends('layouts.Client.app')

@section('title', '| About Page')
@section('breadCrumb')
    @parent
    <li class="breadcrumb-item active" aria-current="page">About</li>
@endsection
@section('mainContent')
    <section class="page-section bg-primary text-white mt-5 mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">At {{ $title }}, we pride ourselves on cultivating fields of gold with our
                        high-quality rapeseed. Nestled in a picturesque landscape, our farm is more than just a
                        place—it's a legacy of dedication, hard work, and a deep respect for the land. Our family-run
                        farm has been passed down through generations, each adding their unique touch to ensure that we
                        grow the finest rapeseed. We believe in sustainable farming practices, ensuring that every seed
                        we plant contributes to a healthier planet and a brighter future.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Our commitment to excellence extends beyond our crops. We strive to be a beacon
                        of innovation and community, embracing modern techniques while honoring timeless traditions. At
                        {{ $title }}, we don't just grow rapeseed; we nurture relationships, foster community
                        spirit, and create products that bring joy to households and industries alike. Join us in
                        celebrating the bounty of our fields and the heart of our farm.</p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                    <i class="fas fa-download me-2"></i>
                    Download Catalog
                </a>
            </div>
        </div>
    </section>
@endsection
