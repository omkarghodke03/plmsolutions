<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application Received</title>
</head>
<body style="margin:0; padding:0; background:#f4f4f4; font-family:Arial, Helvetica, sans-serif; color:#333;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f4f4f4; padding:20px 10px;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px; width:100%; background:#ffffff; border-collapse:collapse;">

                <!-- Header -->
                <tr>
                    <td style="background:#1b1b1b; padding:22px 25px; text-align:center; border-bottom:4px solid #EC6502;">
                        <h2 style="margin:0; color:#ffffff; font-size:21px; font-weight:bold;">
                            New Job Application Received
                        </h2>
                        <p style="margin:7px 0 0; color:#cccccc; font-size:12px;">
                            Milestone PLM Solutions
                        </p>
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding:25px 30px;">

                        <p style="margin:0 0 18px; font-size:14px; line-height:22px; color:#444;">
                            A new application has been received for the position of
                            <strong style="color:#EC6502;">{{ $data['job_title'] ?? '-' }}</strong>.
                            Please find the candidate details below.
                        </p>

                        <!-- Candidate Details -->
                        <h3 style="margin:0 0 10px; padding-bottom:8px; border-bottom:2px solid #EC6502; font-size:14px; color:#222; text-transform:uppercase;">
                            Candidate Details
                        </h3>

                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;">
                            <tr>
                                <td width="35%" style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Name</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['name'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Email</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">
                                    <a href="mailto:{{ $data['email'] ?? '' }}" style="color:#EC6502; text-decoration:none;">{{ $data['email'] ?? '-' }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Contact Number</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['contact_number'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Experience</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['experience'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Notice Period</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['notice_period'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">CTC</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['ctc'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">LinkedIn</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; word-break:break-all;">
                                    @if(!empty($data['linkedin_link']))
                                        <a href="{{ $data['linkedin_link'] }}" style="color:#EC6502; text-decoration:none;">{{ $data['linkedin_link'] }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Message</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; line-height:20px;">{!! nl2br(e($data['message'] ?? '-')) !!}</td>
                            </tr>
                        </table>

                        <!-- Submission Details -->
                        <h3 style="margin:23px 0 10px; padding-bottom:8px; border-bottom:2px solid #EC6502; font-size:14px; color:#222; text-transform:uppercase;">
                            Submission Details
                        </h3>

                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;">
                            <tr>
                                <td width="35%" style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Applied From</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; word-break:break-all;">
                                    @if(!empty($data['page_url']) && $data['page_url'] !== '-')
                                        <a href="{{ $data['page_url'] }}" style="color:#EC6502; text-decoration:none;">{{ $data['page_url'] }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">IP Address</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['ip'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px; font-weight:bold;">Location</td>
                                <td style="padding:9px 8px; border-bottom:1px solid #eeeeee; font-size:13px;">{{ $data['location'] ?? 'Unknown' }}</td>
                            </tr>
                        </table>

                        <!-- Resume -->
                        <p style="margin:20px 0 0; padding:12px 15px; background:#fff7f1; border-left:3px solid #EC6502; font-size:13px; line-height:20px; color:#444;">
                            <strong style="color:#EC6502;">Resume:</strong>
                            Candidate's resume is attached with this email.
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#1b1b1b; padding:16px 20px; text-align:center;">
                        <p style="margin:0; color:#ffffff; font-size:13px; font-weight:bold;">
                            Milestone PLM Solutions
                        </p>
                        <p style="margin:7px 0 0; color:#aaaaaa; font-size:11px;">
                            Building Careers. Creating Opportunities.
                        </p>
                        <p style="margin:8px 0 0; color:#888888; font-size:11px;">
                            &copy; {{ date('Y') }} Milestone PLM Solutions. All rights reserved.
                        </p>
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>