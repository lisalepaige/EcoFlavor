<!DOCTYPE html>
<?php include_once("head.inc.php"); ?>

<body>

<div class="aanmelden__logo">
    <img src="images/logo_ecoflavor.png" alt="logo" class="ecoflavorlogo">
</div>

<main class="aanmeldingsformulier">
    <div class="aanmelden__formulier">
    <label class="aanmelden__label" for="email">Email</label>
    <input class="aanmelden__input" type="text" name="email">

    <label class="aanmelden__label" for="wachtwoord">Wachtwoord</label>
    <input class="aanmelden__input" type="text" name="wachtwoord">

    <a href="index.php" class="btn btn--aanmelden">Aanmelden<span class="border border--aanmelden"></span></a>

    <div class="aanmelden__links">
        <a class="link__account" href="registreren.php">account aanmaken</a>
        <a class="link__wachtwoord" href="#">wachtwoord vergeten</a>
    </div>

    </div>
</main>
    
</body>
</html>