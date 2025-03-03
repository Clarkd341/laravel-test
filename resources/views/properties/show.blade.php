<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propriété Réservée</title>
    <!-- Inclure Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="bg-white p-6 rounded-lg shadow-lg w-96 mx-auto">
        <h1 class="text-xl font-bold mb-2 text-center">{{ $property->name }}</h1>
        <h2 class="text-lg font-semibold mb-4 text-center">{{ __('Description:') }}</h2>
        <div class="text-center shadow-lg p-4 rounded">
            <p class="text-gray-700 mb-2">{{ $property->description }}</p>
            <p class="text-white bg-green-500 p-2 rounded shadow">{{ __('Votre réservation a été confirmée.') }}</p>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
