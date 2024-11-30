<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm Delete</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .confirm-box {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        button, a {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px;
        }
        a {
            background-color: red;
        }
    </style>
</head>
<body>
<div class="confirm-box">
    <h1>Confirm Delete</h1>
    <p>Are you sure you want to delete <strong>{{ $user->name }}</strong>?</p>
    <form method="POST" action="/delete-user/{{ $user->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Yes, Delete</button>
    </form>
    <a href="/register-list">Cancel</a>
</div>
</body>
</html>
