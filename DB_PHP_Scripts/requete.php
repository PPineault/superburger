<?php

function getPoutineData($conn)
{
    $query = "SELECT upper(p.NomProduit) AS nom, p.description, f.nomformats, cast(round(prix.prix,2) as decimal(10,2)) as prix
    FROM produit AS p 
    INNER JOIN prix ON p.idPrix = prix.idPrix
    INNER JOIN formats_Produit AS fp ON p.idproduit = fp.idproduit
    INNER JOIN formats AS f ON fp.idformats = f.idformats
    INNER JOIN cathegorie AS c ON p.id_cathegorie = c.id_cathegorie
    WHERE c.Nomcathegorie = 'poutines'";
    $stmt = $conn->query($query);
    return $stmt;
}



function getExtraData($conn)
{
    $query = "SELECT upper(p.NomProduit) AS nom, f.nomformats, cast(round(prix.prix,2) as decimal(10,2)) as prix
    FROM produit AS p 
    INNER JOIN prix ON p.idPrix = prix.idPrix 
    LEFT JOIN formats_Produit AS fp ON p.idproduit = fp.idproduit 
    LEFT JOIN formats AS f ON fp.idformats = f.idformats 
    INNER JOIN cathegorie AS c ON p.id_cathegorie = c.id_cathegorie
    WHERE c.Nomcathegorie = 'extra'";
    $stmt = $conn->query($query);
    return $stmt;
}

function getAcotesData($conn)
{
    $query = "SELECT upper(p.NomProduit) AS nom, p.description, f.nomformats, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM produit AS p 
    INNER JOIN prix ON p.idPrix = prix.idPrix 
    LEFT JOIN formats_Produit AS fp ON p.idproduit = fp.idproduit 
    LEFT JOIN formats AS f ON fp.idformats = f.idformats 
    INNER JOIN cathegorie AS c ON p.id_cathegorie = c.id_cathegorie
    WHERE c.Nomcathegorie = 'À-cotés'";
    $stmt = $conn->query($query);
    return $stmt;
}
function getaperitifs($conn)
{
    $query = " SELECT        upper(p.NomProduit) AS nom,cast(round(prix.prix,2) as decimal(10,2))as prix
FROM            produit AS p INNER JOIN
                         prix ON p.idPrix = prix.idPrix INNER JOIN
	                   cathegorie AS c ON p.id_cathegorie = c.id_cathegorie WHERE c.Nomcathegorie = 'Apéritifs'";
    $stmt = $conn->query($query);
    return $stmt;
}

function getbreuvages($conn)
{
    $query = "SELECT        upper(p.NomProduit) AS nom, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM            produit AS p INNER JOIN
                             prix ON p.idPrix = prix.idPrix INNER JOIN
                             cathegorie AS c ON p.id_cathegorie = c.id_cathegorie WHERE c.Nomcathegorie = 'Breuvages' ";
    $stmt = $conn->query($query);
    return $stmt;
}

function getsuperdogs($conn)
{
    $query = "SELECT         upper(p.NomProduit) AS nom, p.description, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM            produit AS p INNER JOIN
                             prix ON p.idPrix = prix.idPrix INNER JOIN
                             cathegorie AS c ON p.id_cathegorie = c.id_cathegorie WHERE c.Nomcathegorie = 'super-dogs' ";
    $stmt = $conn->query($query);
    return $stmt;
}
function getxmen($conn)
{
    $query = "SELECT upper(p.NomProduit) AS nom, p.description, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM produit AS p 
    INNER JOIN prix ON p.idPrix = prix.idPrix 
    INNER JOIN cathegorie AS c ON p.id_cathegorie = c.id_cathegorie 
    WHERE c.Nomcathegorie = 'Les x-men-super Sous-marin 7\"'";

    $stmt = $conn->query($query);
    return $stmt;
}
function getspaghetti($conn)
{
    $query = "SELECT         upper(p.NomProduit)AS nom, p.description,cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM            produit AS p INNER JOIN
                             prix ON p.idPrix = prix.idPrix INNER JOIN
                             cathegorie AS c ON p.id_cathegorie = c.id_cathegorie WHERE c.Nomcathegorie = 'Spaghetti' ";
    $stmt = $conn->query($query);
    return $stmt;
}
function getmenuenfant($conn)
{
    $query = "SELECT         upper(p.NomProduit)AS nom, p.description, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM            produit AS p INNER JOIN
                             prix ON p.idPrix = prix.idPrix INNER JOIN
                             cathegorie AS c ON p.id_cathegorie = c.id_cathegorie WHERE c.Nomcathegorie = 'Menu Petits Héros (12 ans et moins)'";
    $stmt = $conn->query($query);
    return $stmt;
}
function getsalades($conn)
{
    $query = "SELECT upper(p.NomProduit) AS nom, p.description, f.nomformats, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM produit AS p 
    INNER JOIN prix ON p.idPrix = prix.idPrix 
    LEFT JOIN formats_Produit AS fp ON p.idproduit = fp.idproduit 
    LEFT JOIN formats AS f ON fp.idformats = f.idformats 
    INNER JOIN cathegorie AS c ON p.id_cathegorie = c.id_cathegorie
    WHERE c.Nomcathegorie = 'Salades'";
    $stmt = $conn->query($query);
    return $stmt;
}
function gethamburger($conn)
{
    $query = "SELECT 
    UPPER(p.NomProduit) AS nom,
    p.description AS description,
    cast(round(prix.prix,2) as decimal(10,2))AS prix
    FROM 
    produit AS p
    INNER JOIN prix ON p.idPrix = prix.idPrix
    INNER JOIN cathegorie AS c ON p.id_cathegorie = c.id_cathegorie
    WHERE 
    c.Nomcathegorie = 'Harburger (Boeuf 6.5 oz)'";
    $stmt = $conn->query($query);
    return $stmt;
}
function getaccompagnementhamburger($conn)
{
    $query = "SELECT
    a.NomAccompagnement AS nom,
    cast(round(prix.prix,2) as decimal(10,2)) AS prix
    FROM
    accompagnement AS a
    INNER JOIN prix ON a.idPrix = prix.idPrix
    INNER JOIN cathegorie_acompagnement AS ca ON a.IDAccompagnement = ca.IDAccompagnement
    INNER JOIN cathegorie AS c ON ca.id_cathegorie = c.id_cathegorie
    WHERE
    c.Nomcathegorie = 'Harburger (Boeuf 6.5 oz)'";
    $stmt = $conn->query($query);
    return $stmt;
}
function getnosmayos($conn)
{
    $query = "SELECT        upper(P.NomProduit) AS nom, cast(round(prix.prix,2) as decimal(10,2))as prix
    FROM            produit AS P INNER JOIN
                             prix ON P.idPrix = prix.idPrix INNER JOIN
                             cathegorie AS C ON P.id_cathegorie = C.id_cathegorie
    WHERE        (C.Nomcathegorie = 'Nos mayos')";
    $stmt = $conn->query($query);
    return $stmt;
}
