<?php

    require_once "db.php";

    function getDatas($req, $params)
    {
        global $pdo;
        $stmt = $pdo->prepare($req);
        $stmt->execute($params);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function getData($req, $params)
    {
        global $pdo;
        $stmt = $pdo->prepare($req);
        $stmt->execute($params);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    function setData($req, $params)
    {
        global $pdo;
        $stmt = $pdo->prepare($req);
        return $stmt->execute($params);
    }
