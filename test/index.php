<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <head>
    <body>
        <form name="registry" action="/index.php" method="post">
            <input type="hidden" value="registry" name="action"/>
            <div>
                <label>User Type:</label>
                <select name="type[]">
                    <option value="1" select>Superadmin</option>
                    <option value="2"> Admin</option>
                </select>
            </div>
            <div>
                <label>Picture:</label>
                <input name="pic" type="file">
            </div>
            <div>
                <label>First Name:</label>
                <input type="text" name="first_name"/>
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="last_name"/>
            </div>
            <div>
                <label>E-mail:</label>
                <input type="email" name="email"/>
            </div>
            <div>
                <label>Username:</label>
                <input type="text" name="name"/>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password"/>
            </div>
            <div>
                <label>Address:</label>
                <textarea type="text" name="address">
                </textarea>
            </div>
            <div>
            <label>Gender:</label>
                <input type="radio" name="gender" value="woman" checked>Woman</p>
                <input type="radio" name="gender" value="man">Man</p>
            </div>
            <div>
                <label>Date of Birth:</label>
                <input type="text" name="birth" id="datepicker">
            </div>
            <div>
                <label>Hobbies:</label>
                <input type="checkbox" name="hobbies[]" value="singing" checked>singing<br>
                <input type="checkbox" name="hobbies[]" value="drawing">drawing<br>
                <input type="checkbox" name="hobbies[]" value="dancing">dancing<br>
            </div>

            <div><input type="submit" value="Send"/></div>
        </form>


        <script src="/public/js/jquery-1.11.2.min.js"></script>
        <script src="/public/js/jquery-ui.js"></script>
        <script src="/public/js/main.js"></script>

    </body>
</html>