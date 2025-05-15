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
          <div class="flex items-center justify-between mx-4 lg:mx-10 p-4 mb-4">
            <span class="text-[#bd9553] text-sm">DONATE</span>
            <button id="closeModal" class="text-[#bd9553] text-4xl">&times;</button>
          </div>

          <div class="bg-white rounded-lg shadow-2xl shadow-gray-500 mx-2 lg:mx-10 mb-10">
            <form class="group" novalidate id="donationForm" action="{{ url('').'/checkout' }}" method="post">
              @csrf
              <input type="hidden" name="donation_amount" id="donation_amount">
              <input type="hidden" name="tip_amount" id="tip_amount">
              <input type="hidden" name="proccess_amount" id="proccess_amount">
              <div id="setep-1">
                <h2 class="text-md font-bold px-4 py-4 mt-1">
                  Missionary Donation
                </h2>
                <div class="border-t pt-6 border-[#c7c7c7]"></div>
                <!-- Donation Type Tabs -->
                <div class="flex border rounded overflow-hidden mb-6 mx-6">
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
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-4 mx-6">
                  <input type="text" placeholder="Donor's Name" class="border border-blue-400 focus:outline-none px-3 py-2 rounded" name="donation_name" />
                  <label for="">
                    <input type="email" id="email" placeholder="Donor's Email" class="w-full border border-blue-400 focus:outline-none px-3 py-2 rounded peer invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="donation_email" />
                  </label>
                </div>
                <!-- Dropdown -->
                <div class="flex mx-6 mb-4">                
                  <select class="w-full border border-[#bd9553] rounded px-3 py-2" name="donation_person">
                    <option value="Andrii Kuchkuda">Andrii Kuchkuda</option>
                    <option value="Annu ss">Annu ss</option>
                    <option value="Brandon Croley">Brandon Croley</option>
                    <option value="Chris Sheppler">Chris Sheppler</option>
                    <option value="Dan Johnson">Dan Johnson</option>
                    <option value="Dave and Patti Schatzmann">Dave and Patti Schatzmann</option>
                    <option value="Dephney Pukienei">Dephney Pukienei</option>
                    <option value="Dipti Test 2">Dipti Test 2</option>
                    <option value="Don Butera">Don Butera</option>
                    <option value="Edward Nye">Edward Nye</option>
                    <option value="Fakhar Zaman">Fakhar Zaman</option>
                    <option value="Fro Cro">Fro Cro</option>
                    <option value="Gayoy Cybtric">Gayoy Cybtric</option>
                    <option value="Hillary and Jeff Thompson">Hillary and Jeff Thompson</option>
                    <option value="Janell Wallace">Janell Wallace</option>
                    <option value="Joel & Laci Fields">Joel & Laci Fields</option>
                    <option value="Johnny & Kayti Toms">Johnny & Kayti Toms</option>
                    <option value="Johnny & Kayti Toms">Johnny & Kayti Toms</option>
                    <option value="Joyce Maiyene">Joyce Maiyene</option>
                    <option value="Julie Ann Abayan">Julie Ann Abayan</option>
                    <option value="Kamran Hussain">Kamran Hussain</option>
                    <option value="Lauren Morgan">Lauren Morgan</option>
                    <option value="Loknath Pradhan">Loknath Pradhan</option>
                    <option value="Luke Junior Kasindimi">Luke Junior Kasindimi</option>
                    <option value="Marty Vanderzanden">Marty Vanderzanden</option>
                    <option value="Mihir Gandhi">Mihir Gandhi</option>
                    <option value="Mitchell Stevens">Mitchell Stevens</option>
                    <option value="NOMAN MUREED">NOMAN MUREED</option>
                    <option value="NOMAN MUREED">NOMAN MUREED</option>
                    <option value="Nicolas Wallace">Nicolas Wallace</option>
                    <option value="Nicole Summers">Nicole Summers</option>
                    <option value="Night Bright" selected>Night Bright</option>
                    <option value="Rome and Kate Johnson">Rome and Kate Johnson</option>
                    <option value="Ronald & Esther Marcotte">Ronald & Esther Marcotte</option>
                    <option value="Rory and Nicole Donaldson">Rory and Nicole Donaldson</option>
                    <option value="Stephen Cahill">Stephen Cahill</option>
                    <option value="Steven Hylland">Steven Hylland</option>
                    <option value="Steven Sundheim">Steven Sundheim</option>
                    <option value="Stu Shipper">Stu Shipper</option>
                    <option value="Test Member">Test Member</option>
                    <option value="Umair Ali">Umair Ali</option>
                    <option value="Vandana Gaikwad">Vandana Gaikwad</option>
                    <option value="Vijeta Mishra">Vijeta Mishra</option>
                    <option value="Web Strives">Web Strives</option>
                    <option value="Wogal Apklamp">Wogal Apklamp</option>
                    <option value="komal Rajpure">komal Rajpure</option>
                    <option value="mike john">mike john</option>
                    <option value="shayan nasir">shayan nasir</option>
                    <option value="shayan nasir">shayan nasir</option>
                  </select>
                </div>
                <div class="flex mx-6 mb-4">
                  <label for="anonymous" class="text-sm sm:hidden">
                    <input type="checkbox" id="anonymous" class="accent-[#bd9553] mr-2" name="stay_anonymous">
                    Stay Anonymous
                  </label>
                </div>
                <!-- Donation Buttons -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-center text-[#bd9553] font-semibold mb-4 mx-6">
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
                <div class="flex hidden mb-2 mx-6" id="msg">
                  <input type="text" class="w-full border border-blue-400 focus:outline-none px-3 py-2 rounded" name="donation_message" />
                </div>
                <div class="text-[#bd9553] text-sm cursor-pointer mx-6 mb-2" id="add-msg">
                  + Add a message
                </div>
                
                <div class="border-t border-[#c7c7c7]"></div>
                <span class="mb-2 text-sm text-red-500 error-msg mx-6">
                </span>
                <!-- Continue Button -->
                <div class="flex items-center justify-between mx-6 pb-4">
                  <!-- Stay Anonymous -->
                  <label for="anonymous" class="text-sm hidden sm:block">
                    <input type="checkbox" id="anonymous" class="accent-[#bd9553] mr-2" name="stay_anonymous">
                    Stay Anonymous
                  </label>
                  <button type="button" class="bg-[#bd9553] text-white font-semibold py-2 px-6 rounded" id="next">Continue</button>
                </div>
              </div>
              <div id="setep-2" class="hidden">
                  <div class="flex items-center space-x-2 px-4 py-4 mt-1">
                    <svg preserveAspectRatio="none" data-bbox="20 51.5 160 97" viewBox="20 51.5 160 97" height="15" width="20" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="" class="cursor-pointer rotate-180" id="back">
                      <g>
                          <path d="m131.5 51.5-8.1 8.1L158.1 95H20v11h138.1l-34.7 34.4 8.1 8.1L180 100l-48.5-48.5z" fill-rule="evenodd" clip-rule="evenodd"></path>
                      </g>
                    </svg>
                    <h2 class="text-md font-semibold">Final Details</h2>
                  </div>

                  <div class="border-t pt-6 border-[#c7c7c7]"></div>

                  <!-- Donation Summary -->
                  <div class="mb-4 mx-6">
                    <div class="flex justify-between mb-4">
                      <span class="font-medium">Donation</span>
                      <span class="font-medium">$ <span id="donation">25</span></span>
                    </div>

                    <div class="flex items-end justify-between mt-2 mb-6">
                      <div>
                        <label class="block text-sm font-medium mb-2">Credit card processing fees
                        </label>
                        <select class="w-full border border-gray-300 rounded px-3 py-2 text-sm" id="processing">
                          <option value="0.00">Select Payment Method</option>
                          <option value="0.88">AMEX Card</option>
                          <option value="0.85">Visa & Others</option>
                          <option value="0.20">US Bank Account</option>
                          <option value="1.03">Cash App Pay</option>
                        </select>
                      </div>
                      <span class="font-medium mb-2">$ <span id="fee">0.00</span></span>
                    </div>
                    <p class="w-full sm:w-1/2 text-[10px] text-gray-500 mt-2">
                      You pay the CC fee so 100% of your donation goes to your chosen missionary or cause.
                    </p>
                  </div>

                  <!-- Tip Section -->
                  <div class="bg-yellow-50 border border-yellow-200 rounded py-4 px-6 mb-4">
                    <div class="flex items-center justify-between">
                      <p class="font-semibold text-xs">Add a tip to support Night Bright</p>
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
                  <div class="flex items-end mb-6 mx-6">
                    <input id="contact" type="checkbox" class="mt-1 mr-2 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded" checked name="contact_me">
                    <label for="contact" class="text-[10px] text-gray-700">Allow Night Bright Inc to contact me</label>
                  </div>

                  <div class="border-t pt-6 border-[#c7c7c7]"></div>

                  <!-- Finish Button -->
                  <div class="flex justify-end mx-6 pb-4">
                    <button type="button" class="bg-yellow-700 hover:bg-yellow-800 text-white text-sm font-semibold py-2 px-6 rounded" id="finish">
                    Finish ($ <span id="total"></span>)
                    </button>
                  </div>
              </div>
            </form>
          </div>
        </div>
        <div id="card-element" class="form-control" ></div>
    </body>
</html>
