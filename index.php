<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="javascript" href="script.js">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- header -->
    <header>
        <input type="checkbox" name="" id="toggler">
        <a href="#" class="logo">Museum <span>Nusantara</span></a>
        
        <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#collection">collection</a>
        <a href="orders.php">order ticket</a>
        </nav>

    </header>

    <!-- home -->
    <section class="home" id="home">
        
        <div class="content">
            <h3>Museum Nusantara</h3>
            <span>Open Booking Ticket</span>
            <p>Announcing open ticket bookings from May 12 to July 27 for a Museum Nusantara
                featuring Indonesian artists. Explore inspiring works ranging from captivating 
                paintings to innovative art pieces. Make your journey enriching with cultural 
                experiences at every corner. Book your tickets now and enjoy this captivating exhibition!
            </p>
            <a href="orders.php" class="btn">Pesan Tiket</a>
        </div>
    </section>
    
    <!-- about -->
     <section class="about" id="about">

        <h1 class="heading"> <span>about </span>museum nusantara</h1>

        <div class="row">

            <div class="video-container">
                <video src="video.mp4" loop autoplay muted></video>
                <h3>best museum in indonesia</h3>
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Welcome to Museum Nusantara, a cultural haven showcasing the artistic prowess of Indonesian artists. Nestled in the heart of [location], this museum celebrates Indonesia's rich cultural heritage through a diverse collection of artworks. From traditional batik masterpieces to contemporary sculptures, each exhibit tells a unique story of creativity and tradition. Immerse yourself in the vibrant colors and intricate details that define Indonesian artistry. Whether you're an art enthusiast or a cultural explorer, Museum Nusantara promises an enriching experience for all.
                </p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
     </section>

     <!-- icons -->
     <section class="icons-container">

        <div class="icons">
            <img src="icon-1.png" alt="">
            <div class="info">
                <h3>rich cultural heritage</h3>
                <span>display artworks that reflect that indonesia's cultural</span>
            </div>
        </div>

        <div class="icons">
            <img src="icon-2.png" alt="">
            <div class="info">
                <h3>celebration of Indonesian artist</h3>
                <span>serves as a platform to honor and showcase the works of talented Indonesian artists</span>
            </div>
        </div>

        <div class="icons">
            <img src="icon-3.png" alt="">
            <div class="info">
                <h3>Interactive Exhibits</h3>
                <span>Visitors can engage with interactive exhibits that offer insights into Indonesian art techniques</span>
            </div>
        </div>

        <div class="icons">
            <img src="icon-4.png" alt="">
            <div class="info">
                <h3>Educational Programs</h3>
                <span>offers educational programs and guided tours to deepen visitors</span>
            </div>
        </div>

     </section>

     <!-- collection -->
     <section class="collection" id="collection">

        <h1 class="heading"> our <span> collection </span></h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image-1.jpg" alt="" onclick="zoomImage(this)">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">More info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>the irony of ruralism</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-2.jpeg" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>kidung hening taru raya</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-3.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>double helix hammerhead</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-4.png" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>perburuan rusa</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-5.png" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>ali sadikinpada masa kemerdekaan</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-6.png" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>a mount of megamendung</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-7.png" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>the ruins and the piano</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-8.png" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>the man from bantul</h3>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image-9.png" alt="">
                    <div class="icons">
                        <a href="#" class="bx bx-like"></a>
                        <a href="#" class="">more info</a>
                        <a href="#" class="bx bx-share-alt"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>pasukan kita dibawah pimpinann pangeran di ponegoro</h3>
                </div>
            </div>
        </div>

     </section>

     <!-- order -->

</body>
</html>