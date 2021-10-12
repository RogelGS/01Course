<?php
    require_once 'db.php';

    if(isset($_GET['token'])) {
        $token = $_GET['token'];

        $stmt = $connection->prepare("UPDATE users SET status = 1 WHERE token = ?");
        $stmt->bind_param("s", $token);
?>

<?php include 'header.php'; ?>

    <!-- Hero -->

    <section class="section-hero">
        <div class="hero">
            <div class="container">
                <?php if($stmt->execute()):?>
                    <div class="container-hero">
                        <h2 class="title-hero">
                            Felicidades!
                        </h2>
                        <p>Su cuenta se ha verificado con exito</p>
                        <a href="login.php" class="waves-effect waves-light btn blue">Ingresar</a>
                    </div>
                <?php else: ?>
                    <div class="container-hero">
                        <h2 class="title-hero">
                            Ocurrio un error al verificar su cuenta.
                        </h2>
                        <a href="register.php" class="waves-effect waves-light btn red">Registrar</a>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

<?php
        $stmt->close();
    } else {
        header('Location:' . url);
        exit();
    }
?>