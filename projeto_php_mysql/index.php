<?php
include("protecao.php");
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - DDPW3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            text-align: center;
        }
        .login-body {
            padding: 30px;
        }
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px;
        }
        .btn-login:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            color: white;
        }
        .nav-buttons {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-buttons text-end">
            <a href="visualizar.php" class="btn btn-light me-2">📋 Visualizar Dados</a>
            <a href="logout.php" class="btn btn-outline-light">🚪 Sair</a>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-card">
                    <div class="login-header">
                        <h2>📝 CADASTRAR PESSOA</h2>
                        <p class="mb-0">Sistema CINETIME - Bem vindo, <?= htmlspecialchars($_SESSION['nome'])?>!</p>
                    </div>
                    <div class="login-body">
                        <form action="inserirCheck.php" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Idade</label>
                                    <input type="number" name="idade" class="form-control" min="0" max="150" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">CPF</label>
                                    <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Celular</label>
                                    <input type="tel" name="celular" class="form-control" placeholder="(00) 00000-0000" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <input type="text" name="endereco" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-login w-100">💾 SALVAR CADASTRO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>