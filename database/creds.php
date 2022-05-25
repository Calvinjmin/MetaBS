<p>
<?php
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

$sql = $pdo->prepare("SELECT * FROM accounts WHERE id=1");
$sql->execute();
while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo $result['username']."<br/>";
}
?></p>