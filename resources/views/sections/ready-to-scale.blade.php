<section class="ready-scale">
    <div class="container">
        <div class="row align-items-center g-0">

            {{-- ── LEFT CONTENT ─────────────────────────────────────── --}}
            <div class="col-lg-6 left-content">

                <span class="tag">
                    <span class="tag-line"></span>
                    READY TO SCALE?
                </span>

                <h1 class="heading-contactfornhome">
    Let's accelerate your <span style="color:#EC6502;">next project.</span>
</h1>
                </h1>

                <p class="description-contactform-home">
                    Precision CAD, BIM, and structural detailing —
                    delivered by a global engineering team, on time, every time.
                </p>

                {{-- Trust bullets --}}
                <ul class="trust-list">
                   <li>
    <span class="trust-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M12 7v5l3 2"></path>
        </svg>
    </span>
    Response within 1 business day — guaranteed
</li>
                    <li>
                       <span class="trust-icon">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
         stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 3l7 3v5c0 5-3.5 8-7 10-3.5-2-7-5-7-10V6l7-3z"/>
    </svg>
</span>
                        No commitment required · Free initial consultation
                    </li>
                    <li>
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <circle cx="9" cy="8" r="3"/>
    <circle cx="17" cy="8" r="2"/>
    <path d="M4 18c0-3 2-5 5-5s5 2 5 5"/>
    <path d="M15 18c0-2 1.5-4 4-4"/>
</svg></span>
                        Dedicated project lead assigned from day one
                    </li>
                    <li>
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <path d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"/>
</svg></span>
                        98% client satisfaction across 500+ projects
                    </li>
                </ul>

                <hr class="rs-divider">

                <div class="contact-info">
                    <div class="item">
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.8.6v3.5c0 .6-.4 1-1 1C10.3 21 3 13.7 3 4.7c0-.6.4-1 1-1h3.5c0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1l-2.2 2.2z"/>
</svg></span>
                        <span>+1-919-238-8044</span>
                    </div>
                    <div class="item">
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <rect x="3" y="5" width="18" height="14" rx="1"/>
    <path d="M3 7l9 6 9-6"/>
</svg></span>
                        <span>info@milestoneplm.com</span>
                    </div>
                </div>

            </div>

            {{-- ── RIGHT FORM ───────────────────────────────────────── --}}
            <div class="col-lg-6">
                <div class="form-card">

                    <p class="form-eyebrow">SCHEDULE A CONSULTATION</p>
                    <h5>Tell us about your project</h5>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" id="rsForm" novalidate>
                        @csrf

                        {{-- Full Name --}}
                        <div class="rs-field">
                            <label for="rs_name">FULL NAME <span class="req">*</span></label>
                            <input
                                type="text"
                                id="rs_name"
                                name="name"
                                placeholder="Jane Smith"
                                value="{{ old('name') }}"
                                class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                maxlength="100"
                                autocomplete="name"
                                required
                            >
                            @error('name')
                                <span class="rs-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email + Phone --}}
                        <div class="rs-row">
                            <div class="rs-field">
                                <label for="rs_email">WORK EMAIL <span class="req">*</span></label>
                                <input
                                    type="email"
                                    id="rs_email"
                                    name="email"
                                    placeholder="jane@company.com"
                                    value="{{ old('email') }}"
                                    class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    maxlength="255"
                                    autocomplete="email"
                                    required
                                >
                                @error('email')
                                    <span class="rs-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="rs-field">
                                <label for="rs_phone">PHONE</label>
                                <input
                                    type="tel"
                                    id="rs_phone"
                                    name="phone"
                                    placeholder="+1 (555) 000-0000"
                                    value="{{ old('phone') }}"
                                    class="{{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                    maxlength="30"
                                    autocomplete="tel"
                                >
                                @error('phone')
                                    <span class="rs-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Service --}}
                        <div class="rs-field">
                            <label for="rs_service">SERVICE OF INTEREST</label>
                            <select id="rs_service" name="service" class="{{ $errors->has('service') ? 'is-invalid' : '' }}">
                                <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service…</option>
                                <option value="CAD Design"              {{ old('service') === 'CAD Design'              ? 'selected' : '' }}>CAD Design</option>
                                <option value="BIM Services"             {{ old('service') === 'BIM Services'             ? 'selected' : '' }}>BIM Services</option>
                                <option value="Structural Detailing"     {{ old('service') === 'Structural Detailing'     ? 'selected' : '' }}>Structural Detailing</option>
                                <option value="Engineering Consultation" {{ old('service') === 'Engineering Consultation' ? 'selected' : '' }}>Engineering Consultation</option>
                            </select>
                            @error('service')
                                <span class="rs-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Project Brief --}}
                        <div class="rs-field">
                            <label for="rs_brief">PROJECT BRIEF</label>
                            <textarea
                                id="rs_brief"
                                name="project_brief"
                                placeholder="Briefly describe your project or requirements…"
                                rows="4"
                                maxlength="2000"
                                class="{{ $errors->has('project_brief') ? 'is-invalid' : '' }}"
                            >{{ old('project_brief') }}</textarea>
                            @error('project_brief')
                                <span class="rs-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Honeypot anti-spam (hidden from real users) --}}
                        <div style="display:none" aria-hidden="true">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <button type="submit" id="rsSubmit">
                            <span class="rs-btn-label">SEND REQUEST</span>
                            <span class="rs-arrow">→</span>
                            <span class="rs-spinner d-none">⏳</span>
                        </button>

                        <p class="rs-note">Free consultation · No spam, ever · Confidential</p>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>