{{-- resources/views/jobs/apply.blade.php --}}

<!-- Apply Job Modal -->
<div class="modal fade" id="applyJobModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Apply for {{ $job->title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="jobApplicationForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="job_title" value="{{ $job->title }}">

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Full Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" required>
                    <div class="invalid-feedback" data-error="name"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" required>
                    <div class="invalid-feedback" data-error="email"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Contact Number<span class="text-danger">*</span></label>
                    <input type="text" name="contact_number" class="form-control" required>
                    <div class="invalid-feedback" data-error="contact_number"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Experience<span class="text-danger">*</span></label>
                    <input type="text" name="experience" class="form-control" placeholder="e.g. 2 Years" required>
                    <div class="invalid-feedback" data-error="experience"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Notice Period<span class="text-danger">*</span></label>
                    <input type="text" name="notice_period" class="form-control" placeholder="e.g. 30 Days" required>
                    <div class="invalid-feedback" data-error="notice_period"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Current CTC<span class="text-danger">*</span></label>
                    <input type="text" name="ctc" class="form-control" required>
                    <div class="invalid-feedback" data-error="ctc"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">LinkedIn Profile Link</label>
                    <input type="url" name="linkedin_link" class="form-control" placeholder="https://linkedin.com/in/...">
                    <div class="invalid-feedback" data-error="linkedin_link"></div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Resume<span class="text-danger">*</span></label>
                    <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                    <div class="invalid-feedback" data-error="resume"></div>
                </div>

                <div class="col-12">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="3"></textarea>
                    <div class="invalid-feedback" data-error="message"></div>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn apply-submit-btn" id="applySubmitBtn">
                    <span class="btn-text">Submit</span>
                    <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Thank You Popup Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <div class="thankyou-icon mb-3">
            <i class="bi bi-check-circle-fill"></i>
        </div>
        <h4>Thank You!</h4>
        <p class="mb-0">Your application has been submitted successfully. Our HR team will contact you soon.</p>
      </div>
      <button type="button" class="btn apply-submit-btn mt-3" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>

<style>
:root { --brand-color: #EC6502; }

body, .modal, .form-control, .btn {
    font-family: Arial, sans-serif;
}
.modal-title {font-size:30px}

.apply-btn, .apply-submit-btn {
    background-color: var(--brand-color);
    border-color: var(--brand-color);
    color: #fff;
    padding: 10px 24px;
    border-radius: 6px;
    font-weight: 600;
    border: none;
}
.apply-btn:hover, .apply-submit-btn:hover {
    background-color: #d35a00;
    color:#fff;
}
.thankyou-icon i { font-size: 60px; color: var(--brand-color); }
.form-label { font-weight: 600; }
.form-control:focus {
    border-color: var(--brand-color);
    box-shadow: 0 0 0 0.2rem rgba(236,101,2,0.25);
}

/* Responsive - mobile/tablet */
@media (max-width: 576px) {
    .modal-lg { max-width: 95%; margin: 10px auto; }
    .apply-submit-btn, .apply-btn { width: 100%; }
    .modal-title {font-size:15px}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('jobApplicationForm');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const submitBtn = document.getElementById('applySubmitBtn');
        const btnText = submitBtn.querySelector('.btn-text');
        const spinner = submitBtn.querySelector('.spinner-border');

        form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        form.querySelectorAll('.invalid-feedback').forEach(el => el.innerText = '');

        submitBtn.disabled = true;
        btnText.classList.add('d-none');
        spinner.classList.remove('d-none');

        fetch("{{ route('job.application.apply') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(async response => {
            const data = await response.json();

            if (response.status === 422) {
                Object.keys(data.errors).forEach(field => {
                    const input = form.querySelector(`[name="${field}"]`);
                    const errorDiv = form.querySelector(`[data-error="${field}"]`);
                    if (input) input.classList.add('is-invalid');
                    if (errorDiv) errorDiv.innerText = data.errors[field][0];
                });
                return;
            }

            if (data.status) {
                const applyModal = bootstrap.Modal.getInstance(document.getElementById('applyJobModal'));
                applyModal.hide();
                form.reset();

                const thankModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
                thankModal.show();
            } else {
                alert(data.message || 'Something went wrong. Please try again.');
            }
        })
        .catch(() => alert('Something went wrong. Please try again.'))
        .finally(() => {
            submitBtn.disabled = false;
            btnText.classList.remove('d-none');
            spinner.classList.add('d-none');
        });
    });
});
</script>