<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
        <title>Sign Up Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" type="text/javascript" crossorigin="anonymous"></script>
    </head>
    <body>
        <form id="signupForm" action="welcome.html">
            <h1 class="py-5">Sign Up Form</h1>
            First Name <input type="text" name="fName" class="my-1"/><br>
            Last Name  <input type="text" name="lName" class="my-1"/><br>
            Gender  <input type="radio" name="gender" value="m" class="my-2"/> Male
                    <input type="radio" name="gender" value="f"/> Female <br><br>
            Zip Code <input type="number" name="zip" id="zip" class="my-1"/><br>
                     <span id="zipError" class="my-1"></span><br>
            <div class="d-flex my-1 justify-content-between">
                City: <span id="city"></span>
                Latitude:  <span id="latitude"></span>
                Longitude: <span id="longitude"></span>
            </div>
            State
            <select name="state" id="state" class="my-1">
                <option>Select One</option>
                <option value="ca">California</option>
                <option value="ny">New York  </option>
                <option value="tx">Texas     </option>
            </select><br>
            Select a County  <select id="county" class="my-1"></select><br><br>
            Desired Username <input type="text" name="username" id="username" class="my-1"/><br>
                             <span id="usernameError" class="my-1"></span><br>
            Password         <input type="text" name="password" id="password" class="my-1"/><br>
            Password Again   <input type="text" id="passwordAgain" class="my-1"/><br>
                             <span id="passwordAgainError" class="my-1"></span><br>
            <div class="d-flex justify-content-center py-2">
                <button type="submit" class="btn btn-info" id="submit">Submit</button>
            </div>
            <br>
        </form>
        <!--JS-->
        <script type="text/javascript" src="js/sign-up.js"></script>
    </body>
</html>