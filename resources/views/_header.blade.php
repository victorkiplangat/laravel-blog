<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex justify-between h-16">
      <div class="flex-shrink-0 flex items-center">
        <p class="text-white text-3xl">Cheruiyot's blog</p>
      </div>
      <div class="flex-1 flex  justify-end items-center">
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a
              href="/"
              class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm
              hover:bg-blue-500
              font-medium"
              aria-current="page"
            >Home Page</a>
             @auth
              <form 
              action="/logout"
              method="POST"
              >
            @csrf 
            <button type="submit" 
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
            >Log out</button>
            </form>
             @else
             <a
              href="/login"
              class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
            >Login</a>

             @endauth

            @auth
            <p
              
              class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Welcome Back {{auth()->user()->fullname}}</p>
            @else
            <a
              href="/register"
              class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
            >Register</a>
            @endauth
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</nav>
