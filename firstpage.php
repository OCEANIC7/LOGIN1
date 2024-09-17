<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        .option {
            margin: 100px 0;
        }
        button {
            display: block;
            width: 100%;
            padding: 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 30px;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup</h1>
        <form id="signupForm">
            <div class="option">
                <label>
                    <input type="radio" name="userType" value="student" required>
                    Student
                </label>
            </div>
            <div class="option">
                <label>
                    <input type="radio" name="userType" value="staff">
                    Staff
                </label>
            </div>
            <button type="button" onclick="submitForm()">Continue</button>
        </form>
    </div>

    <script>
        function submitForm() {
            var userType = document.querySelector('input[name="userType"]:checked');
            if (userType) {
                if (userType.value === 'student') {
                    window.location.href = 'student_form.php';
                } else if (userType.value === 'staff') {
                    window.location.href = 'staff_form.php';
                }
            } else {
                alert('Please select an option.');
            }
        }
    </script>
</body>
</html>
