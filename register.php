<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Title -->
    <title>Tugas PHP | Login Form</title>

    <!-- CDN TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

  </head>
  
  <body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-sm bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Register</h2>
      <form action="php/process_register.php" method="POST">
        <!-- Input Username -->
        <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Masukan Password"
            required
            class="w-full px-4 py-2 mt-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300"
          />
        </div>

        <!-- Input Password -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Masukan Password"
            required
            class="w-full px-4 py-2 mt-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 border-gray-300"
          />
        </div>

        <!-- Button Login -->
        <button
          type="submit"
          class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
          Login
        </button>
        <p class="text-center py-4">Sudah Punya AKun? <a href="index.php" class="text-blue-600">Login</a></p>
      </form>
    </div>
  </body>
</html>
