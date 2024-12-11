<?php

function getProducts(PDO $pdo)
{
    $query = $pdo->prepare("SELECT * FROM product");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getProductByIndex(PDO $pdo, int $id): array | bool
{
    if (isset($pdo) && isset($id)) {
        $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}
