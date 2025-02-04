<!DOCTYPE html>
<html>
<head>
    <title>Date Selection Form</title>
    <style>
        .form-container {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="process.php">
            <div class="form-group">
                <label for="selected_date">Select Date:</label>
                <input type="date" id="selected_date" name="selected_date" required>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
