<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/index.css">
    <script src="tailwind.js"></script>
</head>

<body class="bg-gradient-to-r from-indigo-500 to-orange-400">

    <?php
    include("partials/navbar.php");
    ?>

    <!-- card -->

    <div class="h-screen w-full drop-shadow-2xl flex justify-center items-center">

        <div class="w-72 sm:w-96 h-72 sm:h-80 bg-slate-200 mx-auto rounded-xl shadow-lg relative">
            <div class=" text-center font-extrabold text-xl text-black m-2">
                Login</div>

            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Enter your email"
                    class="bg-transparent border-t-2 border-l-2 border-black p-2 m-4 mb-0 w-11/12 placeholder-black"
                    required>

                <input type="password" name="password" placeholder="Enter password"
                    class="bg-transparent border-y-2 border-r-2 border-black p-2 m-4 mt-0 mb-0 w-11/12 placeholder-black"
                    required>

                <button type="submit" name="btn"
                    class="rounded-lg bg-cyan-400 text-center font-bold border-2 border-black  hover:bg-cyan-500 text-black p-1 m-3 sm:m-4 text-xl w-11/12 absolute bottom-0 left-0">Login
                </button>
            </form>
        </div>

    </div>

</body>

</html>