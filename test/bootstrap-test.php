<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap testingpage</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container-fluid d-flex flex-column align-items-center">
            <h1 class="mt-4">Welcome to the Bootstrap testingpage</h1>
            <!-- Example form -->
            <form class="w-25 mt-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1"class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" id="exampleTriggerModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>
                </div>
            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Saving</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Do you want to save?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap-test JS -->
        <script type="text/javascript" href="./bootstrap-test.js"></script>
    </body>
</html>