<!-- Begin Main Menu -->
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(1, "mmi_cliente", $Language->MenuPhrase("1", "MenuText"), "clientelist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(2, "mmi_detalle", $Language->MenuPhrase("2", "MenuText"), "detallelist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(3, "mmi_devolucion", $Language->MenuPhrase("3", "MenuText"), "devolucionlist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(4, "mmi_empresa", $Language->MenuPhrase("4", "MenuText"), "empresalist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(5, "mmi_libro", $Language->MenuPhrase("5", "MenuText"), "librolist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(6, "mmi_pedido", $Language->MenuPhrase("6", "MenuText"), "pedidolist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(7, "mmi_usuario", $Language->MenuPhrase("7", "MenuText"), "usuariolist.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(8, "mmi_administrador", $Language->MenuPhrase("8", "MenuText"), "administradorlist.php", -1, "", TRUE, FALSE);
$RootMenu->Render();
?>
<!-- End Main Menu -->
