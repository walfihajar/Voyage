<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travigo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./assets/flaticon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>



<body class="flex flex-col gap-5 w-full">
    <header>
        <div class="title flex items-center justify-between p-4 gap-1 h-20 ">
            <img class="w-16" src="./assets/logo1.png">
            <div class="flex gap-4 items-center text-black font-bold">
                <a href="client.php" >Clients</a>
                <a href="reservation.php">Reservations</a>
                <a href="activite.php">Activités</a>
            </div>
        </div>
    </header>

    <main class="min-h-screen">
        <div class=" h-full flex flex-col lg:flex-row lg:px-[20px] gap-20 relative justify-cente">
            <div class=" w-full ">
                <?php
                // Contenu de la page spécifique
                echo isset($content) ? $content : '<p>Bienvenue sur le site de réservation de voyages.</p>';
                ?>
            </div>
        </div>
    </main>

    <footer class="bg-black text-white">
        
        <!-- FIRST PART -->
            <div class="flex justify-around items-center bg-[#f9f3fe] h-12 p-4">
                <p class=" text-l text-black">All Right Reserved - Codebenders 2024</p>
            </div>
        <!-- END FIRST PART  -->        
    </footer>
       
    <script src="main.js"></script>
        
</body>
</html>
