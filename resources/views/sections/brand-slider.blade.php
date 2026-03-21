{{-- resources/views/sections/brand-slider.blade.php --}}

<section class="brand-slider-section">
    <p class="brand-slider-label">TRUSTED BY GLOBAL CLIENTS ACROSS MULTIPLE INDUSTRIES</p>

    <div class="brand-slider-wrapper">
        {{-- Left fade overlay --}}
        <div class="brand-slider-fade brand-slider-fade--left"></div>

        <div class="brand-slider-track-container" id="brandSliderContainer">
            <div class="brand-slider-track" id="brandSliderTrack">

                {{-- ========== Original Set ========== --}}
                <div class="brand-slider-item">
                    <img src="{{ asset('images/aws.svg') }}" alt="Dropbox" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/google.svg') }}" alt="Oracle NetSuite" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/azure.svg') }}" alt="Microsoft Outlook" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/salesforce.svg') }}" alt="Salesforce" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/zoho.svg') }}" alt="Zoho People" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/aws.svg') }}" alt="Partner Logo" />
                </div>
                {{-- Add more logos here as needed --}}

                {{-- ========== Duplicate Set (for seamless loop) ========== --}}
               <div class="brand-slider-item">
                    <img src="{{ asset('images/aws.svg') }}" alt="Dropbox" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/google.svg') }}" alt="Oracle NetSuite" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/azure.svg') }}" alt="Microsoft Outlook" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/salesforce.svg') }}" alt="Salesforce" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/zoho.svg') }}" alt="Zoho People" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/aws.svg') }}" alt="Partner Logo" />
                </div>

            </div>{{-- /.brand-slider-track --}}
        </div>{{-- /.brand-slider-track-container --}}

        {{-- Right fade overlay --}}
        <div class="brand-slider-fade brand-slider-fade--right"></div>
    </div>{{-- /.brand-slider-wrapper --}}
</section>

@push('scripts')
<script>
(function () {
    const track = document.getElementById('brandSliderTrack');
    if (!track) return;

    let paused = false;

    // Pause on hover
    track.closest('.brand-slider-track-container').addEventListener('mouseenter', function () {
        paused = true;
        track.style.animationPlayState = 'paused';
    });

    // Resume on mouse leave
    track.closest('.brand-slider-track-container').addEventListener('mouseleave', function () {
        paused = false;
        track.style.animationPlayState = 'running';
    });
})();
</script>
@endpush