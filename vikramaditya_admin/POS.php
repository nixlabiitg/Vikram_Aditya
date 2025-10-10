<?php include("layouts/header.php"); ?>

<div class="main-content p-4 md:p-6">
    <div class="flex items-center justify-between mb-6">
  <h1 class="text-2xl md:text-3xl font-bold text-yellow-700">Shop</h1>
  <button id="fullscreen-btn" 
    class="bg-orange-500 text-white p-2 rounded-lg hover:bg-orange-600">
    <svg id="fs-icon" xmlns="http://www.w3.org/2000/svg" fill="none" 
         viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M4 8V4h4M16 4h4v4M20 16v4h-4M8 20H4v-4"/>
    </svg>
  </button>
</div>

<div class="mb-6 bg-white rounded-xl shadow p-4">
  <h2 class="text-lg font-bold text-orange-700 mb-3 flex items-center gap-2">
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

  <div class="grid grid-cols-3 gap-6">
    <div class="col-span-2 bg-white rounded-2xl shadow-lg p-6">
      <h2 class="text-xl font-bold mb-4 text-orange-700 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
            stroke="currentColor" class="w-6 h-6 text-gray-700">
        <path stroke-linecap="round" stroke-linejoin="round" 
                d="M2.25 2.25h1.386c.51 0 .955.343 1.087.835l.383 1.437m0 0L6.75 12.75h10.5l2.25-7.5H5.106m0 0L4.5 4.5M6.75 12.75L5.25 18h13.5m-10.5 0a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm10.5 0a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
        </svg>
        Selected Items
      </h2>
      <div class="overflow-hidden rounded-lg border border-orange-200">
        <table class="w-full text-sm">
          <thead class="bg-orange-100 text-orange-800 text-left">
            <tr>
              <th class="p-3">Item</th>
              <th class="p-3">Type</th>
              <th class="p-3 text-center">Qty</th>
              <th class="p-3">Price</th>
              <th class="p-3">Total</th>
              <th class="p-3 text-center">Action</th>
            </tr>
          </thead>
          <tbody id="cart-body" class="divide-y divide-orange-100"></tbody>
        </table>
      </div>
      <div class="mt-6 flex justify-between items-center text-lg font-semibold">
        <span>Total Amount:</span>
        <span id="total-amount" class="text-orange-700 text-2xl">₹0</span>
      </div>
    </div>

    <div class="col-span-1 bg-gradient-to-b from-orange-50 to-yellow-100 rounded-xl shadow p-4">
         
        <div class="flex items-center justify-between mb-3">
            <h2 class="font-semibold text-orange-700 flex items-center gap-2 text-sm">
                Select Item
            </h2>
            <button onclick="openAddItemModal()" 
                class="bg-orange-500 text-white px-3 py-1.5 rounded-lg hover:bg-orange-600 text-xs font-medium">
                + Add Item
            </button>
        </div>

        <div id="addItemModal" class="hidden fixed inset-0 bg-black/30 bg-opacity-40 flex items-center justify-center z-50">
          <div class="bg-white rounded-xl shadow-lg w-80 p-6">
              <h2 class="text-lg font-semibold text-orange-700 mb-4">Add New Item</h2>
              
              <label class="block mb-2 text-sm font-medium">Category</label>
              <select id="itemCategory" class="w-full border border-orange-300 rounded-lg p-2 mb-3 text-sm">
                <option value="Kavach">Kavach</option>
                <option value="Dravya">Dravya</option>
              </select>

              <label class="block mb-2 text-sm font-medium">Product Name</label>
              <input id="itemName" type="text" placeholder="Enter product name" 
              class="w-full border border-orange-300 rounded-lg p-2 mb-3 text-sm">

              <label class="block mb-2 text-sm font-medium">Price (₹)</label>
              <input id="itemPrice" type="number" placeholder="Enter price" 
              class="w-full border border-orange-300 rounded-lg p-2 mb-4 text-sm">

              <div class="flex justify-end gap-2">
              <button onclick="closeAddItemModal()" 
                  class="px-3 py-1 text-sm rounded-lg border border-gray-300">Cancel</button>
              <button onclick="addCustomItem()" 
                  class="px-3 py-1 text-sm bg-orange-500 text-white rounded-lg hover:bg-orange-600">Add</button>
              </div>
          </div>
        </div>

    <script>
    function openAddItemModal() {
        document.getElementById('addItemModal').classList.remove('hidden');
    }

    function closeAddItemModal() {
        document.getElementById('addItemModal').classList.add('hidden');
    }

    function addCustomItem() {
        const category = document.getElementById('itemCategory').value;
        const name = document.getElementById('itemName').value;
        const price = parseFloat(document.getElementById('itemPrice').value) || 0;

        if (!name || price <= 0) {
        alert("Please enter valid item details!");
        return;
        }

        console.log("New Item:", { category, name, price });

        addItem(name, category, price);

        closeAddItemModal();
    }
    </script>

    <div class="flex border-b border-orange-200 mb-3 text-xs">
        <button onclick="switchTab('kavach')" id="tab-kavach" class="flex-1 py-1 text-center font-medium text-orange-700 border-b-2 border-orange-600">Kavach</button>
        <button onclick="switchTab('dravya')" id="tab-dravya" class="flex-1 py-1 text-center font-medium text-gray-600 hover:text-orange-700">Dravya</button>
    </div>

    <div id="kavach-grid" class="grid grid-cols-2 gap-2">
        <button onclick="addItem('Hanuman Kavach','Kavach',750)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Hanuman Kavach<br><span class="text-orange-600">₹750</span></span>
        </button>
        <button onclick="addItem('Narayan Kavach','Kavach',990)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Narayan Kavach<br><span class="text-orange-600">₹750</span></span>
        </button>
        <button onclick="addItem('Guru Kavach','Kavach',780)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Guru Kavach<br><span class="text-orange-600">₹750</span></span>
        </button>
        <button onclick="addItem('Graha Kavach','Kavach',810)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Graha Kavach<br><span class="text-orange-600">₹750</span></span>
        </button>
    </div>

    <div id="dravya-grid" class="hidden grid grid-cols-2 gap-2">
        <button onclick="addItem('Tulsi Mala','dravya Product',300)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Tulsi Mala<br><span class="text-orange-600">₹300</span></span>
        </button>
        <button onclick="addItem('Gem Ring','dravya Product',800)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Gem Ring<br><span class="text-orange-600">₹800</span></span>
        </button>
        <button onclick="addItem('Pearl Ring','dravya Product',600)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Pearl Ring<br><span class="text-orange-600">₹600</span></span>
        </button>
        <button onclick="addItem('Rudraksh','dravya Product',3000)" class="bg-white flex flex-col items-center p-2 rounded-lg shadow hover:shadow-md hover:bg-orange-50 transition">
            <span class="text-xs font-medium text-center">Rudraksh<br><span class="text-orange-600">₹3000</span></span>
        </button>

    </div>

    <div class="mt-5">
    <h3 class="font-semibold mb-2 text-orange-700 text-sm flex items-center gap-2">
        <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 6h18v12H3z" /></svg>
        Payment Options
    </h3>
    <div class="grid grid-cols-3 gap-2 text-xs">
        <button onclick="redirectToPayment('pos_cash')" 
        class="bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 flex flex-col items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="font-semibold text-center"
                width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
            <path d="M184 64a8 8 0 0 1-8 8h-40.78a48 48 0 0 1 3.62 16H176a8 8 0 0 1 0 16h-37.35a48 48 0 0 1-45.7 32H104l68.69 68.69a8 8 0 1 1-11.31 11.31l-80-80A8 8 0 0 1 88 128h4a32 32 0 0 0 31.95-28H88a8 8 0 0 1 0-16h35.95a32 32 0 0 0-5.41-12H88a8 8 0 0 1 0-16h88a8 8 0 0 1 8 8Z"/>
            </svg>
        Cash
        </button>
        <button onclick="redirectToPayment('pos_card')" 
        class="bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 flex flex-col items-center gap-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2" ry="2"/><path d="M2 10h20"/></svg>
        Card
        </button>
        <button onclick="redirectToPayment('pos_upi')" 
        class="bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 flex flex-col items-center gap-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="7" y="2" width="10" height="20" rx="2" ry="2"/></svg>
        UPI
        </button>
    </div>
    </div>

    </div>
  </div>
</div>

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


<?php include("layouts/footer.php"); ?>
