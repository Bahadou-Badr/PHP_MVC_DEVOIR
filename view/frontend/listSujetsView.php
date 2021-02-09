<?php $titre = 'Gestion de contact'; ?>

<?php ob_start(); ?>

<h1>Liste des Sujets</h1>
<ol class="articles">
<?php
while ($data = $sujets->fetch())
{
?>

<li class="articles__article" style="--animation-order:1">
  <a href="index.php?action=sujet&amp;id=<?= $data['id'] ?>"class="articles__link">
      <div class="articles__content articles__content--lhs">
        <h2 class="articles__title"><?= htmlspecialchars($data['titre']) ?></h2>
        <div class="articles__footer">
          <p><?= nl2br(htmlspecialchars($data['auteur'])) ?></p>
          <time><?= $data['creation_date_fr'] ?></time>
        </div>
      </div>
      <div class="articles__content articles__content--rhs" aria-hidden="true">
        <h2 class="articles__title"><?= htmlspecialchars($data['titre']) ?></h2>
        <div class="articles__footer">
          <p><?= nl2br(htmlspecialchars($data['auteur'])) ?></p>
          <time><?= $data['creation_date_fr'] ?></time>
        </div>
      </div>
  </a>
</li>

<?php
} ?>
</ol>
<?php
$sujets->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
<!-- --------------- -->


<!-- <ol class="articles">
  <li class="articles__article" style="--animation-order:1"><a class="articles__link">
      <div class="articles__content articles__content--lhs">
        <h2 class="articles__title">Sweet roll gingerbread sweet roll jelly</h2>
        <div class="articles__footer">
          <p>Cakes</p>
          <time>1 Jan 2020</time>
        </div>
      </div>
      <div class="articles__content articles__content--rhs" aria-hidden="true">
        <h2 class="articles__title">Sweet roll gingerbread sweet roll jelly</h2>
        <div class="articles__footer">
          <p>Cakes</p>
          <time>1 Jan 2020</time>
        </div>
      </div></a></li>
  <li class="articles__article" style="--animation-order:2"><a class="articles__link">
      <div class="articles__content articles__content--lhs">
        <h2 class="articles__title">Bar cupcake chocolate topping brownie</h2>
        <div class="articles__footer">
          <p>Chocolates</p>
          <time>2 Feb 2020</time>
        </div>
      </div>
      <div class="articles__content articles__content--rhs" aria-hidden="true">
        <h2 class="articles__title">Bar cupcake chocolate topping brownie</h2>
        <div class="articles__footer">
          <p>Chocolates</p>
          <time>2 Feb 2020</time>
        </div>
      </div></a></li>
  <li class="articles__article" style="--animation-order:3"><a class="articles__link">
      <div class="articles__content articles__content--lhs">
        <h2 class="articles__title">Powder tootsie roll chocolate sugar</h2>
        <div class="articles__footer">
          <p>Puddings</p>
          <time>3 Mar 2020</time>
        </div>
      </div>
      <div class="articles__content articles__content--rhs" aria-hidden="true">
        <h2 class="articles__title">Powder tootsie roll chocolate sugar</h2>
        <div class="articles__footer">
          <p>Puddings</p>
          <time>3 Mar 2020</time>
        </div>
      </div></a></li>
</ol> -->