<?php 
    $langue = $donnees["langue"];       //Pour affichage des langues
    Debug::toLog($donnees["propulsion"]);
?>

<body >

<div data-js-Controleur="Voiture">  

    <div class="bodyConteneur" data-js-bodyConteneur >
        <aside class="filtreConteneur" data-js-component="Filtre">

            <form class="formConteneur" action="">

                <!-- TITRE -->
                <div class="filtreSection filtreSectionTop">
                    <p class="titreFiltre"><?=$langue["filtreFiltres"]?></p>
                </div>
                
                <!-- PRIX -->
                <div class="filtreSection">
                    <p class="titreSection"><?=$langue["filtrePrix"]?></p>
                    <select class="sousMenuContenue filtreInputColor">
                        <option value="null"><?=$langue["filtreChoisirPrix"]?></option>
                        <option value="prixMin=0, prixMax=1500"><?=$langue["filtrePrix0_1500"]?></option>
                        <option value="prixMin=1500, prixMax=5000"><?=$langue["filtrePrix1500_5000"]?></option>
                        <option value="prixMin=5000, prixMax=10000"><?=$langue["filtrePrix5000_10000"]?></option>
                        <option value="prixMin=10000, prixMax=20000"><?=$langue["filtrePrix10000_20000"]?></option>
                        <option value="prixMin=20000, prixMax=30000"><?=$langue["filtrePrix20000_30000"]?></option>
                        <option value="prixMin=30000, prixMax=60000"><?=$langue["filtrePrix30000_60000"]?></option>
                        <option value="prixMin=60000, prixMax=9999999"><?=$langue["filtrePrix60000"]?></option>
                    </select>
                </div>
                
                <!-- MARQUE -->
                <div class="filtreSection grille_voitures">
                    <div class="titreConteneur">
                        <p class="titreSection"><?=$langue["filtreMarque"]?></p>
                        <div class="sourisPointer symbolePlus" data-js-SymbolePlus>
                            <svg class="cacher" enable-background="new 0 0 1000 1000" version="1.1" fill="#333333" width="30px" height="30px"  viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><path d="m47.7 10zm716.2 565.4v-75.4c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-150.8v-150.8c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-75.4c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v150.8h-150.7c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v75.4c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h150.8v150.8c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h75.4c10.2 0 19-3.7 26.5-11.2s11.2-16.3 11.2-26.5v-150.8h150.8c10.2 0 19-3.7 26.5-11.2 7.3-7.5 11-16.3 11.1-26.5zm188.4-37.7c0 82.1-20.2 157.7-60.7 227-40.4 69.3-95.3 124.2-164.6 164.6s-145 60.7-227 60.7c-82.1 0-157.7-20.2-227-60.7s-124.2-95.3-164.6-164.6-60.7-145-60.7-227c0-82.1 20.2-157.8 60.7-227 40.4-69.3 95.3-124.2 164.6-164.7s145-60.7 227-60.7c82.1 0 157.7 20.2 227 60.7 69.3 40.4 124.2 95.3 164.6 164.6 40.5 69.4 60.7 145 60.7 227.1z"/></svg>
                            <svg enable-background="new 0 0 1000 1000" version="1.1" fill="#AA2020" width="30px" height="30px"  viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><path d="m47.7 10zm716.2 565.4v-75.4c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-150.8v-150.8c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-75.4c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v150.8h-150.7c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v75.4c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h150.8v150.8c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h75.4c10.2 0 19-3.7 26.5-11.2s11.2-16.3 11.2-26.5v-150.8h150.8c10.2 0 19-3.7 26.5-11.2 7.3-7.5 11-16.3 11.1-26.5zm188.4-37.7c0 82.1-20.2 157.7-60.7 227-40.4 69.3-95.3 124.2-164.6 164.6s-145 60.7-227 60.7c-82.1 0-157.7-20.2-227-60.7s-124.2-95.3-164.6-164.6-60.7-145-60.7-227c0-82.1 20.2-157.8 60.7-227 40.4-69.3 95.3-124.2 164.6-164.7s145-60.7 227-60.7c82.1 0 157.7 20.2 227 60.7 69.3 40.4 124.2 95.3 164.6 164.6 40.5 69.4 60.7 145 60.7 227.1z"/></svg>
                        </div>
                    </div>
                    <div class="grilleListe grilleListe--2 cacher">
<?php
                    foreach($donnees["toutesMarquesDispo"] as $marque){
?>  
                        <div class="listeConteneur">
                            <label for="<?=$marque["nom"]?>"><?=$marque["nom"]?></label>
                            <input class="radio" type="checkbox" id="<?=$marque["nom"]?>" name="<?=$marque["nom"]?>" value="<?=$marque["nom"]?>" data-js-marque="<?=$marque["id"]?>">
                        </div>
<?php                        
                    }
