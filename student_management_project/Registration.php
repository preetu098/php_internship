<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
        <div class="left">
            <h1>Student Registration</h1>
            <form id="record-form">
                <input type="text" id="name" placeholder="Name" required>
                <input type="number" id="age" placeholder="Age" required>
                <input type="text" id="email" placeholder="Email" required>
                <button type="submit">Add Record</button>
                <input type="hidden" id="edit-index" value="-1">
            </form>
        </div>
        <div class="right">
            <h2>Records</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="record-list"></tbody>
            </table>
        </div>
    </div>
    <script src="registration.js"></script>
</body>
</html>