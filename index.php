<?php
include('HomeController.php');
$home = new HomeController();
/** @var array $data */
$data = $home->indexAction();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Patterns Design PHP</title>
</head>
<!--import css BOOTSTRAP 4-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>

<header class="container-fluid">

    <h1>
        Patterns design PHP
    </h1>

</header>

<main class="container-fluid">
    <?php
    /** @var PatternModel $datum */
    foreach ($data as $datum) {
        ?>

        <div class="row">
            <div class="col-sm">
                <a href="<?php echo $datum->getPath(); ?>">
                <span class="text-info border-bottom border-primary">
                    <?php
                    echo $datum->getLabel();
                    ?>
                </span>

                </a>
            </div>
            <div class="col">
                <?php
                echo $datum->getDescription();
                ?>
            </div>
        </div>

        <?php
    }
    ?>
</main>


<footer class="container-fluid">


</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>