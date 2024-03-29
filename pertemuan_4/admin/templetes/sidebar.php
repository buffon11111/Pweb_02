<?php
$menu = [
    'Home' => 'index.php',
    'Produk' => 'produk.php',
    'Profile' => 'profile.php',
    'About' => 'about.php'
];

$icons = [
    'Home' => 'home',
    'Produk' => 'list',
    'Profile' => 'id-badge',
    'About' => 'info-circle'
];
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <?php foreach($menu as $key => $value): ?>
                            <a class="nav-link" href="<?= $value ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-<?= $icons[$key]?>"></i></div>
                                <?= $key?>
                            </a>
                                <?php endforeach?>
                            <a class="nav-link" href="daftar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Daftar
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">