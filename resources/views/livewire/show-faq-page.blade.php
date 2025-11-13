<main>



    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
                        <h1>Frequently Asked Questions</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion accordion-border-bottom" id="accordionFAQ">
                        @if ($faqs != '')
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header accordion-button h5 border-0 {{ !$loop->first ? 'collapsed' : '' }}"
                                        id="heading-{{ $faq->id }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $faq->id }}"
                                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                        aria-controls="collapse-{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </h2>
                                    <div id="collapse-{{ $faq->id }}"
                                        class="accordion-collapse collapse border-0 {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="heading-{{ $faq->id }}" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body py-0 content">{!! $faq->answer !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header accordion-button h5 border-0 active"
                                id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                                aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h2>
                            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                                class="accordion-collapse collapse border-0 show"
                                aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Ipsa tempora esse autem error repellat at unde
                                    maiores eos ad iure eius, cumque quaerat placeat architecto quo blanditiis
                                    voluptatum veritatis rem.</div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


