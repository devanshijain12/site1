<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site1.css">
    <title>Sri Lanka Tourism</title>
</head>

<body>
    <?php
        include("contact.php");
    ?>

    <div class="main-container">
        <div class="img-container" id="img-container">
            <div class="container1">
                <nav>
                    <div class="company">
                        <img src="logo.png" alt="Company Logo"></img>
                    </div>
                    <div class="list">
                        <ul class="navlist">
                            <li><a href="#img-container" class="icon"><img src="home.png">&nbsp;Home</a></li>
                            <li><a href="#container3" class="icon"><img src="about.png">&nbsp;About</a></li>
                            <li><a href="#packages" class="icon"><img src="plane.png">&nbsp;Packages</a></li>
                            <li><a href="#contact-sec" class="icon"><img src="contact.png">&nbsp;Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="container2">
                <fieldset class="fieldset" id="fieldset">
                    <legend>PLAN YOUR TRIP TO SRI LANKA</legend>
                    <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div>
                            <label for="Name">Name: &nbsp;</label>
                            <input type="text" id="Name" name="Name" class="inp" placeholder="Your name">
                        </div>
                        <div>
                            <label for="Contact">Contact: &nbsp;</label>
                            <input type="text" id="Contact" name="Contact" class="inp" placeholder="Your phone number">
                        </div>
                        <div id="label3">
                            <label for="Mail">Mail: &nbsp;</label>
                            <input type="text" id="Mail" name="Mail" class="inp" placeholder="Your e-mail">
                        </div>
                        <button id="button1" type="submit">Submit</button>
                    </form>
                </fieldset>
            </div>
        </div>

        <div class="container3" id="container3">
            <div class="content"> 
                <p class="heading">ABOUT</p>
                <p>
                    Nestled like a teardrop in the Indian Ocean, Sri Lanka beckons travelers with its unparalleled blend
                    of natural beauty, rich history, and vibrant culture. From the bustling streets of Colombo to the
                    tranquil
                    tea estates of Nuwara Eliya, every corner of this island nation offers a unique
                    experience.<br><br>Explore
                    ancient wonders such as the Sigiriya Rock Fortress, where centuries-old frescoes adorn steep cliffs,
                    or
                    wander through the sacred city of Anuradhapura, where towering dagobas stand testament to a glorious
                    past. The cultural mosaic of Sri Lanka is equally captivating, with festivals like Vesak and the
                    Kandy
                    Esala Perahera filling the air with music, dance, and religious fervor. Indulge in the island's
                    culinary
                    delights, from fiery curries to delicate seafood dishes, each infused with a blend of spices that
                    reflects its diverse heritage. For adventurers, the opportunities are endless: surf the waves of
                    Arugam
                    Bay, trek through the misty hills of Ella to witness cascading waterfalls, or embark on a safari in
                    Yala
                    National Park to encounter leopards and elephants in their natural habitat.<br><br>Whether exploring
                    ancient
                    ruins, relaxing on palm-fringed beaches, or delving into local markets buzzing with life, Sri Lanka
                    promises a journey that resonates long after the journey ends, leaving memories of warmth,
                    hospitality,
                    and a rich tapestry of experiences etched in the heart.
                </p>
            </div>
            <div class="images">
                <img src="img1.jpg" alt="image1" class="img">
                <img src="img2.jpg" alt="image2" class="img">
            </div>
        </div>

        <div class="container4">
            <p class="heading" id="packages">Our Packages</p>
            <div class="cards">
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
                <div class="card animate">
                    <img src="https://via.placeholder.com/300x200" alt="Travel Destination">
                    <div class="card-body">
                        <h2 class="card-title">Place</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, vel alias?
                            Distinctio, molestiae non! Soluta.</p>
                        <p class="card-price">&#8377;xx,xxx</p>
                        <a href="#" class="card-button">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="contact-sec" id="contact-sec">
            <h2 style="color: rgb(213, 213, 213);">Contact Us</h2>
            <div class="details">For more details, contact:</div>
            <div class="details">Email: &nbsp;&nbsp;<a href="mailto:contact@example.com">contact@example.com</a></div>
            <div class="details">Phone: &nbsp;&nbsp;<a href="tel:+1234567890">+1234567890</a></div>
            <div class="details">Adress: &nbsp;&nbsp;xyz street india</div>
        </div>

        <hr>

        <footer>
            <p>&copy; 2024 Sri Lanka Travel. All rights reserved.</p>
        </footer>
    </div>
</body>
<script src="site1.js"></script>

</html>