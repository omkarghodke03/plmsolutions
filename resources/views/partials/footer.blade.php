{{-- resources/views/partials/footer.blade.php --}}
<style>
    
    .plm-ft__logo-link img {
    max-width: 260px;
    height: auto;
    display: block;
}
.plm-ft__badge {
    padding: 3px;
}
#og_3022 {
    display: flex !important;
    align-items: center !important;
    flex-direction: column !important;
    flex-wrap: nowrap !important;
}
</style>

<footer class="plm-ft" aria-label="Site footer">
    <div class="plm-ft__main">
        <div class="plm-ft__container">

            {{-- Col 1: Brand --}}
            <div class="plm-ft__brand">
                <a href="{{ url('/home') }}" class="plm-ft__logo-link" aria-label="Milestone PLM Solutions">
                    <img src="{{ asset('images/footer-image.png') }}" alt="Milestone PLM Solutions" width="200" height="60" loading="lazy">
                </a>
                <p class="plm-ft__desc">Global BIM, CAD, and structural engineering outsourcing services delivering precision and excellence for 15+ years.</p>

                {{-- ISO badges --}}
               

                {{-- Contact --}}
                

                {{-- Social --}}
               
            </div>

            {{-- Col 2: Services --}}
            <div class="plm-ft__col d-flex align-items-left" id="og_3022">
                <h3 class="plm-ft__heading">Certificates</h3>
                 <div class="plm-ft__badges">
                    <span class="plm-ft__badge"><img src="{{ asset('images/footer-two-one.png') }}"  style="width:70px; height:70px;"  ></span>
                    <span class="plm-ft__badge"><img src="{{ asset('images/footer-two-two2.png') }}"  style="width:70px; height:70px;" alt="Badge 2"></span>
                    <span class="plm-ft__badge"><img src="{{ asset('images/footer-two-three.jpeg') }}"   style="width:70px; height:70px;" alt="Badge 3"></span>
                </div>
            </div>

            {{-- Col 3: Delivery Models + Industries --}}
            <div class="plm-ft__col" id="og_3022">
                <h3 class="plm-ft__heading">Contact Us</h3>
                <ul class="plm-ft__contact">
                    <li>
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/></svg>
                        <a href="tel:+918047370000">+91-80-4737-0000</a>
                    </li>
                    <li>
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741z"/></svg>
                        <a href="mailto:info@milestoneplm.com">info@milestoneplm.com</a>
                    </li>
                    <li>
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                        <span>Thane | Dover | Reading</span>
                    </li>
                </ul>
            </div>

            {{-- Col 4: Company --}}
            <div class="plm-ft__col" id="og_3022">
                <h3 class="plm-ft__heading">Social Media</h3>
                <div style="display:flex; gap:15px; ">
                    <a href="https://www.linkedin.com/company/milestone-plm-solutions/" class="plm-ft__social-btn " aria-label="LinkedIn" rel="noopener noreferrer" target="_blank" style="margin:5px" >
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/milestoneplmsolutions/" class="plm-ft__social-btn" aria-label="Twitter / X" rel="noopener noreferrer" target="_blank" style="margin:5px" >
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                         <path d="M8 0C5.826 0 5.555.01 4.703.048 3.85.087 3.269.222 2.76.42a3.94 3.94 0 0 0-1.42.923A3.94 3.94 0 0 0 .42 2.76c-.198.509-.333 1.09-.372 1.943C.01 5.555 0 5.826 0 8c0 2.174.01 2.445.048 3.297.039.853.174 1.434.372 1.943.205.527.478.974.923 1.42.446.445.893.718 1.42.923.509.198 1.09.333 1.943.372C5.555 15.99 5.826 16 8 16c2.174 0 2.445-.01 3.297-.048.853-.039 1.434-.174 1.943-.372a3.94 3.94 0 0 0 1.42-.923 3.94 3.94 0 0 0 .923-1.42c.198-.509.333-1.09.372-1.943C15.99 10.445 16 10.174 16 8c0-2.174-.01-2.445-.048-3.297-.039-.853-.174-1.434-.372-1.943a3.94 3.94 0 0 0-.923-1.42A3.94 3.94 0 0 0 13.24.42c-.509-.198-1.09-.333-1.943-.372C10.445.01 10.174 0 8 0zm0 1.441c2.137 0 2.39.008 3.232.046.778.035 1.2.165 1.48.274.37.144.634.316.912.594.278.278.45.542.594.912.109.28.239.702.274 1.48.038.842.046 1.095.046 3.232s-.008 2.39-.046 3.232c-.035.778-.165 1.2-.274 1.48a2.49 2.49 0 0 1-.594.912 2.49 2.49 0 0 1-.912.594c-.28.109-.702.239-1.48.274-.842.038-1.095.046-3.232.046s-2.39-.008-3.232-.046c-.778-.035-1.2-.165-1.48-.274a2.49 2.49 0 0 1-.912-.594 2.49 2.49 0 0 1-.594-.912c-.109-.28-.239-.702-.274-1.48C1.449 10.39 1.441 10.137 1.441 8s.008-2.39.046-3.232c.035-.778.165-1.2.274-1.48.144-.37.316-.634.594-.912.278-.278.542-.45.912-.594.28-.109.702-.239 1.48-.274.842-.038 1.095-.046 3.232-.046z"/><path d="M8 3.892A4.108 4.108 0 1 0 8 12.108 4.108 4.108 0 0 0 8 3.892zm0 6.775A2.667 2.667 0 1 1 8 5.333a2.667 2.667 0 0 1 0 5.334z"/><circle cx="12.305" cy="3.695" r=".96"/></svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UCE6GVls7KPoAsc1LNCWjzCw" class="plm-ft__social-btn" aria-label="Facebook" rel="noopener noreferrer" target="_blank" style="margin:5px" >
                       <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M8.051 1.999h-.102C3.808 1.999 2.275 2.186 1.515 2.946.756 3.705.569 5.238.569 8s.187 4.295.946 5.054c.76.76 2.293.947 6.434.947h.102c4.141 0 5.674-.187 6.434-.947.759-.759.946-2.292.946-5.054s-.187-4.295-.946-5.054c-.76-.76-2.293-.947-6.434-.947zM6.4 11.2V4.8L11.2 8 6.4 11.2z"/></svg></a></div>
                      </div>
                    </div>
                 </div>

    {{-- Bottom bar --}}
    <div class="plm-ft__bottom">
        <div class="plm-ft__container plm-ft__bottom-inner">
            <p class="plm-ft__copy">&copy; {{ date('Y') }} Milestone PLM Solutions. All rights reserved.</p>
            <nav class="plm-ft__legal" aria-label="Legal links">
                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                <a href="{{ url('/terms') }}">Terms of Service</a>
                <a href="{{ url('/cookie-policy') }}">Cookie Policy</a>
            </nav>
        </div>
    </div>
</footer>