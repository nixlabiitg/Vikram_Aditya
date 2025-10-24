<?php include("layouts/header.php") ?>
<div class="min-h-screen text-gray-800">
  
  <!-- Header -->
  <header class="flex justify-between items-center p-6">
    <h1 class="text-2xl font-bold text-yellow-900">Puja</h1>
  </header>
  <div class="mb-2 bg-white rounded-xl shadow p-6">
  <h2 class="text-lg font-bold text-orange-700 mb-0 flex items-center gap-2">
    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="11" cy="11" r="8"/>
      <path d="M21 21l-4.35-4.35"/>
    </svg>
    Search Client
  </h2>

  <div class="flex flex-col md:flex-row md:items-center gap-4">
    
    <div class="flex-1">
      <input 
        type="text" 
        id="client-search" 
        placeholder="Search by Client ID or Name..." 
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none"
        onkeyup="searchClient()"
      />
      <ul id="client-results" class="mt-2 bg-orange-50 rounded-lg divide-y divide-orange-100 hidden"></ul>
    </div>

    <div id="client-detail" class="hidden flex-1 p-4 bg-gradient-to-r from-orange-50 to-yellow-100 rounded-lg shadow">
      <div>
        <p class="font-semibold text-orange-700 mb-2">Client Details</p>
        <strong>ID:</strong> <span id="detail-id"></span>, 
        <strong>Name:</strong> <span id="detail-name"></span>, 
        <strong>Phone:</strong> <span id="detail-phone"></span>
      </div>
    </div>

  </div>
