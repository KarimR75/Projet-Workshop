<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  </head>
  <style>
    body {
     background-color: #E8E8E8;
     height: 100%;
   }
   .container{
    width: 100%;
    margin-top: 80px;
    height: 100%;
  }
  .img{
    width: 40%;
    position: absolute;
    top :10px;
    right: 0px;
    margin : 0;
    padding: 0;
    overflow-y: hidden;
  }
  .votrecompte{
    font-family: Helvetica;
    font-size:24px; 
    text-align: center;
  }
  .formulaire
  {
    width: 70%;
    display: inline-block;
    margin : 0;
    margin-top: 100px;
    padding: 0;
    text-align: center;


  }
  .formulaire form{
    width: 600px;
    margin-right: auto;
    margin-left: auto;
  }
  .formulaire form input[type = "submit"]
  {
  cursor: pointer;
  border-radius: 100px;
  border : 3px solid #EC0433;
  background-color : rgba(0,0,0,0);
  color : #EC0433 ; 
  }
  .formulaire form input {
    width: 300px;
    height: 60px;
    margin: 10px;
    border : 3px solid #242D3C;
    text-align: center;
    background-color: #F8F8F8;
    border-radius: 10px; 
  }
</style>
<body>
  <?php include("code_header.htm");?>
  <div class ="container">
    <div class="formulaire">
      <h1 class ="votrecompte"> VOS COORDONNÉES BANCAIRES </h1>

      <form method="post" action="confirmation.php">

       <input type="name" placeholder="Nom du titulaire" required>
       
       <br />

       <input type="text" placeholder="Numéro de la carte"
       size="12" minlength="12" maxlength="12"
       pattern="[0-9]{12}"required>


       <br />

       <input type="text" placeholder="Date de fin de validité"
       size="4" minlength="4" maxlength="4"
       pattern="[0-9]{4}"required>
       
       <br />

       <input type="CVV" placeholder="CVV"
       size="3" minlength="3" maxlength="3"
       pattern="[0-9]{3}"required>
       
       <br />
       <input type="submit" value="ACHETER !">
     </form>
   </div> 
 </div>
 <div class ="img">
  <img src ="photos/collab.JPG">
</div>
</body>
</html>