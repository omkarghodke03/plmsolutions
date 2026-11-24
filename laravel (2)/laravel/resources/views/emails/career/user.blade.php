
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Received - Milestone PLM Solutions</title>
</head>

<body style="margin:0; padding:0; background:#f3f4f6; font-family:Arial, Helvetica, sans-serif; color:#252525;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f3f4f6;">
<tr>
<td align="center" style="padding:20px 10px;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:620px; background:#ffffff; border:1px solid #e5e7eb;">

    <!-- Header -->
    <tr>
        <td style="background:#1b1b1b; padding:20px 25px; border-bottom:3px solid #EC6502;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="left" valign="middle">
                        <div style="font-size:21px; line-height:26px; font-weight:700; color:#ffffff;">
                            MILESTONE <span style="color:#EC6502;">PLM</span>
                        </div>
                        <div style="font-size:10px; letter-spacing:1.5px; color:#b7b7b7; margin-top:3px;">
                            SOLUTIONS
                        </div>
                    </td>
                    <td align="right" valign="middle">
                        <span style="font-size:10px; font-weight:700; color:#ffffff; background:#303030; padding:7px 10px; border:1px solid #484848;">
                            APPLICATION RECEIVED
                        </span>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Main Heading -->
    <tr>
        <td style="padding:26px 25px 12px;">
            <div style="font-size:23px; line-height:30px; font-weight:700; color:#202020;">
                Thank You for Applying!
            </div>

            <div style="font-size:14px; line-height:22px; color:#555555; margin-top:13px;">
                Dear {{ $data['name'] ?? 'Candidate' }},
            </div>

            <div style="font-size:13px; line-height:22px; color:#555555; margin-top:9px;">
                Thank you for your interest in joining <strong style="color:#202020;">Milestone PLM Solutions.</strong>
                We have successfully received your job application and appreciate you taking the time to apply.
            </div>
        </td>
    </tr>

    <!-- Confirmation -->
    <tr>
        <td style="padding:10px 25px 16px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#fff8f3; border:1px solid #f2dfd3;">
                <tr>
                    <td style="padding:13px 15px; border-left:3px solid #EC6502;">
                        <div style="font-size:13px; font-weight:700; color:#202020;">
                            Your application has been submitted successfully.
                        </div>
                        <div style="font-size:12px; line-height:19px; color:#666666; margin-top:4px;">
                            Our recruitment team will review your application and qualifications.
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Application Details -->
    <tr>
        <td style="padding:5px 25px 8px;">
            <div style="font-size:12px; font-weight:700; color:#202020; text-transform:uppercase; letter-spacing:0.8px; border-left:3px solid #EC6502; padding-left:9px;">
                Application Details
            </div>
        </td>
    </tr>

    <tr>
        <td style="padding:0 25px 16px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #e9e9e9;">

                <tr>
                    <td width="36%" style="padding:12px 13px; background:#f8f8f8; border-bottom:1px solid #e9e9e9; font-size:12px; color:#777777;">
                        Applicant Name
                    </td>
                    <td style="padding:12px 13px; border-bottom:1px solid #e9e9e9; font-size:13px; color:#222222; font-weight:600;">
                        {{ $data['name'] ?? 'Candidate' }}
                    </td>
                </tr>

                <tr>
                    <td style="padding:12px 13px; background:#f8f8f8; font-size:12px; color:#777777;">
                        Applied Position
                    </td>
                    <td style="padding:12px 13px; font-size:13px; color:#EC6502; font-weight:700;">
                        {{ $data['job_title'] ?? 'Job Application' }}
                    </td>
                </tr>

            </table>
        </td>
    </tr>

    <!-- What Happens Next -->
    <tr>
        <td style="padding:5px 25px 15px;">
            <div style="font-size:12px; font-weight:700; color:#202020; text-transform:uppercase; letter-spacing:0.8px; border-left:3px solid #EC6502; padding-left:9px;">
                What Happens Next?
            </div>

            <div style="font-size:13px; line-height:22px; color:#555555; margin-top:10px;">
                Our HR team will carefully evaluate your profile against the position requirements. If your qualifications and experience match our current requirements, our recruitment team will contact you regarding the next steps in the hiring process.
            </div>
        </td>
    </tr>

    <!-- Thank You Message -->
    <tr>
        <td style="padding:0 25px 20px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f8f8f8; border:1px solid #e9e9e9;">
                <tr>
                    <td style="padding:14px 15px;">
                        <div style="font-size:13px; line-height:21px; color:#555555;">
                            We appreciate your interest in becoming part of our team. Thank you for considering Milestone PLM Solutions as the next step in your professional journey.
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Closing -->
    <tr>
        <td style="padding:0 25px 24px;">
            <div style="font-size:13px; line-height:21px; color:#555555;">
                We wish you all the best!
            </div>

            <div style="font-size:13px; line-height:21px; color:#555555; margin-top:12px;">
                Best Regards,<br>
                <strong style="font-size:14px; color:#202020;">
                    HR & Recruitment Team
                </strong><br>
                Milestone PLM Solutions
            </div>
        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td style="background:#1b1b1b; border-top:3px solid #EC6502; padding:17px 20px; text-align:center;">
            <div style="font-size:14px; font-weight:700; color:#ffffff;">
                MILESTONE <span style="color:#EC6502;">PLM</span> SOLUTIONS
            </div>

            <div style="font-size:11px; line-height:18px; color:#b7b7b7; margin-top:5px;">
                Building Careers. Creating Opportunities.
            </div>

            <div style="font-size:10px; color:#888888; margin-top:8px;">
                &copy; {{ date('Y') }} Milestone PLM Solutions. All Rights Reserved.
            </div>
        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>
