<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aloudya's</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNavAltMarkup" data-bs-offset="70">
    <div class="container-lg">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto me-auto gap-5 inter-heading">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                        <a class="nav-link" aria-current="page" href="#about">About</a>
                        <a class="nav-link" aria-current="page" href="#projects">Projects</a>
                        <a class="nav-link" aria-current="page" href="#contacts">Contacts</a>
                    </div>
                </div>
            </div>
        </nav>

        <main style="margin-top: 10%">
            <section class="d-flex justify-content-center scrollspy-example" id="home">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="underline-heading inter-heading d-flex justify-content-end"
                                style="font-size: 56px">
                                Hello there!
                            </h1>
                        </div>
                        <div class="col-md-6 position-absolute z-1 end-0" style="top: 150px">
                            <img src="./images/hero-img.jpg" alt="Me"
                                class="border-5 border-dark rounded-4 shadow w-50 h-auto m-0" />
                        </div>
                        <div class="container mt-4">
                            <div class="row green-rectangle d-flex align-items-center justify-content-center">
                                <div class="col position-relative">
                                    <div class="border-2 border-dark z-0"
                                        style="background-color: rgba(129, 214, 46, 0.5); padding: 11%;">
                                    </div>
                                </div>
                                <div class="col-2 position-absolute">
                                    <div class="border-2 border-dark z-0"
                                        style="background-color: rgba(129, 214, 46, 0.5); padding: 9%;">
                                        <div class="text-start position-absolute top-0 mt-3">
                                            <h3 class="inter-heading" style="font-weight: 600">Welcome! I'm Aloudya.
                                            </h3>
                                            <p class="inter-text">
                                                Currently an 11th grader in SMKN 1 <br />
                                                Bekasi, majoring in Software and Game <br />
                                                Development. Recently interested in <br />
                                                the world of Web Development, specifically <br />
                                                in Front-end. Stay——
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" style="margin-top: 108px">
                <div class="container">
                    <h1 class="underline-heading inter-heading text-center">About Me</h1>
                    <div id="aboutCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <h6 class="inter-heading text-center fs-4 mt-2" style="font-weight: 650">What are my favorite
                            pastimes?</h6>
                        <div class="carousel-inner mt-3">
                            <div class="carousel-item active">
                                <div class="row" style="margin: 0 100px 0 100px">
                                    <div class="col-md-6">
                                        <img src="./images/hobby-1-img.jpeg"
                                            class="d-block w-100 border-5 border-dark rounded-4 shadow h-auto"
                                            alt="Hobby 1 Writing" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column justify-content-center h-100">
                                            <h3 class="inter-heading">Writing</h3>
                                            <p class="inter-text">
                                                I love writing! It's my way of letting out all those
                                                thoughts swirling around in my head. Whether it's
                                                penning prose, jotting down poetry, or just letting my
                                                mind wander in the wee hours of the night—writing
                                                helps me see things from different angles. You can
                                                often find me sharing my musings on
                                                <a href="https://medium.com/@aloudya"
                                                    target="_blank"><strong>Medium</strong></a>, where I spill my guts
                                                and imagination.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row" style="margin: 0 100px 0 100px">
                                    <div class="col-md-6">
                                        <img src="./images/hobby-2-img.jpeg"
                                            class="d-block w-100 border-5 border-dark rounded-4 shadow h-auto"
                                            alt="Hobby 2 Reading" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column justify-content-center h-100">
                                            <h3 class="inter-heading">Reading</h3>
                                            <p class="inter-text">
                                                Reading a good book feels like disappearing into its
                                                pages. No matter if it's fiction, non-fiction, or
                                                poetry, I'm all in. Lately, I've been diving into
                                                classic literature, with a big shoutout to
                                                <b>Fyodor Dostoevsky</b> and <b>Franz Kafka</b> (and
                                                hopefully many more to come). Their books take me on
                                                journeys, expanding my horizons and showing me new
                                                ways of looking at the world.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row" style="margin: 0 100px 0 100px">
                                    <div class="col-md-6">
                                        <img src="./images/hobby-3-img.jpeg"
                                            class="d-block w-100 border-5 border-dark rounded-4 shadow h-auto"
                                            alt="Hobby 3 Listening to music" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column justify-content-center h-100">
                                            <h3 class="inter-heading">Listening to music</h3>
                                            <p class="inter-text">
                                                Ah, where do I even begin with my love for music? It's
                                                like my daily dose of therapy, you know? At times when
                                                I feel upbeat and need some pop tunes to dance around
                                                the room or just chilling with some mellow beats,
                                                music is always there for me. A mood lifter. A
                                                comforter. A constant companion. Music adds rhythm and
                                                melody to every moment of my life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>

            <section id="projects" style="margin-top: 108px">
                <div class="container">
                    <h1 class="underline-heading inter-heading text-center">Projects</h1>
                    <p class="inter-text fs-5">
                        of what I have done so far<small
                            style="font-size: small; font-style: italic; margin-left: 10px; color: #5f9b22;">...hover
                            the image to peek!</small>
                    </p>
                    <div class="row mb-4">
                        <div data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img src="./images/project-7-img.jpeg"
                                class="img-fluid rounded border-5 border-dark rounded-4 shadow" data-toggle="tooltip"
                                data-bs-title="Pelatihan SMKCoding CSS Magician Series 2024: Bootstrap"
                                data-bs-custom-class="custom-tooltip" />
                        </div>
                        <div data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img src="./images/project-2-img.jpeg"
                                class="img-fluid rounded border-5 border-dark rounded-4 shadow" data-toggle="tooltip"
                                data-bs-title="Lailatul Coding 2024" data-bs-custom-class="custom-tooltip" />
                        </div>
                        <div data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img src="./images/project-3-img.jpeg"
                                class="img-fluid rounded border-5 border-dark rounded-4 shadow" data-toggle="tooltip"
                                data-bs-title="Undangan Digital" data-bs-custom-class="custom-tooltip" />
                        </div>
                    </div>

                    <div class="row">
                        <div data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img src="./images/project-8-img.jpeg"
                                class="img-fluid rounded border-5 border-dark rounded-4 shadow" data-toggle="tooltip"
                                data-bs-title="Pelatihan SMKCoding CSS Magician Series 2024: Bootstrap"
                                data-bs-custom-class="custom-tooltip" data-bs-placement="bottom" />
                        </div>
                        <div data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img src="./images/project-5-img.jpeg"
                                class="img-fluid rounded border-5 border-dark rounded-4 shadow" data-toggle="tooltip"
                                data-bs-title="Laravel Penjualan" data-bs-custom-class="custom-tooltip"
                                data-bs-placement="bottom" />
                        </div>
                        <div data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img src="./images/project-6-img.jpeg"
                                class="img-fluid rounded border-5 border-dark rounded-4 shadow" data-toggle="tooltip"
                                data-bs-title="Pelatihan SMKCoding NuxtJs 2023" data-bs-custom-class="custom-tooltip"
                                data-bs-placement="bottom" />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer class="footer border-2 border-dark" id="contacts">
        <div class="container text-center">
            <div class="row p-3">
                <div class="col-12">
                    <h5>Connect with me</h5>
                    <p class="mt-2">
                        <i class="fas fa-envelope me-2"></i>aloudyafathya@gmail.com
                    </p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/aloudyaa" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/+628881671200" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://github.com/aloudya" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://medium.com/@aloudya" target="_blank"><i class="fab fa-medium"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>&copy; 2024 Aloudya. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>

</html>