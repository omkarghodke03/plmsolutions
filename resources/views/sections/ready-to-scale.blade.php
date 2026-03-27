<section class="ready-scale">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 left-content">
                <span class="tag">READY TO SCALE?</span>

                <h1 class="heading">
                    Let's accelerate your <span>next project.</span>
                </h1>

                <p class="description">
                    Precision CAD, BIM, and structural detailing —
                    delivered by a global engineering team, on time, every time.
                </p>

                <div class="contact-info">
                    <div class="item">
                        <i class="icon">📞</i>
                        <span>+1-919-238-8044</span>
                    </div>

                    <div class="item">
                        <i class="icon">✉️</i>
                        <span>info@milestoneplm.com</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT FORM -->
            <{{-- RIGHT FORM --}}
<div class="col-lg-6">
    <div class="form-card">
        <h5>SCHEDULE A CONSULTATION</h5>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Full Name *"
                value="{{ old('name') }}"
                class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="Work Email *"
                value="{{ old('email') }}"
                class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                required
            >

            <select name="service">
                <option value="" disabled {{ old('service') ? '' : 'selected' }}>
                    Select a service...
                </option>
                <option value="CAD Design"               {{ old('service') === 'CAD Design'               ? 'selected' : '' }}>CAD Design</option>
                <option value="BIM Services"              {{ old('service') === 'BIM Services'              ? 'selected' : '' }}>BIM Services</option>
                <option value="Structural Detailing"      {{ old('service') === 'Structural Detailing'      ? 'selected' : '' }}>Structural Detailing</option>
                <option value="Engineering Consultation"  {{ old('service') === 'Engineering Consultation'  ? 'selected' : '' }}>Engineering Consultation</option>
            </select>

            <button type="submit">SEND REQUEST →</button>
        </form>
    </div>
</div>

        </div>
    </div>
</section>