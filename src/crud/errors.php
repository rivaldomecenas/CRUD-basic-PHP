<?php

$errors = [];


//VALIDANDO ENTRADAS
if ($dados) {
    //NOME
    if (!$dados['nome']) 
    {   

        $errors[] =   
        [   
            'tipo' => 'faltaNome',
            'mensagem' => 'Preencha o nome!'
        ];
    } 
    else 
    {
        $dados['nome'] = filter_var($dados['nome'], FILTER_SANITIZE_STRING);
    }
    //APELIDO
    if (!$dados['apelido']) 
    {
        $errors[] =   
        [   
            'tipo' => 'faltaApelido',
            'mensagem' => 'Preencha o Apelido!'
        ];
    } 
    else 
    {
        $dados['apelido'] = filter_var($dados['apelido'], FILTER_SANITIZE_STRING);
    }
    //EMAIL
    if (!$dados['email']) 
    {
        $errors[] =   
        [   
            'tipo' => 'faltaEmail',
            'mensagem' => 'Preencha o E-mail!'
        ];
    } 
    else 
    {
        $dados['email'] = filter_var($dados['email'], FILTER_SANITIZE_EMAIL);

        // if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL));
        // {
            //     $errors[] =   
        // [   
            //     'tipo' => 'invalidoEmail',
            //     'mensagem' => 'Preencha um e-mail válido!'
            // ];
            // }
        }
        //ENDEREÇO
        if (!$dados['endereco']) 
        {
            $errors[] =   
            [   
                'tipo' => 'faltaEndereco',
                'mensagem' => 'Preencha o endereço!'
            ];
        } 
        else 
        {
            $dados['endereco'] = filter_var($dados['endereco'], FILTER_SANITIZE_STRING);
        }
    //CIDADE
    if (!$dados['cidade']) 
    {
        $errors[] =   
        [   
            'tipo' => 'faltaCidade',
            'mensagem' => 'Preencha a cidade!'
        ];
    } 
    else 
    {
        $dados['cidade'] = filter_var($dados['cidade'], FILTER_SANITIZE_STRING);
    }
    //ESTADO
    if (!$dados['estado']) 
    {
        $errors[] =   
        [   
            'tipo' => 'faltaEstado',
            'mensagem' => 'Preencha o estado!'
        ];
    } 
    else 
    {
        $dados['estado'] = filter_var($dados['estado'], FILTER_SANITIZE_STRING);
    }
    
    if(count($errors))
    {   
        $_SESSION['errors'] = $errors;

        if(count($errors) == 6)
        {
            unset($_SESSION['errors']);
            $_SESSION['alert'] =
            [   'type' => 'danger',
                'message' => 'Não é possível inserir usuário vazio!' 
            ];
    
            header('Location: ../form.php');
            exit;
        }
        else{
            
            $_SESSION['errors'] = $errors;
            header('Location: ../form.php');
            exit;

        }
    }     
}
?>
