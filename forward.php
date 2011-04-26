<? header('Content-type: application/json'); ?>
<?= file_get_contents("http://10.0.1.205" . $_GET["x"]); ?>