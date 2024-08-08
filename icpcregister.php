<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-image: url(bg.avif);
  background-size: 100%;
}
.container{
  max-width: 700px;
  width: 100%;
  padding: 25px 30px;
  border-radius: 5px;
 
}
.container .title{
  font-size: 40px;
  font-weight: 500;
  position: relative;
  color:#0bd7ee;
  text-align: center;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 135px;
  border-radius: 5px;
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;

}
.user-details .input-box input{
  height: 60px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 30px;
  padding-left: 15px;
  border: 1px solid #ffffff;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  background-color: #e8212100;
  color: white;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #d8da59;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
   background: #9c00da;
   border-color: #d9d9d9;
 }
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
  color: #eae4e4;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

 form input[type="radio"]{
   display: none;
 }

.button {
    background: none;
    border: 2px solid rgb(219, 225, 217);
    font-size: 23px;
    padding: 10px 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    border-radius: 25px;
}

.button {
    color: rgb(255, 255, 255);
}
  
.button:hover {
    color: #ff0000;
}
  
.button::before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: rgb(205, 209, 203);
    z-index: -1;
    transition: 0.8s;
}
  
.button::before {
    top: 0;
    border-radius: 0 0 50% 50%;
}
  
.button:hover::before {
    height: 180%;
}
 .custom-select {
    position: relative;
    display: inline-block;
    font-size: 14px;
    color: #7700ff;
    margin-top: 25px;
  }
  
  .custom-select select {
    display: block;
    width: 250px;
    min-height: 35px;
    background: #807e7e72;
    border-radius: 3px;
    border: 2px solid rgb(115, 115, 115);
    outline: none;
    padding: 0 20px 0 10px;
    margin-top: 5px;
    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
  }
  
  .custom-select::after {
    content: '';
    border-width: 5px;
    border-style: solid;
    border-color: transparent;
    border-top-color: rgb(13, 0, 255);
    display: inline-block;
    border-radius: 2px;
    position: absolute;
    right: 10px;
    bottom: 10px;
  }
  
  .custom-select .selector-options {
    list-style: none;
    padding: 5px 0;
    margin: 0;
    background: #55ff00;
    color: #ffaa00;
    border-radius: 4px;
    z-index: 1;
    width: 96%;
    position: absolute;
    left: 2%;
    top: 35%;
  }
  
  .custom-select .selector-options li {
    height: 35px;
    display: flex;
    align-items: center;
    padding: 0 15px;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  
  .custom-select .selector-options li:hover {
    background: #1500ff;
  }
  @media(max-width: 584px){
    .container{
     max-width: 100%;
   }
   form .user-details .input-box{
       margin-bottom: 15px;
       width: 100%;
     }
     form .category{
       width: 100%;
     }
     .content form .user-details{
       max-height: 300px;
       overflow-y: scroll;
     }
     .user-details::-webkit-scrollbar{
       width: 5px;
     }
   #dot-1:checked ~ .category label .one,
   #dot-2:checked ~ .category label .two,
   #dot-3:checked ~ .category label .three{
      background:#e21e1e;
      border-color: #151413;
    }
     }
     @media(max-width: 459px){
     .container .content .category{
       flex-direction: column;
     }
   }
   .input-box
   {
    color: #5100ff;
   }
   .gender
   {
    color:#00ff48
   }
   .select
   {
    color: #d8dcde;
   }
   .details
   {
    color: #ebe0d9;
   }
   .grp
   {
    color: #0dff00;
   }
   #registrationForm {
    width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(225,225, 225,.2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
   }
   #registrationForm {
  width: 420px;
  background: transparent;
  border: 2px solid rgba(225,225, 225,.2);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  color: #fff;
  border-radius: 10px;
  padding: 30px 40px;
}
#registrationForm{
  position: relative;
  width: 100%;
  height: 600px;
  margin: 30px 0;
}
        
  
   
   
    </style>

    
    

