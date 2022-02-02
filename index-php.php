<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php'; ?>

    <!-- main -->
    <main class="pb-6">
        <div class="container-60 py-4">
            <div class="row row-cols-5">
                <?php include __DIR__ . '/partials/card.php';?>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php'?>
    <script src="js/script.js"></script>
</body>
</html>