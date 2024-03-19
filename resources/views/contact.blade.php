@extends('include.main')
@section('content')
<div class="py-20 dark:bg-gradient-to-r from-cyan-500 to-green-500">
    <div class="max-w-6xl px-4 mx-auto md:px-0 font-poppins">
      <div class="flex flex-wrap items-center px-4">
        <div class="w-full md:w-1/2 md:mb-0">
          <h2
            class="mb-6 pl-20 text-3xl font-normal leading-tight tracking-tight text-gray-900 text-white md:text-5xl lg:text-6xl"
          >
            Contact Us
          </h2>
        </div>
      </div>
    </div>
  </div>
  <script
    defer
    src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
  ></script>

  <!--
// v0 by Vercel.
// https://v0.dev/t/2pOhrW3f0SW
-->
  <section class="bg-[#f4f7f6]">
    <div
      class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-2 gap-8"
    >
      <div>
        <h2 class="text-2xl font-bold mb-6 bg-gradient-to-r from-cyan-500 to-green-500 bg-clip-text text-transparent">Contact us</h2>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <input
            class="flex h-10 w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-1"
            placeholder="First name"
          /><input
            class="flex h-10 w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-1"
            placeholder="Last name"
          /><input
            class="flex h-10 w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-1"
            placeholder="Email address"
          /><input
            class="flex h-10 w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-1"
            placeholder="Company"
          /><input
            class="flex h-10 w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-1"
            placeholder="Subject"
          /><input
            class="flex h-10 w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-1"
            placeholder="Phone number"
          /><textarea
            class="flex min-h-[80px] w-full rounded-md border border-input border-none bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 col-span-2"
            placeholder="Tell us about your project."
          ></textarea>
        </form>
        <button
          class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-base font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-gradient-to-r from-cyan-500 to-green-500 text-white h-10 px-4 py-2 w-full md:w-auto">
       Send Message
        </button>
      </div>
      <div>
        <h2 class="text-2xl font-bold mb-6 bg-gradient-to-r from-cyan-500 to-green-500 bg-clip-text text-transparent">Get in Touch</h2>
        <p class="mb-4 text-gray-600">
          We are anticipating working with you! Fill in the form and our
          representative will get back to you within 24 hours. For any further
          details or queries drop us an email or call us!
        </p>
        <h3 class="text-xl font-bold mb-4 bg-gradient-to-r from-cyan-500 to-green-500 bg-clip-text text-transparent">The Office</h3>
        <div class="space-y-2">
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="text-white mr-2 bg-gradient-to-r from-cyan-500 to-green-500 rounded-full p-1"
            >
              <path
                d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5C2 7 4 5 6.5 5H18c2.2 0 4 1.8 4 4v8Z"
              ></path>
              <polyline points="15,9 18,9 18,11"></polyline>
              <path d="M6.5 5C9 5 11 7 11 9.5V17a2 2 0 0 1-2 2v0"></path>
              <line x1="6" x2="7" y1="10" y2="10"></line></svg>
              <a href="#" class="text-black">hello@businessplanner.ae</a>
          </div>
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="text-white mr-2 bg-gradient-to-r from-cyan-500 to-green-500 rounded-full p-1.5"
            >
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
              ></path></svg>
            <a href="#" class="text-black">+91 (3) 152 714 913</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
