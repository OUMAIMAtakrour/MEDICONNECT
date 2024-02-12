<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    DOCTOR DASHBOARD
</body>
</html><!-- <!DOCTYPE html>
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
    <style>
        /* Basic styling for layout and responsiveness */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #ddd;
            overflow-x: hidden;
        }

        .sidebar {
            height: 100vh;
            background-color: #BAD8D5;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {

            margin: 0;
            padding: 0;
            justify-content: space-between;
            align-items: center;
            /* width: 100vw; */
            box-shadow: 5px 5px black;
            background-color: #f0f0f0;
            /* Added background color */
        }

        .boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .box {
            width: 200px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ddd;
            text-align: center;
            border-radius: 10px;
            /* Added rounded border */
        }

        .box:nth-child(1) {
            background-color: white;
        }

        .box:nth-child(2) {
            background-color: #009240;
        }

        .box:nth-child(3) {
            background-color: #8AACEE;
        }

        .box:nth-child(4) {
            background-color: #009240;
        }

        ul {
            list-style: none;
            /* Removed list style */
            padding: 0;
            margin: 0;
        }

        ul li a {
            text-decoration: none;
            /* Removed link decoration */
            color: black;
            /* Set text color to black */
        }

        li {
            margin-bottom: 10px;
        }

        .logo {
            /* Add styling for your logo here */
        }
    </style>
</head>

<body>
    <section class="d-flex col-12">
        <div class="sidebar col-2">
            <div class="logo my-3"></div>
            <ul class="mx-2">
                <li><a href="#">LOGO</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Medical Records</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header bg-ligh d-flex">
                <h1>DASHBOARD</h1>
                <div>
                    <input type="text" placeholder="Search">
                    <img src="profile.png" alt="Profile Image" style="border-radius: 100%;">
                </div>
            </div>
            <div class="boxes" style="height: 15vh;">
                <div class="box">Box 1</div>
                <div class="box">Box 2</div>
                <div class="box">Box 3</div>
                <div class="box">Box 4</div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>