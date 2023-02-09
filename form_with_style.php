
<!DOCTYPE>
<html>
<head>
  <title>Form with email</title>
</head>
<body>
          <h2>This form submits to itself</h2>
        <form method="post" action="/~manoranl/form_with_style.php">
            Name:  <input type="text" name="name"><br><br> 
            E-mail:<input type="text" name="email"><br><br>
            Review:<textarea name="review"      rows="5" cols="40"> </textarea><br><br> 
            Rating:<input type="radio" name="level"  value="Awful">Awful
                   <input type="radio" name="level"  value="So so">So so
                   <input type="radio" name="level"  value="Awesome">Awesome<br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
</body>
</html>