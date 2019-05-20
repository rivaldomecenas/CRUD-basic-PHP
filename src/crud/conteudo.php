<div class="container" method='POST'>
            <h1> Dashboard ... </h1>
            <div class='row'>
            <?php include_once('src/crud/busca.php'); ?>
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
                                <th scope="row"> <?php echo $data['id'] ?> </th>
                                <td> <?php echo $data['nome'] ?> </td>
                                <td> <?php echo $data['apelido']?> </td>
                                <td> <?php echo $data['email']?> </td>
                                <td> <?php echo $data['endereco']?> </td>
                                <td> <?php echo $data['cidade']?> </td>
                                <td> <?php echo $data['estado']?> </td>
                                <td> 
                                    <a href="src/crud/delete.php?id=<?php echo $data['id']; ?>" type="submit" class="btn btn-danger">Deletar</a>
                                    <a href="src/crud/edit.php" type="submit" class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>