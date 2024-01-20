<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penfolio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css" />
    <!-- Navbar CSS -->
    <link rel="stylesheet" type="text/css" href="./components/navbar/navbar.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="./sections/main/main.css" />
    <!-- Over mij CSS -->
    <link rel="stylesheet" type="text/css" href="./sections/over-mij/over-mij.css" />
    <!-- Vaardigheden CSS -->
    <link rel="stylesheet" type="text/css" href="./sections/vaardigheden/vaardigheden.css" />
    <!-- Projecten CSS -->
    <link rel="stylesheet" type="text/css" href="./sections/projecten/projecten.css" />
    <!-- Contact CSS -->
    <link rel="stylesheet" type="text/css" href="./sections/contact/contact.css" />
</head>
<body>
    <!-- Navbar -->
    <nav><?php include './components/navbar/navbar.php'; ?></nav>
    <!-- Sections -->
    <main>
        <!-- Main -->
        <?php include './sections/main/main.php'; ?>
        <!-- Over mij -->
        <?php include './sections/over-mij/over-mij.php'; ?>
        <!-- Vaardigheden -->
        <?php include './sections/vaardigheden/vaardigheden.php'; ?>
        <!-- Projecten -->
        <?php include './sections/projecten/projecten.php'; ?>
        <!-- Contact -->
        <?php include './sections/contact/contact.php'; ?>
    </main>
    
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/4163f4a17f.js" crossorigin="anonymous"></script>
    <!-- Navbar JS -->
    <script type="text/javascript" src="./components/navbar/navbar.js"></script>
</body>
</html>