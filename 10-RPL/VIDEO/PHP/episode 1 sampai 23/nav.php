<nav>
    <ul>
        <li><a href="?menu=kontak">kontak</a></li>
        <li><a href="?menu=jurusan">jurusan</a></li>
        <li><a href="?menu=sejarah">sejarah</a></li>
    </ul>

</nav>

<?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        // echo $menu.'.php';
        require_once $menu.'.php';

    }

    // if (isset($_POST['kirim'])) {
    
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // echo $email;
    // echo '<br>';
    // echo $password;
    
    // }

    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // echo $email;
    // echo '<br>';
    // echo $password;
    
?>