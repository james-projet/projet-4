<!--texte de bienvenue -->
<div id="texthome">
  <div id="firstepisode">

    <!--renvoi le dernier titre et le dernier episodes stocker en BDD-->
    <div id="chapitre">
      <h3>Billet simple pour l'Alaska</h3>
      <h2><?= $episodes[0]->getTitre();?></h2>
      <br/>
      <p><?= $episodes[0]->getEpisode();?></p>
      <p><a href="<?= HOST?>episode/id/<?= $episodes[0]->getId();?>">Lire la suite </a></p>


    </div>

  </div>
  <div class="timeline">
    <h3>QUI SUIS-JE?</h3>
    <div class="item">
      <div class="image">
        <div>
          <img src="<?= HOST?>public/photos/bebe.jpg" alt="bebe">

        </div>
      </div>
      <div class="details">
        <div>
          <h4>Ma naissance</h4><p>(01.01.1982)</p>
          <p>Eh oui je suis né le jour de l'an est-ce un cadeau pour l'année 1982 peut-être pas. Né dans une famille assez modeste mais pleine d'amour mon enfance fût idyllique.</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="image">
        <div>
          <img src="<?= HOST?>public/photos/ado.jpg" alt="ado">
        </div>
      </div>
      <div class="details">
        <div>
          <h4>Ma jeunesse</h4><p>(1996 - ...)</p>
          <p>Les années 90 quel régal, les mangas et la culture rap bercèrent mon adolescence faite de période rebelle et de découverte(que nous n'étaleront pas aujourd'hui).
            Je pris goût a la lecture grace au manga mais ceci ne fut que le début de mon histoire d'amour avec cette merveilleuse invention qu'est le livre.</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="image">
        <div>
          <img src="<?= HOST?>public/photos/livre.png" alt="livre">
        </div>
      </div>
      <div class="details">
        <div>
          <h4>Ma passion</h4><p>(1998 - ...)</p>
          <p>Lire lire et encore lire certain prendrait ça pour une corvée mais pour moi ce n'est que bonheur, voyage, découverte et imagination. Je passe mon temps à lire et quand j'arrête je me mets à écrire mes premières histoires qui reste pour l'instant un plaisir personnel</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="image">
        <div>
          <img src="<?= HOST?>public/photos/train.jpg" alt="train">

        </div>
      </div>
      <div class="details">
        <div>
          <h4>Mes voyages</h4><p>(2000)</p>
          <p>L'année 2000 que beaucoup de personnes redoutaient on a changé de millénaire et après...Pour moi ce n'est que le début de mes voyages je quitte le cocon familial et me prend au goût du risque et de l'aventure.
            Je traverse l'Europe en train et rencontre des personnes formidables mais surtout des histoires et des cultures différentes et intrigantes.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="image">
        <div>
          <img src="<?= HOST?>public/photos/histoire.jpg" alt="histoire">
        </div>
      </div>
      <div class="details">
        <div>
          <h4>Mes histoires</h4><p>2010</p>
          <p>Après temps de périple et de decouverte je finis en Alaska avec des souvenirs plein la tête et l'envie de partager. Mais comment me dirait vous.
            En écrivant pardi! Je me mets alors à écrire pendant plusieurs mois les contes et légendes des pays que j'ai decouvert en y rajoutant ma touche personnelle et mon grain de folie en espérant que ça vous plaise et que par ce biais vous puissiez revivre mon voyage et les émotions qui m'ont traversé.
            Bonne lecture!</p>
        </div>
      </div>
    </div>
  </div>


</div>
