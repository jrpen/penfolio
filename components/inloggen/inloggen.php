<!DOCTYPE html>
<html lang="nl">
<body>
    <div class="modal fade" id="inloggen" tabindex="-1" aria-labelledby="inloggen" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content mycss-inloggen-modal">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Inloggen</h1>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="mt-3 mb-3" method="post">
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column">
                                <label for="i-naam">Gebruikersnaam:</label>
                                <label for="i-wachtwoord" class="mt-3">Wachtwoord:</label>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <input type="text" class="form-control w-75" name="i-naam" id="i-naam" pattern="[A-Za-z0-9_]{3,50}" placeholder="vb 'Joran09'" required>
                                <input type="password" class="form-control w-75 mt-2" name="i-wachtwoord" id="i-wachtwoord" pattern="[A-Za-z0-9]{4,50}" placeholder="vb '1234'" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#accountAanmaken">Account aanmaken</button>
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>