
{{-- resources/views/emails/contact/user.blade.php --}}
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; padding: 0; }
  .wrap { max-width: 560px; margin: 40px auto; background: #fff; border-radius: 8px; overflow: hidden; }
  .header { background: #1a1a1a; padding: 28px 32px; }
  .header h1 { color: #EC6502; font-size: 20px; margin: 0; }
  .header p  { color: #9a9a9a; font-size: 13px; margin: 6px 0 0; }
  .body { padding: 28px 32px; color: #333; font-size: 15px; line-height: 1.7; }
  .highlight { background: #fff8f3; border-left: 3px solid #EC6502; padding: 12px 16px; border-radius: 4px; margin: 20px 0; font-size: 14px; }
  .footer { padding: 16px 32px; background: #f9f9f9; font-size: 12px; color: #aaa; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>We've received your request!</h1>
    <p>Thank you for reaching out, {{ $contact->name }}.</p>
  </div>
  <div class="body">
    <p>Our team will review your enquiry and get back to you within <strong>1 business day</strong>.</p>

    <div class="highlight">
      <strong>Service requested:</strong> {{ $contact->service ?? 'General Enquiry' }}<br>
      <strong>Reply to:</strong> {{ $contact->email }}
    </div>

    <p>In the meantime, feel free to reach us directly at
      <a href="tel:+19192388044" style="color:#EC6502;">+1-919-238-8044</a>.
    </p>

    <p style="margin-top:24px;">Warm regards,<br><strong>The MilestonePLM Team</strong></p>
  </div>
  <div class="footer">MilestonePLM · info@milestoneplm.com · +1-919-238-8044</div>
</div>
</body>
</html>