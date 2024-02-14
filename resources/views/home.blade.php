<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Your Website Name</title>
</head>

<body>
    <div class="hero-section">
        <div class="container">
            <h1>Headline</h1>
            <p>Subheading explaining the value proposition.</p>
            <a href="#" class="btn btn-primary">Find a Doctor</a>
            <a href="#" class="btn btn-secondary">Book Appointment</a>
        </div>
    </div>

    <div class="featured-services">
        <div class="service">
            <h3>Appointment Booking</h3>
            <p>Schedule appointments online in seconds, 24/7.</p>
        </div>
        <div class="service">
            <h3>Doctor Profiles</h3>
            <p>Find experienced doctors, view their specialties and read patient reviews.</p>
        </div>
        <div class="service">
            <h3>Doctor Ratings & Reviews</h3>
            <p>Make informed decisions based on genuine patient feedback.</p>
        </div>
    </div>

    <section class="search-bar">
    </section>
    <section class="testimonials">
    </section>
    <section class="blog-articles">
    </section>
    <section class="call-to-action">
    </section>

    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <title>Your Website Name</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    body {
        overflow-x: hidden;
    }

    header {
        background-image: url(" {{asset('assets/img/Portrait-of-cheerful-doctors.jpg') }}");
        background-position: center;
        background-size: cover;
        height: 100vh;
    }

    .overlay {
        width: 100vw;
        height: 100vh;
        background: rgb(0, 0, 0);
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.5169526428735557) 45%, rgba(255, 255, 255, 0) 66%);

    }

    nav ul,
    li,
    a {
        color: white;
        list-style: none;

    }

    nav {
        height: 10vh;
        color: white;
        text-align: center;
    }

    .search {
        border-radius: 20px;
    }

    .navbar ul {
        border-radius: 20px;
        border-style: solid;
        border-color: white;
        color: white;
        width: 80vw;

    }


    li:hover {
        background-color: rgba(255, 255, 255, 0.427);
        border-radius: 30px;

    }

    .health {
        margin-top: 20%;
    }

    /* === removing default button style ===*/
    .button {
        margin: 0;
        height: auto;
        background: transparent;
        padding: 0;
        border: none;
        cursor: pointer;
    }

    /* button styling */
    .button {
        --border-right: 6px;
        --text-stroke-color: rgba(255, 255, 255, 0.6);
        --animation-color: #37FF8B;
        --fs-size: 2em;
        letter-spacing: 3px;
        text-decoration: none;
        font-size: var(--fs-size);
        font-family: "Arial";
        position: relative;
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px var(--text-stroke-color);
    }

    /* this is the text, when you hover on button */
    .hover-text {
        position: absolute;
        box-sizing: border-box;
        content: attr(data-text);
        color: var(--animation-color);
        width: 0%;
        inset: 0;
        border-right: var(--border-right) solid var(--animation-color);
        overflow: hidden;
        transition: 0.5s;
        -webkit-text-stroke: 1px var(--animation-color);
    }

    /* hover */
    .button:hover .hover-text {
        width: 100%;
        filter: drop-shadow(0 0 23px var(--animation-color))
    }
</style>

<body>


    <header>
        <div class="overlay">
            <nav class="navbar navbar-expand-lg mb-9">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img class="navbrand" src="../pics/melody-high-resolution-logo-white-transparent.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse col-12" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-3">
                            <li class="nav-item mx-4  text-center my-3 text-white">MEDICONNECT</li>
                            <li class="nav-item mx-4 col-2 text-center my-1">
                                <a class="nav-link active " aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item mx-3 text-center my-1 col-2">
                                <a class="nav-link" href="#">DOCTORS</a>
                            </li>
                            <!-- <li class="nav-item mx-3 text-center my-1 col-2">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li> -->
                            <li class="nav-item mx-3 text-center my-1 col-2">
                                <a class="nav-link" href="#">APPOINTMENTS</a>
                            </li>

                            <!-- 
                            <li>

                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                            </li> -->
                            <li>

                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>
                            </li>
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>



                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="mx-3 text-white col-7">
                <h1 class="text-white mx-3 align-middle health">YOUR HEALTH <br> IS OUR CONCERN</h1>
                <p class="col-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <a href="/register"> <button class="button mx-5 my-3" data-text="Awesome">
                    <span class="actual-text">&nbsp;REGISTER&nbsp;</span>
                    <span aria-hidden="true" class="hover-text">&nbsp;REGISTER&nbsp;</span>
                </button></a>

        </div>
    </header>

    <!-- <header>
        <div class="overlay">
            <nav class="align-middle">
                <ul class="d-flex flex-row justify-content-evenly ">
                    <li> <a href="#">HOME</a></li>
                    <li> <a href="#">DOCTORS</a></li>
                    <li> <a href="#">ABOUT US</a></li>
                </ul>
            </nav>

        </div>
    </header> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>