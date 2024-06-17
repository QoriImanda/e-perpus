@extends('template.homePage.app')

@section('content')
    <div class="breadcrumb-container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <section class="contact">
        <h3>Contact Us</h3>
        <div class="main">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1280.408262723861!2d100.9968977501309!3d0.362167524563486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d515ab072d33cd%3A0x1f9ca5704ff4a6a1!2sSMAN%201%20Bangkinang%20Seberang!5e1!3m2!1sen!2sid!4v1718293147985!5m2!1sen!2sid"
                    height="70" style="width: 100%; border: none; border-radius: 5px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <h4>Email</h4>
                <p>eperpus@xample.com</p>
                <br>
                <h4>Telephone</h4>
                <p>+62 08xxxxxxxx</p>
                {{-- <div class="input-form">
                    <div class="input-field">
                        <label for="name">Full Name *</label>
                        <input type="text" name="" id="name" placeholder="Full Name" />
                    </div>
                    <div class="input-field">
                        <label for="email">E-mail *</label>
                        <input type="email" name="" id="email" placeholder="Email Address" />
                    </div>
                    <div class="input-field">
                        <label for="phone">Phone No. *</label>
                        <input type="text" name="" id="phone" placeholder="Phone Number" />
                    </div>
                    <div class="message">
                        <label for="message">Message *</label>
                        <textarea placeholder="Message" id="message"></textarea>
                    </div>
                    <button>submit</button>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="subscription">
        <div class="container">
            {{-- <h4>
                Subscribe our newsletter for Latest <br />
                books updates
            </h4>
            <div class="input">
                <input type="text" placeholder="Type your email here" />
                <button>subscribe</button>
            </div> --}}
        </div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
    </section>
@endsection
