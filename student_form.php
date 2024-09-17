<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Signup</title>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .button-group button {
            width: 48%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Signup</h1>
        <form action="process_student.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="COMPUTER">COMPUTER</option>
                    <option value="ELECTRICAL">ELECTRICAL</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="FOOD">FOOD</option>
                    <option value="HEALTH">HEALTH</option>
                    <option value="SECURITY">SECURITY</option>
                    <option value="WATER">WATER</option>
                    <option value="ENVIRONMENT">ENVIRONMENT</option>
                </select>
            </div>

            <div class="form-group">
                <label for="course">Course:</label>
                <select id="course" name="course" required>
                    <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
                    <option value="COMPUTER ENGINEERING">COMPUTER ENGINEERING</option>
                    <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
                    <option value="BIOMEDICAL ENGINEERING">BIOMEDICAL ENGINEERING</option>
                    <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
                    <option value="ELECTRONICS AND TELECOMMUNICATION ENGINEERING">ELECTRONICS AND TELECOMMUNICATION ENGINEERING</option>
                    <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
                    <option value="SCIENCE AND LABORATORY TECHNOLOGY">SCIENCE AND LABORATORY TECHNOLOGY</option>
                    <option value="RENEWABLE ENERGY TECHNOLOGY">RENEWABLE ENERGY TECHNOLOGY</option>
                    <option value="COMMUNICATION SYSTEM TECHNOLOGY">COMMUNICATION SYSTEM TECHNOLOGY</option>
                    <option value="BIOTECHNOLOGY">BIOTECHNOLOGY</option>
                    <option value="FOOD SCIENCE TECHNOLOGY">FOOD SCIENCE TECHNOLOGY</option>
                    <option value="MULTIMEDIA AND FILM TECHNOLOGY">MULTIMEDIA AND FILM TECHNOLOGY</option>
                    <option value="MINING ENGINEERING">MINING ENGINEERING</option>
                </select>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <select id="year" name="year" required>
                    <option value="FIRST YEAR">FIRST YEAR</option>
                    <option value="SECOND YEAR">SECOND YEAR</option>
                    <option value="THIRD YEAR">THIRD YEAR</option>
                </select>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <!-- Add buttons for update and delete -->
            <div class="button-group">
                <button type="submit" name="action" value="submit">Submit</button>
                <button type="submit" name="action" value="update">Update</button>
                <button type="submit" name="action" value="delete" style="background-color: red;">Delete</button>
            </div>
        </form>
    </div>
</body>
</html>
