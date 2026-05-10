<?php

$host     = "https://afnrulomqqfxskwkojld.supabase.co";
$dbname   = "postgres";
$user     = "postgres";
$password = ""; // pakeiskite savo slaptažodžiu
$port     = "5432";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require",
        $user,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Prisijungta sėkmingai!";

} catch (PDOException $e) {
    echo "❌ Klaida: " . $e->getMessage();
}
?>
