<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/index.css">
    <script src="tailwind.js"></script>


</head>

<body class="bg-gradient-to-r from-indigo-500 to-orange-400">

    <?php
    include("partials/navbar.php");
    ?>

    <!-- card -->

    <div class="w-full drop-shadow-2xl flex justify-center items-center">
        <div>
            <p class="text-gray-200 outline-2 outline-black font-bold text-3xl sm:text-4xl m-2">Your Slambook link is
                ready.</p>
        </div>
        <br>
        <img src="welcome.png" class="h-40 sm:h-80 mt-2">

    </div>

    <div class="bg-slate-700 w-fit flex-auto mx-auto rounded-md m-1">
        <input type="text" value="Copy link and paste" id="cplink" class="border-2 border-black p-1 sm:p-2">
    </div>
    <div class="w-fit mx-auto">

        <button onclick="copyfun()" id="btn"
            class="sm:mx-1 p-1 border-2 border-black bg-teal-400 sm:font-bold">Copy</button>
    </div>

    <?php
    include("partials/copiedbtn.php");
    ?>

    <p class="text-center text-white font-bold">Now,Share link in below social media platforms...</p>
    <div class="flex justify-center">
        <div class="m-3"><a href="https://www.facebook.com/facebook/"><img src="fb.png" class="w-12"></a>
        </div>
        <div class="m-3"><a href="https://www.instagram.com/instagram/"><img src="insta.png" class="w-12"></a></div>
        <div class="m-3"><a href="https://web.telegram.org/k/"><img src="tele.png" class="w-12"></a></div>
        <div class="m-3"><a href="https://www.whatsapp.com/"><img src="wtsap.png" class="w-12"></a></div>
    </div>
</body>

</html>