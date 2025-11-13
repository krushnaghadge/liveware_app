<main>
    <section class="page-header bg-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Contact Us</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a href="/">Home</a></li>
                        <li class="list-inline-item">/ &nbsp; Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-3">Contact With Us</p>
                        <h1>Let’s Get Connected</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas cursus pellentesque dignissim dui, congue etiam.</p>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="shadow rounded p-5 bg-white">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <h4>Leave Us A Message</h4>
                            </div>

                            {{-- ✅ Flash Message --}}
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="col-lg-6">
                                <div class="contact-form">
                                    <form wire:submit.prevent="submitForm">
                                        <div class="form-group mb-4 pb-2">
                                            <label for="contact_name" class="form-label">Full Name</label>
                                            <input type="text" id="contact_name"
                                                class="form-control shadow-none @error('name') is-invalid @enderror"
                                                wire:model="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group mb-4 pb-2">
                                            <label for="contact_email" class="form-label">Email address</label>
                                            <input type="email" id="contact_email"
                                                class="form-control shadow-none @error('email') is-invalid @enderror"
                                                wire:model="email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group mb-4 pb-2">
                                            <label for="contact_message" class="form-label">Write Message</label>
                                            <textarea id="contact_message" rows="3"
                                                class="form-control shadow-none @error('message') is-invalid @enderror"
                                                wire:model="message"></textarea>
                                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <button class="btn btn-primary w-100" type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="contact-info">
                                    <div class="block mt-0">
                                        <h4 class="h5">Still Have Questions?</h4>
                                        <div class="content">
                                            Call Us — We Will Be Happy To Help
                                            <br><a href="tel:+XXX111222">+XXX111222</a>
                                            <br>Monday - Friday<br>9AM TO 8PM Eastern Time
                                        </div>
                                    </div>

                                    <div class="block mt-4">
                                        <h4 class="h5">Canada Office</h4>
                                        <div class="content">Park Street.<br>455.<br>Salt Lake</div>
                                    </div>

                                    <div class="block mt-4">
                                        <h4 class="h5">Demo Office</h4>
                                        <div class="content">22 Park Road.<br>23BX,<br>Demo</div>
                                    </div>

                                    <div class="block">
                                        <ul class="list-unstyled list-inline my-4 social-icons">
                                            <li class="list-inline-item me-3">
                                                <a title="Facebook" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3">
                                                <a title="Twitter" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3">
                                                <a title="Instagram" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> {{-- row --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
