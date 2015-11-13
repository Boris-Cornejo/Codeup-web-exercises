<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Warpspeed Form</title>
        <meta charset="utf-8">
    </head>

<section>

<form method="GET" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Yeah that's you">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="give it to me">
    </p>
    <p>
        <button type="Submit" name="submit-button">Login</button>
    </p>

</form>
<form method="GET" action="/my_first_form.php">
    <p>

        <head>
            <title>User Login</title>
            <meta charset="utf-8">
        </head>

    <body>

        <p>
            <h1>Email Account</h1>


            <label for="username">Email Username</label>
            <input id="username" name="username" type="text" placeholder="Username">
        </p>
        <p>
            <label for="password">Email Password</label>
            <input id="password" name="password" type="password" placeholder="Password">

            <button type="Submit" name="login-button">Email Login</button>
        </p>
</form>

    <form method="GET" action="/my_first_form.php">
        <p>
            <h1>Compose an email</h1>

            <label for="to">TO</label>
            <input id="to" name="to" type="text" placeholder="Recipient emal">

        </p>
        <p>

            <label for="from">From</label>
            <input id="from" name="from" type="text" placeholder="sender">

        </p>
        <p>
            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text" placeholder="subject">
        </p>
        <p>
            <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Type email text!"></textarea>
            <button type="Submit" name="login-button">Send</button>

        </p>

        <lable>Do you want to save a copy in your sent folder?<input check="check" type="checkbox" id="Sent">

        </label>
    </form>

    <form method="GET" action="/my_first_form.php">
        <p>Multiple Choice Test</p>

        <h1>1. What is the Capital of Chile?</h1>
            <p>
                <label>
                    <input type="radio" name="Capital-Chile" value="Santiago">
                    Santiago
                </label>

                <label>
                    <input type="radio" name="Capital-Chile" value="La Paz">
                    La Paz
                </label>
            </p>

        <h1>2. What is the Capital of Costa Rica?</h1>
            <p>
                <label>
                    <input type="radio" name="Capital" value="San Jose">
                    San Jose
                </label>

                <label>
                    <input type="radio" name="Capital" value="San Salvador">
                    San Salvador
                </label>
            </p>
            
        <p>
            <button type="Submit" name="Submit-Test">Submit Test</button>
        </p>
        
          <form method="Post" action="/my_first_form.php">
        <p>
            <h1>Yougurts</h1>
            <label for="test">What's your favorite yougurt flavor?</label>
            <select id="yougur" name="yougurt-flavors[]" multiple>
            <option value="peach">Peach</option>
            <option value="blueberry">Blueberry</option>
            <option value="raspberry">Raspberry</option>
            <option value="mango">Mango</option>
            <option value="Coffee">Coffee</option>
            <option value="cherry">cherry</option>
            </select>
        </p>

    </form>
            

    <form method="Post" action="/my_first_form.php">
        <p>
            <h1>What are your 3 favorite food? Books? Movies? Bands?</h1>

            <label><input type="checkbox" id="checkbox1" name="Food[]" value="Lang1">Japanese</label>
            <label><input type="checkbox" id="checkbox2" name="Food[]" value="Lang2"> Italian</label>
            <label><input type="checkbox" id="checkbox3" name="Food[]" value="Lang3"> Arabic</label>
        </p>
        <p>
            <label><input type="checkbox" id="checkbox4" name="Book[]" value="valume1">Volume 1</label>
            <label><input type="checkbox" id="checkbox5" name="Book[]" value="Valume2">Volume2</label>
            <label><input type="checkbox" id="checkbox6" name="Book[]" value="Valume3">Volume3</label>

        </p>

        <p>
            <label><input type="checkbox" id="checkbox7" name="Movie[]" value="movie1">Donnie Brasco</label>
            <label><input type="checkbox" id="checkbox8" name="Movie[]" value="movie2">The Departed</label>
            <label><input type="checkbox" id="checkbox9" name="Movie[]" value="movie3">The Godfather</label>

        </p>
        <p>
            <label><input type="checkbox" id="checkbox10" name="Band[]" value="Band1">AC DC</label>
            <label><input type="checkbox" id="checkbox11" name="Band[]" value="Band2">Metallica</label>
            <label><input type="checkbox" id="checkbox12" name="Band[]" value="Band3">Green Day</label>
            
            <p>
            <button type="Submit" name="Begin-Test">Begin Test</button>
            </p>
        <p>
            <h1>What cities would you like to visit</h1>

            <label><input type="checkbox" id="checkboxy1" name="city1[]" value="1">Los Angeles</label>
            <label><input type="checkbox" id="checkboxy2" name="city2[]" value="2"> San Diego</label>
            <label><input type="checkbox" id="checkboxy3" name="city3[]" value="3"> San Francisco</label>
        </p>
        <p>
            <label><input type="checkbox" id="checkboxy4" name="city4[]" value="4">New York</label>
            <label><input type="checkbox" id="checkboxy5" name="city5[]" value="5">Seatle</label>
            <label><input type="checkbox" id="checkboxy6" name="city6[]" value="6">Dallas</label>

        </p>

        <p>
            <label><input type="checkbox" id="checkboxy7" name="city7[]" value="7">Miami</label>
            <label><input type="checkbox" id="checkboxy8" name="city8[]" value="8">Oakland</label>
            <label><input type="checkbox" id="checkboxy9" name="city9[]" value="9">Beverly Hills</label>

        </p>
        <p>
            <label><input type="checkbox" id="checkboxy10" name="city10[]" value="10">Syracuse</label>
            <label><input type="checkbox" id="checkboxy11" name="city11[]" value="11">Charleston</label>
            <label><input type="checkbox" id="checkboxy12" name="city12[]" value="12">Atlanta</label>
            
            <p>
            <button type="Submit" name="Begin-Q">Begin Questionaire</button>

        </p>

    </form>
    <form method="Post" action="/my_first_form.php">
        <p>
            <h1>Select Testing</h1>
            <label for="test"> Do you want to begin test?</label>
            <select id="test" name="Select-Testing">
            <option value="1">Yes</option>
            <option value="0"selected>No</option>
            </select>
            <p>
                <button type="Submit" name="Begin-Test">Begin Test</button>
            <p>



        </p>









    </form>




    </body>

<section>
<html>