</div>
  <!-- Main Layout -->
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 p-6">
    
    <!-- Left Section -->
    <div class="lg:col-span-2 bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
      <div class="p-4 border-b border-orange-200">
        <h2 class="font-semibold text-gray-800">Select Date, Time & Puja Category</h2>
      </div>
      
      <div class="p-6 space-y-6">
        
        <!-- Categories -->
        <div>
          <p class="text-sm mb-3 font-medium text-gray-700">Choose Puja Category</p>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Category Card -->
            <label class="cursor-pointer">
              <input type="checkbox" name="puja_category" value="Guru Puja" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Guru Puja</span>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="checkbox" name="puja_category" value="Mangal Puja" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Mangal Puja</span>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="checkbox" name="puja_category" value="Rudra Abhishek" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Rudra Abhishek</span>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="checkbox" name="puja_category" value="Nava Graha Shanti" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Nava Graha Shanti</span>
              </div>
            </label>

          </div>
        </div>

        <!-- Choose Date -->
        <div>
          <p class="text-sm mb-2 font-semibold text-gray-700 flex items-center gap-2">
            <!-- Calendar Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                class="w-5 h-5 text-orange-600">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Choose Date
          </p>
          <input 
              type="date" 
              name="puja_date" 
              class="w-full p-3 border border-orange-300 rounded-lg 
                    bg-gradient-to-br from-[#fffaf6] to-[#ffe9d6] shadow-sm 
                    focus:outline-none focus:ring-2 focus:ring-orange-700 focus:border-orange-800
                    transition duration-200 ease-in-out text-gray-700 font-medium"
            >
        </div>

        <!-- Slots -->
        <div>
          <p class="text-sm mb-2 font-semibold text-gray-700 flex items-center gap-2">
            <!-- Clock Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                class="w-5 h-5 text-orange-600">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Choose Time Slot
          </p>
          <select name="puja_slot" class="w-full p-3 border border-orange-300 rounded-lg 
                    bg-gradient-to-br from-[#fffaf6] to-[#ffe9d6] shadow-sm 
                    focus:outline-none focus:ring-2 focus:ring-orange-700 focus:border-orange-800
                    transition duration-200 ease-in-out text-gray-700 font-medium">
            <option value="">-- Select Slot --</option>
            <option value="06:00-07:00">09:00 AM - 12:00 PM</option>
            <option value="08:00-09:00">01:00 PM - 07:00 PM</option>
          </select>
        </div>
        <script>
          const categoryCheckboxes = document.querySelectorAll('input[name="puja_category"]');
          const dateInput = document.querySelector('input[name="puja_date"]');
          const slotSelect = document.querySelector('select[name="puja_slot"]');

          const multiPujaContainer = document.createElement('div');
          multiPujaContainer.id = 'multiPujaContainer';
          multiPujaContainer.className = 'space-y-4 mt-4';
          dateInput.parentElement.after(multiPujaContainer);

          function updateDateTimeInputs() {
            const selectedPujas = Array.from(categoryCheckboxes).filter(c => c.checked);

            if (selectedPujas.length <= 1) {
              dateInput.parentElement.style.display = 'block';
              slotSelect.parentElement.style.display = 'block';
              multiPujaContainer.innerHTML = '';
            } else {
              dateInput.parentElement.style.display = 'none';
              slotSelect.parentElement.style.display = 'none';

              multiPujaContainer.innerHTML = '';
              selectedPujas.forEach(puja => {
                const div = document.createElement('div');
                div.className = 'space-y-2 p-2 border border-orange-200 rounded-xl bg-white/80';
                div.innerHTML = `
                  <p class="text-sm font-semibold text-gray-700">${puja.value} - Choose Date</p>
                  <input type="date" name="puja_date_${puja.value}" class="w-full p-3 border border-orange-300 rounded-lg bg-gradient-to-br from-[#fffaf6] to-[#ffe9d6] shadow-sm text-gray-700">
                  <p class="text-sm font-semibold text-gray-700 mt-2">${puja.value} - Choose Time Slot</p>
                  <select name="puja_slot_${puja.value}" class="w-full p-3 border border-orange-300 rounded-lg bg-gradient-to-br from-[#fffaf6] to-[#ffe9d6] shadow-sm text-gray-700">
                    <option value="">-- Select Slot --</option>
                    <option value="06:00-07:00">09:00 AM - 12:00 PM</option>
                    <option value="08:00-09:00">01:00 PM - 07:00 PM</option>
                  </select>
                `;
                multiPujaContainer.appendChild(div);
              });
            }
          }

          categoryCheckboxes.forEach(c => c.addEventListener('change', updateDateTimeInputs));
          </script>

        <div class="text-center">
          <button onclick="confirmBooking()" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-xl font-semibold shadow-lg hover:scale-105 transition">
             Book Puja
          </button>
        </div>
      </div>
    </div>

    <div class="space-y-6">
      <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
        <div class="p-4 border-b border-orange-200 flex justify-between items-center">
          <h3 class="font-semibold text-gray-800">Booking Summary</h3>
          <button type="button" class="px-3 py-1 border border-orange-400 text-xs rounded hover:bg-orange-100">Toggle</button>
        </div>
        <div class="p-6 text-gray-400 text-center">No Data Found</div>
      </div>

      <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
        <div class="p-4 border-b border-orange-200 font-semibold text-gray-800">Booked Members</div>
        <div id="booked-members" class="p-6 text-gray-400 text-center">No Data Found</div>
      </div>

      <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
        <div class="p-4 border-b border-orange-200 font-semibold text-gray-800">Mini Dashboard</div>
        <div class="p-6 text-sm space-y-2">
          <p>Total Bookings Today: <span id="total-bookings" class="text-indigo-500 font-semibold">0</span></p>
          <p>Slots Filled: <span id="slots-filled" class="text-green-500 font-semibold">0</span></p>
          <p>Available Slots: <span id="available-slots" class="text-red-500 font-semibold">8</span></p>
          <p>Popular Puja: <span class="text-pink-500 font-semibold">Durga Puja</span></p>
        </div>
      </div>

    </div>
  </div>
  <!-- <div x-data="{ tab: 'booked' }" class="p-6">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-xl font-bold text-[#7A3E00] flex items-center gap-2">
      Booking Details
    </h1>
  </div>

  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Puja Booked successfully.</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

  <div class="flex mb-6 space-x-4 border-b border-orange-200">
    <button @click="tab = 'booked'" 
        :class="tab === 'booked' ? 'border-b-2 border-orange-500 text-orange-600 font-semibold' : 'text-gray-600'" 
        class="px-4 py-2">
        Booked
    </button>
    <button @click="tab = 'waiting'" 
        :class="tab === 'waiting' ? 'border-b-2 border-orange-500 text-orange-600 font-semibold' : 'text-gray-600'" 
        class="px-4 py-2">
        Waiting
    </button>
    <button @click="tab = 'done'" 
        :class="tab === 'done' ? 'border-b-2 border-orange-500 text-orange-600 font-semibold' : 'text-gray-600'" 
        class="px-4 py-2">
        Done
    </button>
  </div>

  <div x-show="tab === 'booked'" class="space-y-6 bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
    <h2 class="text-xl font-semibold mb-4">Booked Appointments</h2>
    <div id="proposal-table" class="overflow-x-auto bg-white shadow rounded-xl">
      <table class="min-w-full divide-y divide-gray-200 text-sm">
        <thead class="bg-gray-100 text-gray-700 font-semibold">
          <tr>
              <th class="px-4 py-3 text-left">Client ID</th>
              <th class="px-4 py-3 text-left">Name</th>
              <th class="px-4 py-3 text-left">Puja Name</th>
              <th class="px-4 py-3 text-left">Phone</th>
              <th class="px-4 py-3 text-left">Date</th>
              <th class="px-4 py-3 text-left">Time Slot</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-3 font-medium text-gray-800">VK0022</td>
            <td class="px-4 py-3 font-medium text-gray-800">Rajesh Kumar</td>
            <td class="px-4 py-3 font-medium text-gray-800">Guru Puja</td>
            <td class="px-4 py-3 text-gray-600">+91 98765 12345</td>
            <td class="px-4 py-3">2025-08-06</td>
            <td class="px-4 py-3">9:00am-12:00pm</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div x-show="tab === 'waiting'" class="space-y-6 bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
    <h2 class="text-xl font-semibold mb-4">Waiting Appointments</h2>
    <p>List of waiting appointments here.</p>
  </div>

  <div x-show="tab === 'done'" class="space-y-6 bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
    <h2 class="text-xl font-semibold mb-4">Completed Appointments</h2>
    <p>List of completed appointments here.</p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> -->

  
</div>

<script>
    if (window.location.search.includes('success=1')) {
        document.getElementById('successAlert').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    }
</script>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const pujacheckboxs = document.querySelectorAll("input[name='puja_category']");
  const bookedContainer = document.querySelector("#booked-members");
  const availableSlots = document.querySelector("#available-slots");
  const slotsFilled = document.querySelector("#slots-filled");
  const totalBookings = document.querySelector("#total-bookings");

  const pujaSlots = {
    "Guru Puja": { 
      total: 10, 
      booked: [
        { name: "Ramesh", date: "2025-09-01", time: "10:00 AM" },
        { name: "Sita", date: "2025-09-01", time: "11:30 AM" },
        { name: "Anil", date: "2025-09-02", time: "02:00 PM" }
      ] 
    },
    "Mangal Puja": { 
      total: 8, 
      booked: [
        { name: "Pooja", date: "2025-09-03", time: "09:00 AM" }
      ] 
    },
    "Rudra Abhishek": { 
      total: 6, 
      booked: [
        { name: "Amit", date: "2025-09-04", time: "06:00 AM" },
        { name: "Kiran", date: "2025-09-04", time: "08:00 AM" },
        { name: "Rahul", date: "2025-09-04", time: "10:00 AM" },
        { name: "Sneha", date: "2025-09-05", time: "04:00 PM" }
      ] 
    },
    "Nava Graha Shanti": { total: 5, booked: [] }
  };

  pujacheckboxs.forEach(checkbox => {
    checkbox.addEventListener("change", () => {
      const selected = checkbox.value;
      const data = pujaSlots[selected];

      totalBookings.textContent = data.booked.length;
      slotsFilled.textContent = data.booked.length;
      availableSlots.textContent = data.total - data.booked.length;

      if (data.booked.length > 0) {
        bookedContainer.innerHTML = "";
        data.booked.forEach(entry => {
          bookedContainer.innerHTML += `
            <p class="text-sm text-gray-700">
              <span class="font-medium">${entry.name}</span> 
              <span class="text-gray-500">- ${entry.date}, ${entry.time}</span>
            </p>`;
        });
      } else {
        bookedContainer.innerHTML = `<p class="text-gray-400 text-center">No Bookings Yet</p>`;
      }
    });
  });
});
function confirmBooking() {
    window.location.href = "puja_waiting?success=1";
}
</script>


<script>
  const clients = [
    { id: "C001", name: "Rahul Sharma", phone: "9876543210" },
    { id: "C002", name: "Priya Verma", phone: "9123456780" },
    { id: "C003", name: "Amit Kumar", phone: "9988776655" }
  ];

  function searchClient() {
    const input = document.getElementById("client-search").value.toLowerCase();
    const resultsEl = document.getElementById("client-results");
    resultsEl.innerHTML = "";
    if (input === "") {
      resultsEl.classList.add("hidden");
      return;
    }
    const matches = clients.filter(c => c.id.toLowerCase().includes(input) || c.name.toLowerCase().includes(input));
    if (matches.length > 0) {
      resultsEl.classList.remove("hidden");
      matches.forEach(c => {
        resultsEl.innerHTML += `
          <li class="p-2 hover:bg-orange-100 cursor-pointer" onclick="selectClient('${c.id}')">
            ${c.id} - ${c.name}
          </li>
        `;
      });
    } else {
      resultsEl.classList.remove("hidden");
      resultsEl.innerHTML = `<li class="p-2 text-gray-500">No clients found</li>`;
    }
  }

  function selectClient(id) {
    const client = clients.find(c => c.id === id);
    if (!client) return;
    document.getElementById("detail-id").textContent = client.id;
    document.getElementById("detail-name").textContent = client.name;
    document.getElementById("detail-phone").textContent = client.phone;
    document.getElementById("client-detail").classList.remove("hidden");
    document.getElementById("client-results").classList.add("hidden");
    document.getElementById("client-search").value = client.id;
  }
  function redirectToPayment(method) {
  const clientId = document.getElementById("detail-id").textContent;
  if (!clientId) {
    alert("Please select a client first!");
    return;
  }
  window.location.href = method + "?client=" + clientId;
}

  const cartBody = document.getElementById("cart-body");
  const totalAmountEl = document.getElementById("total-amount");
  let cart = [];

  function addItem(name, type, price) {
    let existing = cart.find(item => item.name === name);
    if (existing) existing.qty += 1;
    else cart.push({ name, type, price, qty: 1 });
    renderCart();
  }

  function removeItem(name) {
    cart = cart.filter(item => item.name !== name);
    renderCart();
  }

  function renderCart() {
  cartBody.innerHTML = "";
  let total = 0;

  cart.forEach((item, index) => {
    let itemTotal = item.price * item.qty;
    total += itemTotal;

    cartBody.innerHTML += `
      <tr class="hover:bg-orange-50">
        <td class="p-3">${item.name}</td>
        <td class="p-3">${item.type}</td>
        <td class="p-3 text-center">
          <input 
            type="number" 
            min="1" 
            value="${item.qty}" 
            class="w-16 border border-gray-300 rounded text-center"
            onchange="updateQty(${index}, this.value)"
          />
        </td>
        <td class="p-3">₹${item.price}</td>
        <td class="p-3">₹${itemTotal}</td>
        <td class="p-3 text-center">
          <button onclick="removeItem('${item.name}')" 
            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-xs shadow">
            ✖
          </button>
        </td>
      </tr>
    `;
  });

  totalAmountEl.textContent = `₹${total}`;
}

function updateQty(index, newQty) {
  newQty = parseInt(newQty);

  if (newQty > 0) {
    cart[index].qty = newQty;
  } else {
    cart[index].qty = 1;
  }

  renderCart();
}


  function switchTab(tab) {
  ["kavach", "dravya"].forEach(t => {
    document.getElementById(`${t}-grid`).classList.add("hidden");
    document.getElementById(`tab-${t}`).classList.remove("text-orange-700","border-orange-600");
  });
  document.getElementById(`${tab}-grid`).classList.remove("hidden");
  document.getElementById(`tab-${tab}`).classList.add("text-orange-700","border-b-2","border-orange-600");
}

</script>
<script>
(function(){
  const btn = document.getElementById("fullscreen-btn");
  const icon = document.getElementById("fs-icon");
  const mainContent = document.querySelector(".main-content");

  const enterIcon = `
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
         viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M4 8V4h4M16 4h4v4M20 16v4h-4M8 20H4v-4"/>
    </svg>`;

  const exitIcon = `
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
         viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M9 14H5v4M15 10h4V6M5 5l5 5M19 19l-5-5"/>
    </svg>`;

  btn.addEventListener("click", () => {
    if (!document.fullscreenElement) {
      mainContent.requestFullscreen();
    } else {
      document.exitFullscreen();
    }
  });

  document.addEventListener("fullscreenchange", () => {
    if (document.fullscreenElement) {
      btn.innerHTML = exitIcon;
      mainContent.style.background = "linear-gradient(180deg, #fac36bff, #ffeabcff)";
      mainContent.style.width = "100vw";
      mainContent.style.height = "100vh";
    } else {
      btn.innerHTML = enterIcon;
      mainContent.style.background = "";
      mainContent.style.width = "";
      mainContent.style.height = "";
    }
  });
})();
</script>


<?php include("layouts/footer.php") ?>
