<!DOCTYPE html>
<html lang="<?php echo detectUserLocale(); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo _("Welcome to My Site"); ?></title>
</head>
<body>
    <h1><?php echo _("Hello, World!"); ?></h1>
    <p><?php echo _("This is a sample page with multilingual support."); ?></p>

    <!-- Selector de idioma -->
    <div>
        <a href="?lang=en"><?php echo _("English"); ?></a> | 
        <a href="?lang=es"><?php echo _("Español"); ?></a>
    </div>
</body>
</html>
