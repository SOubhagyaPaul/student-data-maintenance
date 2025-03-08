<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .notice-board {
            margin-top: 40px;
            padding: 15px;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
        }

        .notice-board h3 {
            margin-top: 0;
        }

        .notice-board p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Dashboard</h2>

    <h3>Post a New Job Role</h3>
    <form action="post_job.php" method="POST">
        <div class="form-group">
            <label for="jobTitle">Job Title</label>
            <input type="text" id="jobTitle" name="jobTitle" required>
        </div>
        <div class="form-group">
            <label for="jobDescription">Job Description</label>
            <textarea id="jobDescription" name="jobDescription" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="companyName">Company Name</label>
            <input type="text" id="companyName" name="companyName" required>
        </div>
        <div class="form-group">
            <label for="deadline">Application Deadline</label>
            <input type="date" id="deadline" name="deadline" required>
        </div>
        <input type="submit" value="Post Job">
    </form>

    <div class="notice-board">
        <h3>Post a New Notice</h3>
        <form action="post_notice.php" method="POST">
            <div class="form-group">
                <label for="noticeTitle">Notice Title</label>
                <input type="text" id="noticeTitle" name="noticeTitle" required>
            </div>
            <div class="form-group">
                <label for="noticeContent">Notice Content</label>
                <textarea id="noticeContent" name="noticeContent" rows="3" required></textarea>
            </div>
            <input type="submit" value="Post Notice">
        </form>
    </div>
</div>

</body>
</html>