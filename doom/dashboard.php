<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./Assets/d41575e2-4a30-48af-8893-9940ec9a146e-removebg-preview.png" type="image/png">
    <link rel="stylesheet" href="dashboard.css">

</head>
<body>
    
</body>
</html>
<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <header>
    <h1>Bem-vindo à Dashboard</h1>
  </header>

  <main class="dashboard">
    <section class="card">
      <h2>Produtos Vendidos</h2>
      <p></p>
    </section>
    <section class="card">
      <h2>Dispositivos Ativos</h2>
      <p></p>
    </section>
    <section class="card">
      <h2>Avaliações</h2>
      <p></p>
    </section>
    <section class="card">
      <h2>Usuários Conectados</h2>
      <p></p>
    </section>
  </main>

  <footer>
    <p>© 2025 Anhaia. Todos os direitos reservados.</p>
  </footer>
    <a href="logout.php">Sair</a>
</body>
</html>