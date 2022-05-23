<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="../css/invoer.css">
</head>
<body>
    <header>
      <h1>Admin Dashboard</h1>
        <div>
        
        </div>
    </header>
    <main>
        <form action="invoer.php" method="post">
            <label for="naam">Naam</label><br>
            <input type="text" name="naam"><br>

            <label for="image">Afbeelding</label><br>
            <input type="file" name="afbeelding"><br>

            <label for="link">URL-link</label><br>
            <input type="url" name="link"><br>

            
            <script  src="https://cdn.tiny.cloud/1/rnbjmdyofgl3g348qofv4wvhsvjl3gbz9x1w39a9k9trt0pb/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
            </head>
<body>
  <textarea name="omschrijving">
     Omschrijf jouw project hier!
  </textarea>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

            <button type="submit">Verzend</button>
        </form>
        
    </main>

    <!DOCTYPE html>
<html>
<head>
    



     <a href="logout.php">
        <br><button>Log uit</button><br>
     </a>

</body>
</html>