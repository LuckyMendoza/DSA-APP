<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Inquiry</title>
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
            background-color: #8e44ad;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 0 0 8px 8px;
        }
        .message-box {
            background-color: white;
            padding: 15px;
            border-left: 4px solid #8e44ad;
            margin: 15px 0;
            border-radius: 4px;
        }
        .footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thank You for Your Inquiry</h1>
    </div>
    
    <div class="content">
        
        <div class="message-box">
        <p>Hi {{ $data['fullName'] }},</p>
        
        <p>Thank you for getting in touch with us regarding <strong>{{ $data['subject'] }}</strong>.</p>
        
        <p>We've received your inquiry and appreciate you taking the time to connect with us.

            We understand you're interested in [briefly mention the general topic of their inquiry if you can infer it, e.g., "learning more about our services," or "discussing a potential project"]. Our team is currently reviewing your message and will get back to you as soon as possible.
            
            In the meantime, feel free to explore our website for more information about our services and how we can help you.
            
            We look forward to connecting with you soon and helping you with your needs.</p>
        
      
        
        <div class="footer">
            <p>Best regards,</p><br><br><br>
            <p>Website : <a href="https://worklink.solution.site">worklink.solution.site</a></p>
            <p>Email : <a href="mailto:worklink.solution.site@gmail.com">worklink.solution.site@gmail.com</a></p>
            <p>Phone : <a href="tel:+639123456789">+63 912 345 6789</a></p>
        </div>


        </div>
    </div>
</body>
</html> 