<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <title>Elegant Linktree</title>
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet"
  >
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  >
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

  <div class="max-w-sm w-full bg-white shadow-lg rounded-lg overflow-hidden">
    <div
      class="bg-cover bg-center h-56 p-4"
      style="background-image: url('https://source.unsplash.com/random')"
    >
      <div class="flex justify-end">
        <svg
          class="h-6 w-6 text-white"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 4h16M4 8h16M4 12h16m-7 8h7"
          ></path>
        </svg>
      </div>
    </div>
    <div class="p-4">
      <div class="flex justify-center -mt-16">
        <img
          class="h-20 w-20 object-cover rounded-full border-2 border-white"
          src="https://avatars.githubusercontent.com/u/583231?v=4"
          alt="profile picture"
        >
      </div>
      <div class="text-center mt-2">
        <h2 class="text-lg font-semibold text-gray-900">John Doe</h2>
        <p class="text-sm text-gray-700">Web Developer</p>
      </div>
      <div class="mt-4">
        <div class="flex justify-center">
          <div class="flex items-center border-gray-300 rounded-full px-4 py-1 bg-gray-100">
            <svg
              class="h-6 w-6 text-gray-600 mr-1"
              fill="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19 6a2 2 0 100-4 2 2 0 000 4zM4 6a2 2 0 100-4 2 2 0 000 4zM12 6a2 2 0 100-4 2 2 0 000 4zM4 10h16v12H4z"
              />
            </svg>
            <span class="text-gray-600 text-sm"> @johndoe </span>
          </div>
        </div>
      </div>
    </div>
    <div class="p-4 border-t border-gray-200">
      <h3 class="text-lg font-semibold text-gray-800 mb-2 text-center">Social Media</h3>
      <ul class="flex flex-col space-y-3 mb-4">
        <li>
          <a
            href="#"
            class="flex items-center justify-center w-full text-center text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg px-4 py-3 hover:bg-gray-300"
          >
            <i class="fab fa-facebook-f mr-2"></i> Facebook
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center w-full text-center text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg px-4 py-3 hover:bg-gray-300"
          >
            <i class="fab fa-twitter mr-2"></i> Twitter
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center w-full text-center text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg px-4 py-3 hover:bg-gray-300"
          >
            <i class="fab fa-instagram mr-2"></i> Instagram
          </a>
        </li>
      </ul>
      <h3 class="text-lg font-semibold text-gray-800 mb-2 text-center">Our Sites</h3>
      <ul class="flex flex-col space-y-3">
        <li>
          <a
            href="#"
            class="flex items-center justify-center w-full text-center text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg px-4 py-3 hover:bg-gray-300"
          >
            <i class="fas fa-globe mr-2"></i> Our Website
          </a>
        </li>
        <li>
          <a
            href="#"
            class="flex items-center justify-center w-full text-center text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg px-4 py-3 hover:bg-gray-300"
          >
            <i class="fas fa-mobile-alt mr-2"></i> Mobile App
          </a>
        </li>
      </ul>
    </div>
  </div>

</body>

</html>