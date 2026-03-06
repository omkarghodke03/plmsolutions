<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit a Support Ticket</title>
    <style>
        .forms{padding:20px; background:orange ; border-radius: 30px}
        body { font-family: sans-serif; max-width: 600px; margin: 50px auto; background:white;}
        div { margin-bottom: 15px; background:orange;}
        label { display: block; margin-bottom: 5px; background:orange; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; background:orange; }
        button { padding: 10px 20px; background:orange;}
        .success-message { padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; }
    </style>
</head>
<body>
<div class="forms">
    <h1>Submit a Support Team contact</h1>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('support.store') }}" method="POST">
    @csrf <!-- THIS LINE IS THE FIX -->
         <div>
        <label for="customer_name">Your Name:</label>
        <input type="text" id="customer_name" name="customer_name" required>
    </div>
        <div>
            <label for="customer_email">Your Email:</label>
            <input type="email" id="customer_email" name="customer_email" required>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="message">Describe your issue:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Submit </button>
    </form>
</div>
</body>
</html>