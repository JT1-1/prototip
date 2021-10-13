<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-4 col-lg-3 col-xxl-2">
            <?php include 'layouts/sidebar.php'; ?>
        </div>
        <div class="col-8 col-lg-9 col-xxl-10">
            <div class="d-flex justify-content-between py-2">
                <h4>Главная</h4>

                <a href="../login.php" class="btn btn-primary mx-3">Войти</a>
            </div>
            <hr>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        This is index page
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
</body>

</html>
