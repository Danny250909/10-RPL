<nav>
    <ul>
        <li><a href="?menu=isi">isi</a></li>
        <li><a href="?menu=hapus">hapus</a></li>
        <li><a href="?menu=hancurkan">hancurkan</a></li>

    </ul>
</nav>
<?php 
    session_start();
    var_dump($_SESSION);
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        echo $menu;
        switch ($menu) {
            case 'isi':
                isisession();
                break;
            case 'hapus':
                unset($_SESSION['user']);
                break;
            case 'hancurkan':
                session_destroy();
                break;
            
            default:
                # code...
                break;
        }
    }
    // $_SESSION['user'] = 'Noviati';
    // $_SESSION['nama tengah'] = ' Tri Sari';
    // $_SESSION['nama belakang'] = 'Dewi';
    // var_dump($_SESSION);
    echo '<br>';
    function isisession(){
    $_SESSION['user'] = 'Noviati';
    $_SESSION['nama tengah'] = ' Tri Sari';
    $_SESSION['nama belakang'] = 'Dewi';

    }
?>