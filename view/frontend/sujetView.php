
<?php $titre = htmlspecialchars($sujet['titre']); ?>

<?php ob_start(); ?>
<div class="container">
        <div class="container-top">
            <div class="left">
                <h2><?= htmlspecialchars($sujet['titre']) ?></h2>
                <p><?= nl2br(htmlspecialchars($sujet['auteur'])) ?></p>
                <p><a class="link" href="index.php">Retour à la liste des sujets</a></p>
            </div>
            <div class="right">
                <button id="createNew">Ajouter contact</button>
            </div>
        </div>
        <div class="container-body">
            <table id="table">
                <tr>
                  <th>CODE</th>
                  <th>NOM</th>
                  <th>PRENOM</th>
                  <th>TEL</th>
                  <th>FAX</th>
                  <th>MAIL</th>
                  <th>LIEU INS</th>
                  <th>DATE INS</th>
                </tr>
                <?php
                while ($contact = $contacts->fetch()) { ?>  
                <tr>
                  <td><?= htmlspecialchars($contact['code_ins']) ?></td>
                  <td><?= htmlspecialchars($contact['nom']) ?></td>
                  <td><?= htmlspecialchars($contact['prenom']) ?></td>
                  <td><?= htmlspecialchars($contact['tel']) ?></td>
                  <td><?= htmlspecialchars($contact['fax']) ?></td>
                  <td><?= htmlspecialchars($contact['mail']) ?></td>
                  <td><?= htmlspecialchars($contact['lieu_ins']) ?></td>
                  <td><?= $contact['comment_date_fr'] ?></td>
                </tr>
                <?php } ?>  
              </table>
        </div>
    </div>

    <div class="modal" id="modal">
        <div class="modal-container">
            <form id="form" class="form"  action="index.php?action=addContact&amp;id=<?= $sujet['id'] ?>" method="post">
                <h2>Creer un nouveau contact</h2>
                  <div class="form-group">
                    <div class="form-control">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" autocomplete="off" required>
                    </div>
                    <div class="form-control">
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-control">
                        <label for="tel">Telephone</label>
                        <input type="text" id="tel" name="tel" autocomplete="off" required>
                    </div>
                    <div class="form-control">
                        <label for="mail">E-mail</label>
                        <input type="text" id="mail" name="mail" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-control">
                        <label for="fax">Fax</label>
                        <input type="text" id="fax" name="fax" autocomplete="off" required>
                    </div>
                    <div class="form-control">
                        <label for="lieu_ins">L'ieu d'inscription</label>
                        <input type="text" id="lieu_ins" name="lieu_ins" autocomplete="off" required>
                    </div>
                  </div>
                    <div class="form-control">
                        <label for="code_ins">Code d'inscription</label>
                        <input type="text" id="code_ins" name="code_ins"  autocomplete="off" required>
                    </div>
                <button type="submit">Submit Form</button>
            </form>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>