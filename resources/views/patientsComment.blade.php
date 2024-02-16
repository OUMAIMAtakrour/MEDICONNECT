<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&display=swap');


    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&display=swap');

    :root {
        --blue: #131661;
        --grey: #ecebee;
        --grey2: #bfbfbf;
        --pink: #d50e38;
    }

    * {
        box-sizing: border-box;
    }

    body {
        padding: 0;
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        background: var(--grey);
        overflow: hidden;
    }

    input[type="checkbox"] {
        position: absolute;
        z-index: 3;
        display: none;
    }

    input[type="checkbox"]:not(:checked)+div+div .illustration {
        transform: scale(0);
        animation: braaaains 2s 1.2s steps(54, end) forwards;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__logo {
        color: white;
    }

    input[type="checkbox"]:checked+div+div .menu_part {
        background: white;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__article h2,
    input[type="checkbox"]:checked+div+div .stage_inner__article h3,
    input[type="checkbox"]:checked+div+div .stage_inner__article p,
    input[type="checkbox"]:checked+div+div .stage_inner__articleTwo h2,
    input[type="checkbox"]:checked+div+div .stage_inner__articleTwo h3,
    input[type="checkbox"]:checked+div+div .stage_inner__articleTwo p {
        opacity: 1;
        left: 0 !important;
        transition: all 0.7s .3s cubic-bezier(0.500, 0.005, 0.075, 0.985) !important;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__list {
        opacity: 0;
        transition: all 0.3s;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__centerbox {
        transition: all 0.7s cubic-bezier(0.5, 0.005, 0.075, 0.985);
        width: 25%;
        left: 0;
        height: 100%;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__centerbox .text {
        margin-top: 300px;
        width: 93%;
        transition: all 0.7s cubic-bezier(0.5, 0.005, 0.075, 0.985);
    }

    input[type="checkbox"]:checked+div+div .stage_inner__centerbox label {
        opacity: 0;
        position: absolute;
        left: 20px;
        z-index: 3;
        top: 20px;
        width: 130px;
        bottom: auto;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__centerbox .illustration {
        transform: scale(.75);
        left: -16px;
        transition: all 0.7s cubic-bezier(0.5, 0.005, 0.075, 0.985), transform 0.1s, -webkit-transform 0.6s;
        top: 60px;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__footer {
        bottom: -100px;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__bottom {
        bottom: 0;
        transition: all 0.7s .2s cubic-bezier(0.500, 0.005, 0.075, 0.985);
    }

    input[type="checkbox"]:checked+div+div .stage_inner__bottom .link {
        opacity: 1;
        top: 0;
    }

    input[type="checkbox"]:checked+div+div h5 {
        left: -1000px;
    }

    input[type="checkbox"]:checked+div+div .stage_inner__right {
        width: 75%;
        height: 75%;
        transition: all 0.7s cubic-bezier(0.5, 0.005, 0.075, 0.985);
    }

    @keyframes braaaains {
        0% {
            background-position: 0 0;
            transform: scale(0)
        }

        10% {
            transform: scale(1);
        }

        100% {
            background-position: 14730px 0;
            transform: scale(1)
        }
    }

    .stage {
        &_bg {
            height: 75vh;
            background: var(--blue);
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }

        &_inner {
            position: absolute;
            left: 0;
            height: 580px;
            right: 0;
            box-shadow: 0px 18px 43px -18px rgba(30, 31, 38, 0.21176470588235294);
            margin: auto;
            top: 50%;
            transform: translateY(-50%);
            width: 1000px;
            background: var(--grey);
            overflow: hidden;

            &__logo {
                font-weight: 800;
                pointer-events: none;
                color: var(--pink);
                padding: 30px;
                position: relative;
                z-index: 1;
                transition: all 0s .32s;

                span {
                    position: Relative;
                    left: -4px;
                    color: var(--blue);
                }
            }

            &__list {
                position: absolute;
                opacity: 1;
                transition: all 0.3s 1.2s;
                left: 50%;
                top: 85px;

                li {
                    list-style-type: none;
                    text-transform: uppercase;
                    margin: 30px 0;
                    font-size: 12px;

                    &:nth-of-type(2) {
                        margin-bottom: 235px;
                    }
                }
            }

            &__menu {
                position: relative;
                z-index: 1;
                padding: 30px 0 30px 0;

                .menu {
                    position: relative;
                    top: 5px;
                    cursor: pointer;

                    &_part {
                        width: 20px;
                        height: 2px;
                        transition: all 0s .32s;
                        margin-bottom: 2px;
                        position: relative;
                        background: var(--pink);

                        &:nth-of-type(1) {
                            width: 14px;
                        }

                        &:nth-of-type(3) {
                            width: 12px;
                            left: 12px;
                        }
                    }
                }
            }

            h5 {
                color: white;
                position: absolute;
                left: 40px;
                top: 50%;
                text-transform: uppercase;
                z-index: 0;
                font-size: 80px;
                transform: translateY(calc(50% + 90px));
                margin: 0;
                transition: all 0.7s cubic-bezier(0.500, 0.005, 0.075, 0.985);
                line-height: 0;
            }

            &__article {
                position: absolute;
                width: 50%;
                left: 25%;
                padding: 30px 80px 30px 30px;

                h2 {
                    float: none !important;
                    padding: 20px 0 !important;
                    opacity: 0;
                    position: relative !important;
                    left: 50px !important;
                    transition: all 0.7s 0s cubic-bezier(0.500, 0.005, 0.075, 0.985) !important;
                }

                h3 {
                    float: none;
                    font-size: 30px;
                    font-weight: 800;
                    width: 100%;
                    opacity: 0;
                    margin: 0 0 10px 0;
                    transition: all 0.7s 0s cubic-bezier(0.500, 0.005, 0.075, 0.985);
                    position: relative;
                    left: 50px;
                    color: var(--pink);
                }

                p {
                    color: var(--blue);
                    opacity: 0;
                    line-height: 20px;
                    font-size: 14px !important;
                    transition: all 0.7s 0s cubic-bezier(0.500, 0.005, 0.075, 0.985);
                    position: relative;
                    left: 50px;
                }
            }

            &__articleTwo {
                position: absolute;
                width: 350px;
                left: calc(60% + 120px);
                padding: 150px 80px 30px 0px;

                h2 {
                    float: none !important;
                    padding: 20px 0 !important;
                    opacity: 0;

                    position: relative !important;
                    left: 50px !important;
                    transition: all 0.7s .1s cubic-bezier(0.500, 0.005, 0.075, 0.985) !important;
                }

                h3 {
                    float: none;
                    font-size: 14px;
                    font-weight: 800;
                    width: 100%;
                    opacity: 0;
                    margin: 0 0 10px 0;
                    transition: all 0.7s .1s cubic-bezier(0.500, 0.005, 0.075, 0.985);
                    position: relative;
                    left: 50px;
                    color: var(--blue);
                }

                p {
                    color: var(--blue);
                    opacity: 0;
                    line-height: 20px;
                    font-size: 14px !important;
                    transition: all 0.7s .1s cubic-bezier(0.500, 0.005, 0.075, 0.985);
                    position: relative;
                    left: 50px;
                }
            }

            &__centerbox {
                position: absolute;
                left: 160px;
                height: 160px;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                background: var(--pink);
                padding: 16px;
                transition: all 0.7s .3s cubic-bezier(0.5, 0.005, 0.075, 0.985);
                width: 50%;

                .arrow {
                    label {
                        position: absolute;
                        background: rgba(0, 0, 0, 0.23921568627450981);
                        right: 0;
                        bottom: 0;
                        font-size: 12px;
                        opacity: 1;
                        padding: 10px 20px;
                        z-index: 1;
                        color: white;
                        cursor: pointer;
                        transition: all .23s, opacity .0s;

                        &:hover {
                            background: rgba(0, 0, 0, 0.5);
                        }
                    }
                }

                .illustration {
                    width: 270px;
                    height: 280px;
                    position: absolute;
                    transition: all 0.7s .3s cubic-bezier(0.5, 0.005, 0.075, 0.985), transform 0.1s .7s, -webkit-transform 0.1s;
                    left: -50px;
                    top: -70px;
                    background-size: 14730px !important;
                    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/braaainsins.png);
                }

                .text {
                    float: right;
                    transition: all 0.7s .3s cubic-bezier(0.5, 0.005, 0.075, 0.985);
                    width: 50%;
                }

                .title {
                    color: white;
                    font-weight: 800;
                    font-size: 40px;
                }

                .articles {
                    color: white;
                    font-size: 12px;
                    opacity: 0.5;
                }
            }

            h2 {
                text-transform: uppercase;
                color: var(--grey2);
                font-size: 13px;
                padding: 20px;
                float: right;
                width: 220px;
                position: relative;
                left: 0;
                transition: all 0.25s;
                clear: both;
            }

            p {
                color: black;
                font-weight: 500;
                font-size: 11px;

                &.date {
                    color: var(--grey2);
                    font-size: 10px;
                }
            }

            a {
                color: var(--blue);
                text-decoration: none;
                font-weight: 800;
                font-size: 12px;
            }

            &__right {
                float: right;
                width: 25%;
                height: 100%;
                background: white;
                transition: all 0.7s .3s cubic-bezier(0.500, 0.005, 0.075, 0.985);
            }

            &__right h2 {
                width: 245px;
            }

            &__right .link {
                clear: both;
                opacity: 1;
                padding: 0px 30px 20px 20px;
                width: 220px;
                transition: all 0.25s;
                width: 245px;
                position: relative;
                left: 0;
                float: right;
            }

            &__right .fade {
                transition: all .25s;
            }

            &__right input {
                background: var(--pink);
                border: none;
                margin: 0;
                width: 100%;
                outline: none;
                float: right;
                padding: 30px;
                max-width: 310px;
                transition: all 0s .0s cubic-bezier(0.500, 0.005, 0.075, 0.985) !important;
                color: white;
                font-weight: 700;
                min-width: 250px;
                font-family: 'Montserrat', sans-serif;
            }

            &__right input::-webkit-input-placeholder {
                color: white;
                font-weight: 700;
                font-family: 'Montserrat', sans-serif;
            }

            &__bottom {
                position: absolute;
                padding: 30px;
                bottom: -200px;
                width: 75%;
                right: 0;
                overflow: hidden;
                background: var(--grey);
                transition: all 0.7s .1s cubic-bezier(0.500, 0.005, 0.075, 0.985);
            }

            &__bottom .link {
                width: 33.33%;
                position: relative;
                float: left;
                opacity: 0;
                transition: all 1s .2s cubic-bezier(0.500, 0.005, 0.075, 0.985);
                top: 220px;
            }

            &__footer {
                position: absolute;
                bottom: 0;
                padding: 30px;
                transition: all .3s;
            }

            &__footer .f {
                float: right;
                position: relative;
                left: 40px;
                top: -8px;
            }

            &__footer .f:after {
                content: 'Ask';
                display: block;
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                position: absolute;
                color: var(--blue);
                font-size: 12px;
                right: 9px;
                top: 10px;
            }

            &__footer input {
                padding: 8px;
            }

            &__footer i {
                cursor: pointer;
                margin: 0 16px 0 0;
                color: rgba(0, 0, 0, 0.75);
                transition: all .3s;
            }

            &__footer i:hover {
                color: var(--pink);
            }
        }
    }
</style>

<body>
    <!-- <section>
        <div class="min-h-screen bg-gray-100 flex items-center justify-center">
            <div class="px-12">
                <div class="bg-white columns-12 rounded-2xl  shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center font-bold text-white">LOGO</div>
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">Product Review</h1>
                        <div class="flex mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <p class="mt-4 text-md text-gray-600">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happines.</p>
                        <div class="flex justify-between items-center">
                            <div class="mt-4 flex items-center space-x-4 py-6">
                                <div class="">
                                    <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1036&q=80" alt="" />
                                </div>
                                <div class="text-sm font-semibold">John Lucas • <span class="font-normal"> 5 minutes ago</span></div>
                            </div>
                            <div class="p-6 bg-yellow-400 rounded-full h-4 w-4 flex items-center justify-center text-2xl text-white mt-4 shadow-lg cursor-pointer">+</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="stage">
        <input id="trigger" type="checkbox">
        <div class="stage_bg"></div>
        <div class="stage_inner">
            <div class="stage_inner__logo">
                THE <span>HEALTH</span>
            </div>
            <div class="stage_inner__menu">
                <div class="menu">
                    <!-- Loop through menu items -->
                    <!-- Assuming this loop generates three menu_part divs -->
                    <!-- Replace this comment with actual menu items -->
                    <div class="menu_part"></div>
                    <div class="menu_part"></div>
                    <div class="menu_part"></div>
                </div>
            </div>
            <div class="stage_inner__footer">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <div class="f">
                    <input placeholder="Your question">
                </div>
            </div>
            <h5>Topics</h5>
            <div class="stage_inner__articleTwo">
                <h3>Should You Be Taking Fish Oil? What a Cardiologist Tells His Patients</h3>
                <p>The story of fish oil and heart health started with the observation that several populations ...</p>
                <p class="auth">Delia Freeman</p>
                <p class="date">21 Feb 2019</p>
            </div>
            <div class="stage_inner__article">
                <h2 class="fade">Article of the day</h2>
                <h3>How Sugar Really Affects Your Cholesterol</h3>
                <p>If you're like most people, you probably think it's high-cholesterol foods like eggs or shrimp that are the worst for your cholesterol levels. But that's not really the case.</p>
                <p class="auth">Delia Freeman</p>
                <p class="date">21 Feb 2019</p>
            </div>
            <div class="stage_inner__bottom">
                <!-- Loop through links -->
                <!-- Assuming this loop generates three link divs -->
                <!-- Replace this comment with actual link items -->
                <div class="link fade">
                    <a href="#">These are the best health books that came out in 2018</a>
                    <p>Sam Knight</p>
                    <p class="date">28.12.2018</p>
                </div>
                <div class="link fade">
                    <a href="#">These are the best health books that came out in 2018</a>
                    <p>Sam Knight</p>
                    <p class="date">28.12.2018</p>
                </div>
                <div class="link fade">
                    <a href="#">These are the best health books that came out in 2018</a>
                    <p>Sam Knight</p>
                    <p class="date">28.12.2018</p>
                </div>
            </div>
            <ul class="stage_inner__list">
                <li>Nutrition &amp; healthy food</li>
                <li>Mind and mood</li>
                <li>Fitness and sport</li>
                <li>Beauty and skincare</li>
            </ul>
            <div class="stage_inner__centerbox">
                <div class="illustration"></div>
                <div class="arrow">
                    <label for="trigger"><i class="fas fa-arrow-right"></i></label>
                </div>
                <div class="text">
                    <div class="title">Heart Health</div>
                    <div class="articles">78 Articles</div>
                </div>
            </div>
            <div class="stage_inner__right">
                <div class="input">
                    <input placeholder="Symptom Checker">
                </div>
                <h2 class="fade">Popular</h2>
                <!-- Loop through popular links -->
                <!-- Assuming this loop generates three popular link divs -->
                <!-- Replace this comment with actual popular link items -->
                <div class="link fade">
                    <a href="#">These are the best health books that came out in 2018</a>
                    <p>Sam Knight</p>
                    <p class="date">28.12.2018</p>
                </div>
                <div class="link fade">
                    <a href="#">These are the best health books that came out in 2018</a>
                    <p>Sam Knight</p>
                    <p class="date">28.12.2018</p>
                </div>
                <div class="link fade">
                    <a href="#">These are the best health books that came out in 2018</a>
                    <p>Sam Knight</p>
                    <p class="date">28.12.2018</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>