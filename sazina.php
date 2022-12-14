

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MANA-VIZITKARTE</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <nav>
    <div class="menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="par_mani.html">Par mani</a></li>
      <li><a href="kontaktinformacija.html">Kontaktinformācija</a></li>
      <li><a href="projekti.html">Projekti</a></li>
      <li><a href="sazina.html">Tiešā saziņa</a></li>
    </ul>
      </div>
    </div>
  </nav>

  <!--Līdz šai daļai tiek izmantots katrā lapā -->

  <div class="heading">
    <div class="head">Tiešā saziņa šeit</div>
    <div class="sub-head">Pievienojiet jautājumu</div>
  </div>

<div class="Questions">
  <div class="card">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
      <input type="text" class="input-box" name="first" placeholder="Jūsu vārds" required>


      <input type="text" class="input-box" name="last"placeholder="Jūsu uzvārds">
      
      <label for="QuestTopic">Izvēlaties tēmu:</label>
        <select name="type" id="type">
          <option value="Collobaration">Sadarbība</option>
          <option value="AboutCoding">Par programmēšanu</option>
          <option value="Other">Cits</option>
        </select>

      <input type="text" class="input-box" name="quest" placeholder="Your question" required>
      <button type="submit" class="submit-btn">Pievienot jautājumu</button>
    
    </form>
    </select>
  </div>
</div>

  

  <script src="script.js"></script>
</body>
</html>