{{-- resources/views/sections/brand-slider.blade.php --}}

<style>

    @media (max-width: 575.98px) {
      .brand-slider-item img {
           max-width: 70px;
           max-height: 40px;
        }
    }


</style>

<section class="brand-slider-section">
    <p class="brand-slider-label">TRUSTED BY GLOBAL CLIENTS ACROSS MULTIPLE INDUSTRIES</p>

    <div class="brand-slider-wrapper">
        {{-- Left fade overlay --}}
        <div class="brand-slider-fade brand-slider-fade--left"></div>

        <div class="brand-slider-track-container" id="brandSliderContainer">
            <div class="brand-slider-track" id="brandSliderTrack">

                {{-- ========== Original Set ========== --}}
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-1.png') }}" alt="Dropbox" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-2.png') }}" alt="Oracle NetSuite" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-3.png') }}" alt="Microsoft Outlook" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-4.png') }}" alt="Salesforce" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-5.png') }}" alt="Zoho People" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-6.jpg') }}" alt="Partner Logo" />
                </div>
                 <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-7.png') }}" alt="Partner Logo" />
                </div>
                 <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-8.png') }}" alt="Partner Logo" />
                </div>
                 <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-9.png') }}" alt="Partner Logo" />
                </div>
                 <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-10.png') }}" alt="Partner Logo" />
                </div>
                {{-- Add more logos here as needed --}}

                {{-- ========== Duplicate Set (for seamless loop) ========== --}}
               <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-1.png') }}" alt="Dropbox" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-2.png') }}" alt="Oracle NetSuite" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-3.png') }}" alt="Microsoft Outlook" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-4.png') }}" alt="Salesforce" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-5.png') }}" alt="Zoho People" />
                </div>
                <div class="brand-slider-item">
                    <img src="{{ asset('images/brand-6.png') }}" alt="Partner Logo" />
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