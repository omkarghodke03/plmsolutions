
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Consultation Request</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f6f8;
    font-family:Arial, Helvetica, sans-serif;
    color:#1f2933;
">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f4f6f8;">
    <tr>
        <td align="center" style="padding:35px 15px;">

            <!-- Main Container -->
            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="
                    max-width:620px;
                    background:#ffffff;
                    border-radius:10px;
                    overflow:hidden;
                    border:1px solid #e6e9ed;
                "
            >

                <!-- Header -->
                <tr>
                    <td style="
                        background:#1b1b1b;
                        padding:28px 32px;
                        border-bottom:4px solid #EC6502;
                    ">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tr>

                                <td valign="middle">

                                    <div style="
                                        font-size:24px;
                                        line-height:30px;
                                        font-weight:700;
                                        color:#ffffff;
                                    ">
                                        PLM<span style="color:#EC6502;">.</span>
                                    </div>

                                    <div style="
                                        margin-top:5px;
                                        font-size:12px;
                                        color:#aeb4ba;
                                        letter-spacing:.4px;
                                    ">
                                        Solutions
                                    </div>

                                </td>

                                <td align="right" valign="middle">

                                    <div style="
                                        display:inline-block;
                                        padding:7px 12px;
                                        background:#2a2a2a;
                                        border:1px solid #3c3c3c;
                                        border-radius:20px;
                                        font-size:11px;
                                        color:#ffffff;
                                    ">
                                        NEW ENQUIRY
                                    </div>

                                </td>

                            </tr>
                        </table>

                    </td>
                </tr>


                <!-- Title -->
                <tr>
                    <td style="padding:30px 32px 18px 32px;">

                        <div style="
                            font-size:22px;
                            line-height:30px;
                            font-weight:700;
                            color:#1b1b1b;
                        ">
                            New Consultation Request
                        </div>

                        <div style="
                            margin-top:7px;
                            font-size:13px;
                            line-height:20px;
                            color:#7a828a;
                        ">
                            A new enquiry has been submitted through your website.
                        </div>

                        <div style="
                            margin-top:12px;
                            font-size:12px;
                            color:#9aa0a6;
                        ">
                            Submitted on {{ now()->format('M j, Y \a\t g:i A') }}
                        </div>

                    </td>
                </tr>


                <!-- Divider -->
                <tr>
                    <td style="padding:0 32px;">
                        <div style="
                            height:1px;
                            background:#eeeeee;
                            line-height:1px;
                        "></div>
                    </td>
                </tr>


                <!-- Contact Details Heading -->
                <tr>
                    <td style="padding:25px 32px 12px 32px;">

                        <div style="
                            font-size:13px;
                            font-weight:700;
                            color:#1b1b1b;
                            text-transform:uppercase;
                            letter-spacing:.8px;
                        ">
                            Contact Details
                        </div>

                    </td>
                </tr>


                <!-- Name -->
                <tr>
                    <td style="padding:8px 32px;">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="background:#f8f9fa; border:1px solid #eceff1; border-radius:7px;">

                            <tr>
                                <td style="padding:14px 16px;">

                                    <div style="
                                        font-size:10px;
                                        font-weight:700;
                                        color:#8b9299;
                                        text-transform:uppercase;
                                        letter-spacing:.8px;
                                    ">
                                        Full Name
                                    </div>

                                    <div style="
                                        margin-top:5px;
                                        font-size:15px;
                                        line-height:22px;
                                        color:#1b1b1b;
                                        font-weight:600;
                                    ">
                                        {{ $contact->name }}
                                    </div>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Email -->
                <tr>
                    <td style="padding:8px 32px;">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="background:#f8f9fa; border:1px solid #eceff1; border-radius:7px;">

                            <tr>
                                <td style="padding:14px 16px;">

                                    <div style="
                                        font-size:10px;
                                        font-weight:700;
                                        color:#8b9299;
                                        text-transform:uppercase;
                                        letter-spacing:.8px;
                                    ">
                                        Email Address
                                    </div>

                                    <div style="
                                        margin-top:5px;
                                        font-size:15px;
                                        line-height:22px;
                                    ">
                                        <a
                                            href="mailto:{{ $contact->email }}"
                                            style="
                                                color:#EC6502;
                                                text-decoration:none;
                                                font-weight:600;
                                            "
                                        >
                                            {{ $contact->email }}
                                        </a>
                                    </div>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Phone -->
                <tr>
                    <td style="padding:8px 32px;">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="background:#f8f9fa; border:1px solid #eceff1; border-radius:7px;">

                            <tr>
                                <td style="padding:14px 16px;">

                                    <div style="
                                        font-size:10px;
                                        font-weight:700;
                                        color:#8b9299;
                                        text-transform:uppercase;
                                        letter-spacing:.8px;
                                    ">
                                        Phone Number
                                    </div>

                                    <div style="
                                        margin-top:5px;
                                        font-size:15px;
                                        line-height:22px;
                                    ">
                                        @if($contact->phone)
                                            <a
                                                href="tel:{{ $contact->phone }}"
                                                style="
                                                    color:#1b1b1b;
                                                    text-decoration:none;
                                                    font-weight:600;
                                                "
                                            >
                                                {{ $contact->phone }}
                                            </a>
                                        @else
                                            <span style="color:#9aa0a6;">—</span>
                                        @endif
                                    </div>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Service -->
                <tr>
                    <td style="padding:8px 32px;">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="background:#fff8f4; border:1px solid #f4dfd2; border-radius:7px;">

                            <tr>
                                <td style="padding:14px 16px;">

                                    <div style="
                                        font-size:10px;
                                        font-weight:700;
                                        color:#9a6a50;
                                        text-transform:uppercase;
                                        letter-spacing:.8px;
                                    ">
                                        Service of Interest
                                    </div>

                                    <div style="
                                        margin-top:5px;
                                        font-size:15px;
                                        line-height:22px;
                                        color:#EC6502;
                                        font-weight:700;
                                    ">
                                        {{ $contact->service ?? '—' }}
                                    </div>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Project Brief Heading -->
                <tr>
                    <td style="padding:25px 32px 10px 32px;">

                        <div style="
                            font-size:13px;
                            font-weight:700;
                            color:#1b1b1b;
                            text-transform:uppercase;
                            letter-spacing:.8px;
                        ">
                            Project Brief
                        </div>

                    </td>
                </tr>


                <!-- Project Brief -->
                <tr>
                    <td style="padding:8px 32px 25px 32px;">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="
                                    background:#f8f9fa;
                                    border:1px solid #eceff1;
                                    border-radius:7px;
                               ">

                            <tr>
                                <td style="padding:17px 16px;">

                                    <div style="
                                        font-size:14px;
                                        line-height:23px;
                                        color:#4b5560;
                                    ">
                                        @if($contact->project_brief)
                                            {!! nl2br(e($contact->project_brief)) !!}
                                        @else
                                            <span style="color:#9aa0a6;">No project brief provided.</span>
                                        @endif
                                    </div>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Action -->
                <tr>
                    <td style="padding:0 32px 30px 32px;">

                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="
                                    background:#1b1b1b;
                                    border-radius:8px;
                               ">

                            <tr>
                                <td style="padding:18px 20px;">

                                    <div style="
                                        font-size:13px;
                                        color:#ffffff;
                                        font-weight:600;
                                    ">
                                        Follow up with this enquiry
                                    </div>

                                    <div style="
                                        margin-top:5px;
                                        font-size:12px;
                                        line-height:18px;
                                        color:#aeb4ba;
                                    ">
                                        Contact the customer to discuss their requirements
                                        and next steps.
                                    </div>

                                </td>

                                <td align="right" valign="middle" style="padding:18px 20px;">

                                    <a
                                        href="mailto:{{ $contact->email }}"
                                        style="
                                            display:inline-block;
                                            background:#EC6502;
                                            color:#ffffff;
                                            text-decoration:none;
                                            padding:10px 16px;
                                            border-radius:5px;
                                            font-size:12px;
                                            font-weight:700;
                                        "
                                    >
                                        Reply
                                    </a>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Footer -->
                <tr>
                    <td style="
                        background:#f8f9fa;
                        border-top:1px solid #eeeeee;
                        padding:20px 32px;
                        text-align:center;
                    ">

                        <div style="
                            font-size:13px;
                            font-weight:700;
                            color:#1b1b1b;
                        ">
                            PLM<span style="color:#EC6502;">.</span> Solutions
                        </div>

                        <div style="
                            margin-top:5px;
                            font-size:11px;
                            line-height:18px;
                            color:#9aa0a6;
                        ">
                            This is an automated notification from your website.
                        </div>

                        <div style="
                            margin-top:8px;
                            font-size:11px;
                            color:#b0b5ba;
                        ">
                            © {{ date('Y') }} PLM Solutions. All rights reserved.
                        </div>

                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
