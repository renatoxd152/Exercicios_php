<form method="POST" action="">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder = "Nome" require><br><br>

        <label for="idade">Idade</label><br>
        <input type="number" id="idade" name = "idade" placeholder = "Idade" require><br><br>

        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" placeholder = "Email"><br><br>

        <label for="estado_civil">Estado Civil</label><br>
        <select name="estadocivil" id="estado_civil"><br>
                <option>---</option>
                <option value=0>Solteiro</option>
                <option value=1>Casado</option>
                <option value=2>Viúvo</option>    
        </select><br><br>
       
        <label>O que você gostaria de comer hoje?</label><br>

        <label><input type="checkbox" name="comida[]" value="0">Peito de Frango</label><br>
        <label><input type="checkbox" name="comida[]" value="1">Bife de Alcatra</label><br>
        <label><input type="checkbox" name="comida[]" value="2">Arroz</label><br>
        <label><input type="checkbox" name="comida[]" value="3">Batata Frita</label><br>
        <label><input type="checkbox" name="comida[]" value="4">Purê de Batata</label><br>
        <label><input type="checkbox" name="comida[]" value="5">Salada Verde</label><br><br>

        <label>Forma de Entrega?</label><br>
        

        <input type="radio" id="entregar" name ="entrega" value = 0>
        <label for="entregar">Entregar</label><br>

        <input type="radio" id="buscar" name ="entrega" value = 1>
        <label for="buscar">Buscar</label><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>