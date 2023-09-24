<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slambook Form</title>
    <link rel="stylesheet" href="/index.css">
    <script src="tailwind.js"></script>
    <script>

        function pfun(img) {
            let gndr = document.getElementById("gndr");
            gndr.src = img;
        }
    </script>
</head>

<body class="bg-gradient-to-r from-indigo-500 to-orange-400">

    <?php
    include("partials/navbar.php");
    ?>

    <div class="border-2 border-black rounded-xl m-2">

        <div class="border-2 border-black bg-yellow-300 rounded-xl m-1 p-1">


            <p class="text-center text-2xl font-bold m-1 p-1">ALL ABOUT ME</p>
        </div>

        <form action="sbform.php" method="post">
            <div class="border-2 border-black bg-slate-300 rounded-xl m-1 p-1">

                <div class="m-1 sm:m-4 sm:flex justify-evenly">

                    <div class="w-full sm:m-2 sm:w-32"><img src="nobody.png" id="gndr">

                    </div>

                    <div class="m-2">
                        <p class="text-lg font-bold p-1">Upload photo</p>
                        <input type="file" name="img" id="img" class="w-full">

                        <p class="text-lg font-bold p-1">Gender</p>
                        <label>
                            <input type="radio" name="gender" value="Male" onclick="pfun('boy.png')">Male
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="gender" value="Female" onclick="pfun('girl.png')">Female
                        </label>


                    </div>

                    <div class="sm:w-1/2">

                        <div class="m-2">

                            <p class="text-lg font-bold p-1">My name is</p>
                            <input type="text" name="fname" id="fname" placeholder="Enter full name" class="w-full p-1">

                            <p class="text-lg font-bold p-1">Nickname</p>
                            <input type="text" name="nkname" id="nkname" placeholder="Enter Nickname"
                                class="w-full p-1">

                        </div>

                        <div class="m-2">
                            <p class="text-lg font-bold p-1">Birthday</p>
                            <input type="date" name="bday" id="bday" placeholder="Enter date of birth"
                                class="w-full p-1">

                            <p class="text-lg font-bold p-1">Class/Job</p>
                            <input type="text" name="job" id="job" placeholder="Class/Occupation" class="w-full p-1">

                        </div>

                    </div>


                </div>

            </div>

            <div class="sm:flex w-full">

                <div class="border-2 border-black bg-slate-300 rounded-xl m-1 p-1 sm:w-1/2">

                    <div class="p-2">
                        <p class="text-lg font-bold border-2 border-black rounded-xl text-center bg-yellow-300">
                            My Favourites
                        </p>
                        <br>
                        <label class="text-lg font-bold p-1">Food</label>
                        <br>
                        <input type="text" name="food" id="food" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Subject</label>
                        <br>
                        <input type="text" name="sub" id="sub" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Movie</label>
                        <br>
                        <input type="text" name="movie" id="movie" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Actor/Actress</label>
                        <br>
                        <input type="text" name="actor" id="actor" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Colour</label>
                        <br>
                        <input type="text" name="clr" id="clr" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Place/Country</label>
                        <br>
                        <input type="text" name="plce" id="plce" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Singer</label>
                        <br>
                        <input type="text" name="sngr" id="sngr" class="w-full p-1">
                        <br>
                        <label class="text-lg font-bold p-1">Game/Sport</label>
                        <br>
                        <input type="text" name="game" id="game" class="w-full p-1">
                        <label class="text-lg font-bold p-1">Hobbies</label>
                        <br>
                        <input type="text" name="hoby" id="hoby" class="w-full p-1">
                    </div>
                </div>


                <div class="border-2 border-black bg-slate-300 rounded-xl m-1 p-1 sm:w-1/2">

                    <div class="p-2">
                        <p class="text-lg font-bold border-2 border-black rounded-xl text-center bg-yellow-300"">
                            I Think I am...
                        </p>
                        <br>
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                            <tr>
                                <td><label class=" text-lg font-bold p-1">Creative</label></td>
                            <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Confident</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Ambitious</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Caring</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Adventurous</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Intelligent</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Determined</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Curious</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Patient</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>

                            <tr>
                                <td><label class="text-lg font-bold p-1">Wise</label></td>
                                <td><input type="checkbox" name="frndname" id="frndname"></td>
                            </tr>



                            </table>
                    </div>
                </div>
            </div>

            <div class="border-2 border-black bg-yellow-300 rounded-xl m-1 p-1">

                <textarea placeholder="What you think about me..." class="p-1 w-full"></textarea>
            </div>


            <div class=" p-1">
                <button type="submit" name="btn"
                    class="rounded-xl bg-cyan-400 text-center font-bold border-2 border-black  hover:bg-cyan-500 text-black p-1 m-4 text-xl w-full mx-auto">SUBMIT</button>
            </div>


        </form>

    </div>
    <!-- </div> -->
</body>

</html>