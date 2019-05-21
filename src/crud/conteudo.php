<div class="container" method='POST'>
            <h1> Dashboard ... </h1>
            <div class='row'>
            <?php include_once('src/crud/show.php'); ?>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Apelido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pessoa->fetchAll(PDO::FETCH_ASSOC) as $data){ ?>
                            <tr>
                                <th scope="row"> <?= $data['id'] ?> </th>
                                <td> <?= $data['nome'] ?> </td>
                                <td> <?= $data['apelido']?> </td>
                                <td> <?= $data['email']?> </td>
                                <td> <?= $data['endereco']?> </td>
                                <td> <?= $data['cidade']?> </td>
                                <td> <?= $data['estado']?> </td>
                                <td> 
                                    <div class="btn-group" role="group" aria-label="Exemplo básico">
                                        <form action="src/crud/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <form action="src/formedit.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <button type="submit" class="btn btn-warning">Editar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>