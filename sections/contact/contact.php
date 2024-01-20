<!DOCTYPE html>
<html lang="nl">
<body>
    <div class="container-fluid mycss-container-contact" id="contact">
        <div class="w-100 d-flex flex-column align-items-center">
            <h3 class="mb-2 fst-italic mycss-contact-vraag">Heb je een vraag?</h3>
            <h1 class="display-2 mb-2 text-white">Contact mij</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 d-flex justify-content-center mb-5">
                <div class="col-md-4 col-sm-12 mt-3 d-flex">
                    <div class="card w-100 mycss-contact-card">
                        <div class="d-flex justify-content-center mt-4">
                            <form class="mt-3 mb-3" id="formComment" method="post">
                                <div class="row gy-3 ms-5 mb-2">
                                    <div class="col-11 d-flex justify-content-between">
                                        <label for="naam">Naam:</label>
                                        <input type="text" class="form-control w-75" name="naam" id="naam" placeholder="vb 'Joran Pen'" required>
                                    </div>
                                    <div class="col-11 d-flex justify-content-between">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control w-75" name="email" id="email" placeholder="vb 'joranpen@gmail.com'" required>
                                    </div>
                                    <div class="col-11">
                                        <label for="message" class="mb-2">Bericht:</label>
                                        <textarea class="form-control" name="message" id="message" rows="6" placeholder="Typ hier je bericht..." required></textarea>
                                    </div>
                                    <div class="col-11 d-flex justify-content-end">
                                        <input type='reset' class="btn btn-primary" value='Verstuur je bericht' name='reset' data-bs-toggle="modal" data-bs-target="#submitAComment">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>