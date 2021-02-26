<?php
// phpinfo();

$conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root"); //Precisa colocar para funcionar no mysql server o pooling
// $conn = new PDO("sqlsrv:Database=dbphp8", "sa", "root"); //Precisa colocar para funcionar no mysql server o pooling

//stmt = statement = demonstração
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results);
