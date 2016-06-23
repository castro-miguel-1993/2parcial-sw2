<!-- Begin Main Menu -->
<?php $RootMenu = new cMenu(EW_MENUBAR_ID) ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(1, "mi_cliente", $Language->MenuPhrase("1", "MenuText"), "clientelist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(2, "mi_detalle", $Language->MenuPhrase("2", "MenuText"), "detallelist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(3, "mi_devolucion", $Language->MenuPhrase("3", "MenuText"), "devolucionlist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(5, "mi_libro", $Language->MenuPhrase("5", "MenuText"), "librolist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(6, "mi_pedido", $Language->MenuPhrase("6", "MenuText"), "pedidolist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(7, "mi_usuario", $Language->MenuPhrase("7", "MenuText"), "usuariolist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(8, "mi_administrador", $Language->MenuPhrase("8", "MenuText"), "administradorlist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(9, "mi_inicio", $Language->MenuPhrase("9", "MenuText"), "iniciolist.php", -1, "", TRUE, FALSE);
$RootMenu->Render();
?>
<!-- End Main Menu -->
