<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Connexion</h1>

<div class="container">
    <form method='post'>
        <div class="form-group row">
            <label for="login" class="col-sm-1-12 col-form-label">Identification</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="login" id="login" placeholder="Identification" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-1-12 col-form-label">Mot de passe</label>
            <div class="col-sm-12">
                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
            </div>
        </div>
       
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
        </div>
    </form>
</div>


<?php require_once __DIR__ . '/../parties/footer.php'; ?>