?>
                    </div>
                </div>
                
                <!-- MODELE -->
                <div class="filtreSection">
                    <div class="titreConteneur">
                        <p class="titreSection"><?=$langue["filtreModele"]?></p>
                        <div class="sourisPointer symbolePlus" data-js-SymbolePlus>
                            <svg class="cacher" enable-background="new 0 0 1000 1000" version="1.1" fill="#333333" width="30px" height="30px"  viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><path d="m47.7 10zm716.2 565.4v-75.4c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-150.8v-150.8c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-75.4c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v150.8h-150.7c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v75.4c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h150.8v150.8c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h75.4c10.2 0 19-3.7 26.5-11.2s11.2-16.3 11.2-26.5v-150.8h150.8c10.2 0 19-3.7 26.5-11.2 7.3-7.5 11-16.3 11.1-26.5zm188.4-37.7c0 82.1-20.2 157.7-60.7 227-40.4 69.3-95.3 124.2-164.6 164.6s-145 60.7-227 60.7c-82.1 0-157.7-20.2-227-60.7s-124.2-95.3-164.6-164.6-60.7-145-60.7-227c0-82.1 20.2-157.8 60.7-227 40.4-69.3 95.3-124.2 164.6-164.7s145-60.7 227-60.7c82.1 0 157.7 20.2 227 60.7 69.3 40.4 124.2 95.3 164.6 164.6 40.5 69.4 60.7 145 60.7 227.1z"/></svg>
                            <svg enable-background="new 0 0 1000 1000" version="1.1" fill="#AA2020" width="30px" height="30px"  viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><path d="m47.7 10zm716.2 565.4v-75.4c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-150.8v-150.8c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-75.4c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v150.8h-150.7c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v75.4c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h150.8v150.8c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h75.4c10.2 0 19-3.7 26.5-11.2s11.2-16.3 11.2-26.5v-150.8h150.8c10.2 0 19-3.7 26.5-11.2 7.3-7.5 11-16.3 11.1-26.5zm188.4-37.7c0 82.1-20.2 157.7-60.7 227-40.4 69.3-95.3 124.2-164.6 164.6s-145 60.7-227 60.7c-82.1 0-157.7-20.2-227-60.7s-124.2-95.3-164.6-164.6-60.7-145-60.7-227c0-82.1 20.2-157.8 60.7-227 40.4-69.3 95.3-124.2 164.6-164.7s145-60.7 227-60.7c82.1 0 157.7 20.2 227 60.7 69.3 40.4 124.2 95.3 164.6 164.6 40.5 69.4 60.7 145 60.7 227.1z"/></svg>
                        </div>
                    </div>
                    <div class="grilleListe grilleListe--2 cacher" data-js-modeleConteneur>
                    <!-- Populer via Filtre.js -->
                    </div>
                </div>
                
                <!-- ANNEE -->
                <div class="filtreSection">
                    <p class="titreSection"><?=$langue["filtreAnnee"]?></p>
                    <div class="sousMenuConteneur">
                        <div class="sousMenuContenue">
                        <label for="anneeMin"><?=$langue["filtreAnneeDebut"]?></label>
                        <input class="filtreInputWidth filtreInputColor" id="anneeMin" min="1800" max="9999" value="<?php echo date("Y")-5; ?>" type="number">
                        </div>
                        <div class="sousMenuContenue">
                            <label for="anneeMax"><?=$langue["filtreAnneeFin"]?></label>
                            <input class="filtreInputWidth filtreInputColor" id="anneeMax" min="1800" max="9999" value="<?php echo date("Y"); ?>" type="number">
                        </div>

                    </div>
                </div>

                <!-- KM -->
                <div class="filtreSection">
                    <p class="titreSection"><?=$langue["filtreKilometrage"]?></p>
                    <select class="sousMenuContenue filtreInputColor">
                        <option value="null"><?=$langue["filtreChoisirKm"]?></option>
                        <option value="kmMin=0,kmMax=10000"><?=$langue["filtreKm0_10000"]?></option>
                        <option value="kmMin=10000,kmMax=25000"><?=$langue["filtreKm10000_25000"]?></option>
                        <option value="kmMin=25000,kmMax=50000"><?=$langue["filtreKm25000_50000"]?></option>
                        <option value="kmMin=50000,kmMax=100000"><?=$langue["filtreKm50000_100000"]?></option>
                        <option value="kmMin=100000,kmMax=999999"><?=$langue["filtreKm100000"]?></option>
                    </select>
                </div>

                <!-- CARBURANT -->
                <div class="filtreSection">
                    <p class="titreSection"><?=$langue["filtreCarburant"]?></p>
                    <div class="sousMenuConteneur">
                        <div class="sousMenuContenueRadio">
                            <label for="essence"><?=$langue["filtreEssence"]?></label>
                            <input class="radio" type="radio" name="carburant" id="essence" value="essence" data-js-carburant="1">
                        </div>
                        <div class="sousMenuContenueRadio">
                            <label for="diesel"><?=$langue["filtreDiesel"]?></label>
                            <input class="radio" type="radio" name="carburant" id="diesel" value="diesel" data-js-carburant="2">
                        </div>
                    </div>
                </div>

                <!-- CARROSSERIE -->
                <div class="filtreSection">
                    <div class="titreConteneur">
                        <p class="titreSection"><?=$langue["filtreCarrosserie"]?></p>
                        <div class="sourisPointer symbolePlus" data-js-SymbolePlus>
                            <svg class="cacher" enable-background="new 0 0 1000 1000" version="1.1" fill="#333333" width="30px" height="30px"  viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><path d="m47.7 10zm716.2 565.4v-75.4c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-150.8v-150.8c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-75.4c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v150.8h-150.7c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v75.4c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h150.8v150.8c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h75.4c10.2 0 19-3.7 26.5-11.2s11.2-16.3 11.2-26.5v-150.8h150.8c10.2 0 19-3.7 26.5-11.2 7.3-7.5 11-16.3 11.1-26.5zm188.4-37.7c0 82.1-20.2 157.7-60.7 227-40.4 69.3-95.3 124.2-164.6 164.6s-145 60.7-227 60.7c-82.1 0-157.7-20.2-227-60.7s-124.2-95.3-164.6-164.6-60.7-145-60.7-227c0-82.1 20.2-157.8 60.7-227 40.4-69.3 95.3-124.2 164.6-164.7s145-60.7 227-60.7c82.1 0 157.7 20.2 227 60.7 69.3 40.4 124.2 95.3 164.6 164.6 40.5 69.4 60.7 145 60.7 227.1z"/></svg>
                            <svg enable-background="new 0 0 1000 1000" version="1.1" fill="#AA2020" width="30px" height="30px"  viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata><path d="m47.7 10zm716.2 565.4v-75.4c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-150.8v-150.8c0-10.2-3.7-19-11.2-26.5s-16.3-11.2-26.5-11.2h-75.4c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v150.8h-150.7c-10.2 0-19 3.7-26.5 11.2s-11.2 16.3-11.2 26.5v75.4c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h150.8v150.8c0 10.2 3.7 19 11.2 26.5s16.3 11.2 26.5 11.2h75.4c10.2 0 19-3.7 26.5-11.2s11.2-16.3 11.2-26.5v-150.8h150.8c10.2 0 19-3.7 26.5-11.2 7.3-7.5 11-16.3 11.1-26.5zm188.4-37.7c0 82.1-20.2 157.7-60.7 227-40.4 69.3-95.3 124.2-164.6 164.6s-145 60.7-227 60.7c-82.1 0-157.7-20.2-227-60.7s-124.2-95.3-164.6-164.6-60.7-145-60.7-227c0-82.1 20.2-157.8 60.7-227 40.4-69.3 95.3-124.2 164.6-164.7s145-60.7 227-60.7c82.1 0 157.7 20.2 227 60.7 69.3 40.4 124.2 95.3 164.6 164.6 40.5 69.4 60.7 145 60.7 227.1z"/></svg>

                        </div>
                    </div>

                    <div class="grilleListe grilleListe--2 cacher">
