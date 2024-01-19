<?php
$insert = false;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $conn =mysqli_connect($server,$username,$password);

    if(!$conn){
        echo "Connection Failed";
    }
    else{
        // echo "Successfully connected";
    }

    $fname=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql = "INSERT INTO `paradox`.`paradox` (`Name`, `Email`, `Message`, `DT`) VALUES ('$fname', '$email', '$message',current_timestamp());";
    if($conn->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
}
?>
<!-- For Wallpaper -> https://www.wallpaperflare.com/search?wallpaper=electrons -->
<!-- For LOGO -> https://www.istockphoto.com/vector/letter-f-logotype-icon-design-template-technology-abstract-vector-logotype-gm1130888829-299242363?utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_vector_sponsored&utm_content=https%3A%2F%2Fpixabay.com%2Fvectors%2Flogo-3d-3-dimensional-metallic-1821863%2F&utm_term=logo+3d -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResponsiveWebsite</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Header -->
    <nav class="background navbar h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="logo2.jpg" alt="logo"></div>
            <li><a href="#home">Home</a> </li>
            <li><a href="#about">About</a> </li>
            <li><a href="#services">Services</a> </li>
            <li><a href="#contact">Contact Us</a> </li>
        </ul>
        <div class="rightNav v-class">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm" id="sb">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <!-- Main-1 -->
    <section class="background first-section" id="home">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">Hi , I am Elon Musk</p>
                <p class="text-small">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Assumenda, perferendis voluptas! Id dignissimos earum assumenda ad sapiente architecto fuga quod
                    quis quidem voluptas exercitationem,
                    doloribus nisi dolores dolor ipsa error!
                </p>
                <div class="buttons">
                    <button class="btn" id="btn">Subscribe</button>
                    <button class="btn" id="btn">Watch Video</button>
                </div>
            </div>
            <div class="secondHalf">
                <img src="elon3.jpg" alt="AI" id="elon3">
            </div>
        </div>
    </section>
    <!-- Main-2 -->
    <section class="second-section" id="about">
        <div class="container">
            <p class="sectionTag text-big">Tesla</p>
            <p class="sectionSubtag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus a
                porro quia
                saepe veniam libero expedita culpa doloremque inventore accusamus eaque magni voluptatem ipsa error
                laudantium, deleniti enim adipisci debitis cumque molestiae! Quasi.Lorem ipsum dolor sit amet
                consectetur
                adipisicing elit. Itaque natus a porro quia saepe veniam libero expedita culpa doloremque inventore
                accusamus
                eaque magni voluptatem ipsa error laudantium, deleniti enimadipisci debitis cumque molestiae!
                Quasi.Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Itaque
                natus a porro quia saepe veniam liberoexpedita culpa doloremque inventore accusamus eaque magni
                voluptatem
                ipsa error laudantium, deleniti enim
                adipisci debitis cumque molestiae! Quasi.
            </p>
        </div>
        <div class="thumbnail1 com">
            <img src="tesla.jpg" alt="elon" class="imgFluid">
        </div>
    </section>
    <section class="second-section" id="services">
        <div class="thumbnail2">
            <img src="spacex.jpg" alt="elon" class="imgFluid">
        </div>
        <div class="container">
            <p class="sectionTag text-big">Spacex</p>
            <p class="sectionSubtag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus a
                porro quia
                saepe veniam libero expedita culpa doloremque inventore accusamus eaque magni voluptatem ipsa error
                laudantium, deleniti enim adipisci debitis cumque molestiae! Quasi.Lorem ipsum dolor sit amet
                consectetur
                adipisicing elit. Itaque natus a porro quia saepe veniam libero expedita culpa doloremque inventore
                accusamus
                eaque magni voluptatem ipsa error laudantium, deleniti enimadipisci debitis cumque molestiae!
                Quasi.
            </p>
        </div>
    </section>
    <section class="second-section">
        <div class="container">
            <p class="sectionTag text-big">OpenAI</p>
            <p class="sectionSubtag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus a
                porro quia
                saepe veniam libero expedita culpa doloremque inventore accusamus eaque magni voluptatem ipsa error
                laudantium, deleniti enim adipisci debitis cumque molestiae! Quasi.Lorem ipsum dolor sit amet
                consectetur
                adipisicing elit. Itaque natus a porro quia saepe veniam libero expedita culpa doloremque inventore
                accusamus
                eaque magni voluptatem ipsa error laudantium, deleniti enimadipisci debitis cumque molestiae!
                Quasi.Lorem
                ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="thumbnail3 com">
            <img src="openai.jpg" alt="elon" class="imgFluid">
        </div>
    </section>
    <form action="index.php" method="post">
        <section class="text-gray-600 body-font " id="contact">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">paradox@email.com</a>
                            <p class="leading-normal my-5">49 Smith St.
                                <br>Saint Cloud, MN 56301
                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-4 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a>
                                <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <footer>
        <div class="footer">
            © 1996-2023, Paradox.com, Inc. or its affiliates
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>