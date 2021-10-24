<?php 

    include 'header.php'; 

    $id = $_SESSION['id'];

    $consult = sprintf("SELECT * FROM users WHERE id = %s", clean($id, "int"));
    $result = mysqli_query($connection, $consult);
    $fetch = mysqli_fetch_assoc($result);
?>

    <!-- Profile -->
    <main role="main" class="user-profile">
        <div class="parallax-container profile">
            <div class="parallax">
                <?php if($fetch['banner'] === ''): ?>
                    <img src="images/hero.jpg">
                <?php else: ?>
                    <img src="<?php echo url . 'images/banners/' . $fetch['banner']; ?>">
                <?php endif; ?>
            </div>
            <div class="content-paralax center">
                <figure>
                    <?php if($fetch['profile'] === ''): ?>
                        <img src="images/person.png" width="100" class="circle-img">
                    <?php else: ?>
                        <img src="<?php echo url . 'images/users/' . $fetch['profile']; ?>" width="100" class="circle-img">
                    <?php endif; ?>
                </figure>
                <h2 class="name-user">
                    <?php echo $fetch['username'] ?>
                </h2>
            </div>
        </div>

        <div class="container">
            <article class="center">
                <h3>Sobre mi</h3>
                <figcaption>
                    <?php echo $fetch['description'] ?>
                </figcaption>
            </article>
            <div class="article-post-user-profile">
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image scalar">
                            <a href="#">
                                <img src="images/hero.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="author right">
                                <a href="#" >
                                    <img src="images/person.png" width="60" class="circle-img">
                                </a>
                            </div>
                            <a href="#">
                                <span class="card-title">Nuevo articulo</span>
                            </a>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <div class="card-footer">
                                <a href="#" class="tooltipped" data-position="top" data-tooltip="Comentarios: 200">
                                    <i class="material-icons">comment</i>
                                </a>
                                <a href="#" class="tooltipped" data-position="top" data-tooltip="Visitas: 1500">
                                    <i class="material-icons">group</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image scalar">
                            <a href="#">
                                <img src="images/hero.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="author right">
                                <a href="#" >
                                    <img src="images/person.png" width="60" class="circle-img">
                                </a>
                            </div>
                            <a href="#">
                                <span class="card-title">Nuevo articulo</span>
                            </a>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <div class="card-footer">
                                <a href="#" class="tooltipped" data-position="top" data-tooltip="Comentarios: 200">
                                    <i class="material-icons">comment</i>
                                </a>
                                <a href="#" class="tooltipped" data-position="top" data-tooltip="Visitas: 1500">
                                    <i class="material-icons">group</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image scalar">
                            <a href="#">
                                <img src="images/hero.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="author right">
                                <a href="#" >
                                    <img src="images/person.png" width="60" class="circle-img">
                                </a>
                            </div>
                            <a href="#">
                                <span class="card-title">Nuevo articulo</span>
                            </a>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                            <div class="card-footer">
                                <a href="#" class="tooltipped" data-position="top" data-tooltip="Comentarios: 200">
                                    <i class="material-icons">comment</i>
                                </a>
                                <a href="#" class="tooltipped" data-position="top" data-tooltip="Visitas: 1500">
                                    <i class="material-icons">group</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php 
    
        include 'footer.php'; 
    
        mysqli_free_result($result);
    ?>