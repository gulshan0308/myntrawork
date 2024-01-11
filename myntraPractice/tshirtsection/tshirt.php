<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mens T-Shirt</title>
    <link rel="stylesheet" href="./tshirt.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        include('./header.php');
      ?>
    <div class="container-fluid">
        <div class="row">
            <p>Home/ Clothing /<span> Mens T-shirts</span></p>
            <div class="row">
                <div class="col-2" id="c1">
                    <h5 id="filter">Filters</h5>
                </div>
                <div class="col-3" id="abc">
                    <select name="" id="sel1">
                        <option value="Bundle">Bundle</option>
                        <option value="Single styles">Single styles</option>
                    </select>
                    <select name="" id="sel2">
                        <option value="coo" default>Country of origin</option>
                        <option value="India">India</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="col-2  offset-4" id="c1">
                    <select name="" id="sort">
                        <option value="SbyR"> Sort: by Recommended</option>
                        <option value="What's New"> What's New</option>
                        <option value="Popularity"> Popularity</option>
                        <option value="Better Discount"> Better Discount</option>
                        <option value="Price: High to Low"> Price: High to Low</option>
                        <option value="Price: Low to High"> Price: Low to High</option>

                    </select>
                </div>
                
                <!-- <div class="col"></div> -->
            </div>
            <div class="col-2" id="sidebar_nav">

                <div>
                    <br>
                    <h5 class="xyz">BRAND</h5>
                    <br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">Roadster</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">Firskers</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">HRX by Hrithik Roshan</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">WROGN</span><br><br>
                    <hr>
                </div>

                <div>
                    <br>
                    <h5 class="xyz">PRICE</h5>
                    <br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">Rs 279 to Rs 6459</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">Rs 279 to Rs 6459</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">Rs 279 to Rs 6459</span><br><br>
                    <hr>
                </div>

                <div>
                    <br>
                    <h5 class="xyz">COLOR</h5>
                    <br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar1"></button> <span
                        class="brand_space"><a href="#">Blue</a></span><br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar2"></button> <span
                        class="brand_space"><a href="#">White</a></span><br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar3"></button> <span
                        class="brand_space"><a href="#">Navy Blue</a></span><br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar4"></button><span
                        class="brand_space"><a href="#">Black</a></span><br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar5"></button> <span
                        class="brand_space"><a href="#">Green</a></span><br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar6"></button><span
                        class="brand_space"><a href="#">Grey</a></span><br>
                    <input type="checkbox" class="check_box"><button class="btn_sidebar7"></button><span
                        class="brand_space"><a href="#">Red</a></span><br><br>
                    <hr>
                </div>

                <div>
                    <br>
                    <h5 class="xyz">DISCOUNT RANGE</h5>
                    <br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">10% and above</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">20% and above</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">30% and above</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">40% and above</span><br>
                    <input type="checkbox" class="check_box"> <span class="brand_space">50% and above</span><br><br>
                    <hr>
                </div>
            </div>

            <div class="col-10"></div>
        </div>
    <script src="./tshirt.js"></script>
</body>

</html>