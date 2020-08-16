<html>
<body>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url('https://scontent.fktm7-1.fna.fbcdn.net/v/t1.0-9/p960x960/35812692_1320151208119838_3808235445666447360_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=F3aTVnB-ngYAX_Yodar&_nc_ht=scontent.fktm7-1.fna&_nc_tp=6&oh=3096a914cf4e54ebe490a3dfa8467a8c&oe=5F5EC818');
}
.box {
  width: 350px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  border: none;
  border-radius: 25px;
  text-align: center;
}
h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 5px;
}
/************** 
 Input Fields
***************/
#username, #pass{
  border: 2px solid #0097e6;
  background: none;
  display: block;
  margin: 20px auto;
  padding: 15px 45px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 25px;
  text-align: center;
  transition: 250ms width ease, 250ms border-color ease;
}
/************** 
   On Hover
***************/
#username:hover, #pass:hover{
  width: 220px;
}
/************** 
   On Focus
***************/
#username:focus, #pass:focus{
  width: 250px;
  border-color: #6fb98f;
}
/************** 
 Submit Button
***************/
#submit{
  border: 2px solid #2ecc71;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  padding: 15px 40px;
  outline: none;
  color: white;
  border-radius: 25px;
  cursor: pointer;
  text-transform: uppercase;
  font-weight: 200;
  transition: 250ms background ease;
  -webkit-transition: 250ms background ease;
  -moz-transition: 250ms background ease;
  -o-transition: 250ms background ease;
}
/************** 
   On Hover
***************/
#submit:hover{
  background: #2ecc71;

}
</style>


<form class="box" action="" method="POST" target="_self">
  <h1>login</h1>
  <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
  <input type="password" name="pass" id="pass" placeholder="Password" autocomplete="off">
  <input type="submit" id="submit" value="login">
  </form>

  <form method="get" action="/">
    <button type="submit">Home</button>
    <button type="submit" formaction="/CreateMembership">Create Membership</button>



</body>
</html>
