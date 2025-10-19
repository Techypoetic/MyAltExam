<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC2 AltExamPage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .header {
            background-color: #337ab7;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2em;
            margin: 0;
        }
        .info-box {
            background-color: white;
            border: 1px solid #ddd;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
            margin-bottom: 20px;
        }
        .info-box p {
            margin: 10px 0;
            font-size: 1.1em;
        }
        .ip-display {
            font-size: 1.6em;
            font-weight: bold;
            color: #d9534f;
            margin-top: 15px;
            word-break: break-all;
        }
        .footer-note {
            font-size: 0.9em;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>AWS EC2 Web Server</h1>
    </div>

    <div class="info-box">
        <p>This page confirms successful deployment via <strong>Ansible automation</strong>.</p>
        <p>Currently served by EC2 instance with Private IP:</p>
        <div class="ip-display">
            <?php
                // Fetch EC2 local IPv4
                $ip = @file_get_contents("http://169.254.169.254/latest/meta-data/local-ipv4");
                echo $ip ? htmlspecialchars($ip) : "Unable to fetch IP";
            ?>
        </div>
        <p class="footer-note">Traffic is being routed by an AWS Application Load Balancer (ALB).</p>
    </div>
</body>
</html>
