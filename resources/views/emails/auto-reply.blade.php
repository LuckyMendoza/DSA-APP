<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Inquiry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #2d3748;
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        
        .email-container {
         
            width: 100%;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .email-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
        }
        
        .header {
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
            color: white;
            padding: 20px 25px;
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.05); opacity: 0.8; }
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            z-index: 1;
        }
        
        .header-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            padding: 2px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        
        .header-logo:hover {
            transform: scale(1.05);
        }
        
        .header-text {
            flex-grow: 1;
        }
        
        .header-text h1 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 3px;
        }
        
        .header-text .subtitle {
            font-size: 12px;
            opacity: 0.9;
        }
        
        .official-reply {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .content {
            padding: 25px 35px; /* Increased horizontal padding */
        }
        
        .subject {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 15px 35px; /* Increased horizontal padding */
            margin: -25px -35px 20px -35px; /* Adjusted margins to match new padding */
            position: relative;
        }
        
        .subject::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
        }
        
        .subject h2 {
            color: #1a202c;
            font-size: 18px;
            font-weight: 600;
        }
        
        .greeting {
            font-size: 18px;
            color: #2d3748;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .message-box p {
            margin-bottom: 18px;
            color: #4a5568;
            font-size: 15px;
            line-height: 1.7;
        }
        
        .highlight-text {
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600;
        }
        
        .timeline-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 18px;
            margin: 20px 0;
            border-radius: 8px;
            border: 1px solid #e0f2fe;
            position: relative;
            overflow: hidden;
        }
        
        .timeline-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
        }
        
        .timeline-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .timeline-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(hsla(185, 64%, 51%, 0.3));
        }
        
        .timeline-text h3 {
            font-size: 18px;
            font-weight: 600;
            color: hsla(277, 74%, 24%, 1);
            margin-bottom: 5px;
        }
        
        .timeline-text p {
            color: hsla(277, 74%, 24%, 1);
            font-weight: 500;
            margin: 0;
        }
        
        .button-group {
            margin: 35px 0;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .button {
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            min-width: 140px;
            justify-content: center;
        }
        
        .button-primary {
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
            color: white !important;
            box-shadow: 0 4px 12px rgba(hsla(185, 64%, 51%, 0.3));
        }
        
        .button-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(hsla(185, 64%, 51%, 0.4));
        }
        
        .button-secondary {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: #1f2937 !important;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }
        
        .button-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
        }
        
        .footer {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            margin: 40px -35px -40px -35px; /* Adjusted margins to match new padding */
            padding: 30px 35px; /* Increased horizontal padding */
            border-top: 1px solid #e2e8f0;
        }
        
        .footer-signature {
            margin-bottom: 25px;
        }
        
        .footer-signature p {
            margin: 5px 0;
            font-size: 15px;
            line-height: 1.5;
        }
        
        .company-name {
            font-weight: 600;
            color: #1a202c;
            font-size: 16px;
        }
        
        .contact-info {
            display: grid;
            gap: 12px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
        }
        
        .contact-item i {
            width: 20px;
            height: 20px;
            background: linear-gradient(90deg, hsla(185, 64%, 51%, 1) 0%, hsla(277, 74%, 24%, 1) 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
        }
        
        .contact-item a {
            color: #4a5568;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .contact-item a:hover {
            color: hsla(185, 64%, 51%, 1);
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
            margin: 25px 0;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .header {
                padding: 20px;
            }
            
            .header-content {
                gap: 15px;
            }
            
            .header-text h1 {
                font-size: 24px;
            }
            
            .content {
                padding: 20px;
            }

            .email-container {
                max-width: 100%;
            }

            .subject {
                margin: -20px -20px 20px -20px;
                padding: 15px 20px;
            }
            
            .footer {
                margin: 30px -20px -20px -20px;
                padding: 25px 20px;
            }
            
            .button-group {
                flex-direction: column;
            }
            
            .button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="header-content">
                <img src="{{ asset('assets/home/images/final-logona.png') }}" alt="WorkLink Solutions Logo" class="header-logo">
                <div class="header-text">
                    <h1>WorkLink Solutions</h1>
                    <div class="subtitle">Your Success, Our Mission</div>
                </div>
                
            </div>
        </div>
        
        <div class="content">
            <div class="subject">
                <h2>Thank You for Your Inquiry to WorkLink Solutions!</h2>
            </div>
            
            <div class="message-box">
                <p class="greeting">Hi {{ $data['fullName'] }},</p>
                
                <p class="highlight-text">Thank you for reaching out to WorkLink Solutions! We've received your inquiry and appreciate you taking the time to connect with us.</p>

                <p>We understand you're interested in <strong>{{ $data['subject'] }}</strong>. Our experienced team is currently reviewing your message and will get back to you as soon as possible with a personalized response.</p>
                
                <div class="timeline-box">
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="timeline-text">
                            <h3>Response Timeline</h3>
                            <p>Our typical response time is within 24 business hours.</p>
                        </div>
                    </div>
                </div>

                <p class="highlight-text">In the meantime, you might find answers to common questions or explore our comprehensive services using the links below:</p>
                
                <div class="button-group">
                    <a href="https://worklink.solution.site/faq" class="button button-primary">
                        <i class="fas fa-question-circle"></i>
                        FAQ Page
                    </a>
                    <a href="https://worklink.solution.site/services" class="button button-secondary">
                        <i class="fas fa-briefcase"></i>
                        Our Services
                    </a>
                </div>

                <p>We look forward to connecting with you soon and helping you achieve your goals with our tailored solutions.</p>
                
                <div class="divider"></div>
                
                <p><em>This is an automated response to confirm we've received your inquiry. A team member will follow up with you personally.</em></p>
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-signature">
                <p>Best regards,</p>
                <p class="company-name"> WorkLink Solutions Team</p>
            </div>
            
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-globe"></i>
                    <a href="https://worklink.solution.site">worklink.solution.site</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:worklink.solution.site@gmail.com">worklink.solution.site@gmail.com</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+639123456789">+63 912 345 6789</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>