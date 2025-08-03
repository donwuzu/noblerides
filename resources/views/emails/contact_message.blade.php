<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f3f4f6; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); overflow: hidden;">
        <!-- Header -->
        <div style="background-color: #065f46; padding: 20px; text-align: center;">
            <h1 style="color: #ffffff; font-size: 24px; font-weight: 600; margin: 0;">New Contact Message</h1>
        </div>
        
        <!-- Content -->
        <div style="padding: 25px;">
            <div style="margin-bottom: 20px; border-bottom: 1px solid #e5e7eb; padding-bottom: 20px;">
                <h2 style="color: #111827; font-size: 18px; font-weight: 600; margin-bottom: 15px;">Contact Details</h2>
                
                <div style="display: grid; grid-template-columns: 100px 1fr; gap: 10px 15px; margin-bottom: 8px;">
                    <span style="color: #6b7280; font-weight: 500;">Name:</span>
                    <span style="color: #111827; font-weight: 400;">{{ $data['name'] }}</span>
                    
                    <span style="color: #6b7280; font-weight: 500;">Email:</span>
                    <span style="color: #111827; font-weight: 400;">{{ $data['email'] }}</span>
                    
                    <span style="color: #6b7280; font-weight: 500;">Phone:</span>
                    <span style="color: #111827; font-weight: 400;">{{ $data['phone'] ?? 'N/A' }}</span>
                    
                    <span style="color: #6b7280; font-weight: 500;">Subject:</span>
                    <span style="color: #111827; font-weight: 400;">{{ $data['subject'] ?? 'N/A' }}</span>
                </div>
            </div>
            
            <div>
                <h2 style="color: #111827; font-size: 18px; font-weight: 600; margin-bottom: 15px;">Message</h2>
                <div style="background-color: #f9fafb; border-radius: 6px; padding: 15px; border-left: 4px solid #065f46;">
                    <p style="color: #111827; margin: 0; line-height: 1.5; white-space: pre-wrap;">{{ $data['message'] }}</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div style="background-color: #f9fafb; padding: 15px 25px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="color: #6b7280; font-size: 12px; margin: 0;">This message was sent from your website contact form</p>
        </div>
    </div>
</body>
</html>