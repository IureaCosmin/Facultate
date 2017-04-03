<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
    <h1 style="text-align: center">Tabel contacte</h1>

    <form method="POST" action="backend.php" accept-charset="UTF-8" id="contacte">

        <label for="name">Numele</label>
        <input  type="text" name="name" id="name">
        <span id="raspuns1"></span><br>


        <label for="nume2">Prenume</label>
        <input  type="text" name="nume2" id="nume2">
        <span id="raspuns2"></span><br>

        <label for="email">Email</label>
        <input type="email"name="Email"id="email">

        <h3>Categorie</h3>
        <select id="categorie" name="categorie">
            <option value="familie">Familie </option>
            <option value="prieten">prieten </option>
            <option value="etc">etc </option>
        </select>

        <label for="numar">Nr.Telefon</label>
        <input type="number"name="numar" id="numar">

        <button type="submit" id="submit">Submit</button>
        <button type="button" onclick="location.href='view.php'" >Vizualizeaza</button>


    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</body>
</html>