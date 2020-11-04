<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <script src="https://cdn.tiny.cloud/1/ye3lj6zon9s9sgu48dzjieh2sgfp3h7xt5xoowgbfypcz3uw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({selector: '#contentAddArtticle',
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullpage | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help'
      });</script>
</head>
<body>
    <div id="content">
        <?= $content ?>
    </div>
    <script type="module" src="./projet4/public/js/main.js"></script>
</body>
</html>