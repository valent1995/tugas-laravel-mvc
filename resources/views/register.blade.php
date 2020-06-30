<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Form</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <form action="/welcome" method="POST">
            @csrf
            <div>
                <h1>Buat Account Baru!</h1>
                <h3>Sign Up Form</h3>
            </div>
            
            <div>
                <label for="first_name">First name:</label><br><br>
                <input type="text" id="first_name" name="first_name"><br><br>
                <label for="last_name">Last name:</label><br><br>
                <input type="text" id="last_name" name="last_name"><br><br>
            </div>

            <div>
                <label>Gender:</label><br><br>
                <input type="radio" name="gender" value="0">Male <br>
                <input type="radio" name="gender" value="1">Female <br>
                <input type="radio" name="gender" value="2">Other<br><br>
            </div>

            <div>
                <label>Nationality:</label><br><br>
                <select>
                    <option value="indonesian">Indonesian</option>
                    <option value="singaporean">Singaporean</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="australian">Australian</option>
                </select>
            </div>

            <div>
                <br><label>Language Spoken:</label><br><br>
                <input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
                <input type="checkbox" name="language" value="0">English<br>
                <input type="checkbox" name="language" value="0">Other<br>
            </div>

            <div>
                <br><label>Bio:</label><br><br>
                <textarea cols="25" rows="10"></textarea>
            </div>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>