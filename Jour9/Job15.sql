SELECT
  salles.nom AS jour09_salles, 
  etage.nom AS jour09_etage
FROM salles
JOIN etage ON salles.id=etage.id;