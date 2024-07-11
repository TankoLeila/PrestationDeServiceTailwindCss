<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            /* tailwindcss v3.2.4 | MIT License | https://tailwindcss.com  */
           .box:hover {
            transform: translateY(-5px);
            transition: transform 0.4s ease;
        } 
        .box {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        </style>
    </head>
    <body class="antialiased">
    <section>
    <nav class="bg-blue-300 p-4 flex justify-around shadow-lg fixed w-full">
        <div>
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/plumber-business-service-logo-design-template-b6f20bc4a17dffa2d20b10d0f82395c7_screen.jpg?ts=1570513154" alt="Logo" class="h-10 w-10">
        </div>

        <div class="flex items-center space-x-4">
            <a href="#" class="text-white font-semibold text-xl">Accueil</a>
            <a href="#prestataires" class="text-white font-semibold text-xl">Nos prestataires</a>
            <a href="#" class="text-white font-semibold text-xl" id="openModal">Connexion</a>
            <a href="/inscription" class="text-white font-semibold text-xl">Inscription</a>
           
        </div>
    </nav>
<section class="h-screen items-center justify-center flex">
  <div class="m-30 flex flex-col justify-center md:w-1/2">
    <h1 class="text-4xl font-semibold whitespace-pre-line">
      Trouvez le prestataire idéal <br> pour tous les services du quotidien
    </h1>
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
  </div>
 
  <div class="">
    <img src="https://i.pinimg.com/564x/f3/0c/30/f30c3018001c251c906c55495e1e076a.jpg" class=""/>
  </div>
</section>

</section>

 <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-5 rounded-lg shadow-lg w-80">
   
      <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10 5.293 13.293a1 1 0 101.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
        </svg>
      </button>
      <h2 class="text-2xl font-semibold mb-4">Content de vous revoir !</h2>
      <form>
        <div class="mb-4 relative">
          <input type="email" placeholder="Adresse e-mail" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-blue-500">
          <span class="absolute right-3 top-2 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
</svg>

          </span>
        </div>
        <div class="mb-6 relative">
          <input type="password" placeholder="Mot de passe" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-blue-500">
          <span class="absolute right-3 top-2 text-gray-400 cursor-pointer" onclick="togglePasswordVisibility()">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
</svg>

          </span>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">Se connecter</button>
      </form>
    </div>
  </div>

  <section id="prestataires" class="h-screen flex flex-col items-center justify-center space-y-5">
        <div>
        <h1 class="text-center text-2xl font-bold">Nos différents prestataires</h1>
        </div>
     
<!-- 
    <div class="grid grid-cols-4 gap-5 ml-5">
       
        <a href="/billie" class="bg-white rounded-lg shadow-lg shadow-blue-300 box p-5">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/plumber-business-service-logo-design-template-b6f20bc4a17dffa2d20b10d0f82395c7_screen.jpg?ts=1570513154" alt="Logo" alt="Photo Prestataire 2" class="w-80 h-32 object-cover mb-2" alt="Photo Prestataire 1" class="w-full h-32 object-cover mb-2">
            <span class="text-center font-bold text-lg">Nom du Prestataire 1</span>
           <div class="flex"> <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center">Contact</button></div>
        </a>
        
        <a href="details_prestataire2.html" class="bg-white rounded-lg p-5 shadow-lg shadow-blue-300 box">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/plumber-business-service-logo-design-template-b6f20bc4a17dffa2d20b10d0f82395c7_screen.jpg?ts=1570513154" alt="Logo" alt="Photo Prestataire 2" class="w-full h-32 object-cover mb-2" alt="Photo Prestataire 2" class="w-full h-32 object-cover mb-2">
            <div class="text-center font-bold text-lg">Nom du Prestataire 2</div>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact</button>
        </a>

        <a href="details_prestataire2.html" class="bg-white rounded-lg p-5 shadow-lg shadow-blue-300 box">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/plumber-business-service-logo-design-template-b6f20bc4a17dffa2d20b10d0f82395c7_screen.jpg?ts=1570513154" alt="Logo" alt="Photo Prestataire 2" class="w-full h-32 object-cover mb-2" alt="Photo Prestataire 2" class="w-full h-32 object-cover mb-2">
            <div class="text-center font-bold text-lg">Nom du Prestataire 2</div>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact</button>
        </a>

        <a href="details_prestataire2.html" class="bg-white rounded-lg p-5 shadow-lg shadow-blue-300 box">
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/plumber-business-service-logo-design-template-b6f20bc4a17dffa2d20b10d0f82395c7_screen.jpg?ts=1570513154" alt="Logo" alt="Photo Prestataire 2" class="w-full h-32 object-cover mb-2">
            <div class="text-center font-bold text-lg">Nom du Prestataire 2</div>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact</button>
        </a>
        </div> -->

        <!-- choix 2 -->
        <!-- <div class="grid grid-cols-4 gap-4">
     
        <div class="card bg-white p-4 rounded cursor-pointer shadow-lg">
            <img src="photo.jpg" alt="Photo Prestataire" class="mb-2 h-32 w-full object-cover rounded">
            <div class="text-center text-xl font-bold">Billie Eilish</div>
            <a href="detail_prestataire.html" class="block bg-blue-500 text-white rounded py-2 m-4 hover:bg-blue-600 text-center">Contact</a>
        </div>
    
        <div class="card bg-white p-4 rounded cursor-pointer shadow-lg">
            <img src="photo.jpg" alt="Photo Prestataire" class="mb-2 h-32 w-full object-cover rounded">
            <div class="text-center text-xl font-bold">Peugh's Ghost</div>
            <a href="detail_prestataire.html" class="block bg-blue-500 text-white rounded py-2 m-4 hover:bg-blue-600 text-center">Contact</a>
        </div>
       
        <div class="card bg-white p-4 rounded cursor-pointer shadow-lg">
            <img src="photo.jpg" alt="Photo Prestataire" class="mb-2 h-32 w-full object-cover rounded">
            <div class="text-center text-xl font-bold">Valdez</div>
            <a href="detail_prestataire.html" class="block bg-blue-500 text-white rounded p-2 m-4 hover:bg-blue-600 text-center">Contact</a>
        </div>

        <div class="card bg-white p-4 rounded cursor-pointer shadow-lg">
            <img src="photo.jpg" alt="Photo Prestataire" class="mb-2 h-32 w-full object-cover rounded">
            <div class="text-center text-xl font-bold">Walid Karim</div>
            <a href="detail_prestataire.html" class="block bg-blue-500 text-white rounded p-2 m-4 hover:bg-blue-600 text-center">Contact</a>
        </div> -->
   


           <!-- choix3 -->

    <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 p-5">
   
        <a href="/billie" class="box p-4 bg-white w-80 rounded-lg text-center">
            <img src="https://i.pinimg.com/564x/c0/23/d9/c023d9318782192675d732b0123ed945.jpg" alt="Logo" alt="Prestataire 1" class="w-80 h-60 object-cover mb-2">
            <p class="text-lg font-bold">Billie</p>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</button>
        </a>

        <a href="prestataire2.html" class="box p-4 bg-white rounded-lg text-center">
            <img src="https://i.pinimg.com/564x/52/7a/44/527a44e67260062230a47da26f607056.jpg" alt="Logo" alt="Prestataire 1" class="w-80 h-60 object-cover mb-2">
            <p class="text-lg font-bold">Tariq</p>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</button>
        </a>

        <a href="prestataire2.html" class="box p-4 bg-white rounded-lg text-center">
            <img src="https://i.pinimg.com/236x/56/ba/54/56ba54f399bb1d151187c9987d56d902.jpg" alt="Logo" alt="Prestataire 1" class="w-80 h-60 object-cover mb-2">
            <p class="text-lg font-bold">Leslie</p>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</button>
        </a>

        <a href="prestataire2.html" class="box p-4 bg-white rounded-lg text-center">
            <img src="https://i.pinimg.com/564x/8b/80/1b/8b801bc9b746d959c0faa9440c4f0660.jpg" alt="Logo" alt="Prestataire 1" alt="Prestataire 2" class="w-80 h-60 object-cover mb-2">
            <p class="text-lg font-bold">Angèle</p>
            <button class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</button>
        </a>
    </div> 

  </section>

  <script>

    document.getElementById('openModal').addEventListener('click', function() {
      document.getElementById('modal').classList.remove('hidden');
    });


    function closeModal() {
      document.getElementById('modal').classList.add('hidden');
    }

    function togglePasswordVisibility() {
      var passwordInput = document.querySelector('input[type="password"]');
      var passwordIcon = document.querySelector('input[type="password"] + span svg');

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordIcon.classList.remove('text-gray-400');
        passwordIcon.classList.add('text-blue-500');
      } else {
        passwordInput.type = "password";
        passwordIcon.classList.remove('text-blue-500');
        passwordIcon.classList.add('text-gray-400');
      }
    }
  </script>

    </body>
</html>
