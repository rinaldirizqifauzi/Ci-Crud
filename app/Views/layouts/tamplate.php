<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css   ">
    <link rel="stylesheet" href="/public/bootstrap.css">
</head>
<body>
    <?= $this->include('components/navbar'); ?>

    <?= $this->renderSection('content'); ?>
</body>
</html>