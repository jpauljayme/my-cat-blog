<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap PHP Site</title>

    <link href="./assets/css/index.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional JavaScript and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <div class="container">
        <header class="row">
            <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start">
                <img class="cat_icon" src="./assets/image/cute.png" alt="Cute Cat Icon" />
            </div>
            <div class="col-12 col-md-8 text-center text-md-start">
                <h1>Meow Meow Meow</h1>
                <h3>Meet an Angel in the Being of a Cat</h3>
            </div>
        </header>
        <section class="intro-section d-flex flex-column align-items-center justify-content-center">
            <div class="cardboard-container text-center">
                <h3>
                        Psychology speaks on the most crucial source of safety is from our parents during childhood.
                        That is true! Yet in my defense, the ones who cried meow and scratched multiple isles in my body,
                        showed the other side of reciprocity - a tenderness so innocent,
                        and a teacher for gratefulness in the mundane.
                </h3>
            </div>
            <div>
                <a href="#main-section" class="btn btn-primary btn-lg">Meet my cats!</a>
            </div>
        </section>

        <main class="row" id="main-section">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>