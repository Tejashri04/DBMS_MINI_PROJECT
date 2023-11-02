<!DOCTYPE html>
<html>
<head>
    <title>Code Crafters Application</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Code Crafters Club Application</h1>
    <form method="post" action="file4.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="contact">Contact Number:</label>
        <input type="text" name="contact" required><br><br>

        <label for="branch">Branch:</label>
        <input type="text" name="branch" required><br><br>

        <label for="passout_year">Passout Year:</label>
        <input type="number" name="passout_year" required><br><br>

        <label for="post">Post Applying For:</label>
        <select name="post">
            <option value="President">President</option>
            <option value="Vice President">Vice President</option>
            <option value="Secretary">Secretary</option>
            <option value="Treasurer">Treasurer</option>
            <option value="Member">Member</option>
        </select><br><br>

        <label>Do you have prior experience in this field?</label>
        <input type="radio" name="experience" value="Yes"> Yes
        <input type="radio" name="experience" value="No"> No<br><br>

        <input type="submit" name="submit" value="Submit Application">
    </form>
</body>
</html>
