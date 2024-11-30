{{--@include('layouts.header')--}}
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>

<div class="container">
    <div class="row ">
        <!-- Left Column: Image -->
{{--        <div class="col-6">--}}
{{--            <div class="image-container">--}}
{{--                <img src="https://img.freepik.com/premium-vector/illustration-vector-graphic-cartoon-character-online-registration_516790-1805.jpg" alt="Register" class="img-fluid">--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Right Column: Form -->
        <div class="col-12">
            <div class="form-container">
                <h1>Register</h1>
                <form action="/do-register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">User Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    .image-container {
        text-align: center;
        padding: 20px;
    }

    .image-container img {
        max-width: 100%;
        border-radius: 10px; /* Optional rounded corners */
    }

    .form-container {
        padding: 20px;
        background-color: #f8f9fa; /* Light gray background */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

</style>
