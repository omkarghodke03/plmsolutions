
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
    body { font-family: Arial, sans-serif; color:#333; margin:0; background:#f4f4f4; }
    .container { max-width:600px; margin:20px auto; background:#fff; border-radius:8px; overflow:hidden; }
    .header { background:#EC6502; color:#fff; padding:20px; text-align:center; }
    .content { padding:20px 30px; line-height:1.6; }
    .footer { text-align:center; padding:15px; font-size:12px; color:#999; }
</style>
</head>
<body>
<div class="container">
    <div class="header"><h2>Thank You for Applying!</h2></div>
    <div class="content">
        <p>Dear {{ $data['name'] }},</p>
        <p>Thank you for applying for <strong>{{ $data['job_title'] }}</strong>. We have received your application successfully.</p>
        <p>Our HR team will review your profile and get back to you if it matches our requirements.</p>
        <p>Best Regards,<br>HR Team<br>MilestonePLM</p>
    </div>
    <div class="footer">MilestonePLM &copy; {{ date('Y') }}</div>
</div>
</body>
</html>