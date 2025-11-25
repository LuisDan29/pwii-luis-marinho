<?php
session_start(); // Inicia a sessão
include("conexao.php"); // Conecta ao banco

// Se o usuário clicar em "LOGAR"
if(isset($_POST['logar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // Verifica se o usuário existe
    $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $consulta->execute([$usuario]);
    $user = $consulta->fetch();
    
    // Se encontrou o usuário E a senha está correta
    if($user && $senha == $user['senha']) {
        $_SESSION['usuario'] = $user['usuario']; // Salva na sessão
        $_SESSION['nome'] = $user['nome'];
        header("location: index.php"); // Vai para a página principal
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - CINETIME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">LOGIN</h2>
                <h5 class="text-center text-muted">CINETIME</h5>
                
                <!-- Mostra erro se existir -->
                <?php if(isset($erro)): ?>
                    <div class="alert alert-danger"><?= $erro ?></div>
                <?php endif; ?>
                
                <form method="POST">
                    <div class="mb-3">
                        <label>USUÁRIO</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>SENHA</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>
                    <button type="submit" name="logar" class="btn btn-primary w-100">LOGAR</button>
                    <a href="cadastrarUsuario.php" class="btn btn-secondary w-100 mt-2">CADASTRAR</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
