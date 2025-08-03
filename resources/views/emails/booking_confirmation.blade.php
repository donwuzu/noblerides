<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Booking Request</title>
</head>
<body style="font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; background-color: #f8fafc; padding: 20px;">
    <div style="max-width: 640px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); overflow: hidden;">
        <!-- Header -->
        <div style="background-color: #3b82f6; padding: 24px; text-align: center;">
            <h1 style="color: #ffffff; font-size: 22px; font-weight: 700; margin: 0; letter-spacing: 0.5px;">
                <i class="fas fa-calendar-check" style="margin-right: 8px;"></i> New Booking Request
            </h1>
        </div>
        
        <!-- Content -->
        <div style="padding: 28px;">
            <div style="margin-bottom: 24px;">
                <h2 style="color: #1e293b; font-size: 18px; font-weight: 600; margin-bottom: 18px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0;">
                    Booking Details
                </h2>
                
                <div style="display: grid; grid-template-columns: 120px 1fr; gap: 12px 16px; margin-bottom: 10px;">
                    <span style="color: #64748b; font-weight: 500;">Name:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['name'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Phone:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['phone'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Email:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['email'] ?? 'N/A' }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Service Type:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['service_type'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Vehicle Type:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['vehicle_type'] ?? 'N/A' }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Pickup:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['pickup'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Dropoff:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['dropoff'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Date & Time:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['datetime'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Passengers:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['people'] }}</span>
                    
                    <span style="color: #64748b; font-weight: 500;">Luggage:</span>
                    <span style="color: #1e293b; font-weight: 400;">{{ $data['luggage'] ?? 'N/A' }}</span>
                </div>
            </div>
            
            <div>
                <h2 style="color: #1e293b; font-size: 18px; font-weight: 600; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0;">
                    Special Instructions
                </h2>
                <div style="background-color: #f1f5f9; border-radius: 8px; padding: 16px; border-left: 4px solid #3b82f6;">
                    <p style="color: #1e293b; margin: 0; line-height: 1.6; white-space: pre-wrap;">{{ $data['instructions'] ?? 'No special instructions provided' }}</p>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div style="background-color: #f1f5f9; padding: 16px 28px; text-align: center; border-top: 1px solid #e2e8f0;">
            <p style="color: #64748b; font-size: 13px; margin: 0;">
                This message was sent via your website contact form on {{ now()->setTimezone('Africa/Nairobi')->format('F j, Y \a\t g:i A') }} (EAT)
            </p>
        </div>
    </div>
</body>
</html>