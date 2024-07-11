<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail sur Billie</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="h-screen items-center justify-center flex justify-around m-3">
        <section class="space-y-5">
            <div class="w-80">
                <!-- <span class="text-2xl tracking-wide font-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla deserunt at ipsam natus quas. Veritatis consequatur </span> -->
            </div>

            <div class="flex flex-col space-y-5">
                <span class="text-md font-semibold">Lieux du salon de coiffure</span>
                <a href="#" class="border-2 p-2 rounded-2xl flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    Chez Billie: Douala
                </a>
        </div>


            <div class="block w-80 space-y-5">
                <span class="text-xl font-bold tracking-wide">À propos de Billie</span>
                <p class="tracking-wide">Grands axes de mes oeuvres :</p>
                <p>- Knotless Braids</p>
                <p>- Nattes américaines</p>
                <p>- Butterflies</p>
                <p>- Pose Lace frontale</p> 
            </div>
        </section>

 <section class="">
    <div class="p-4 bg-gray-200 rounded-lg shadow-lg text-center w-80 space-y-5">
       <img src="https://i.pinimg.com/236x/88/1e/e1/881ee10056776ffd17b63f0916e3c98b.jpg" alt="Logo" alt="Prestataire 1" class="w-24 h-24 mx-auto rounded-full mb-4">
       <p class="text-lg font-bold">Billie</p>

       <div class="gap-4 font-semibold flex justify-around">
        <span>Tarif horaire</span>
        <span>15000F</span>
       </div>

       <div class="gap-4 font-semibold flex justify-around">
        <span>Temps de réponse</span>
        <span>24h</span>
       </div>

       <div class="gap-4 font-semibold flex justify-around">
        <span>Types de services</span>
        <span>30</span>
       </div>
       <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</button>
    </div> 
 </section>
    </section>

    <section id="prestataires" class="h-screen flex flex-col items-center justify-center space-y-5">
        <div>
        <h1 class="text-center text-2xl font-bold">Ses créations</h1>
        </div>

        <div class="grid grid-cols-4 gap-5 ml-5">
       
       <a href="/billie" class="bg-white rounded-lg shadow-lg shadow-blue-300 box p-5">
           <img src="https://i.pinimg.com/564x/91/d1/75/91d175083b25ca74c7315105fe7df341.jpg" alt="Logo" alt="Photo Prestataire 2" class="w-full h-80 object-cover mb-2">
           <span class="text-center font-bold text-lg">Knotless Braids</span>
             <!-- <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center">Contact</button> -->
       </a>
       
       <a href="details_prestataire2.html" class="bg-white rounded-lg p-5 shadow-lg shadow-blue-300 box">
           <img src="https://i.pinimg.com/474x/b9/8d/b3/b98db3545ff503465215b61d9e6badc0.jpg" alt="Logo" alt="Photo Prestataire 2" class="w-full h-80 object-cover mb-2">
           <div class="text-center font-bold text-lg">Nattes américaines</div>
           <!-- <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact</button> -->
       </a>

       <a href="details_prestataire2.html" class="bg-white rounded-lg p-5 shadow-lg shadow-blue-300 box">
           <img src="https://i.pinimg.com/474x/53/2a/6e/532a6ecd26729ba2b52a866724ddbc3c.jpg" alt="Logo" alt="Photo Prestataire 2" class="w-full h-80 object-cover mb-2">
           <div class="text-center font-bold text-lg">Butterflies Locs</div>
           <!-- <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact</button> -->
       </a>

       <a href="details_prestataire2.html" class="bg-white rounded-lg p-5 shadow-lg shadow-blue-300 box">
           <img src="https://i.pinimg.com/564x/ee/a4/4a/eea44a8584eb7b7877d3b31b55b743bb.jpg" alt="Logo" alt="Photo Prestataire 2" class="w-full h-80 object-cover mb-2">
           <div class="text-center font-bold text-lg">Pose lace frontal</div>
           <!-- <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact</button> -->
       </a>
       </div>
    </section>
</body>
</html>