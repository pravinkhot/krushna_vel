@extends('website.layouts.app')

@section('content')
     @include('website.layouts.breadcrumb', [
        'sectionID' => 'contact_us',
        'title' => 'Contact Us',
        'breadcrumbList' => [
            [
                'url' => '#',
                'title' => 'Contact Us',
                'status' => 'active'
            ]
        ]
    ])

    <section class="section contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Get in <span class="alternate">Touch</span></h3>
                    </div>
                </div>
            </div>
            <form action="#" class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control main" name="name" id="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control main" name="email" id="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control main" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="col-md-12">
                    <textarea name="message" id="message" class="form-control main" rows="10" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-main-md">Send Message</button>
                </div>
            </form>
        </div>
    </section>
@endsection
