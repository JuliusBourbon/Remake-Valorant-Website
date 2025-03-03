<nav class="bg-slate-900 fixed top-0 left-0 right-0" x-data="{ open: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <a href="/">
            <img src="../../img/site-logo.png" alt="Site Logo" class="h-5 w-7">
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4 md:space-x-6 md:ml-20 lg:space-x-20 lg:ml-32">
            <!-- Navbar links -->
            <a href="/" class="{{ request()->is('/') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300">Dashboard</a>
            <a href="/articles" class="{{ request()->Is('articles*') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300">Articles</a>
            <a href="/agents" class="{{ request()->is('agents') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300">Agent</a>
            <a href="/weapon" class="{{ request()->is('weapon') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300">Weapon</a>
            <a href="/map" class="{{ request()->is('map') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300">Map</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium transition-colors duration-300">Contact</a>
          </div>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-3 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">Open main menu</span>
          <!-- Hamburger icon -->
          <svg x-show="!open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Close (X) icon -->
          <svg x-show="open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div x-show="open" class="md:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="/" class="{{ request()->is('/') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
      <a href="/articles" class="{{ request()->Is('articles*') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} block rounded-md px-3 py-2 text-base font-medium">Articles</a>
      <a href="/agents" class="{{ request()->is('agents') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} block rounded-md px-3 py-2 text-base font-medium">Agent</a>
      <a href="/weapon" class="{{ request()->is('weapon') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} block rounded-md px-3 py-2 text-base font-medium">Weapon</a>
      <a href="/map" class="{{ request()->is('map') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} block rounded-md px-3 py-2 text-base font-medium">Map</a>
      <a href="/contact" class="{{ request()->is('contact') ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-red-600 hover:text-white'}} block rounded-md px-3 py-2 text-base font-medium">Contact</a>
    </div>
  </div>
</nav>
