<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #059669;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
    </div>
    <div class="content">
        <div class="field">
            <div class="label">Name:</div>
            <div>{{ $data['name'] }}</div>
        </div>
        <div class="field">
            <div class="label">Email:</div>
            <div>{{ $data['email'] }}</div>
        </div>
        <div class="field">
            <div class="label">Subject:</div>
            <div>{{ $data['subject'] }}</div>
        </div>
        <div class="field">
            <div class="label">Message:</div>
            <div>{{ $data['message'] }}</div>
        </div>
    </div>
    <div class="footer">
        <p>This email was sent from the contact form on DevPortfolio.</p>
    </div>
</body>
</html>
