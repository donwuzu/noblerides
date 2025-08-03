<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Message</title>
</head>
<body style="font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif; background-color: #f8fafc; padding: 24px; line-height: 1.5;">
    <div style="max-width: 640px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); overflow: hidden;">
        <!-- Header -->
        <div style="background-color: #3b82f6; padding: 24px; text-align: center;">
            <h1 style="color: #ffffff; font-size: 22px; font-weight: 700; margin: 0; letter-spacing: 0.25px;">
                <svg style="vertical-align: middle; margin-right: 8px; width: 20px; height: 20px; fill: currentColor;" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                New Contact Message
            </h1>
        </div>
        
        <!-- Content -->
        <div style="padding: 28px;">
            <div style="margin-bottom: 24px;">
                <h2 style="color: #1e293b; font-size: 18px; font-weight: 600; margin-bottom: 18px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0;">
                    Contact Details
                </h2>
                
                <div style="display: grid; grid-template-columns: 120px 1fr; gap: 12px 16px; margin-bottom: 10px;">
                    <span style="color: #64748b; font-weight: 500;">Name:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['name'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Email:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['email'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Phone:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['phone'] ?? 'N/A' }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Subject:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['subject'] ?? 'N/A' }}</span>
                </div>
            </div>
            
            <div>
                <h2 style="color: #1e293b; font-size: 18px; font-weight: 600; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0;">
                    Message Content
                </h2>
                <div style="background-color: #f8fafc; border-radius: 8px; padding: 18px; border-left: 4px solid #3b82f6; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);">
                    <p style="color: #1e293b; margin: 0; line-height: 1.6; white-space: pre-wrap; font-size: 15px;">{{ $data['message'] }}</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div style="background-color: #f8fafc; padding: 16px 28px; text-align: center; border-top: 1px solid #e2e8f0;">
            <p style="color: #64748b; font-size: 13px; margin: 0;">
                This message was sent via your website contact form on {{ now()->format('F j, Y \a\t g:i A') }}
            </p>
        </div>
    </div>
</body>
</html>