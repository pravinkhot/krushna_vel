<!-- Start of Breadcrumb -->

<section id="{{ $sectionID }}" class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>{{ $title }}</h3>
                </div>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        @foreach($breadcrumbList as $value)
                            <li class="breadcrumb-item {{ (isset($value['status']) && ($value['status'] === 'active')) ? 'active' : '' }}">{{ $value['title'] }}</li>
                        @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- End of Breadcrumb -->