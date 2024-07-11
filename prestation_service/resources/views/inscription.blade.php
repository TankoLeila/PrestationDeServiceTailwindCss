  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inscription</title>
          <link rel="preconnect" href="https://fonts.bunny.net">
          <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
          <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <section>
      <nav class="bg-blue-300 p-4 flex justify-around shadow-lg">
          <div>
              <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/plumber-business-service-logo-design-template-b6f20bc4a17dffa2d20b10d0f82395c7_screen.jpg?ts=1570513154" alt="Logo" class="h-10 w-10" alt="Logo" class="h-8">
          </div>

          <div class="flex items-center space-x-4">
              <a href="/" class="text-white font-semibold text-xl">Accueil</a>
          </div>
      </nav>
      </section>
  <section class="h-screen justify-center items-center flex flex-col gap-y-5">
    

      <div>
          <h1 class="text-3xl font-bold">Bienvenue chez SkillSavy</h1>
      </div>

  <section class="flex">
  <a href="#" id="client-link" class="p-8 m-10 shadow-lg rounded-lg">   
      <div class="flex justify-center">  
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 text-blue-400">
      <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
      <path d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
      <path fill-rule="evenodd" d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
      </svg>
    </div>
  <h2 class="text-lg font-semibold">J'ai besoin d'un service</h2>
          <p>Trouvez le prestataire idéal pour </br> vos services au quotidien! </p>
  </a>

      <!-- <div>
          <span class="text-gray-400 bg-red-300 items-center">OU</span>
      </div> -->

      <a href="#" id="prestataire-link" class="p-8 m-10 shadow-lg rounded-lg">

      <div class="flex justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 text-blue-400">
          <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
          <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
          </svg>

      </div>
    
      <h2 class="text-lg font-semibold">Devenir prestataire</h2>
      <p>Augmenter vos revenus en rendant  </br>  service près de chez vous</p>
  </a>
      </section>
      <div>
          <span>Vous avez déjà un compte?</span>
          <a href="#" class="text-blue-500" id="connexion-link">Connexion</a>
      </div>
                    <!-- modal de connexion -->
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

    <section>
      <div class="bg-red-400">
      
      </div>
    </section>
              <!-- modal du client -->
    <div id="client-modal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
      <div class="bg-white rounded-lg shadow-lg p-8 w-96">
          <!-- Bouton pour fermer la modal -->
          <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10 5.293 13.293a1 1 0 101.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
          <h2 class="text-2xl font-bold mb-4 text-center text-blue-400">Consulter les services?</h2>
          <!-- Formulaire -->
          <form id="client-form">
              <div class="mb-4">
                  <div class="relative">
                      <input type="text" id="nom" name="nom" placeholder="Nom" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                  </div>
              </div>
              <div class="mb-4">
                  <div class="relative">
                      <input type="text" id="prenom" name="prenom" placeholder="Prénom" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                  </div>
              </div>
              <div class="mb-4 flex items-center">
                      <input type="tel" id="telephone" name="telephone" placeholder="Numéro de téléphone" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
              <div class="mb-4">
                      <input type="text" id="adresse" name="adresse" placeholder="Adresse" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                      <i class="fas fa-map-marker-alt absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              </div>
        
            <div>
              <input type="email" id="email" name="email" placeholder="Email" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div>
              <input type="password" id="password" name="password" placeholder="Password" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
    
            <div class="flex justify-center py-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Valider</button>
            </div>
            
          </form>
      </div>
  </div>

          <!-- Modal du prestataire -->
    <div id="prestataire-modal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
      <div class="bg-white rounded-lg shadow-lg p-8 w-96">
          <!-- Bouton pour fermer la modal -->
          <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10 5.293 13.293a1 1 0 101.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
          <h2 class="text-2xl font-bold mb-4 text-center text-blue-400">Devenir prestataire</h2>
          <!-- Formulaire -->
          <form id="prestataire-form">
              <div class="mb-4">
                  <div class="relative">
                      <input type="text" id="nom" name="nom" placeholder="Nom" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                  </div>
              </div>
              <div class="mb-4">
                  <div class="relative">
                      <input type="text" id="prenom" name="prenom" placeholder="Prénom" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                  </div>
              </div>
              <div class="mb-4 flex items-center">
                      <input type="tel" id="telephone" name="telephone" placeholder="Numéro de téléphone" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
              <div class="mb-4">
                      <input type="text" id="adresse" name="adresse" placeholder="Adresse" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                      <i class="fas fa-map-marker-alt absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              </div>
        
                  <div class="relative">
                      <input type="time" id="disponibilite" name="disponibilite" placeholder="Disponibilité" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
                  </div>
        
            <div>
              <input type="email" id="email" name="email" placeholder="Email" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div>
              <input type="password" id="password" name="password" placeholder="Password" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4 flex items-center">
              <input type="file" id="photo" name="photo" accept="image/*" required class="w-full pl-10 py-2 border-b border-gray-300 focus:outline-none focus:border-blue-500">
            </div>
    
            <div class="flex justify-center py-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Valider</button>
            </div>
            
          </form>
      </div>
  </div>

  </section>

  <script>
    const connexionLink = document.getElementById("connexion-link");
    const connexionModal = document.getElementById("modal");
  

    connexionLink.addEventListener("click", function(event) {
        event.preventDefault();
        connexionModal.classList.remove("hidden");
    });

    const prestataireLink = document.getElementById("prestataire-link");
    const prestataireModal = document.getElementById("prestataire-modal");
   
    prestataireLink.addEventListener("click", function(event) {
        event.preventDefault();
        prestataireModal.classList.remove("hidden");
    });

    const clientLink = document.getElementById("client-link");
    const clientModal = document.getElementById("client-modal");

    clientLink.addEventListener("click", function(event) {
        event.preventDefault();
        clientModal.classList.remove("hidden");
    });
    function closeModal() {
        connexionModal.classList.add("hidden");
        prestataireModal.classList.add("hidden");
        clientModal.classList.add("hidden");
    }
</script>

<!--   
  <script>

const connexionLink = document.getElementById("connexion-link");
    const connexionModal = document.getElementById("modal");

    connexionLink.addEventListener("click", function() {
        connexionModal.classList.remove("hidden");
    });

    function closeModal() {
        connexionModal.classList.add("hidden");
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
    </script>  -->

    <!-- Script pour ouvrir/fermer la modal du prestataire -->
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
<!-- 
  <script>
      const prestataireLink = document.getElementById("prestataire-link");
      const prestataireModal = document.getElementById("prestataire-modal");
      const closeModal = document.getElementById("close-modal");

      prestataireLink.addEventListener("click", function() {
          prestataireModal.classList.remove("hidden");
      });

      closeModal.addEventListener("click", function() {
          prestataireModal.classList.add("hidden");
      });
      </script> -->
  
  </body>
  </html>