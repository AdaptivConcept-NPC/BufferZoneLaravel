<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; }
        .header { background-color: #213340; color: white; padding: 20px; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; border: 1px solid #ddd; border-top: none; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #213340; }
        .footer { background-color: #f5f5f5; padding: 15px; border-radius: 0 0 5px 5px; font-size: 12px; color: #666; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Submission</h2>
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div>{{ $submission->name }}</div>
            </div>
            <div class="field">
                <div class="label">Email:</div>
                <div>{{ $submission->email }}</div>
            </div>
            @if($submission->phone)
            <div class="field">
                <div class="label">Phone:</div>
                <div>{{ $submission->phone }}</div>
            </div>
            @endif
            <div class="field">
                <div class="label">Type:</div>
                <div>{{ ucfirst($submission->type) }}</div>
            </div>
            @if($submission->event_type)
            <div class="field">
                <div class="label">Event Type:</div>
                <div>{{ $submission->event_type }}</div>
            </div>
            @endif
            <div class="field">
                <div class="label">Message:</div>
                <div style="white-space: pre-wrap;">{{ $submission->message }}</div>
            </div>
            <div class="field">
                <div class="label">Submitted:</div>
                <div>{{ $submission->created_at->format('Y-m-d H:i:s') }}</div>
            </div>
        </div>
        <div class="footer">
            <p>Buffer Zone EMS — Management System</p>
        </div>
    </div>
</body>
</html>