<?php
                    foreach($donnees["typeCarrosserie"] as $carrosserie){
?>  
                        <div class="listeConteneur">
                            <label for="<?=$carrosserie?>"><?=$carrosserie?></label>
                            <input class="radio" type="checkbox" id="<?=$carrosserie?>" name="<?=$carrosserie?>" data-js-carrosserie="<?=$carrosserie?>">
                        </div>
<?php                        
                    }
?>
                    </div>
                </div>

                <!-- TRANSMISSION -->
                <div class="filtreSection">
                    <p class="titreSection"><?=$langue["filtreTransmission"]?></p>
                    <div class="sousMenuConteneur">
<?php
                    foreach($donnees["transmission"] as $transmission){
?> 
                    <div class="sousMenuContenueRadio">
                        <label for="<?=$transmission?>"><?=$transmission?></label>
                        <input class="radio" type="radio" name="transmission" id="<?=$transmission?>" value="<?=$transmission?>" data-js-transmission="<?=$transmission?>">
                    </div>
<?php                        
                    }
?>
                    </div>
                </div>

                <!-- PROPULSION -->
                <div class="filtreSection">
                    <p class="titreSection"><?=$langue["filtrePropulsion"]?></p>

                    <div class="sousMenuConteneur">
<?php
                    foreach($donnees["propulsion"] as $propulsion){
?> 
                        <div class="sousMenuContenueRadio">
                            <label for="<?= $propulsion['nom'] ?>"><?=$propulsion['nom']?></label>
                            <input class="radio" type="radio" name="propulsion" id="<?=$propulsion['nom']?>" value="<?=$propulsion['nom']?>" data-js-propulsion="<?=$propulsion['nom']?>">
                        </div>
<?php
                    }
?>

                    </div>
                </div>

                <!-- FILTRER -->
                <div class="filtreSection filtreSectionBottom sousMenuConteneur">
                    <button class="bouton"><?=$langue["filtreFiltrer"]?></button>
                </div>

            </form>
        </aside>
        <main data-js-component="ListeVoitures">
            <section class="grille_voitures">
                <div class="grille grille--2" data-js-results>

