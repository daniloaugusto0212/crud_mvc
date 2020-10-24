<?php
    include_once 'dependencias.php';
	include_once '../model/Conexao.class.php';
	include_once '../model/Manager.class.php';
	
    $manager = new Manager();
    
    $id = $_POST['id']; 

    $client_info = $manager->getInfo("registros", $id);
?>
<br>
<h2 class="text-center">
    Página de Edição <i class="fa fa-user-edit"></i>
</h2><hr>

<form action="../controller/update_client.php" method="post">
    <div class="container">
        <div class="form-row">
            <div class="col-md-6 form-group">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="name" required value="<?= $client_info['name'] ?>" autofocus><br>
            </div>
            <div class="col-md-6  ">
                E-mail: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required value="<?= $client_info['email'] ?>"><br>
            </div>
            <div class="col-md-4 form-group">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" id="cpf" required value="<?= $client_info['cpf'] ?>" ><br>
            </div>
            <div class="col-md-4 form-group">
                Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="birth" required value="<?= $client_info['birth'] ?>" ><br>
            </div>
            <div class="col-md-4 form-group">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="phone" id="phone" required value="<?= $client_info['phone'] ?>" autofocus><br>
            </div>
            <div class="col-md-12 form-group">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="address" required value="<?= $client_info['address'] ?>" autofocus><br>
            </div>
            <div class="col-md-4 form-group">
                <input type="hidden" name="id" value="<?= $client_info['id'] ?>">
                <button class="btn btn-warning btn-lg">
                    Atualizar <i class="fa fa-user-edit"></i>
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