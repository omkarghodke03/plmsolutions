


{{-- resources/views/emails/contact/admin.blade.php --}}
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; padding: 0; }
  .wrap { max-width: 560px; margin: 40px auto; background: #fff; border-radius: 8px; overflow: hidden; }
  .header { background: #1a1a1ada; padding: 28px 32px; }
  .header h1 { color: #EC6502; font-size: 20px; margin: 0; }
  .header p  { color: #9a9a9a; font-size: 13px; margin: 4px 0 0; }
  .body { padding: 28px 32px; }
  .row { margin-bottom: 16px; }
  .lbl { font-size: 11px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #9a9a9a; }
  .val { font-size: 15px; color: #1a1a1a; margin-top: 4px; }
  .footer { padding: 16px 32px; background: #f9f9f9; font-size: 12px; color: #aaa; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>New Consultation Request</h1>
    <p>Submitted {{ now()->format('M j, Y \a\t g:ia') }}</p>
  </div>
  <div class="body">
    <div class="row">
      <div class="lbl">Full Name</div>
      <div class="val">{{ $contact->name }}</div>
    </div>
    <div class="row">
      <div class="lbl">Work Email</div>
      <div class="val"><a href="mailto:{{ $contact->email }}" style="color:#EC6502;">{{ $contact->email }}</a></div>
    </div>
    <div class="row">
      <div class="lbl">Service of Interest</div>
      <div class="val">{{ $contact->service ?? '—' }}</div>
    </div>
  </div>
  <div class="footer">MilestonePLM · info@milestoneplm.com</div>
</div>
</body>
</html>