@extends('home.layouts.app')

@section('content')


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif



<!-- Header Banner with Background Image -->
<div class="page-banner"
    style="background-image: url('{{ asset('assets/images/banner-bg.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <!-- Overlay to ensure text readability -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
    </div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content text-center">
                    <h1 class="text-white">CONNECT <span style="color: #12d0ff;">US</span></h1> <br>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('home') }} "
                                    class="text-blue font-weight-bold">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inquiry-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="contact-header text-center">
                    <span class="contact-label text-uppercase" style="color: #6c5ce7; font-weight: 600;">Inquire Now
                    </span>
                    <h2 class="mt-2 mb-3">HR solutions made simple</h2>
                    <p class="mb-4">We connect talent with opportunity, fostering growth, success, and a brighter future
                        for individuals and businesses alike.</p>
                </div>
            </div>
        </div>

        <div class="contact-container"
            style="background: linear-gradient(90deg, hsla(192, 95%, 50%, 1) 0%, rgb(128, 138, 168) 100%); border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="contact-form-wrapper bg-white p-4 h-100">
                        <form class="inquiry-form p-3" method="POST" action="{{ route('inquiry.send') }}">
                            @method('POST')
                            @csrf
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span
                                        class="text-danger">*</span></label>
                                <select class="form-control form-select" id="subject" name="subject" required>
                                    <option selected disabled>---Please choose an option---</option>
                                    <option value="General Inquiry" {{ old('subject')=='General Inquiry' ? 'selected'
                                        : '' }}>General Inquiry</option>
                                    <option value="Service Request" {{ old('subject')=='Service Request' ? 'selected'
                                        : '' }}>Service Request</option>
                                    <option value="Job Application" {{ old('subject')=='Job Application' ? 'selected'
                                        : '' }}>Job Application</option>
                                    <option value="Partnership Opportunity" {{ old('subject')=='Partnership Opportunity'
                                        ? 'selected' : '' }}>Partnership Opportunity</option>
                                </select>
                                
                            </div>

                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('fullName') is-invalid @enderror"
                                    id="fullName" name="fullName" placeholder="Enter your full name"
                                    value="{{ old('fullName') }}" >
                                @error('fullName')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="Enter active email"
                                            value="{{ old('email') }}" >
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contactNumber" class="form-label">Contact Number <span
                                                class="text-danger">*</span></label>
                                        <input type="tel"
                                            class="form-control @error('contactNumber') is-invalid @enderror"
                                            id="contactNumber" name="contactNumber" placeholder="Ex: 09XXXXXXXXX"
                                            value="{{ old('contactNumber') }}">
                                        @error('contactNumber')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                    name="message" rows="5" placeholder="Type your message here..."
                                    >{{ old('message') }}</textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                                <label class="form-check-label" for="privacyCheck">
                                    I have read and accepted MediCard Philippines, Inc.'s <a href="#"
                                        class="text-primary">Privacy Statement</a>.
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100 py-2"
                                    style="background-color: #8e44ad; border: none;">Send Inquiry</button>
                            </div>
                        </form>
                    </div>





                </div>

                <div class="col-lg-6">
                    <div class="contact-info-wrapper p-4 h-100 d-flex flex-column">
                        <div class="map-container mb-4 flex-grow-1" style="min-height: 300px; width: 100%;">
                            <!-- Updated Google Maps embed for Ortigas Robinsons Cyberscape -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2263899926204!2d121.0613197!3d14.5863337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c81b8a34e857%3A0x9e3bcb41b0b0c46f!2sRobinsons%20Cyberscape%20Alpha!5e0!3m2!1sen!2sph!4v1621835189675!5m2!1sen!2sph"
                                width="100%" height="100%" style="border:0; border-radius: 8px;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>

                        <div class="contact-info-cards bg-white p-4 rounded">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="contact-card d-flex align-items-center">
                                        <div class="icon-wrapper me-3">
                                            <i class="fas fa-envelope" style="color: #0066ff; font-size: 24px;"></i>
                                        </div>
                                        <div class="contact-details">
                                            <h6 class="mb-1">Email</h6>
                                            <p class="mb-0"><a href="mailto:info@domain.com"
                                                    style="color: #0066ff; text-decoration: none;">worklink.solution.site@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="contact-card d-flex align-items-center">
                                        <div class="icon-wrapper me-3">
                                            <i class="fas fa-map-marker-alt"
                                                style="color: #0066ff; font-size: 24px;"></i>
                                        </div>
                                        <div class="contact-details">
                                            <h6 class="mb-1">Location</h6>
                                            <p class="mb-0">Robinsons Cyberscape Alpha, Garnet Road, Ortigas Center,
                                                Pasig City, Metro Manila, Philippines</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection