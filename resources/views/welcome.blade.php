<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Payment Task</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
        <script type="text/javascript">
          var APP_URL = {!! json_encode(url('/')) !!}
        </script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <header class="bg-black text-white">
          <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="uppercase">NightBright</span>
              </a>
            </div>
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white" id="menu">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div class="hidden lg:flex items-center lg:gap-x-12">
              <a href="#" class="text-sm/6 font-semibold text-white">Find</a>
              <a href="#" class="text-sm/6 font-semibold">Become</a>
              <a href="#" class="text-sm/6 font-semibold">Forum</a>
              <a href="#" class="text-sm/6 font-semibold">About</a>
              <a href="#" class="text-sm/6 font-semibold">Sign In</a>
            </div>
          </nav>
          <!-- Mobile menu, show/hide based on menu open state. -->
          <div class="hidden" role="dialog" aria-modal="true" id="mobile-menu">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
              <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="uppercase text-gray-900">NightBright</span>
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-menu">
                  <span class="sr-only">Close menu</span>
                  <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                  <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Find</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Become</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Forum</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Sign In</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <section class="bg-white rounded-xl shadow p-6 max-w-5xl mx-auto mt-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Left: Logo and Info -->
            <div class="flex flex-col md:flex-row items-center text-center gap-6">
              <!-- Logo -->
              <img src="public/images/Image-empty-state.png" alt="Night Bright Logo" class="w-24 h-24 rounded-full border text-center" />

              <!-- Name and Location -->
              <div>
                <h2 class="text-2xl font-semibold text-gray-900">Night Bright</h2>
                <div class="flex flex-col md:flex-row gap-2 mt-2">
                  <span class="bg-[#efe5d4] text-gray-700 text-sm px-3 py-1 rounded-full italic">North America</span>
                  <span class="bg-[#efe5d4] text-gray-700 text-sm px-3 py-1 rounded-full italic">United States</span>
                </div>
              </div>
            </div>

            <!-- Right: Donate Button -->
            <button class="bg-[#bd9553] text-white font-semibold px-6 py-2 rounded-full flex items-center gap-2 hover:bg-[#a67e45] transition" id="openModal">
              Donate
              <span class="border border-white rounded-full p-1 flex items-center justify-center w-6 h-6">
                <svg class="w-3 h-3" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </span>
            </button>
            </div>

            <!-- Description -->
            <div class="mt-8 border-t pt-6 text-gray-800 text-base leading-relaxed">
            <p>
              Night Bright is a non-profit 501(c)3. We strive to make donating to your favorite causes an enjoyable experience
              that leads to a deeper connection with the thousands of beautiful people spreading the love of God throughout the
              globe. Please join us in making it easier to find, fund, and resource missions worldwide.
            </p>
            </div>
        </section>
        <!-- Modal Overlay -->
        <div id="modalOverlay" class="fixed inset-0 bg-black/50 z-40 hidden"></div>
        <!-- Modal Content -->
        <div id="donationModal"
             class="fixed top-0 left-0 h-full w-full md:w-[550px] bg-[#f8f7f6] z-50 shadow-xl transform -translate-x-full transition-transform duration-300 overflow-y-auto">
          <div class="flex justify-end p-4">
            <button id="closeModal" class="text-[#bd9553] text-2xl">&times;</button>
          </div>

          <div class="bg-white rounded-md shadow-md mx-4 mb-10 p-6">
            <form class="group" novalidate id="donationForm" action="{{ url('').'/checkout' }}" method="post">
              @csrf
              <input type="hidden" name="donation_amount" id="donation_amount">
              <input type="hidden" name="tip_amount" id="tip_amount">
              <input type="hidden" name="proccess_amount" id="proccess_amount">
              <div id="setep-1">
                <h2 class="text-lg font-semibold mb-4">
                  Missionary Donation
                </h2>
                <div class="border-t pt-6 text-gray-900 text-bold"></div>
                <!-- Donation Type Tabs -->
                <div class="flex border rounded overflow-hidden mb-4">
                  <input type="radio" id="one-time" name="donation_type" value="one-time" class="hidden peer/one" checked>
                  <label for="one-time"
                    class="w-1/2 py-2 text-[#bd9553] bg-white text-center cursor-pointer transition
                           peer-checked/one:bg-[#bd9553] peer-checked/one:text-white peer-checked/one:font-semibold">
                    One-Time
                  </label>
                  <input type="radio" id="monthly" name="donation_type" value="monthly" class="hidden peer/month">
                  <label for="monthly"
                    class="w-1/2 py-2 text-[#bd9553] bg-white text-center cursor-pointer transition
                           peer-checked/month:bg-[#bd9553] peer-checked/month:text-white peer-checked/month:font-semibold">
                    Monthly
                  </label>
                </div>
                <!-- Donor Name and Email -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-4">
                  <input type="text" placeholder="Donor's Name" class="border border-blue-400 focus:outline-none px-3 py-2 rounded" name="donation_name" />
                  <label for="">
                    <input type="email" id="email" placeholder="Donor's Email" class="w-full border border-blue-400 focus:outline-none px-3 py-2 rounded peer invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="donation_email" />
                  </label>
                </div>
                <!-- Dropdown -->
                <select class="w-full border border-[#bd9553] rounded px-3 py-2 mb-4" name="donation_person">
                  <option>Night Bright</option>
                </select>

                <!-- Stay Anonymous -->
                <div class="flex items-center mb-4">
                  <input type="checkbox" id="anonymous" class="accent-[#bd9553] mr-2" name="stay_anonymous">
                  <label for="anonymous" class="text-sm">Stay Anonymous</label>
                </div>

                <!-- Donation Buttons -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-center text-[#bd9553] font-semibold mb-4">
                  <input type="radio" name="amount" id="amount-10" value="10" class="hidden peer/amt10">
                  <label for="amount-10"
                         class="peer-checked/amt10:bg-[#bd9553] border-current peer-checked/amt10:text-white border py-2 rounded cursor-pointer">
                    10$
                  </label>

                  <input type="radio" name="amount" id="amount-25" value="25" class="hidden peer/amt25" checked>
                  <label for="amount-25"
                         class="peer-checked/amt25:bg-[#bd9553] border-current peer-checked/amt25:text-white border py-2 rounded cursor-pointer">
                    25$
                  </label>

                  <input type="radio" name="amount" id="amount-50" value="50" class="hidden peer/amt50">
                  <label for="amount-50"
                         class="peer-checked/amt50:bg-[#bd9553] border-current peer-checked/amt50:text-white border py-2 rounded cursor-pointer">
                    50$
                  </label>

                  <input type="radio" name="amount" id="amount-100" value="100" class="hidden peer/amt100">
                  <label for="amount-100"
                         class="peer-checked/amt100:bg-[#bd9553] border-current peer-checked/amt100:text-white border py-2 rounded cursor-pointer">
                    100$
                  </label>

                  <input type="radio" name="amount" id="amount-250" value="250" class="hidden peer/amt250">
                  <label for="amount-250"
                         class="peer-checked/amt250:bg-[#bd9553] border-current peer-checked/amt250:text-white border py-2 rounded cursor-pointer">
                    250$
                  </label>

                  <input type="radio" name="amount" id="amount-500" value="500" class="hidden peer/amt500">
                  <label for="amount-500"
                         class="peer-checked/amt500:bg-[#bd9553] border-current peer-checked/amt500:text-white border py-2 rounded cursor-pointer">
                    500$
                  </label>

                  <input type="radio" name="amount" id="amount-1000" value="1000" class="hidden peer/amt1000">
                  <label for="amount-1000"
                         class="peer-checked/amt1000:bg-[#bd9553] border-current     peer-checked/amt1000:text-white border py-2 rounded cursor-pointer">
                    1000$
                  </label>

                  <input type="number" name="amount" id="amount-other" value="" placeholder="Other" class="border px-3">
                </div>

                <!-- Add Message -->
                <div class="flex hidden mb-2" id="msg">
                  <input type="text" class="w-full border border-blue-400 focus:outline-none px-3 py-2 rounded" name="donation_message" />
                </div>
                <div class="text-[#bd9553] mb-4 text-sm cursor-pointer" id="add-msg">
                  + Add a message
                </div>

                <span class="mt-2 text-sm text-red-500 error-msg">
                  
                </span>
                <!-- Continue Button -->
                <div class="flex justify-end">
                  <button type="button" class="bg-[#bd9553] text-white py-2 px-2 rounded" id="next">Continue</button>
                </div>
              </div>
              <div id="setep-2" class="hidden">
                  <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold">Final Details</h2>
                  </div>

                  <div class="border-t pt-6 text-gray-900 text-bold"></div>

                  <!-- Donation Summary -->
                  <div class="mb-4">
                    <div class="flex justify-between">
                      <span class="font-medium">Donation</span>
                      <span class="font-medium">$ <span id="donation">25</span></span>
                    </div>

                    <div class="flex justify-between mt-2">
                      <div>
                        <label class="block text-sm font-medium mb-1">Credit card processing fees
                        </label>
                        <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm" id="processing">
                          <option value="0.00">Select Payment Method</option>
                          <option value="0.88">AMEX Card</option>
                          <option value="0.85">Visa & Others</option>
                          <option value="0.20">US Bank Account</option>
                          <option value="1.03">Cash App Pay</option>
                        </select>
                      </div>
                      <span class="font-medium">$ <span id="fee">0.00</span></span>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                      You pay the CC fee so 100% of your donation goes to your chosen missionary or cause.
                    </p>
                  </div>

                  <!-- Tip Section -->
                  <div class="bg-yellow-50 border border-yellow-200 rounded p-4 mb-4">
                    <div class="flex items-center justify-between">
                      <p class="font-semibold text-sm">Add a tip to support Night Bright</p>
                      <select class="border border-gray-300 rounded px-2 py-1 text-sm" id="tip">
                        <option value="0">0%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="12" selected>12%</option>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                      </select>
                    </div>
                    <p class="text-xs text-gray-600 mt-2">
                      <strong>Why Tip?</strong> Night Bright does not charge any platform fees and relies on your generosity to support this free service.
                    </p>
                  </div>

                  <!-- Contact Checkbox -->
                  <div class="flex items-start mb-6">
                    <input id="contact" type="checkbox" class="mt-1 mr-2 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded" checked name="contact_me">
                    <label for="contact" class="text-sm text-gray-700">Allow Night Bright Inc to contact me</label>
                  </div>

                  <!-- Finish Button -->
                  <button type="button" class="w-full bg-yellow-700 hover:bg-yellow-800 text-white text-sm font-semibold py-2 rounded" id="finish">
                    Finish ($ <span id="total"></span>)
                  </button>
              </div>
            </form>
          </div>
        </div>
        <div id="card-element" class="form-control" ></div>
    </body>
</html>
