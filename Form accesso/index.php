<html>
  <body>

    <form action="welcome.php" method="get">
    <label>Iscrizione</label><br>
    <label>Nome:</label>
    <input type="text" name="name" required><br>
    <label>E-mail:</label>
    <input type="text" name="email" required><br>

    
    <select name="classe">
      <option value="null">classe</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>

    <select name="indirizzo">
    <option value="null">indirizzo</option>
      <option value="I">informatica</option>
      <option value="E">elttronica</option>
      <option value="M">meccanica</option>
      <option value="T">tessile</option>
    </select>

    <select name="sezione">
    <option value="null">sezione</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
    </select>
    
    <input type="submit">
  </form>

  </body>
</html>