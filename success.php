<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent | I4D</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        :root {
            --emerald: #006837;
            --olive: #8CC63F;
            --lime: #39B54A;
        }
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f1f8f4;
            font-family: 'Inter', system-ui, sans-serif;
            color: #334155;
        }
        .card {
            background: white;
            padding: 60px 40px;
            border-radius: 32px;
            box-shadow: 0 20px 50px rgba(0, 104, 55, 0.1);
            text-align: center;
            max-width: 450px;
            width: 90%;
            border: 1px solid var(--olive);
        }
        .icon-box {
            width: 80px;
            height: 80px;
            background: rgba(57, 181, 74, 0.1);
            color: var(--lime);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }
        h1 { color: var(--emerald); margin-bottom: 15px; font-size: 2rem; }
        p { line-height: 1.6; color: #64748b; margin-bottom: 35px; }
        .btn {
            display: inline-block;
            background: var(--emerald);
            color: white;
            padding: 15px 35px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background: var(--lime);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="icon-box">
            <i data-lucide="check-circle-2" size="48"></i>
        </div>
        <h1>Thank You!</h1>
        <p>Your enquiry has been successfully sent to the I4D team. We have received your details and will get back to you shortly.</p>
        <a href="index.php" class="btn">Return to Home</a>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>