<!DOCTYPE html>
<html lang="nl">
<body>
    <div class="modal fade" id="settings" tabindex="-1" aria-labelledby="settings" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content mycss-account-modal">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Settings</h1>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="mt-3 mb-3 w-100" method="post">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column align-items-center mt-2">
                                <label for="s-wachtwoord">Update wachtwoord (4-50):</label>
                                <input type="password" class="form-control w-75 mt-2" name="s-wachtwoord" id="s-wachtwoord" pattern="[A-Za-z0-9]{4,50}" placeholder="vb '1234'" required>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary">Update wachtwoord</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="mt-3 mb-3 w-100" method="post">
                        <input type="hidden" name="delete">
                        <div class="mt-5 w-100 d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger" class="w-100">
                                <span class="mycss-delete-acc">Delete account</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>