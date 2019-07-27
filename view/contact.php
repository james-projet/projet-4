

<form class="form" action="<?= HOST?>mail" method="post">
    <p>Contact</p>
    <div class="">
        <input placeholder="titre" type="text" name="titre" class="titre" required/>
    </div>
    <div class="">
        <input placeholder="email@exemple.fr" type="email" name="email" id="email" required/>
    </div>
    <div class="">
        <input placeholder="message" type="text" name="message" id="message" required/>
    </div>
    <div class="">
        <input type="submit" value="Envoyer" class="button" id="button">
    </div>


</form>
