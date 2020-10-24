<?php
    include_once 'dependencias.php';
?>
<br>
<h2 class="text-center">
    Página de Registro <i class="fa fa-user-plus"></i>
</h2><hr>

<form action="../controller/insert_client.php" method="post">
    <div class="container">
        <div class="form-row">
            <div class="col-md-6 form-group">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="name" required autofocus><br>
            </div>
            <div class="col-md-6  ">
                E-mail: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required><br>
            </div>
            <div class="col-md-4 form-group">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" id="cpf" required ><br>
            </div>
            <div class="col-md-4 form-group">
                Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="birth" required ><br>
            </div>
            <div class="col-md-4 form-group">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="phone" id="phone" required autofocus><br>
            </div>
            <div class="col-md-12 form-group">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="address" required autofocus><br>
            </div>
            <div class="col-md-4 form-group">
                <button class="btn btn-primary btn-lg">
                    Cadastrar <i class="fa fa-user-plus"></i>
                </button><br><br>

                <a href="../index.php">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript" src="../js/index.js"></script>