<nav class="nav my-2 py-2 justify-content-center">
      <a class="nav-link" href="index.php?route=home">Accueil</a>
      <a class="nav-link" href="index.php?route=list-fleurs">Liste des fleurs</a>
      
      <?php if (!empty($_SESSION['login']) && $_SESSION['login'] == 'admin') : ?>
      <a class="nav-link" href="index.php?route=ajouter-fleur">Ajouter des fleurs</a>
      <?php endif; ?>
      <?php if (empty($_SESSION['login'])) : ?>
            <a class="nav-link" href="index.php?route=connexion-fleur">Connexion</a>
      <?php else : ?>
            <a class="nav-link" href="index.php?route=deconnexion-fleur">Deconnexion</a>
      <?php endif; ?>
</nav>