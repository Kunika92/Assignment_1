<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LARAVEL ASSIGNMENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body class="bg-img">
<!--HEADER START-->
        <header class="page-header">
         <!--HERO SECTION-->
            <div class="hero">
                <div class="hero-heading">
                    @yield('heading')
                </div>
                <div class= "nav-box">
                <!--NAVIGATION BAR-->
            	   <nav class="nav-bar">
                        @yield('nav')
            	   </nav>
                </div>
                <div class= "box2"></div>
                 <!--INTRODUCTION-->
                <div class= "intro-box">
                    <section class="intro-text container">
                    	@yield('topheading')
                    </section>
                </div>
            </div>
        </header>
<!--HEADER END-->

<!--MAIN CONTENT START-->
        <main>
            <!--SERVICES SECTION-->
            <section class="row container">
                <h1 class="sub-heading">SERVICES</h1>
                <article class="col-3 services-article">
                    @yield('column1')
                </article>

                <article class="col-3 services-article">
                    @yield('column2')
                </article>

                <article class="col-3 services-article">
                    @yield('column3')
                </article>

                <article class="col-3 services-article">
                    @yield('column4')
                </article>
            </section>

            <!--RECENT WORK SECTION-->
            <section class="container">
                <h1 class="sub-heading">RECENT WORK</h1>
                <div class="row">
                    <article class="col-4 work-article">
                        <div class="img-container">
                            @yield('imgcontainer')
                        </div>
                        @yield('imgdescription')
                    </article>

                    <article class="col-4 work-article">
                    	<div class="img-container">
                            @yield('imgcontainer')
                        </div>
                        @yield('imgdescription')
                    </article>

                    <article class="col-4 work-article">
                    	<div class="img-container">
                            @yield('imgcontainer')
                        </div>
                        @yield('imgdescription')
                    </article>
                </div>
            </section>

            <!--CLIENT SECTION-->
            <section class="row container">
                <h1 class="sub-heading">CLIENTS</h1>
                <div>
                    <article class="col-2">
                        @yield('client')
                    </article>

                    <article class="col-3">
                        @yield('client')
                    </article>

                    <article class="col-2">
                        @yield('client')
                    </article>

                    <article class="col-3">
                        @yield('client')
                    </article>

                    <article class="col-2">
                        @yield('client')
                    </article>
                </div>
            </section>
        </main>
<!--MAIN CONTENT END-->
    </body>
</html>