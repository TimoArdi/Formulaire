<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="name"  name="name">
    </div>
    <div>
        <label  for="Prenom">Prenom :</label>
        <input  type="text"  id="firstname"  name="user_name">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <label for="phone">Numero de telephone :</label>

    <input type="tel" id="phone" name="user_phone">
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div>
        <select name="user_reasons" id="reasons-select">
            <option value="1">Demande de rendez-vous</option>
            <option value="2">Assistance</option>
            <option value="3">Question Produit</option>
        </select>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>
