 <html> 
  <head>
    <title>Sondeos Test</title>
  </head>
  <body>
    <form action="logic.php" method="post">
      <p><b>Ingrese la Sopa de Letras:</b><br/>
        Ingrese las letras de izquiera a derecha, fila por fila. <br/>
        Separe cada fila de la sopa con un espacio en blanco. <br/>
        Recuerde que cada fila debe contener la misma cantidad de letras. <br/>
      </p>
       <textarea name="soup" rows="4" cols="50"></textarea>
      <p>Cuantas Columnas tiene la Sopa?: </p>
        <br />
          <input type="number" name="quantity" min="1" max="10"></p>
      <input type="submit" name="submit" value="Enviar Sopa" />
    </form>
   </body>
</html>

