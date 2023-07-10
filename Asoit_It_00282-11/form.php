<!DOCTYPE html>
<html>
<head>
    <title>Form Page</title>
</head>
<body>
    <h2>Form Page</h2>
    <form action="process.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="Enrollment number">Enrollment:</label>
        <input type="number" id="enrol" name="enrol" required><br><br>
        
        <label for="Experience">Experience:</label>
        <input type="text" id="expr" name="expr" required><br><br>

        <label for="message">Address:</label>
        <textarea id="message" name="message" rows="4" cols="30" required></textarea><br><br>
        

        <input type="submit" value="Submit">
    </form>
</body>
</html>