<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require(APP."/Views/includes/meta.php"); ?>
    <?php require(APP."/Views/includes/style.php"); ?>
    <title><?= $pageName ?></title>
</head>
<body>
    <?php echo $pageContent; ?>
    <?php require(APP."/Views/includes/script.php"); ?>
</body>
</html>