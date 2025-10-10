<?php include("layouts/header.php") ?>

<div class="main-content p-4 sm:p-6">
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
        <h1 class="text-2xl font-bold text-[#7A3E00]">Today's Appointment</h1>
        <a href="appointment_book">
            <button class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300] w-full sm:w-auto">+ Add Appointment</button>
        </a>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 mb-6 border border-[#FFD699] flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <input type="text" placeholder="Search Appointment." class="border border-gray-400 rounded px-4 py-2 w-full sm:w-64" />
        <select class="border border-gray-400 rounded px-4 py-2 w-full sm:w-auto">
            <option>All</option>
            <option>Today</option>
            <option>Next Week</option>
            <option>Next Month</option>
        </select>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-4 border border-[#FFD699] overflow-x-auto">
        <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">clients</h2>
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead>
                <tr class="bg-[#FFEBD6]">
                    <th class="p-2 border-b border-[#FFD699] w-10 text-center"></th>
                    <th class="p-2 border-b border-[#FFD699]">ID</th>
                    <th class="p-2 border-b border-[#FFD699]">Name</th>
                    <th class="p-2 border-b border-[#FFD699]">Appointment For</th>
                    <th class="p-2 border-b border-[#FFD699]">Phone</th>
                    <th class="p-2 border-b border-[#FFD699]">Date</th>
                    <th class="p-2 border-b border-[#FFD699]">Time</th>
                    <th class="p-2 border-b border-[#FFD699]">Suggestion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-[#FFF4E0] text-center">
                    <td class="p-2 border-b border-[#FFD699] text-center w-10">
                        <button onclick="toggleDetails(this)" class="px-2 py-1 bg-blue-600 text-white rounded">+</button>
                    </td>
                    <td class="p-2 border-b border-[#FFD699]">ASTRO0101</td>
                    <td class="p-2 border-b border-[#FFD699]"><a href="client_view">Rajesh Kumar</a></td>
                    <td class="p-2 border-b border-[#FFD699]">Liza Kumari</td>
                    <td class="p-2 border-b border-[#FFD699]">+919876543210</td>
                    <td class="p-2 border-b border-[#FFD699]">29-08-2025</td>
                    <td class="p-2 border-b border-[#FFD699]">10:30 am</td>
                    <td class="p-2 border-b border-[#FFD699] flex flex-wrap gap-2">
                        <button onclick="window.location.href='suggestion_edit'" class="px-2 py-1 bg-yellow-600 text-white rounded flex-1">Add</button>
                    </td>
                </tr>
                <tr class="hidden bg-[#FFF9F0] extra-row">
                    <td colspan="7" class="p-4 border-b border-[#FFD699]">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <p><strong>Action:</strong> <button onclick="openConfirm()" class="px-3 py-1 bg-yellow-600 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </button>
                                <button onclick="openCancel()" class="px-3 py-1 bg-red-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                                class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                  <path d="M6.225 4.811a1 1 0 011.414 0L12 9.172l4.361-4.361a1 1 0 111.414 1.414L13.414 10.5l4.361 4.361a1 1 0 01-1.414 1.414L12 11.914l-4.361 4.361a1 1 0 01-1.414-1.414L10.586 10.5 6.225 6.139a1 1 0 010-1.328z" />
                                    </svg></button></p>
                                <p><strong>Family:</strong> <div x-data="{ open: false }">
                                  
                                  <span 
                                    @click="open = true" 
                                    class="px-2 py-1 text-blue-800 cursor-pointer underline"
                                  >
                                    Family Members (2)
                                  </span>

                                  <div 
                                    x-show="open" 
                                    class="fixed justify-center items-center inset-0 pointer-events-none bg-black/30 bg-opacity-40 z-40"
                                    @click="open = false"
                                    x-transition
                                  ></div>

                                  <div 
                                    x-show="open" 
                                    x-transition 
                                    class="fixed top-20 
                                          bg-white rounded-lg shadow-lg z-50 w-full max-w-2xl"
                                  >
                                    <div class="p-6 relative">
                                      
                                      <button 
                                        @click="open = false" 
                                        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700"
                                      >
                                        ✕
                                      </button>

                                      <h2 class="text-lg font-semibold text-gray-800 mb-4">Family Members</h2>

                                      <div class="overflow-x-auto">
                                        <table class="min-w-full border border-gray-200 text-sm">
                                          <thead class="bg-gray-100 text-gray-700">
                                            <tr>
                                              <th class="px-4 py-2 border">Name</th>
                                              <th class="px-4 py-2 border">Phone</th>
                                              <th class="px-4 py-2 border">Relation</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-gray-600">
                                            <tr>
                                              <td class="px-4 py-2 border">
                                                <a href="#" class="text-blue-600 hover:underline">Gunu</a><br>
                                                VFJUN250001
                                              </td>
                                              <td class="px-4 py-2 border">9879871818</td>
                                              <td class="px-4 py-2 border">Brother</td>
                                            </tr>
                                            <tr>
                                              <td class="px-4 py-2 border">
                                                <a href="#" class="text-blue-600 hover:underline">Bunu</a><br>
                                                VFJUN250002
                                              </td>
                                              <td class="px-4 py-2 border">9889881919</td>
                                              <td class="px-4 py-2 border">Sister</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div></p>
                                <p><strong>Location:</strong> Pathsala</p>
                                <p><strong>Kushti:</strong> 1</p>
                                <p><strong>Date & Time:</strong> 22/08/2025, Morning</p>
                            </div>
                            <div>
                                <p><strong>Status:</strong> New</p>
                                <p><strong>Payments:</strong> <button id="paymentBtn" class="px-3 py-1 bg-green-600 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                                            width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M184 64a8 8 0 0 1-8 8h-40.78a48 48 0 0 1 3.62 16H176a8 8 0 0 1 0 16h-37.35a48 48 0 0 1-45.7 32H104l68.69 68.69a8 8 0 1 1-11.31 11.31l-80-80A8 8 0 0 1 88 128h4a32 32 0 0 0 31.95-28H88a8 8 0 0 1 0-16h35.95a32 32 0 0 0-5.41-12H88a8 8 0 0 1 0-16h88a8 8 0 0 1 8 8Z"/>
                                        </svg></button></p>
                            </div>
                            <div>
                                <button class="px-2 py-1 bg-green-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                                    class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                  <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24l3.59 1.2a1 1 0 01.65.95V20a2 2 0 01-2 2A17 17 0 013 5a2 2 0 012-2h2.5a1 1 0 01.95.68l1.2 3.59a1 1 0 01-.24 1l-2.2 2.2z" />
                                </svg>
                                </button>
                                <button class="px-2 py-1 bg-indigo-500 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" 
                                    class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                  <path d="M2 5a3 3 0 013-3h14a3 3 0 013 3v9a3 3 0 01-3 3H7l-5 4V5z" />
                                </svg>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table></div>
    </div>
</div>

<div id="paymentModal" class="fixed inset-0 bg-black/30 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Registration Payment</h2>
            <button onclick="closeModal()">&times;</button>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Registration Amount</label>
            <input type="text" value="500" readonly class="w-full border border-gray-300 rounded p-2" />
        </div>

        <div class="mb-4">
            <label class="block font-medium">Payment Mode</label>
            <input type="text" value="Cash" readonly class="w-full border border-gray-300 rounded p-2" />
        </div>

        <div class="flex justify-end space-x-3">
            <button class="px-3 py-2 bg-teal-500 text-white rounded" onclick="setExempted()">Exempt Amount / Followup</button>
            <button class="px-3 py-2 bg-blue-500 text-white rounded" onclick="setPaid()">Pay Now</button>
        </div>
    </div>
</div>


<script>
    const paymentBtn = document.getElementById("paymentBtn");
    const paymentModal = document.getElementById("paymentModal");

    paymentBtn.addEventListener("click", () => {
        if (!paymentBtn.dataset.status) { 
            paymentModal.classList.remove("hidden");
        }
    });

    function closeModal() {
        paymentModal.classList.add("hidden");
    }

    function setPaid() {
        paymentBtn.innerHTML = "Paid"; 
        paymentBtn.classList.remove("bg-green-600");
        paymentBtn.classList.add("bg-blue-600", "cursor-not-allowed");
        paymentBtn.dataset.status = "paid";
        closeModal();
    }

    function setExempted() {
        paymentBtn.innerHTML = "Exempted"; 
        paymentBtn.classList.remove("bg-green-600");
        paymentBtn.classList.add("bg-gray-600", "cursor-not-allowed");
        paymentBtn.dataset.status = "exempted";
        closeModal();
    }
</script>

<div id="confirmPopup" class="hidden fixed inset-0 flex items-center justify-center bg-black/30 bg-opacity-50 z-50">
  <div class="bg-white rounded-lg p-6 w-80 shadow-lg">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Do you want to reschedule?</h2>
    <div class="flex justify-end space-x-3">
      <button onclick="closeConfirm()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
      <button onclick="openForm()" class="px-4 py-2 bg-[#7A3E00] text-white rounded">Okay</button>
    </div>
  </div>
</div>

<div id="formPopup" class="hidden fixed inset-0 flex items-center justify-center bg-black/30 bg-opacity-50 z-50">
  <div class="bg-white rounded-lg p-6 w-96 shadow-lg">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">Reschedule Appointment</h2>
    <form class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Date</label>
        <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Time</label>
        <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Place</label>
        <input type="text" placeholder="Enter place" class="w-full border border-gray-300 rounded px-3 py-2">
      </div>
      <div class="flex justify-end space-x-3">
        <button type="button" onclick="closeForm()" class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
        <button type="submit" class="px-4 py-2 bg-[#7A3E00] text-white rounded">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
  function openConfirm() {
    document.getElementById('confirmPopup').classList.remove('hidden');
  }
  function closeConfirm() {
    document.getElementById('confirmPopup').classList.add('hidden');
  }
  function openForm() {
    closeConfirm();
    document.getElementById('formPopup').classList.remove('hidden');
  }
  function closeForm() {
    document.getElementById('formPopup').classList.add('hidden');
  }
</script>

<div id="cancelModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
    
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Cancel Appointment</h2>
    
    <p class="text-gray-600 mb-6">Are you sure you want to cancel this appointment?</p>
    
    <div class="flex justify-end gap-3">
      <button onclick="closeCancel()" 
              class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
        No, Keep
      </button>
      <button onclick="confirmCancel()" 
              class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
        Yes, Cancel
      </button>
    </div>
  </div>
</div>

<script>
  function openCancel() {
    document.getElementById('cancelModal').classList.remove('hidden');
  }
  function closeCancel() {
    document.getElementById('cancelModal').classList.add('hidden');
  }
  function confirmCancel() {
    alert("Appointment cancelled");
    closeCancel();
  }
</script>

<script>
function toggleDetails(button) {
    let row = button.closest("tr").nextElementSibling;
    row.classList.toggle("hidden");
}
</script>

<?php include("layouts/footer.php"); ?>
