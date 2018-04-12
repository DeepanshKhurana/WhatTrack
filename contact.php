<!-- <?php
if(isset($_POST['submit'])){
    $to = "deepanshkhurana@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name= $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript">
        function CheckForBlank() {

            if(document.getElementById('name').value==="") {
                alert("Name cannot be empty!");
                return false;
            }
            else if (document.getElementById('email').value==="") {
                alert("Email cannot be empty!");
                return false;
            }
            else if (document.getElementById('message').value==="") {
                alert("Message cannot be empty!");
                return false;
            }
        }
        </script>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <title>What Track? - About</title>
        <style media="screen">
            html, body {
                margin:0;
                padding:0;
                font-family: 'Roboto Condensed', sans-serif;

            }
            p {
            	font-size:16px;
            }
            h1 	{
                    color: #FFFFFF;
                    font-size: 450%;
                    margin-bottom: 0;
            }
            h4 	{
                    margin-top: 0;
                    color: #B2DFDB;
                    font-size: 150%;
            }
            .header {
                background-color: #009688;
                padding: 20px;
                text-align: center;
            }
            .footer {
                background-color: #009688;
                bottom:0;
                width:100%;
                height:30px;
                text-align: center;
                color: #B2DFDB;
                text-decoration: none;
                padding-top: 10px;
            }
            .footer a {
                text-decoration: none;
                color: white;
            }
            .navigation {
                font-family: 'Roboto Condensed', sans-serif;
                list-style:none;
                margin:0;
                padding:0;
                text-align:center;
            }
            .navigation ul {
                align-items: center;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #00796B;
                margin-left: auto;
                margin-right: auto;
            }

            li {
                 display:inline;
            }

            .navigation a {
                display:inline-block;
                padding:10px;
                text-decoration: none;
                color:white;
                padding: 20px;
            }

            .navigation li a:hover {
                background-color: #B2DFDB;
                color: black;
            }
            .content {
                text-align: center;
                padding-top: 20px;
                padding-left: 100px;
                padding-right: 100px;
                padding-bottom: 20px;
            }
            .content h2 {
                font-size: 200%;
            }
            .content p {
                color: #757575;
                font-size: 110%;
            }
            .content a {
                color: black;
                text-decoration: none;
            }
            .content a:hover {
                color: #607D8B;
            }
            .form {
                display: inline-block;
                text-align: left;
                width: 60%;
                align-items: center;
            }
            input {
                width: 100%;
            }
            label {
                font-size: 120%;
                padding-bottom: 10px;
            }
            input[type=submit] {
                align-items: center;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: #607D8B;
                color: #FFFFFF;
                font-family: 'Roboto Condensed', sans-serif;
                font-size: 120%;
                border: 0;
                cursor: pointer;
            }
            input[type=text], select {
                padding: 15px 20px;
                margin: 8px 0;
                font-size: 120%;
                box-sizing: border-box;
                font-family: 'Roboto Condensed', sans-serif;
            }
            select {
                width: 100%;
            }
            input[type=submit]:hover {
                padding-top: 15px;
                padding-bottom: 15px;
                background-color: #FFFFFF;
                color: #607D8B;
                border: 5px solid;
                font-family: 'Roboto Condensed', sans-serif;
                font-size: 120%;
            }
            textarea {
                width: 97%;
                padding-left: 20px;
                padding-top: 15px;
                display: inline;
                font-family: 'Roboto Condensed', sans-serif;
                font-size: 120%;
            }
        </style>
    </head>
    <body>
        <div class="full">
            <div class="header">
                <h1>What Track?</h1>
                <h4>A simple tool to discover new music!</h4>
            </div>
            <div class="navigation">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="https://last.fm" target="_blank">Last.fm</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="content">
                <h2> Get in touch! </h2>
                <form class="form" action="" method="post" onsubmit="CheckForBlank();">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="John Doe"><br><br>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="abc@example.com"><br><br>
                    <label for="reason">Reason:</label>
                    <select id="reason" name="reason">
                        <option type="radio" name="reason" value="1"> Reporting a bug</option>
                        <option type="radio" name="reason" value="2"> Say Hi!</option>
                        <option type="radio" name="reason" value="3"> Collaborate?</option>
                    </select><br><br>
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject"><br><br>
                    <label for="message">Message:</label>
                    <br><br>
                    <textarea name="message" id="message" cols="40" rows="5"></textarea>
                    <br><br>
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
            <div class="footer">
                Created randomly by <a href="http://deepanshkhurana.com" target="_blank">Deepansh Khurana</a>
            </div>
        </div>
    </body>
</html>
