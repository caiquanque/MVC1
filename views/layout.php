<a href="." class="<?php echo !isset($_GET['controller']) ? 'active' : null ?>" >Home</a>
<a href="?controller=song$action=view" class="<?php echo (isset($_GET['controler']) and $_GET['controller'] === 'song' ) ? 'active' : null ?>">List</a>

<main> <?php require_once 'views/routes.php' ?> </main>