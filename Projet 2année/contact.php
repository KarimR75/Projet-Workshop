<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <Title>
    IPSSI PARIS SPORT
  </Title>
</head>
<style> 
  body {
    background-color: #E8E8E8;
  }

input[type=text], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical 
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top : 81px;
}

</style>
<body>
  <?php include("code_header.htm");?>
  <div class="container">
    <form action="action_page.php">

      <label for="name">Prénom</label>
      <input type="text" id="name" name="Prénom" placeholder="Prénom">

      <label for="lname">Nom de famille</label>
      <input type="text" id="lname" name="Nom de famille" placeholder="Nom de famille">

      <label for="country">Pays</label>
      <select id="country" name="Pays">
        <option value="France">France</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="subject">Sujet</label>
      <textarea id="subject" name="subject" placeholder="Ecrivez votre message.." style="height:200px"></textarea>

      <input type="submit" value="Envoyer">

    </form>
  </div>
</body>
</html>