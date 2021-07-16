<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ingenioushubs.com/Quarantine-html/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:56:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quarantine - Medical, Doctor and Hospital Theme</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/Favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body data-spy="scroll" data-target="#nav-part" data-offset="90">

    <!--=============
    Preloader Part HTML Start
    ===================-->
    <div id="preloader">
        <div id="loading-center">
            <img src="{{ asset('assets/images/preloader.gif') }}" alt="">
        </div>
    </div>
    <!--=============
    Preloader Part HTML End
    ===================-->
    <!-- ===================
       back to top start 
     =================== -->
    <a href="#" id="back-top-btn">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ===================
       back to top End 
     =================== -->

    <!--===================
    Navbar Part HTML Start
    =====================-->
    <!-- Image and text -->
    <div class="fluid-container">
        <div class="row pb-1">
            <div class="col-lg-12">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.svg') }}" height="40px" width="150px" class="d-inline-block align-top" alt="">

                    </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="fluid-container">
        <section class="banner-section">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/test2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/test4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/test6.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
                </div>
                <div class="carousel-caption pc-view d-sm-block d-md-block ">

                    <div class="header" style="margin-top: 200px;color:#006cff;">
                        <h1 style="font-size: 100px;">Stay Home Stay Safe </h1>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="search-sec">
            <div class="container">
                <form type="get" action="{{ url('/search')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0 wrap">
                                    <select class="form-control search-slt " id="exampleFormControlSelect1">
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" name="search" id="search" class="form-control search-slt" placeholder="Enter City">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0 wrap">
                                    <select class="form-control search-slt " name="type" id="type">
                                        <option value="Oxygen">Oxygen</option>
                                        <option value="Ambulance">Ambulance</option>
                                        <option value="Hospital">Hospital</option>
                                        <option value="Food">Food</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">

                                    <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <!--=========================
        Banner Part HTML Start
        =======================-->
    <!--<section class="banner-area" id="banner">
        <div class="slider">
            <div class=" slide animated" data-animation-in="zoomInImage">
                <div class="container">
                    <div class="row full-screen">
                        <div class="col-md-6 col-lg-5 banner-l">
                            <div class="slide__content cont-1">
                                <div class="banner_text">
                                    <h2>Prevent</h2>
                                    <h1 class="title">nCovid - 19<span>CoronaVirus</span>
                                    </h1>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    </p>
                                    <form type="get" action="{{ url('/search')}}">
                                        <div id="letter5">

                                            <div class="row">
                                                <div class="col-12 col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="search" id="search" class="field-input input-lg" placeholder="Search Your City..">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <div class="gender-select wrap">
                                                            <select name="type" id="type">
                                                                <option value="Oxygen">Oxygen</option>
                                                                <option value="Ambulance">Ambulance</option>
                                                                <option value="Hospital">Hospital</option>
                                                                <option value="Food">Food</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                        <div class="btn-bar">
                                            <input type="submit" value="Search">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 d-md-block d-none">
                            <div class="slide__img">
                                <img src="{{ asset('assets/images/banner-1.svg') }}" alt="" class="img-fluid img-1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slide animated" data-animation-in="zoomInImage">

                <div class="container">
                    <div class="row full-screen">
                        <div class="col-md-6 col-lg-6 banner-l">
                            <div class="slide__content cont-2">
                                <div class="banner_text">
                                    <h2>Quarantine</h2>
                                    <h1 class="title">Stay Home,<span>Stay Safe & Happy</span>
                                    </h1>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    </p>
                                    <div class="btn-bar">
                                        <a href="#" class="">How to Prevent?</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 d-md-block d-none">
                            <div class="slide__img">
                                <img src="{{ asset('assets/images/banner-2.png') }}" alt="" class="img-fluid cont-1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--<div class="fluid-container">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner mx-vh-100">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgWFhYYGBgaHBkaGBocGBwcGBoaGhoZGhgaGBocIy4lHCErHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHzQrJCs0NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQxNP/AABEIALEBHQMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAwECBAUGB//EADoQAAEDAgMECAUEAgEFAQAAAAEAAhEDIQQxQRJRYXEFIlKBkaHR8BMykrHBBhRC4WLxFSNTssLiFv/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACsRAAICAQMEAgEDBQEAAAAAAAABAhEDEiFBBBMxUSJhFAUykSNCcYGhFf/aAAwDAQACEQMRAD8A+TseQpN10cRhHDNnG2nv8rCRs5haJo1ljlF0y9GILTrlzUMpSYUtM5K7S45WOvFOhqnQxtEtuTE8R9lLmd6qDPzZ8c/FVe0g2KmmabJbIHYcHQ++KzPokLdSrR8x99y0PaHCzxyMeR1RdeQ7cZK15OS155qWs1WitRM6dxVGkixCsxcXF7l3w6DHAplPDTeQBqSlTyUsBmRP5RRaau2hrxIIGnmsL2rosZORM8rrO+h90kE02ZqZuCtj6JgO0KQGQVvp4hoaWOyN2ncd3IgDl4pvYMcU7UjIasCNVQ71NRku8U1lOW98JipvYdhhII4W+6RUpRK00WGQNQVeo0yZGYtyhTybONxMbwC0Gb5ZXSWpr27koKkYPyOLZCQ/JPo7lV7EA1aM0KWqzmqaIumjKtyz2JcJtQpcJjfkq8KpCY4KjggllWNlONhxVqVM6CUPZGaAraxOzK6OFbsQcoafEysTDcaJ760tPgPX8pSVmmNqLsVialuclZ2tnO25Nc2yoXwlQm7dsfSxI/y8VatUB+UjiFkLCFYpaSu5KqYEH+lZrt89xUMeRvWhotafKEBFWLBk5nvTSw6zKr8NMa+bFBaXsKbJsUPoRldPDFaowQlZro2MzXxNilxOq0jDyLZ7pVW0SCnaIcJc+BRYVqwuFnPuTLaqdqWwMwi7NIwinYjEU4mNLJLHRc9/qF0mYfaE+SvVwrQ0HxSsrtN/JHMe2YgFKLCtTWlpLbwtFPDg+7p2Z6GxGFw21c+f4U1RsOIEFuY71qxD9iw1Ejgk4ZgfDctB/fndC9l6UvivJfAO64dGXcE3FEEmJiZnVx3clbGUdgtYPmF3eFgppUgW5qdvJvGLScDmvp3nRKq07zoVrxLCDATKTAWOmc58k7pWc7x3Jo57DBlMYJlXNEjl+FejCpkKLTpmGq1VohOxISW2CaMJqpFXlXY20pcSnPyhMlb2xRVQFYoTJHU62zlnI/pKc6UtXSHbexdrYBJ4fkqtNpPvJXebHujwzVmMzGVh4lKylG2Q5s5f0qmi3ertbItos1QXUtltUvBdpnNQ1kclRrk1pTJTstUZBzB4hNoPAnilvqTmZ+6oCQgu0naNNip+GktdK3bUtGUxeJ80nsaxqRG3aN3D8qhuq1Coouv95Sopy3odSZfNamU5t3BZ3G9vfehr3Z3Klo2g0nTL12QUyg22gVidqxzTG0iISstQ+VrwKZULSPZVXPJJGhyTSAbQpq0y2LdwVJg4uvothsLtOAdY7ylV/nNoAtHDJPZWkbMwdFeqza628AH3vU273NNEZRqJhqU9Ynj6KuHfs81ubROyRdZ24YTn+VSkZSxSTTRq2jUaHkXFiq0KTgSAfe5Wwzwwn7Hzha3NBgtyOZ1Ut1sdEYpq355ObUwxMnXclMbsuh9gVopDadBzEynYjDNJHLvKd1szHRfyic7EgiwuBlxCU5mUJ+JYW20GXJRPVjw/KpPYxlG5OzPVoyslVi6DpiDksrmXjeqTMMkURSwx2C/cYKUQu/icNsUtnfB8lxHMRGWorNh7dL6FBk5KhYtuGZcyDAF/ws1Q3kKr3OVx2szwrBqu1kpjoTJSKtEyeXv3vTqbNqeJvyCgMnqjPXcE+nLWEZ8iDZRI3xx338CGP2ZG8Ge/LwWKpmmvqFISSJnPhEwrNQ16ZY5WVUQiEBW+GYlS0Roih0SGZLSykY097lShUAkOEg+XFMcyIEg7j9uSGbQSSsrVaQLhI5LsM2QBtDaaQAOsLGL+crDVw1tpmXMH7clKZpPHyijHZLVYi3srCH6QnUzu87IcRQnWxrNXdHEn0XRwr9oCRcZewuVRd1t4W5hAyAnQjdqP9qJRO3Dk5sU55Y+41uPRbmbLnAbQAiDOfcNVhxb7g6/dWwxaTLiQRkENWrHGdSa4s1OwoBkT3Hd5KrMQGwPqGkeCs/FAWBz++4qow+22QRI0t3mNVO9fI1dav6fkfiGAhzpzA2f6WbAQSY+YRIWukzZGzYgg7hHO8a+aw0BsvIyPOERdpoeS002v8j62FLi4xcaow7C2zvlmMwRNtCBotmGp1CTPykGE97Glsm3LKZ0jJQ5PwarEn8vDODiG7LwZj3/a10sU4ujZDpsTGQ+0Roo6RwxiYyWnAUnhhG005ZFp8IJWjacbOWEWsrj/ALOZjGaD2Csz6nVjculjKUaQdeRXN2eacXsZZYNS2CCQLk+CRk9vAiV0sM09kd6z1GdYmNypSM5Y2qZ2OmfkEbh9l54NXdxry+m08vysAZAyWeLZHR1q1zTXpGTFvDeq06yeawkJ9dhlVpsXQtkeXO3KgZTsquYnuEBVLoUuRXb2FU6ZBBdkTHE71OJqz9lR75VCEVfkTelUhLlUtTXNVCE2YNBsqYTIRCZekqCU34kquypDUArGWOSa12mX5571nDUwSnRaYxwIFjbcppYoixynRUVdhFIepp2jVXjMAX1yPNZqjJvmrAKWoSoG78kUXkarWzFDvWZwVQxDSYRlKPg3scHCR4Krnb/9cQsrSQn03mb3S0mqyWJqOIMTyW/AYxzTbO+VvZWauwEpbeqbEEcJ/ICHFNBHJKErR6XD4pjzsyA45RIHKDvvZKxWAghxPVO657gsGDcCIgTofRdZ+KDWbBgzMkm8cCL8Fzyjpl8T0454zh8jLVxDWtGySY/iT5q1GoyoLuO0ZsJ3G4XLxLgTZIY8tIIJEZLTtpo5X1bUt1aOpWrkdR5Ovdpfgt2BwzXMlr4dwtuXArVHO6ziSTmdVo6PrvBhsj7d6JQ+OwQ6hOdtWuPZ3amFlsuN7iTGYzBWL/jTsksG1ff6ZKzsfsNIkEnfYep8kjDdMFhtyy6scpvF/HNYqEvKOyWfE2kzG+RYgghDDNvNegq021Wg7ADjqJiO9cx+EI5DXS/EJqSarkl4WnqTtENqbTA2Dn5IexplsxAtuKe+jsMJJiLNP8TPGVhpsM8AJO6PZCI1TYZFK0mjBXErM4wVqeZM6TYarLWP9LTVsefKFNsqXqM1NKmSU11KM1OpWPRJqzNsqHBOcxR8OOKuzJwM5CrsJziqkJOTI0of8JBpLoNoqww6eo17RzRSU/CXSGGR+2T1i7LOcGKwpreMOrDDp6h9lmAU1b4S3toJgoI1jWJnNFJSKK6Qw6n9sjWHZZzfgo+EuoMMqV6YY0uOQRrQPE0rZzvhpb6jWmC4A7pusGK6Vc6Q0bIyzk9x7wufz9z9lLmc8pLg7jukaYmSSeAse9YanSTjk0AeJWEoiVDmyXKUjUzpOo27XRxAEqzek60k7cyIvBHgVmZTlWFJQ5MtKRcY6p2vIKw6QfM25RZK+EqbF801NkuLN1HpLR47x6Ldh+kGGwMc7ea4JAUg+8/JUpsSk4s9MxwfcHa81f4B3LzOHruYQ5pg748j6L0HRXSvxXBjwATrOfd6KtbN8c4ydPydPBYtzLZjcd27mu1Rex5kRtAXNgbWvfddct2GhDAQdfeWSylFS3R6WLNLHtLdD+mLsERIzkET3b1zqg2aYz6wkkg+cBdyg8RtOMmSYtPvJJx7GEWvFxzOixTlHajtlonve9HmHls2IHPPvWctJK244gWi/qkMoPziBv8Aea1Ujzp4/lSH0hsCdSkik5xn/SvTBmSffL+k4km144CPNJPctxuKXBnfSDdVlqvC1vpHl90oUb3t33WiZzzi3skZQCdEFhWswMgEkuTsxcKO+KauKS0BqNlZWdyghPwlPwk4NVw1LUWoIz/CV20uCeArgI1DUEZvgq7aK0tCYxinWUoIQyirjDrS1ie1oUubKUEYhhlwv1W/YpR1esYub5Gdka/2vVkryvTvQD69YPaZaRDpIAbs5AWm/enCW+5z9TF6Goq2zx1DDlwm0cbCee+2qvTaz/LanWw1t9jpkclq6SwHwagY5zT8pIbLiAdBbOIKpUc0gMDGtO0JeXG3BxyH/wAwt7s8bTTpgcMxwAYetFwZm0k6Wtv4c1BwRmAJN5aLkRxGfNSwlvySD/KCC0xcFrpN89TZdChiQcw4OtsAfLHWueOXmokzfHC2ZMPhSYgj0P8ArVbsPgJ/iSYNhawFnX0nPd5DodHYUv0bDWtzP+JgZ65wNZ4rus6Pf87BsSIAbIIGnP5fFc08tHpY+mjVs8W/Am5AMb9nTWBNwPVZH4VxJGZgk8xmJyOXJe2xXRRaNghoJkhxtkIgEb4nfYjVcCvDHdYWl4OyTvbOuWUclcMlmWbAkrRyBgZbNoAkxnlcQY8uCTWDLbO65vv1tM5SL81vxOIJJDGlok7BJgwCSNqLHS29c97RBcItfrHrOOsLdM8+UaIbTa4mOqP8jbUxIzOWirh3mnUaZHVOuW68TZOrPa4E7DWG0bM23y2fONEhjHPIY1pLiYG8kmI3KjNedvJ9Fw7NtoNiM5Bt4pwpxYJPQPR/waLWkmcyJBAJuQOC6jqYsYWDlue3FNxTkqZmo9HvdfIJv7BozdJ5j/a6nxmlsADLXeuVVw73bXWb3GR3rKeWR1YMON7tnPxOEpTlJGQXPxNzFrbshzOfdmuu7BBubp4wfSIWd2GYBm3wM+SyjJ3Z3SUKpHFdTcTA8de7crsov0HeuoKbMs+4prHxkw+AC21nI8e+yOSOjXu3++KaOhjqPE+krrtrkaeZKW/EvOQ8Afyju+iX01q2jk1OigM48PVZXYVo3eS6dcVD/E+S51ShUnTxWkZ+zmy4GvCOuHKZXhBin9t/1O9UDE1O2/6j6rft/ZwLrPo94FaV4MYp/bf9bvVSMQ/tv+t3ql2yvzfo95KsHrwQxD+2/wCp3qpFd/bf9R9Udq+R/m/R9AYVoavnQrP7bvqPqrCq/tv+o+qXYfspdb9H0ljU4MC+aNqP7bvqPqrte/tu+o+qT6Z+yl1ifB9CehjV4Njn9o+J9VqZtn+R8SjsNcmsc98HqMZ0LRqElzG7REbQEOyjMZ23rF/+cogNaGuGyLHadxuQbTfdoBlZctlN+8pzKTt/n/SSg48j0Qk7aN7v00wU3tY57Q68ANdOzcANIE3A1BOU5RyKn6brU2F5gsEkg9UgW6xbkMzYH+I5LexjtT5rTSJ3qZRfsqPTRu1sHQvRVaZaHAgTcOaYIuJI1uOMFfSf0u+m1kOADgI6wAIGto5eC8XhXnf77lj/AFP0o+mxmy4iS4E8IC5JRkpWi8+HVCm9jvdPYM1ah+EC1sOE3Ddk5i1jyXi8R+nq739VpzglwLQNM3Z6/LOVpXr6tYxEm1h3Lm1nOzkoxp+TVYPhpb2OTQ/RMmatWRaQ1oJsLddwNhOUaDu6A/R+HuNkwZEbWm6c++ZS31H9p3ifVZKmIq9t/wBTvVdOmb5MH00I8Wdan+ksOC3/AKY6oIFyRB7V+tzK3M6Kp0/kaxvJoH2XlH163bf9Z9Uh+Krf9x/1u9UuzN8iWiDtR/4ez+EFBpheDqYut23/AFuWd2Mrf9x/1u9VS6eXsUupguGfQHODbysj8X/lHcF4R+KqnN7/AK3eqS6vU7b/AKj6pS6SUvLFHr8cP7We6fiZ/ke8D8BIOJj+Xl6leJNd/bf9R9VQ139t31FL8Nrkp/qkOIv+T3AxQ7Tj3+gVnYoD3J814P8Acv7b/qPqoOJf23/U71R+K/Yf+rGv2v8Ak92ccqPx/uV4U4h/bd9R9Us139t31FUuk+yJfqkfT/k9nWxnEeKyOxQ7Xl/S8t8Z/bd9RUGo7tHxKpdPXJi/1JPgqFMKqsF1nkokBWVQpDkirLqwCXtKwKY0xjVdqUHK4emikx7SmNn2Cswfy70xruCClI2U3rVSf7n+1z2VDx8QnMdz+lpSaNoZKOox59hObU9+wuYypGo+gjusQnU6vL6j5XWbidMMp0W1FZlWDmufUxbGgy4cdqZ+y5dfptoJ2RPHT3mspI3fURj5Z7ShX5e+S4f6zryynwc7/wAf6Xn39PVTkQPFZMRjnvs520M+9ZqDu2Rl6yEoaY3Z9PZidoTIVXulfPKXTdZggOByzE5ZJtP9S1gbwRuuPMJRg0arr8Vb2e0rFYalRcml+pGOs8FuW880796xws4HvMf+WfBbRXsUuohL9rNT6iTUqHXzCzvre4P/ALEpL38OVmj8LVROaWZlqtTl4rM9x9/6UvefZ/pIc/3K0SOWU7BxPuyW8qC/l75Jbn8SgzciSqFBKpKCLJKqQguVZSFYEKCEEqCglshQplQgkJQoCkIAlWCrKoawCG6GOBUwsrq5VHPJ1UakOzYXgao/cN3+SwoRqYrNxxTRvUfvB2SsSEamGpm4dIf4+aazpSP4n6v6XMQEtTKUmjq/8sez5+gCz1ukHutkNwyWRCTbZWqT5Jc8nMkoBUIU0TZYORtKqEUO2X21UuUIQFsJUtcRcGFCExGlmPeBAPl7jNX/AOTfw8/VY1Up2w1P2bj0gTm0ear++/xCxoT1MWpmz95wUfu+B8VkQjUxWzX+5HFWFRp1WJCephZu2goKxtcRkVcVihSQWPQUsVQVeVadiBRKCoQBT4ig1UtCz1MCXOJzUIQpAEIQgAQhCABCEIAEIQgCQVKqgIHZZChSgoEIQlQAhQolMTZZQoQgVkkqEIQIEIQgAQhCABCEIAEIQgAUglQhAFxUKn4iWhPUwBCEJACEIQAIQhAAhCEACEIQAIQhAAhCEASFKEIKQIQhAypQhCCAQhCABCEIAEIQgAQhCABCEIAEIQgAQhCABCEIA//Z" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="data:image/jpeg;base64,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" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgWFhYYGBgaHBkaGBocGBwcGBoaGhoZGhgaGBocIy4lHCErHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHzQrJCs0NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQxNP/AABEIALEBHQMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAwECBAUGB//EADoQAAEDAgMECAUEAgEFAQAAAAEAAhEDIQQxQRJRYXEFIlKBkaHR8BMykrHBBhRC4WLxFSNTssLiFv/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACsRAAICAQMEAgEDBQEAAAAAAAABAhEDEiFBBBMxUSJhFAUykSNCcYGhFf/aAAwDAQACEQMRAD8A+TseQpN10cRhHDNnG2nv8rCRs5haJo1ljlF0y9GILTrlzUMpSYUtM5K7S45WOvFOhqnQxtEtuTE8R9lLmd6qDPzZ8c/FVe0g2KmmabJbIHYcHQ++KzPokLdSrR8x99y0PaHCzxyMeR1RdeQ7cZK15OS155qWs1WitRM6dxVGkixCsxcXF7l3w6DHAplPDTeQBqSlTyUsBmRP5RRaau2hrxIIGnmsL2rosZORM8rrO+h90kE02ZqZuCtj6JgO0KQGQVvp4hoaWOyN2ncd3IgDl4pvYMcU7UjIasCNVQ71NRku8U1lOW98JipvYdhhII4W+6RUpRK00WGQNQVeo0yZGYtyhTybONxMbwC0Gb5ZXSWpr27koKkYPyOLZCQ/JPo7lV7EA1aM0KWqzmqaIumjKtyz2JcJtQpcJjfkq8KpCY4KjggllWNlONhxVqVM6CUPZGaAraxOzK6OFbsQcoafEysTDcaJ760tPgPX8pSVmmNqLsVialuclZ2tnO25Nc2yoXwlQm7dsfSxI/y8VatUB+UjiFkLCFYpaSu5KqYEH+lZrt89xUMeRvWhotafKEBFWLBk5nvTSw6zKr8NMa+bFBaXsKbJsUPoRldPDFaowQlZro2MzXxNilxOq0jDyLZ7pVW0SCnaIcJc+BRYVqwuFnPuTLaqdqWwMwi7NIwinYjEU4mNLJLHRc9/qF0mYfaE+SvVwrQ0HxSsrtN/JHMe2YgFKLCtTWlpLbwtFPDg+7p2Z6GxGFw21c+f4U1RsOIEFuY71qxD9iw1Ejgk4ZgfDctB/fndC9l6UvivJfAO64dGXcE3FEEmJiZnVx3clbGUdgtYPmF3eFgppUgW5qdvJvGLScDmvp3nRKq07zoVrxLCDATKTAWOmc58k7pWc7x3Jo57DBlMYJlXNEjl+FejCpkKLTpmGq1VohOxISW2CaMJqpFXlXY20pcSnPyhMlb2xRVQFYoTJHU62zlnI/pKc6UtXSHbexdrYBJ4fkqtNpPvJXebHujwzVmMzGVh4lKylG2Q5s5f0qmi3ertbItos1QXUtltUvBdpnNQ1kclRrk1pTJTstUZBzB4hNoPAnilvqTmZ+6oCQgu0naNNip+GktdK3bUtGUxeJ80nsaxqRG3aN3D8qhuq1Coouv95Sopy3odSZfNamU5t3BZ3G9vfehr3Z3Klo2g0nTL12QUyg22gVidqxzTG0iISstQ+VrwKZULSPZVXPJJGhyTSAbQpq0y2LdwVJg4uvothsLtOAdY7ylV/nNoAtHDJPZWkbMwdFeqza628AH3vU273NNEZRqJhqU9Ynj6KuHfs81ubROyRdZ24YTn+VSkZSxSTTRq2jUaHkXFiq0KTgSAfe5Wwzwwn7Hzha3NBgtyOZ1Ut1sdEYpq355ObUwxMnXclMbsuh9gVopDadBzEynYjDNJHLvKd1szHRfyic7EgiwuBlxCU5mUJ+JYW20GXJRPVjw/KpPYxlG5OzPVoyslVi6DpiDksrmXjeqTMMkURSwx2C/cYKUQu/icNsUtnfB8lxHMRGWorNh7dL6FBk5KhYtuGZcyDAF/ws1Q3kKr3OVx2szwrBqu1kpjoTJSKtEyeXv3vTqbNqeJvyCgMnqjPXcE+nLWEZ8iDZRI3xx338CGP2ZG8Ge/LwWKpmmvqFISSJnPhEwrNQ16ZY5WVUQiEBW+GYlS0Roih0SGZLSykY097lShUAkOEg+XFMcyIEg7j9uSGbQSSsrVaQLhI5LsM2QBtDaaQAOsLGL+crDVw1tpmXMH7clKZpPHyijHZLVYi3srCH6QnUzu87IcRQnWxrNXdHEn0XRwr9oCRcZewuVRd1t4W5hAyAnQjdqP9qJRO3Dk5sU55Y+41uPRbmbLnAbQAiDOfcNVhxb7g6/dWwxaTLiQRkENWrHGdSa4s1OwoBkT3Hd5KrMQGwPqGkeCs/FAWBz++4qow+22QRI0t3mNVO9fI1dav6fkfiGAhzpzA2f6WbAQSY+YRIWukzZGzYgg7hHO8a+aw0BsvIyPOERdpoeS002v8j62FLi4xcaow7C2zvlmMwRNtCBotmGp1CTPykGE97Glsm3LKZ0jJQ5PwarEn8vDODiG7LwZj3/a10sU4ujZDpsTGQ+0Roo6RwxiYyWnAUnhhG005ZFp8IJWjacbOWEWsrj/ALOZjGaD2Csz6nVjculjKUaQdeRXN2eacXsZZYNS2CCQLk+CRk9vAiV0sM09kd6z1GdYmNypSM5Y2qZ2OmfkEbh9l54NXdxry+m08vysAZAyWeLZHR1q1zTXpGTFvDeq06yeawkJ9dhlVpsXQtkeXO3KgZTsquYnuEBVLoUuRXb2FU6ZBBdkTHE71OJqz9lR75VCEVfkTelUhLlUtTXNVCE2YNBsqYTIRCZekqCU34kquypDUArGWOSa12mX5571nDUwSnRaYxwIFjbcppYoixynRUVdhFIepp2jVXjMAX1yPNZqjJvmrAKWoSoG78kUXkarWzFDvWZwVQxDSYRlKPg3scHCR4Krnb/9cQsrSQn03mb3S0mqyWJqOIMTyW/AYxzTbO+VvZWauwEpbeqbEEcJ/ICHFNBHJKErR6XD4pjzsyA45RIHKDvvZKxWAghxPVO657gsGDcCIgTofRdZ+KDWbBgzMkm8cCL8Fzyjpl8T0454zh8jLVxDWtGySY/iT5q1GoyoLuO0ZsJ3G4XLxLgTZIY8tIIJEZLTtpo5X1bUt1aOpWrkdR5Ovdpfgt2BwzXMlr4dwtuXArVHO6ziSTmdVo6PrvBhsj7d6JQ+OwQ6hOdtWuPZ3amFlsuN7iTGYzBWL/jTsksG1ff6ZKzsfsNIkEnfYep8kjDdMFhtyy6scpvF/HNYqEvKOyWfE2kzG+RYgghDDNvNegq021Wg7ADjqJiO9cx+EI5DXS/EJqSarkl4WnqTtENqbTA2Dn5IexplsxAtuKe+jsMJJiLNP8TPGVhpsM8AJO6PZCI1TYZFK0mjBXErM4wVqeZM6TYarLWP9LTVsefKFNsqXqM1NKmSU11KM1OpWPRJqzNsqHBOcxR8OOKuzJwM5CrsJziqkJOTI0of8JBpLoNoqww6eo17RzRSU/CXSGGR+2T1i7LOcGKwpreMOrDDp6h9lmAU1b4S3toJgoI1jWJnNFJSKK6Qw6n9sjWHZZzfgo+EuoMMqV6YY0uOQRrQPE0rZzvhpb6jWmC4A7pusGK6Vc6Q0bIyzk9x7wufz9z9lLmc8pLg7jukaYmSSeAse9YanSTjk0AeJWEoiVDmyXKUjUzpOo27XRxAEqzek60k7cyIvBHgVmZTlWFJQ5MtKRcY6p2vIKw6QfM25RZK+EqbF801NkuLN1HpLR47x6Ldh+kGGwMc7ea4JAUg+8/JUpsSk4s9MxwfcHa81f4B3LzOHruYQ5pg748j6L0HRXSvxXBjwATrOfd6KtbN8c4ydPydPBYtzLZjcd27mu1Rex5kRtAXNgbWvfddct2GhDAQdfeWSylFS3R6WLNLHtLdD+mLsERIzkET3b1zqg2aYz6wkkg+cBdyg8RtOMmSYtPvJJx7GEWvFxzOixTlHajtlonve9HmHls2IHPPvWctJK244gWi/qkMoPziBv8Aea1Ujzp4/lSH0hsCdSkik5xn/SvTBmSffL+k4km144CPNJPctxuKXBnfSDdVlqvC1vpHl90oUb3t33WiZzzi3skZQCdEFhWswMgEkuTsxcKO+KauKS0BqNlZWdyghPwlPwk4NVw1LUWoIz/CV20uCeArgI1DUEZvgq7aK0tCYxinWUoIQyirjDrS1ie1oUubKUEYhhlwv1W/YpR1esYub5Gdka/2vVkryvTvQD69YPaZaRDpIAbs5AWm/enCW+5z9TF6Goq2zx1DDlwm0cbCee+2qvTaz/LanWw1t9jpkclq6SwHwagY5zT8pIbLiAdBbOIKpUc0gMDGtO0JeXG3BxyH/wAwt7s8bTTpgcMxwAYetFwZm0k6Wtv4c1BwRmAJN5aLkRxGfNSwlvySD/KCC0xcFrpN89TZdChiQcw4OtsAfLHWueOXmokzfHC2ZMPhSYgj0P8ArVbsPgJ/iSYNhawFnX0nPd5DodHYUv0bDWtzP+JgZ65wNZ4rus6Pf87BsSIAbIIGnP5fFc08tHpY+mjVs8W/Am5AMb9nTWBNwPVZH4VxJGZgk8xmJyOXJe2xXRRaNghoJkhxtkIgEb4nfYjVcCvDHdYWl4OyTvbOuWUclcMlmWbAkrRyBgZbNoAkxnlcQY8uCTWDLbO65vv1tM5SL81vxOIJJDGlok7BJgwCSNqLHS29c97RBcItfrHrOOsLdM8+UaIbTa4mOqP8jbUxIzOWirh3mnUaZHVOuW68TZOrPa4E7DWG0bM23y2fONEhjHPIY1pLiYG8kmI3KjNedvJ9Fw7NtoNiM5Bt4pwpxYJPQPR/waLWkmcyJBAJuQOC6jqYsYWDlue3FNxTkqZmo9HvdfIJv7BozdJ5j/a6nxmlsADLXeuVVw73bXWb3GR3rKeWR1YMON7tnPxOEpTlJGQXPxNzFrbshzOfdmuu7BBubp4wfSIWd2GYBm3wM+SyjJ3Z3SUKpHFdTcTA8de7crsov0HeuoKbMs+4prHxkw+AC21nI8e+yOSOjXu3++KaOhjqPE+krrtrkaeZKW/EvOQ8Afyju+iX01q2jk1OigM48PVZXYVo3eS6dcVD/E+S51ShUnTxWkZ+zmy4GvCOuHKZXhBin9t/1O9UDE1O2/6j6rft/ZwLrPo94FaV4MYp/bf9bvVSMQ/tv+t3ql2yvzfo95KsHrwQxD+2/wCp3qpFd/bf9R9Udq+R/m/R9AYVoavnQrP7bvqPqrCq/tv+o+qXYfspdb9H0ljU4MC+aNqP7bvqPqrte/tu+o+qT6Z+yl1ifB9CehjV4Njn9o+J9VqZtn+R8SjsNcmsc98HqMZ0LRqElzG7REbQEOyjMZ23rF/+cogNaGuGyLHadxuQbTfdoBlZctlN+8pzKTt/n/SSg48j0Qk7aN7v00wU3tY57Q68ANdOzcANIE3A1BOU5RyKn6brU2F5gsEkg9UgW6xbkMzYH+I5LexjtT5rTSJ3qZRfsqPTRu1sHQvRVaZaHAgTcOaYIuJI1uOMFfSf0u+m1kOADgI6wAIGto5eC8XhXnf77lj/AFP0o+mxmy4iS4E8IC5JRkpWi8+HVCm9jvdPYM1ah+EC1sOE3Ddk5i1jyXi8R+nq739VpzglwLQNM3Z6/LOVpXr6tYxEm1h3Lm1nOzkoxp+TVYPhpb2OTQ/RMmatWRaQ1oJsLddwNhOUaDu6A/R+HuNkwZEbWm6c++ZS31H9p3ifVZKmIq9t/wBTvVdOmb5MH00I8Wdan+ksOC3/AKY6oIFyRB7V+tzK3M6Kp0/kaxvJoH2XlH163bf9Z9Uh+Krf9x/1u9UuzN8iWiDtR/4ez+EFBpheDqYut23/AFuWd2Mrf9x/1u9VS6eXsUupguGfQHODbysj8X/lHcF4R+KqnN7/AK3eqS6vU7b/AKj6pS6SUvLFHr8cP7We6fiZ/ke8D8BIOJj+Xl6leJNd/bf9R9VQ139t31FL8Nrkp/qkOIv+T3AxQ7Tj3+gVnYoD3J814P8Acv7b/qPqoOJf23/U71R+K/Yf+rGv2v8Ak92ccqPx/uV4U4h/bd9R9Us139t31FUuk+yJfqkfT/k9nWxnEeKyOxQ7Xl/S8t8Z/bd9RUGo7tHxKpdPXJi/1JPgqFMKqsF1nkokBWVQpDkirLqwCXtKwKY0xjVdqUHK4emikx7SmNn2Cswfy70xruCClI2U3rVSf7n+1z2VDx8QnMdz+lpSaNoZKOox59hObU9+wuYypGo+gjusQnU6vL6j5XWbidMMp0W1FZlWDmufUxbGgy4cdqZ+y5dfptoJ2RPHT3mspI3fURj5Z7ShX5e+S4f6zryynwc7/wAf6Xn39PVTkQPFZMRjnvs520M+9ZqDu2Rl6yEoaY3Z9PZidoTIVXulfPKXTdZggOByzE5ZJtP9S1gbwRuuPMJRg0arr8Vb2e0rFYalRcml+pGOs8FuW880796xws4HvMf+WfBbRXsUuohL9rNT6iTUqHXzCzvre4P/ALEpL38OVmj8LVROaWZlqtTl4rM9x9/6UvefZ/pIc/3K0SOWU7BxPuyW8qC/l75Jbn8SgzciSqFBKpKCLJKqQguVZSFYEKCEEqCglshQplQgkJQoCkIAlWCrKoawCG6GOBUwsrq5VHPJ1UakOzYXgao/cN3+SwoRqYrNxxTRvUfvB2SsSEamGpm4dIf4+aazpSP4n6v6XMQEtTKUmjq/8sez5+gCz1ukHutkNwyWRCTbZWqT5Jc8nMkoBUIU0TZYORtKqEUO2X21UuUIQFsJUtcRcGFCExGlmPeBAPl7jNX/AOTfw8/VY1Up2w1P2bj0gTm0ear++/xCxoT1MWpmz95wUfu+B8VkQjUxWzX+5HFWFRp1WJCephZu2goKxtcRkVcVihSQWPQUsVQVeVadiBRKCoQBT4ig1UtCz1MCXOJzUIQpAEIQgAQhCABCEIAEIQgCQVKqgIHZZChSgoEIQlQAhQolMTZZQoQgVkkqEIQIEIQgAQhCABCEIAEIQgAUglQhAFxUKn4iWhPUwBCEJACEIQAIQhAAhCEACEIQAIQhAAhCEASFKEIKQIQhAypQhCCAQhCABCEIAEIQgAQhCABCEIAEIQgAQhCABCEIA//Z" alt="Third slide">
                </div>

            </div>
            <div class="carousel-caption d-sm-block d-md-block">
                <div class="card bg-dark" style="background:red;">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>-->




    <!--====================
        Banner Part HTML End
    ======================-->



    <!--==================
    About Part HTML Start
    ===================-->

    <section id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-inner text-center">
                        <div class="heading">
                            <h2>About CoronaVirus</h2>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmopor incididunt ut labore et dolore magna aliqua. Quis ipsum supendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <div class="btn-bar">
                            <a href="#" class="">Know More About Corona Virus</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!--==================
    About Part HTML End
    ===============-->

    <!--======================
    Corona Virus Case Part HTML Start
    =======================-->
    <section id="cases" class="cases section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="arraw test">
                        <i class="fas fa-long-arrow-alt-down"></i>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="w-heading">
                        <h2>Corona Virus Case</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="case-content table-wrapper-scroll-y my-custom-scrollbar">
                        <div class="case-box">
                            <div class="case-table">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>

                                            <th>State</th>
                                            <th>Confirmed</th>
                                            <th>Active</th>
                                            <th>Recovered</th>
                                            <th>Deaths</th>
                                            <th>LastUpdatedTime</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                        $data = file_get_contents('https://api.covid19india.org/data.json');
                                        $cronalive = json_decode($data, true);

                                        $statecount = count($cronalive['statewise']);

                                        $i = 1;
                                        while ($i < $statecount) { @endphp <tr>
                                            <td>@php echo $cronalive['statewise'][$i]['state']; @endphp</td>
                                            <td>@php echo $cronalive['statewise'][$i]['confirmed']; @endphp</td>
                                            <td>@php echo $cronalive['statewise'][$i]['active']; @endphp</td>
                                            <td>@php echo $cronalive['statewise'][$i]['recovered']; @endphp</td>
                                            <td>@php echo $cronalive['statewise'][$i]['deaths']; @endphp</td>
                                            <td>@php echo $cronalive['statewise'][$i]['lastupdatedtime']; @endphp</td>
                                            </tr>

                                            @php

                                            $i++;
                                            }
                                            @endphp
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="btn-bar">
                        <a href="#" class="">Watch Full Stats</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--=======================
    Corona Virus Case Part HTML End
    ========================-->

    <!--==================
    CoronaVirus Symptoms Part HTML Start
    ===================-->

    <section id="symptoms" class="symptoms section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="symptoms-inner text-center">
                        <div class="heading">
                            <h2>CoronaVirus Symptoms</h2>
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="Symptoms">
                        <div class="symptom-txt text-center">
                            <img src="{{ asset('assets/images/symptom-1.png') }}" class="img-fluid" alt="Symptom">
                            <h4>Cold & Cough</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="Symptoms">
                        <div class="symptom-txt text-center">
                            <img src="{{ asset('assets/images/symptom-2.png') }}" class="img-fluid" alt="Symptom">
                            <h4>High Fever</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="Symptoms">
                        <div class="symptom-txt text-center">
                            <img src="{{ asset('assets/images/symptom-3.png') }}" class="img-fluid" alt="Symptom">
                            <h4>Vomiting</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="Symptoms">
                        <div class="symptom-txt text-center">
                            <img src="{{ asset('assets/images/symptom-4.png') }}" class="img-fluid" alt="Symptom">
                            <h4>Headache</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==================
    CoronaVirus Symptoms Part HTML End
    ===============-->


    <!--========================
     Corona Virus Prevention Part HTML Start
    ==========================-->

    <section id="prevention" class="prevention section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="arraw test-2">
                        <i class="fas fa-long-arrow-alt-down"></i>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="w-heading">
                        <h2>Corona Virus Prevention</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="row what-do p-border">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/what-do-1.png') }}" class="img-fluid" alt="prevention">
                        </div>
                        <div class="col-md-8">
                            <div class="what-do-txt">
                                <h3>Wear Mask</h3>
                                <p>Wearing Protective Masks When Going to Crowded Places.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row what-do p-border">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/what-do-2.png') }}" class="img-fluid" alt="prevention">
                        </div>
                        <div class="col-md-8">
                            <div class="what-do-txt">
                                <h3>Wash Hands</h3>
                                <p>Wash Your Hans Regularly for 20 Seconds, with Soap and Water</p>
                            </div>
                        </div>
                    </div>
                    <div class="row what-do">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/what-do-3.png') }}" class="img-fluid" alt="prevention">
                        </div>
                        <div class="col-md-8">
                            <div class="what-do-txt">
                                <h3>Cover Nose When Sneeze</h3>
                                <p>Cover Your Nose and Mouth with a Tissue or Elbow When You Sneeze</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="row what-do p-border">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/what-not-1.png') }}" class="img-fluid" alt="prevention">
                        </div>
                        <div class="col-md-8">
                            <div class="what-do-txt">
                                <h3>Wear Mask</h3>
                                <p>Wearing Protective Masks When Going to Crowded Places.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row what-do p-border">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/what-not-2.png') }}" class="img-fluid" alt="prevention">
                        </div>
                        <div class="col-md-8">
                            <div class="what-do-txt">
                                <h3>Wear Mask</h3>
                                <p>Wearing Protective Masks When Going to Crowded Places.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row what-do">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/what-not-3.png') }}" class="img-fluid" alt="prevention">
                        </div>
                        <div class="col-md-8">
                            <div class="what-do-txt">
                                <h3>Wear Mask</h3>
                                <p>Wearing Protective Masks When Going to Crowded Places.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--========================
    Corona Virus Prevention Part HTML End
    =========================-->



    <!--======================
        Latest Updates Part HTML Start
    =======================-->

    <section id="news" class="news section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="news-inner text-center">
                        <div class="heading">
                            <h2>Latest Updates</h2>
                        </div>

                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="news-txt">
                        <div class="news-img">
                            <img src="{{ asset('assets/images/latest-update-1.png') }}" class="img-fluid" alt="Latest Updates">
                        </div>
                        <div class="news-inner">
                            <h3>Posted by:Admin <span>Posted on: 26 April 2020</span></h3>
                            <h4>What Can I do to protect my self & Prevent</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <a href="#">
                                Read More <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 news-right">
                    <div class="row news-txt">
                        <div class="col-md-5">
                            <div class="news-img">
                                <img src="{{ asset('assets/images/latest-update-2.png') }}" class="img-fluid" alt="Latest Updates">
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="news-inner">
                                <h3>Posted by:Admin <span>Posted on: 16 May 2020</span></h3>
                                <h4>This factsheet provides an corona virus situation </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                <a href="#">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-row news-txt">
                        <div class="col-md-5">
                            <div class="news-txt">
                                <div class="news-img">
                                    <img src="{{ asset('assets/images/latest-update-3.png') }}" class="img-fluid" alt="Latest Updates">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="news-inner">
                                <h3>Posted by:Admin <span>Posted on: 22 May 2020</span></h3>
                                <h4>What Can I do to protect myself & Prevent the spread</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                <a href="#">
                                    Read More <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="btn-bar">
                        <a href="#" class="">Browse All Updates</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--======================
        Blog Part HTML End
    =======================-->

    <!--====================
    Contact Part HTML Start
    ======================-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="content-text">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="cont-logo">
                            <a href="#"><img src="{{ asset('assets/images/logo.svg') }}" height="40px" width="40px" alt="footer logo"></a>
                        </div>
                        <div class="cont-txt">
                            <p class="cont-gap">Lorem ipsum dolor sit amet, consectetur adipisng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-12">
                        <div class="cont-center">
                            <h3>Important Links</h3>
                        </div>

                        <div class="c-text-menu1">
                            <ul>
                                <li><a href="#">WHO Information </a></li>
                                <li><a href="#">Covid-19 Wikipedia</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">CNN News</a></li>
                                <li><a href="#">Worldometer Info</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-12">
                        <div class="cont-center">
                            <h3>Privacy & TOS</h3>
                        </div>

                        <div class="c-text-menu1">
                            <ul>
                                <li><a href="#">Advertiser Agreement</a></li>
                                <li><a href="#">Acceptable Use Policy</a></li>
                                <li><a href="blog_details.html">Privacy Policy</a></li>
                                <li><a href="blog_details.html">Technology Privacy</a></li>
                                <li><a href="#">Developer Agreement</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="cont-center">
                            <h3>Contact us</h3>
                        </div>
                        <div class="c-text-location">
                            <div class="row">
                                <div class="col-lg-3  col-md-3">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
                                        <li><a href="#"><i class="fas fa-phone"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe-americas"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-9  col-md-9">
                                    <div class="address">

                                        <p>1234, Park Street Avenue, NY, America - 6658</p>

                                        <p>+880 1234 567 890<br>
                                            +880 0987 654 321</p>

                                        <p>www.quarantine.com<br>
                                            www.coronavirus.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Copyright © 2020. All rights reserved by <a href="#">Designer</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--===========================
        Contact Part HTML End
    ============================-->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from ingenioushubs.com/Quarantine-html/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 07:56:16 GMT -->

</html>