@extends('website.layouts.app')

@section('customCss')
@endsection

@section('content')
    @include('website.layouts.breadcrumb', [
        'sectionID' => 'about_us',
        'title' => 'About Us',
        'breadcrumbList' => [
            [
                'url' => '#',
                'title' => 'About Us',
                'status' => 'active'
            ]
        ]
    ])

    <!-- Start of About -->
    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="image-block bg-about">
                        <img class="img-fluid" src="{{ asset('website/img/about_us/main_about_us.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 align-self-center">
                    <div class="content-block">
                        <h2>About <span class="alternate">{{ config('custom.websiteName') }}</span></h2>
                        <div class="description-one">
                            <p>
                                Although the tribes of the original Hindu-Gawli tribe are different, Shri Krishna is their ancestor. Sri Krishna was from the Yadu clan. Its settlement was in the Mathura region. Later, the Yadavas of Yudhunas came to stay on the Yamuna. He started farming and farming. He also had a prominent place in the politics of the day. In the Mahabharata period, he had won the prestigious position.
                            </p>
                        </div>
                        <div class="description-two">
                            <p>
                                During the time of Sri Krishna, seven Somvangasian kings, who were blind, Kukar, Dasih, Bhoja, Bhoom, Yadav and Vrishni, were ruling the kingdom. In all these states, Yadav was powerful and powerful. There were some subversive people in those days. They had started oppressing the society. They consisted of brackets, kauravas, urethra and infants. After dark, Yadav and Vrishni families left the area of ​​Mathuraleghat and went to Saurashtra. The dominant kings stayed in Mathura, while other kings and people migrated. After the death of Sri Krishna, the Yadav kings quarreled among themselves and through it Yadavi rose. Some Yadavs came from Saurashtra and came towards Maharashtra and became folk culture.
                            </p>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-transparent-md">Read more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About -->
@endsection