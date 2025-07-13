<!DOCTYPE html>
<html>
<head>
    <title>New Inquiry</title>
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
        .field {
            margin-bottom: 15px;
        }
        .field label {
            font-weight: bold;
            color: #8e44ad;
        }
        .field p {
            margin: 5px 0;
            padding: 10px;
            background-color: white;
            border-radius: 4px;
            border-left: 4px solid #8e44ad;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Inquiry Received</h1>
    </div>
    
    <div class="content">
        <div class="field">
            <label>Subject:</label>
            <p>{{ $data['subject'] }}</p>
        </div>
        
        <div class="field">
            <label>Full Name:</label>
            <p>{{ $data['fullName'] }}</p>
        </div>
        
        <div class="field">
            <label>Email Address:</label>
            <p>{{ $data['email'] }}</p>
        </div>
        
        <div class="field">
            <label>Contact Number:</label>
            <p>{{ $data['contactNumber'] }}</p>
        </div>
        
        <div class="field">
            <label>Message:</label>
            <p>{{ $data['message'] }}</p>
        </div>
        
        <div class="field">
            <label>Submitted on:</label>
            <p>{{ date('F j, Y \a\t g:i A') }}</p>
        </div>
    </div>
</body>
</html>