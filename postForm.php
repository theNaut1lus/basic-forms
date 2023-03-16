<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-body {
            display: block;
        }
        .submit-group {
            border: 0px;
        }
    </style>
</head>
<body>
    <div class="form-body">
        <form action="postform_submitted.php" method="post">
            <fieldset>
                <label for="name">My name is: </label>
                <input type="text" name="name" id="name">
            </fieldset>
            <fieldset>
                <label for="movie">My favourite movie is: </label>
                <input type="text" name="movie" id="movie">
            </fieldset>
            <fieldset>
                <label for="degree">Degree: </label>
                <select name="degree" id="">
                    <option value="undergrad">Undergrad</option>
                    <option value="postgrad">Postgrad</option>
                </select>
            </fieldset>
            <fieldset>
                <label for="radio">Gender: </label>
                <input type="radio" name="gender" id="" value="Male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="" value="Female">
                <label for="female">Female</label>
            </fieldset>
            <fieldset>
                <label for="subjects">My Favourite subject is: </label>
                <select name="subjects" id="" multiple>
                    <option value="ip">Internet Programming</option>
                    <option value="cc">Cloud Computing</option>
                    <option value="ios">IOS Programming</option>
                </select>
            </fieldset>
            <fieldset class="submit-group">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>