</head>
<body>
  <script src="script"></script>
    <div class="container">
        <div class="title" style="color: #eae4e4;">Registration</div>
        <div class="content">
        <form  action="icpcregister.php" id="registrationForm" target="blank" method="post"   >
            <div class="user-details">
            <div class="input-box" >
                <span class="details">Name of the participant</span>
                <input type="text" id="name1"  name="name1" placeholder="Name 1" required >
               
            </div>
            <div class="input-box">
                <span class="details">Name of the participant 2</span>
                <input type="text" name="name2"
                placeholder="Name 2" id="name2" required >
            </div>
            <div class="input-box">
                <span class="details">Name of the participant 3</span>
                <input type="text" placeholder="Name 3" id="name3" name="name3" required="true"  >
            </div>
            <div class="input-box">
                <span class="details">Mobile Number</span>
                <input type="tel" placeholder="Enter your mobile number" id="mob" name="mob" required pattern="\d{10}">
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" placeholder="Enter your password" id="upass" name="upass" required >
          </div>
            <div class="input-box">
              <span class="details">Re enter password</span>
              <input type="password" placeholder="Confirm your password" id="upass1" name="upass1" required  >
          </div>
            <div class="input-box">
                <span class="details">Team name</span>
                <input type="text" placeholder="Enter your Team name" id="tname" name="tname" required >
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="tel" placeholder="Enter your Email" id="email" name="email" required  >
          </div>
          <div class="input-box">
            <span class="details">Coach</span>
            <input type="tel" placeholder="Coach Name" id="coach" name="coach" required >
        </div>
          
            

            
            </div>
            
            </div>
            </div>
            <div class="input_box">
                <span class="details">Country</span>
                <label class="custom-select">
                    <select name="sample" required>
                    <option selected disabled>--Select country --</option>
                            <option value="India">India</option>
                            <option value="Russia">Russia</option>
                            <option value="Usa">Usa</option>
                            <option value="UK">UK</option>
                            <option value="China">China</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Australia">Australia</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Newzealand">Newzealand</option>
                            <option value="Sri lanka">Sri lanka</option>     
                    </select>
                </label>
            </div>
            <div class="button">
            <a href="icpclogin.php"><input type="submit" value="register" name="register" class="button" ></a>
            </div>
        </form>
        </div>
    </div>


</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the $_POST values are set before accessing them
    $name1 = isset($_POST['name1']) ? $_POST['name1'] : '';
    $name2 = isset($_POST['name2']) ? $_POST['name2'] : '';
    $name3 = isset($_POST['name3']) ? $_POST['name3'] : '';
    $mob = isset($_POST['mob']) ? $_POST['mob'] : '';
    $upass = isset($_POST['upass']) ? $_POST['upass'] : '';
    $tname = isset($_POST['tname']) ? $_POST['tname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $coach = isset($_POST['coach']) ? $_POST['coach'] : '';
    $country = isset($_POST['sample']) ? $_POST['sample'] : '';

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'project');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Insert into the registereddata table
        $bigdata = $conn->prepare("INSERT INTO registereddata (name1, name2, name3, mobile_number, password, team_name, email, coach, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $bigdata->bind_param("sssssssss", $name1, $name2, $name3, $mob, $upass, $tname, $email, $coach, $country);
        $bigdata->execute();
        $bigdata->close();

        // Insert into the Participant table
        $stmt = $conn->prepare("INSERT INTO Participant (ParticipantName, TeamID) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $teamID);

        // Calculate TeamID for the next set of three participants
        $countStmt = $conn->prepare("SELECT COUNT(*) FROM Participant");
        $countStmt->execute();
        $countResult = $countStmt->get_result();
        $count = $countResult->fetch_assoc()['COUNT(*)'];
        $teamID = intval($count / 3) + 1;

        // Insert Name 1
        $name = $name1;
        $stmt->execute();

        // Insert Name 2
        $name = $name2;
        $stmt->execute();

        // Insert Name 3
        $name = $name3;
        $stmt->execute();

        $stmt->close();

        // Insert into the coach table
        $inspert = $conn->prepare("INSERT INTO coach (CoachName) VALUES (?)");
        $inspert->bind_param("s", $coach);
        $inspert->execute();
        $inspert->close();

        // Close connection
        $conn->close();

        echo "Data inserted successfully!";
    }
} else {
    echo "Form not submitted.";
}
?>
