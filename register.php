<?php include 'header.php'; ?>

    <!-- Hero -->

    <section class="section-hero">
        <div class="hero">
            <div class="container">
                <div class="container-form">
                    <div class="card">
                        <form onsubmit="return false" id="form">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="text" id="username" class="validate">
                                    <label for="icon_prefix">Usuario</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input type="email" id="email" class="validate">
                                    <label for="icon_prefix">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input type="password" id="password" class="validate">
                                    <label for="icon_prefix">Contraseña</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input type="password" id="verification" class="validate">
                                    <label for="icon_prefix">Verificar contraseña</label>
                                </div>
                                <div class="col s12">
                                    <div class="center">
                                        <button type="submit" class="waves-effect waves-light btn blue" onclick="register()">Registrarme</button>
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