<x-layout>
  <x-slot name="content">
    <section class="px-6 py-4 font-sans">
      <main class="max-w-md mx-auto">
        <div class="text-center">
          <h1 class="font-bold text-blue-700 text-3xl">
            Welcome Back
          </h1>
          <p class="my-4 text-xs">
            <a
              href="/register"
              class="hover:underline text-blue-400"
            >
              Do not have an account? create one
            </a>
          </p>
        </div>
        <form
          method="POST"
          action="/login"
        >
          <div class="my-2">
            <label
              for="email"
              class="block mb-2 uppercase font-bold text-gray-700"
            >
              Email Adress
            </label>
            <input
              type="email"
              class="border border-gray-400 p-2 w-full rounded"
              name="email"
              id="email"
              required
            >

          </div>
          <div class="my-2">
            <label
              for="password"
              class="block mb-2 uppercase font-bold text-gray-700"
            >
              Password
            </label>
            <input
              type="password"
              class="border border-gray-400 p-2 w-full rounded"
              name="password"
              id="password"
              required
            >
          </div>

          <div class="flex justify-center">
            <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4
               rounded w-full"
              type="submit"
            >
              Log In
            </button>
          </div>
        </form>
      </main>
    </section>
  </x-slot>
</x-layout>
