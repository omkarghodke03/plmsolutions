<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
    body { font-family: Arial, sans-serif; color:#333; margin:0; background:#f4f4f4; }
    .container { max-width:600px; margin:20px auto; background:#fff; border-radius:8px; overflow:hidden; }
    .header { background:#EC6502; color:#fff; padding:20px; text-align:center; }
    .content { padding:20px 30px; }
    table { width:100%; border-collapse:collapse; margin-top:10px; }
    table td { padding:8px; border-bottom:1px solid #eee; }
    table td.label { font-weight:bold; width:35%; color:#EC6502; }
    .footer { text-align:center; padding:15px; font-size:12px; color:#999; }
</style>
</head>
<body>
<div class="container">
    <div class="header"><h2>New Job Application Received</h2></div>
    <div class="content">
        <p>New application for <strong>{{ $data['job_title'] }}</strong>.</p>
        <table>
            <tr><td class="label">Name</td><td>{{ $data['name'] }}</td></tr>
            <tr><td class="label">Email</td><td>{{ $data['email'] }}</td></tr>
            <tr><td class="label">Contact Number</td><td>{{ $data['contact_number'] }}</td></tr>
            <tr><td class="label">Experience</td><td>{{ $data['experience'] }}</td></tr>
            <tr><td class="label">Notice Period</td><td>{{ $data['notice_period'] }}</td></tr>
            <tr><td class="label">CTC</td><td>{{ $data['ctc'] }}</td></tr>
            <tr><td class="label">LinkedIn</td><td>{{ $data['linkedin_link'] }}</td></tr>
            <tr><td class="label">Message</td><td>{{ $data['message'] }}</td></tr>
        </table>
        <p style="margin-top:20px;">Resume attached with this email.</p>
    </div>
    <div class="footer">MilestonePLM &copy; {{ date('Y') }}</div>
</div>
</body>
</html>