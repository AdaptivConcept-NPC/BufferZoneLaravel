<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .header { background-color: #0D1B22; padding: 40px; text-align: center; }
        .content { padding: 40px; color: #333333; line-height: 1.6; }
        .footer { background-color: #f9f9f9; padding: 20px; text-align: center; font-size: 12px; color: #777777; }
        .button { display: inline-block; padding: 12px 30px; background-color: #D31111; color: #ffffff; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
        .credential-box { background-color: #f0f4f8; border-left: 4px solid #D31111; padding: 20px; margin: 20px 0; font-family: monospace; }
        h1 { color: #D31111; margin: 0; font-size: 24px; }
        .pill { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: bold; text-transform: uppercase; margin-bottom: 10px; }
        .pill-super { background-color: #D31111; color: white; }
        .pill-view { background-color: #8BA4B4; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="color: white;">BUFFER ZONE <span style="color: #D31111;">EMS</span></h1>
        </div>
        <div class="content">
            <div class="pill {{ $userData['role'] === 'super-admin' ? 'pill-super' : 'pill-view' }}">
                {{ str_replace('-', ' ', $userData['role']) }}
            </div>
            <h2>Administrative Access Granted</h2>
            <p>Hello,</p>
            <p>A new administrative account has been provisioned for you on the BufferZone EMS Command Center. Your access level is <strong>{{ $userData['role'] }}</strong>.</p>
            
            <div class="credential-box">
                <strong>Username:</strong> {{ $userData['username'] }}<br>
                <strong>Password:</strong> {{ $userData['password'] }}
            </div>

            <p>Please log in immediately to verify your access. For security reasons, you should change your password after your first login.</p>
            
            <a href="https://bufferzoneems.co.za/lara/public/admin/login" class="button">Access Command Center</a>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Buffer Zone EMS. This is an automated security notification.
        </div>
    </div>
</body>
</html>
