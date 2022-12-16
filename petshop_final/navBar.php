<style>
body {
    background: #007bff;
    background: linear-gradient(to right, #76d46c, #33AEFF);
}
</style>
<h1 class="text-center">PetShop AuQuiMia</h1>
<div class="btn-group d-flex p-2 justify-content-center">
    <a href="index.php" class="btn btn-primary
        <?php
            if (basename($_SERVER["PHP_SELF"]) == "index.php"){
                echo "disabled";
            }
        ?>">
        Pagina Principal
    </a>
    <a href="funcionario.php" class="btn btn-primary
        <?php
            if (basename($_SERVER["PHP_SELF"]) == "funcionario.php"){
                echo "disabled";
            }
        ?>">
        Funcionario
    </a>
    <a href="animal.php" class="btn btn-primary
        <?php
            if (basename($_SERVER["PHP_SELF"]) == "animal.php"){
                echo "disabled";
            }
        ?>">
        Animal
    </a>
    <a href="consulta.php" class="btn btn-primary
        <?php
            if (basename($_SERVER["PHP_SELF"]) == "consulta.php"){
                echo "disabled";
            }
        ?>">
        Consulta
    </a>
</div>
<br><br><br>