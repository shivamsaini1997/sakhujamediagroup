<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form Submission</title>
    <style>
        body {
            font-family: "Figtree", sans-serif;

            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .content {
            line-height: 1.8;
            color: #333;
        }
        .content p {
            margin: 10px 0;
            font-size: 16px;
        }
        .content strong {
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }
        .footer p {
            margin: 0;
        }
        /* Button styling (optional) */
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Us Form Submission</h1>
        </div>
        <div class="content">
            <p><strong>Your Name:</strong> {{ $your_name }}</p>
            <p><strong>Email Address:</strong> {{ $email }}</p>
            <p><strong>Phone Number:</strong> {{ $phone }}</p>
            <p><strong>How can we help?</strong> {{ $how_can_we_help }}</p>
            <p><strong>Your Query:</strong> {{ $your_query }}</p>
        </div>
        <div class="footer">
            {{-- <p>Thank you for getting in touch! We will get back to you soon.</p> --}}
        </div>
    </div>
</body>
</html>
