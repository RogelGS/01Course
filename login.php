<?php include 'header.php'; ?>

    <!-- Hero -->

    <section class="section-hero">
        <div class="hero">
            <div class="container">
                <div class="container-form">
                    <div class="card">
                        <form onsubmit="return false">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" id="username" class="validate">
                                    <label for="icon_prefix">Ingresa tu Usuario</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input type="password" id="password" class="validate">
                                    <label for="icon_prefix">Ingresa tu contraseña</label>
                                </div>
                                <div class="col s12">
                                    <div class="center">
                                        <input type="submit" class="waves-effect waves-light btn blue" value="Ingresar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>