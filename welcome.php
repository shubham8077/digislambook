<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="/index.css">
    <script src="tailwind.js"></script>
</head>

<body class="bg-gradient-to-r from-indigo-500 to-orange-400">

    <?php
    include("partials/navbar.php");
    ?>

    <!-- card -->

    <div class="w-full drop-shadow-2xl flex justify-center items-center select-none">
        <div>
            <p class="m-4 text-white text-3xl font-normal drop-shadow-lg text-center">Welcome to Digital
                Slambook</p>

            <p class="m-4 text-lime-400 text-3xl font-normal drop-shadow-lg text-center">Share our sweet memories...</p>

            <div>
                <img src="https://images.pexels.com/photos/2874998/pexels-photo-2874998.jpeg?auto=compress&cs=tinysrgb&w=600"
                    class="h-60 flex mx-auto border-2 border-dashed border-white">
            </div>

            <button
                class="rounded-lg bg-cyan-400 text-center font-bold border-2 border-black  hover:bg-cyan-500 p-1 m-2 text-xl w-full mx-auto"><a
                    href="sbform.php">Let's
                    get started</button>
        </div>
    </div>
    </div>

</body>

</html>