<?php include('layouts/header.php'); ?>

<h1 class="text-2xl font-bold mb-6 text-gray-800">lead Stages</h1>

  <div class="grid grid-cols-1 md:grid-cols-5 gap-1">

    <!-- Column: New -->
    <div class="bg-white rounded-md shadow flex flex-col">
      <div class="flex items-center justify-between border-t-4 border-blue-500 px-3 py-2">
        <h2 class="font-semibold text-sm">Initial Stage</h2>
      </div>
      <div id="stage1" data-color="border-blue-500" class="p-3 space-y-3 min-h-[450px]"
           ondrop="drop(event)" ondragover="allowDrop(event)">
        
        <!-- Lead Card -->
        <div id="lead1" draggable="true" ondragstart="drag(event)" class="bg-white rounded shadow-md cursor-move hover:shadow-lg">
          <div class="border-t-4 border-blue-500 rounded-t"></div>
          <div class="p-3 space-y-2">
            <div class="flex items-center justify-between">
              <p class="font-semibold text-sm">Ramesh Das</p>
              <span class="text-blue-600 font-semibold text-xs"> &#8377;9000</span>
            </div>
            <p class="text-xs text-gray-500">+91 98765 43210</p>
            <span class="text-[11px] bg-blue-100 text-blue-600 px-2 py-0.5 rounded">New</span>
            <button class="text-xs bg-green-100 text-green-600 px-2 py-0.5 rounded hover:text-green-800 view-btn">View</button>

            <!-- Hidden Details -->
            <div class="hidden mt-2 p-2 text-xs bg-gray-50 rounded border border-gray-200 details">
              <p><span class="font-semibold">Status:</span> Follow-up Scheduled</p>
              <p><span class="font-semibold">Amount:</span> ₹7500</p>
              <p><span class="font-semibold">Notes:</span> Interested in demo session.</p>
            </div>

            <!-- Icon Buttons -->
            <div class="flex flex-wrap gap-2 mt-3">
              <button class="flex items-center gap-1 bg-blue-500 text-white text-xs px-2 py-1 rounded hover:bg-blue-600">
                <!-- Phone Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2.28a1 1 0 01.95.684l1.2 3.6a1 1 0 01-.217.992L8.1 10.9a11.042 11.042 0 005 5l2.625-1.113a1 1 0 01.992.217l3.6 1.2a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z"/>
                </svg>
              </button>

              <button class="flex items-center gap-1 bg-green-500 text-white text-xs px-2 py-1 rounded hover:bg-green-600">
                <!-- WhatsApp Logo -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 32 32" fill="currentColor">
                  <path d="M16.004 3C9.373 3 4 8.372 4 15c0 2.642.859 5.103 2.324 7.1L4 29l7.108-2.278A11.9 11.9 0 0016.004 27c6.628 0 12-5.373 12-12s-5.372-12-11.999-12zm0 2c5.522 0 10 4.478 10 10s-4.478 10-10 10a9.9 9.9 0 01-5.378-1.57l-.385-.25-4.228 1.355 1.376-4.067-.254-.395A9.87 9.87 0 016 15c0-5.522 4.478-10 10-10zm5.635 13.154c-.308-.154-1.815-.895-2.096-.996-.28-.103-.485-.154-.688.154-.205.308-.791.996-.969 1.2-.18.205-.357.231-.664.077-.308-.154-1.3-.478-2.477-1.52-.915-.816-1.531-1.823-1.711-2.131-.18-.308-.019-.474.135-.628.138-.137.308-.357.462-.536.154-.18.205-.308.308-.513.103-.205.052-.385-.026-.538-.077-.154-.688-1.658-.943-2.271-.248-.596-.5-.515-.688-.525-.18-.009-.385-.011-.59-.011s-.538.077-.82.385c-.28.308-1.077 1.051-1.077 2.565s1.103 2.977 1.257 3.185c.154.205 2.173 3.317 5.266 4.646.737.318 1.312.509 1.76.652.74.236 1.413.203 1.943.123.592-.088 1.815-.741 2.072-1.456.256-.715.256-1.326.18-1.456-.075-.129-.277-.205-.585-.359z"/>
                </svg>
              </button>

              <button class="flex items-center gap-1 bg-yellow-400 text-white text-xs px-2 py-1 rounded hover:bg-yellow-500">
                <!-- Calendar Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Column: Qualification -->
    <div class="bg-white rounded-md shadow flex flex-col">
      <div class="flex items-center justify-between border-t-4 border-yellow-500 px-3 py-2">
        <h2 class="font-semibold text-sm">Qualified</h2>
      </div>
      <div id="stage2" data-color="border-yellow-500" class="p-3 space-y-3 min-h-[450px]"
           ondrop="drop(event)" ondragover="allowDrop(event)">
        
        <div id="lead2" draggable="true" ondragstart="drag(event)" class="bg-white rounded shadow-md cursor-move hover:shadow-lg">
          <div class="border-t-4 border-yellow-500 rounded-t"></div>
          <div class="p-3 space-y-2">
            <div class="flex items-center justify-between">
              <p class="font-semibold text-sm">Neha Sharma</p>
              <span class="text-yellow-800 font-semibold text-xs"> &#8377;5000</span>
            </div>
            <p class="text-xs text-gray-500">+91 90000 11111</p>
            <span class="text-[11px] bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded">Enquiry</span>
            
            <!-- View Details Button -->
            <button class="text-xs text-blue-600 mt-2 hover:underline view-btn">View Details</button>

            <!-- Hidden Details -->
            <div class="hidden mt-2 p-2 text-xs bg-gray-50 rounded border border-gray-200 details">
              <p><span class="font-semibold">Status:</span> Follow-up Scheduled</p>

              <!-- Interested Services Dropdown -->
              <label class="block mt-2 text-[11px] font-semibold" for="services">Interested Services:</label>
              <select id="services" class="mt-1 w-full border border-gray-300 rounded px-2 py-1 text-xs">
                <option>Select Service</option>
                <option>Astrology Consultation</option>
                <option>Tarot Reading</option>
                <option>Horoscope Matching</option>
                <option>Numerology Analysis</option>
              </select>

              <p class="mt-2"><span class="font-semibold">Notes:</span> Interested in premium package.</p>
            </div>
            
            <!-- Buttons like New Section -->
            <div class="flex flex-wrap gap-2 mt-3">
              
              <!-- Send Brochure -->
              <button class="flex items-center gap-1 bg-blue-500 text-white text-xs px-2 py-1 rounded hover:bg-blue-600">
                <!-- Document Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M7 7h10M7 11h10M7 15h6M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"/>
                </svg>
              </button>

              <!-- Schedule Callback -->
              <button class="flex items-center gap-1 bg-green-400 text-white text-xs px-2 py-1 rounded hover:bg-green-500">
                <!-- Calendar Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2.28a1 1 0 01.95.684l1.2 3.6a1 1 0 01-.217.992L8.1 10.9a11.042 11.042 0 005 5l2.625-1.113a1 1 0 01.992.217l3.6 1.2a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z"/>
                </svg>
              </button>

            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Column: Negotiation -->
    <div class="bg-white rounded-md shadow flex flex-col">
      <div class="flex items-center justify-between border-t-4 border-orange-500 px-3 py-2">
        <h2 class="font-semibold text-sm">Negotiation/Hold</h2>
      </div>
      <div id="stage3" data-color="border-orange-500" class="p-3 space-y-3 min-h-[450px]"
           ondrop="drop(event)" ondragover="allowDrop(event)">
        
        <div id="lead3" draggable="true" ondragstart="drag(event)" class="bg-white rounded shadow-md cursor-move hover:shadow-lg">
          <div class="border-t-4 border-orange-500 rounded-t"></div>
          <div class="p-3 space-y-2">
            <div class="flex items-center justify-between">
              <p class="font-semibold text-sm">Meena Roy</p>
              <span class="text-red-600 font-semibold text-xs"> &#8377;7500</span>
            </div>
            <p class="text-xs text-gray-500">+91 77777 33333</p>
            <span class="text-[11px] bg-orange-100 text-orange-700 px-2 py-0.5 rounded">Budget</span>
             <!-- View Details Button -->
            <button class="text-xs text-blue-600 mt-2 hover:underline view-btn">View Details</button>

            <!-- Hidden Details -->
            <div class="hidden mt-2 p-2 text-xs bg-gray-50 rounded border border-gray-200 details">
              <p><span class="font-semibold">Status:</span> On Hold</p>
              <p class="mt-1"><span class="font-semibold">Reason for Hold:</span> Price is expensive</p>
              <p class="mt-1"><span class="font-semibold">1st Call:</span> Discussed basic package</p>
              <p class="mt-1"><span class="font-semibold">2nd Call:</span> Provided discount options</p>
              <p class="mt-1"><span class="font-semibold">Amount:</span> &#8377;7500</p>
            </div>
            <div class="flex flex-wrap gap-2 mt-3">
              <!-- Offer Discount -->
              <button class="flex items-center gap-1 bg-green-500 text-white text-xs px-2 py-1 rounded hover:bg-green-600">
                <!-- Tag/Discount Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M19 5L5 19M9 7a2 2 0 11-4 0 2 2 0 014 0zm10 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </button>

              <!-- Send Proposal -->
              <button class="flex items-center gap-1 bg-blue-500 text-white text-xs px-2 py-1 rounded hover:bg-blue-600">
                <!-- Document Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M7 7h10M7 11h10M7 15h6M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"/>
                </svg>
              </button>

              <!-- Schedule Follow-Up -->
              <button class="flex items-center gap-1 bg-yellow-400 text-white text-xs px-2 py-1 rounded hover:bg-yellow-500">
                <!-- Calendar Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </button>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- Column: Confirmation -->
    <div class="bg-white rounded-md shadow flex flex-col">
      <div class="flex items-center justify-between border-t-4 border-green-500 px-3 py-2">
        <h2 class="font-semibold text-sm">Confirmed</h2>
      </div>
      <div id="stage4" data-color="border-green-500" class="p-3 space-y-3 min-h-[450px]"
           ondrop="drop(event)" ondragover="allowDrop(event)">
        
        <div id="lead4" draggable="true" ondragstart="drag(event)"
             class="bg-white rounded shadow-md cursor-move hover:shadow-lg">
          <div class="border-t-4 border-green-500 rounded-t"></div>
          <div class="p-3 space-y-2">
            <div class="flex items-center justify-between">
              <p class="font-semibold text-sm">Reena Kumari</p>
              <span class="text-green-800 font-semibold text-xs"> &#8377;9000</span>
            </div>
            <p class="text-xs text-gray-500">+91 66666 44444</p>
            <span class="text-[11px] bg-green-100 text-green-700 px-2 py-0.5 rounded">Inbound</span>
            <!-- View Details Button -->
            <button class="text-xs text-blue-600 mt-2 hover:underline view-btn">View Details</button>

            <!-- Hidden Details -->
            <div class="hidden mt-2 p-2 text-xs bg-gray-50 rounded border border-gray-200 details">
              <p><span class="font-semibold">Full Story:</span> Client reached out via website inquiry about astrology consultation. Wants a detailed report for career guidance.</p>
              <p class="mt-1"><span class="font-semibold">Price:</span> &#8377;9000</p>
              <p class="mt-1"><span class="font-semibold">Services Wanted:</span> Astrology Consultation, Horoscope Matching</p>
              <p class="mt-1"><span class="font-semibold">Notes:</span> Prefers weekday morning sessions, follow-up scheduled next week.</p>
            </div>
            <div class="flex flex-wrap gap-2 mt-3">
              <button class="flex items-center gap-1 bg-green-600 text-white text-xs px-2 py-1 rounded hover:bg-green-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="font-semibold text-center"
                   width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                <path d="M184 64a8 8 0 0 1-8 8h-40.78a48 48 0 0 1 3.62 16H176a8 8 0 0 1 0 16h-37.35a48 48 0 0 1-45.7 32H104l68.69 68.69a8 8 0 1 1-11.31 11.31l-80-80A8 8 0 0 1 88 128h4a32 32 0 0 0 31.95-28H88a8 8 0 0 1 0-16h35.95a32 32 0 0 0-5.41-12H88a8 8 0 0 1 0-16h88a8 8 0 0 1 8 8Z"/>
                </svg>
              </button>
              <button class="flex items-center gap-1 bg-blue-500 text-white text-xs px-2 py-1 rounded hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M2.25 6.75A2.25 2.25 0 0 1 4.5 4.5h15a2.25 2.25 0 0 1 2.25 2.25v.243l-9.72 6.083a.75.75 0 0 1-.81 0L2.25 6.993V6.75Zm0 2.841v7.659A2.25 2.25 0 0 0 4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V9.591l-8.718 5.456a2.25 2.25 0 0 1-2.464 0L2.25 9.591Z" />
                </svg>
              </button>
              <button class="flex items-center gap-1 bg-yellow-400 text-white text-xs px-2 py-1 rounded hover:bg-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M7 7h10M7 11h10M7 15h6M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Column: Final -->
    <div class="bg-white rounded-md shadow flex flex-col">
      <div class="flex items-center justify-between border-t-4 border-yellow-800 px-3 py-2">
        <h2 class="font-semibold text-sm">Final (Won/Lost)</h2>
      </div>
      <div id="stage5" class="p-3 space-y-3 min-h-[450px]" ondrop="drop(event)" ondragover="allowDrop(event)">

        <!-- WON CARD -->
        <div id="lead5-won" data-color="border-green-500" draggable="true" ondragstart="drag(event)"
            class="bg-white rounded shadow-md cursor-move hover:shadow-lg">
          <div class="border-t-4 border-green-500 rounded-t"></div>
          <div class="p-3 space-y-2">
            <div class="flex items-center justify-between">
              <p class="font-semibold text-sm">Ajit Das</p>
              <span class="text-green-800 font-semibold text-xs"> &#8377;19000</span>
            </div>
            <p class="text-xs text-gray-500">+91 55555 99999</p>
            <span class="text-[11px] bg-green-100 text-green-700 px-2 py-0.5 rounded">Won</span>
            <button class="text-xs text-blue-600 mt-2 hover:underline view-btn">View Details</button>
            <div class="hidden mt-2 p-2 text-xs bg-gray-50 rounded border border-gray-200 details">
              <p><span class="font-semibold">Status:</span> Won</p>
              <p class="mt-1"><span class="font-semibold">Notes:</span> Client confirmed purchase</p>
              <p class="mt-1"><span class="font-semibold">Follow-up:</span> 12 Sep 2025</p>
              <p class="mt-1"><span class="font-semibold">Amount:</span> &#8377;10,000</p>
            </div>

            <div class="flex flex-wrap gap-2 mt-3">
              <button class="flex item-center gap-1 bg-green-500 text-white text-xs py-1 rounded hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" 
                  class="w-7 h-4 text-center font-semibold" 
                  viewBox="0 0 24 24" fill="currentColor">
                <path d="M5 13l4 4L19 7a1 1 0 10-1.414-1.414L9 14.172l-3.586-3.586A1 1 0 104 12.414l1 1z"/>
              </svg>

              </button>
              <button class="flex item-center gap-1 bg-yellow-400 text-white text-xs px-2 py-1 rounded hover:bg-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
        
        <!-- LOST CARD -->
        <div id="lead5-lost" data-color="border-red-500" draggable="true" ondragstart="drag(event)"
            class="bg-white rounded shadow-md cursor-move hover:shadow-lg">
          <div class="border-t-4 border-red-500 rounded-t"></div>
          <div class="p-3 space-y-2">
            <div class="flex items-center justify-between">
              <p class="font-semibold text-sm">Alok Sen</p>
              <span class="text-red-800 font-semibold text-xs"> &#8377;12000</span>
            </div>
            <p class="text-xs text-gray-500">+91 55555 99999</p>
            <span class="text-[11px] bg-red-100 text-red-700 px-2 py-0.5 rounded">Cold</span>
            <button class="text-xs text-blue-600 mt-2 hover:underline view-btn">View Details</button>
            <div class="hidden mt-2 p-2 text-xs bg-gray-50 rounded border border-gray-200 details">
              <p><span class="font-semibold">Status:</span> Lost</p>
              <p class="mt-1"><span class="font-semibold">Notes:</span> Client not interested</p>
              <p class="mt-1"><span class="font-semibold">Follow-up:</span> 20 Sep 2025</p>
              <p class="mt-1"><span class="font-semibold">Amount:</span> &#8377;0</p>
            </div>
            <div class="flex flex-wrap gap-2 mt-3">
              <button class="flex item-center gap-1 bg-red-500 text-white text-xs py-1 rounded hover:bg-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" 
                  class="w-7 h-4 text-center font-semibold" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M6.225 4.811a1 1 0 011.414 0L12 9.172l4.361-4.361a1 1 0 111.414 1.414L13.414 10.5l4.361 4.361a1 1 0 01-1.414 1.414L12 11.914l-4.361 4.361a1 1 0 01-1.414-1.414L10.586 10.5 6.225 6.139a1 1 0 010-1.328z" />
                </svg>
              </button>
              <button class="flex item-center gap-1 bg-yellow-400 text-white text-xs px-2 py-1 rounded hover:bg-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <script>
    document.querySelectorAll('.view-btn').forEach(button => {
      button.addEventListener('click', function () {
        const details = this.nextElementSibling;
        if (details.classList.contains('hidden')) {
          details.classList.remove('hidden');
          this.textContent = "Hide Details";
        } else {
          details.classList.add('hidden');
          this.textContent = "View Details";
        }
      });
    });
  </script>

  <!-- Drag & Drop Script -->
  <script>
    function allowDrop(ev) {
      ev.preventDefault();
      ev.currentTarget.classList.add("drop-hover");
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
      ev.target.classList.add("dragging");
    }

    function drop(ev) {
      ev.preventDefault();
      ev.currentTarget.classList.remove("drop-hover");

      const data = ev.dataTransfer.getData("text");
      const dragged = document.getElementById(data);
      const targetStage = ev.currentTarget;

      // reset old border color
      dragged.querySelector("div:first-child").className = "";

      // apply new border color
      const newColor = targetStage.dataset.color;
      dragged.querySelector("div:first-child").classList.add(newColor, "border-t-4", "rounded-t");

      // move card
      targetStage.appendChild(dragged);
      dragged.classList.remove("dragging");
    }
  </script>


<?php include('layouts/footer.php'); ?>
