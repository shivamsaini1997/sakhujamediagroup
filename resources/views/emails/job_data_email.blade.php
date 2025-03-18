<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Received</title>
    <style>
        body {
            font-family: "Figtree", sans-serif;

            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            color: #333333;
        }
        .content {
            line-height: 1.8;
            color: #333333;
            padding-bottom: 20px;
        }
        .content p {
            margin: 0;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #666666;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{url('../frontend/imgs/sakhuaja.png')}}" alt="">
            <h1>New Job Application</h1>
        </div>
        <div class="content">
            <p><strong>Full Name:</strong> {{ $full_name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
            <p><strong>LinkedIn Profile:</strong> {{ $linkedin }}</p>
            <p><strong>Current Designation:</strong> {{ $current_designation }}</p>
            <p><strong>Job Profile:</strong> {{ $job_profile }}</p>
            <p><strong>Resume Link:</strong> <a href="{{ asset($resume) }}" download>Download Resume</a></p>
        </div>
        <div class="footer">
            <p><br>The Sakhuja Group Team</p>
        </div>
    </div>
</body>
</html>
