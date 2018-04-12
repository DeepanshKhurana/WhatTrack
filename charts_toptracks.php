<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <title>What Track? - Top Artists</title>
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
            text-align: center;
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
        .php_results {
            display: inline-block;
            text-align: center;
            color: #757575;
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
            <h2>Here are your new tunes:</h2>
                <div class="php_results">
                    <?php
                        function get_toptracks(){
                            $data = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=chart.gettoptracks&api_key=YOUR_KEY_HERE&format=json");
                            $json = json_decode($data);
                            $name = [];
                            $artist = [];
                            $count=0;
                            $num=0;
                            for($i=0;$i<50;$i++) {
                                $name[$i] = $json->tracks->track[$i]->name;
                                $artist[$i] = $json->tracks->track[$i]->artist->name;
                            }
                            $final = array_combine($name,$artist);
                            foreach($final as $key => $value) {
                                $num++;
                                echo $num.". ".$key." by ".$value."<br><br>";
                            }
                            $num=0;
                        }
                        get_toptracks();
                    ?>
                </div>
        </div>
        <div class="footer">
            Created randomly by <a href="http://deepanshkhurana.com" target="_blank">Deepansh Khurana</a>
        </div>
    </div>
</body>
</html>
