<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css">
</head>
<body>
    <?= $this->include('components/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <script>
        function previewImg(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-thumbnail');
    
    
            const fileImage = new FileReader();
            fileImage.readAsDataURL(image.files[0]);
    
            fileImage.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>
</html>