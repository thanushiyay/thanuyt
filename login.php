<!DOCTYPE html>
<html>
<head>
<style>
.main
{
width:100%;
height:160px;
background-color:rgb(0, 26, 51);
font-size:54px;
word-spacing:8px;
text-align:center;
//margin-top:10px;
padding:28px 15px 8px 3px;
color:#b3cccc;
}
//.content
{
width:100%;
height:50px;
font-size:25px;
text-align:center;
color:blue;
background-color:rgb(0, 0, 128);
padding:20px 15px 20px 20px;
word-spacing:18px;
}
.content_1
{
//background-color:rgb(0, 0, 102);
}
form {
    border: 4px solid black;
    width:40%;
    margin-left:380px;
     background-color:rgb(0, 0, 77);
}

input[type=text], input[type=password]

 {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 70%;
height:300px;
   border-radius: 60%;
}

.container {
    padding: 16px;
    color:white;
}

span.psw {
    float: right;
    padding-top: 16px;
}
p1
{
float:right;
font-size:20px;
}
a:hover{
color:orange;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>


<div class="main"><b>KONGU ENGINEERING COLLEGE</b>
<p style="font-size:22px;margin-top:2px">(Autonomous)<br>ACCREDITED BY NAAC WITH 'A' GRADE<br>Perundurai Erode-638080 TamilNadu India</p></DIV>
<div class="content_1">LAB ENTRY MANAGEMENT</div>
<br><br><br>

<form action="login.php" method="get" id="f">
  <div class="imgcontainer">
    <img src="2.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="username" required autofocus="autofocus">

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" value="login" name="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:rgb(0, 0, 102)">
    <button class="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
    </div>

</form>

</body>
</html>
