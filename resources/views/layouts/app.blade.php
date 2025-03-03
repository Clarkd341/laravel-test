<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation</title>

    <!-- Inclure Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <!-- formulaire de réservation titre -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-semibold text-center mb-6">Formulaire de Réservation</h1>
         <!-- fin -->

        <!-- Affichage du formulaire de réservation -->
        @livewire('booking-manager')
    </div>
     <!-- fin -->

    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
