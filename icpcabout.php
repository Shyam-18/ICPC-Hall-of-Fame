<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(9f6a8bf4ed64fc4a4d817f7f67dec0b7.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .container, .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            margin-left: 25px;
            margin-top: 30px;
        }

        .card {
            height: 300px;
            width: 350px;
            margin: 50px;
            box-shadow: 5px 5px 20px white;
            overflow: hidden;
            border-radius: 25px;
            transition: 1s;
            position: relative;
        }

        h1 {
            margin: 10px;
            font-size: 20px;
            text-align: center;
            margin-bottom: 5px;
        }

        p {
            visibility: hidden;
            text-align: center;
            margin: 0;
        }

        .but {
            visibility: hidden;
            margin: 0 auto;
            display: block;
            margin-top: 10px;
            padding: 8px 15px;
            border-radius: 7px;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            transition: background-color 0.5s, color 0.5s;
            text-decoration: none;
        }

        .card:hover {
            cursor: pointer;
            height: 400px; /* Adjust as needed */
            width: 600px; /* Adjust as needed */
        }

        .card img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 1s;
            position: relative;
            z-index: -1;
        }

        .card:hover img {
            transform: scale(1.2);
        }

        .intro, .intro1 {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            z-index: 1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .intro h1, .intro1 h1 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .intro p, .intro1 p {
            margin: 0;
        }

        .card:hover .intro, .card:hover .intro1 {
            opacity: 1;
        }

        .intro .but, .intro1 .but1 {
            visibility: visible;
            background-color: rgba(255, 255, 255, 0.9);
            color: rgb(14, 14, 14);
            padding: 8px 15px;
            border-radius: 7px;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            transition: background-color 0.5s, color 0.5s;
            text-decoration: none;
        }

        .card:hover .intro .but, .card:hover .intro1 .but1 {
            background-color: rgb(230, 224, 224);
            color: rgb(14, 14, 14);
        }
        #logo{
            height: 60px;
        }
        #text{
            text-align:center;
            color: white;
        }

    </style>
</head>
<body>
    <div id="navbar">
       <a href="main.html"><img src="logo.png" id="logo"></a>
        <h1 id="text" style="font-size: 60px">DATA TRANSPARENCY</h1>
    </div>
    <div class="container">
        <div class="card">
            <img src="GreaterNY.jpg" alt="participants">
            <div class="intro">
                <h1>Participants</h1>
                <p>Participants play under a team With a coach</p>
                <a href="icpcdisplay.php?participant=true" class="but">Read More</a>    
             </div>
        </div>
        <div class="card">
            <img src="World_Champions.jpeg" alt="science">
            <div class="intro">
                <h1>World Finale</h1>
                <p>Teams who are top in that year will be champion</p>
                <a href="icpcdisplay.php?worldfinals=true" class="but">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="coach.jpg" alt="cultural">
            <div class="intro">
                <h1>Coach</h1>
                <p>Every team will have a coach</p>
                <a href="icpcdisplay.php?coach=true" class="but">Read More</a>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="card">
            <img src="team.jpg" alt="food">
            <div class="intro1">
                <h1>Teams</h1>
                <p>A Team has 3 participants</p>
                <a href="icpcdisplay.php?team=true" class="but1">Read More</a>    
             </div>
        </div>
        <div class="card">
            <img src="5.jpg" alt="science">
            <div class="intro1">
                <h1>Online Contest</h1>
                <p>This will be conducted in online mode, anyone can write from anywhere.</p>
                <a href="icpcdisplay.php?online_contest=true" class="but1">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="rehearsal_0268.jpg" alt="cultural">
            <div class="intro1">
                <h1>Onsite contest</h1>
                <p>This will be conducted in offline mode, the qualified teams need to reach given location to attend competition.</p>
                <a href="icpcdisplay.php?onsitecontest=true" class="but1">Read More</a>
            </div>
        </div>
    </div>
  
</body>
</html>
