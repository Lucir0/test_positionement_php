<?php
// Étape 1 : Créer des variables de produits
$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

// Étape 2 : Calculer le sous-total pour chaque produit et afficher avec des phrases organisées
function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

$sous_total1 = calculerSousTotal($produit1);
$sous_total2 = calculerSousTotal($produit2);
$sous_total3 = calculerSousTotal($produit3);

echo "Le sous-total pour le produit \"{$produit1['nom']}\" (prix unitaire : {$produit1['prix']} €, quantité : {$produit1['quantite']}) est de : {$sous_total1} €.\n";
echo "Le sous-total pour le produit \"{$produit2['nom']}\" (prix unitaire : {$produit2['prix']} €, quantité : {$produit2['quantite']}) est de : {$sous_total2} €.\n";
echo "Le sous-total pour le produit \"{$produit3['nom']}\" (prix unitaire : {$produit3['prix']} €, quantité : {$produit3['quantite']}) est de : {$sous_total3} €.\n";

// Étape 3 : Calculer le total général du panier
$total_panier = $sous_total1 + $sous_total2 + $sous_total3;
echo "\nLe montant total du panier est de : {$total_panier} €.\n";

// Étape 4 : Appliquer une réduction si le total dépasse 50€
if ($total_panier > 50) {
    $total_apres_reduction = $total_panier * 0.9; // Réduction de 10%
    echo "Le total après application d'une réduction de 10 % est de : {$total_apres_reduction} €.\n";
} else {
    $total_apres_reduction = $total_panier;
    echo "Aucune réduction appliquée, le montant reste à : {$total_apres_reduction} €.\n";
}

// Bonus : Afficher un tableau HTML du panier
echo "
<table border='1'>
    <tr>
        <th>Produit</th>
        <th>Prix Unitaire (€)</th>
        <th>Quantité</th>
        <th>Sous-total (€)</th>
    </tr>
    <tr>
        <td>{$produit1['nom']}</td>
        <td>{$produit1['prix']}</td>
        <td>{$produit1['quantite']}</td>
        <td>{$sous_total1}</td>
    </tr>
    <tr>
        <td>{$produit2['nom']}</td>
        <td>{$produit2['prix']}</td>
        <td>{$produit2['quantite']}</td>
        <td>{$sous_total2}</td>
    </tr>
    <tr>
        <td>{$produit3['nom']}</td>
        <td>{$produit3['prix']}</td>
        <td>{$produit3['quantite']}</td>
        <td>{$sous_total3}</td>
    </tr>
    <tr>
        <td colspan='3'>Total</td>
        <td>{$total_panier}</td>
    </tr>
    <tr>
        <td colspan='3'>Total après réduction</td>
        <td>{$total_apres_reduction}</td>
    </tr>
</table>";
?>
