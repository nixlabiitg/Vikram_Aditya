<?php include("layouts/header.php"); ?>

<div class="max-w-6xl mx-auto p-6 mt-6">
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
    <h1 class="text-2xl font-bold text-[#7A3E00] flex items-center gap-2 mb-6">
      Waiting
    </h1>
    <input type="text" placeholder="Search Client ID..." class="bg-white border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
  </div>
  <!-- Success Alert -->
  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Puja Booked successfully.</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

  <div class="overflow-x-auto bg-white rounded-xl p-6 mt-6">
    <table class="w-full text-center border-b border-[#FFD699] rounded-lg overflow-hidden">
      <thead class="bg-[#FFF4E5] text-[#7A3E00]">
        <tr class="border-b border-[#FFD699]">
          <th class="p-3">#</th>
          <th class="p-3">Client Details</th>
          <th class="p-3">Client ID</th>
          <th class="p-3">Client Phone</th>
          <th class="p-3">Puja</th>
          <th class="p-3">Dakshina(Total)</th>
        </tr>
      </thead>
      <tbody id="cartTable" class="text-gray-700">
        <!-- Rows will be filled dynamically -->
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div id="itemModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6 relative">
    <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Puja Booked</h3>
    <ul id="modalItems" class="space-y-3"></ul>
    <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-red-500">✖</button>
  </div>
</div>
<script>
  const cartData = [
    {
      client: { name: "Ravi Sharma", id: "C1023", phone: "+91 9876543210" },
      items: [
        { name: "Ganesh Puja", price: 15000, date: "2025-10-20", time: "10:30 AM" },
        { name: "Narayan Puja", price: 12000, date: "2025-10-22", time: "5:00 PM" }
      ]
    },
    {
      client: { name: "Priya Desai", id: "C1044", phone: "+91 9123456780" },
      items: [
        { name: "Graha Puja", price: 8000, date: "2025-10-25", time: "8:00 AM" }
      ]
    },
    {
      client: { name: "Ankit Mehra", id: "C1099", phone: "+91 9988776655" },
      items: [
        { name: "Griha Shanti Puja", price: 1200, date: "2025-10-18", time: "9:00 AM" },
        { name: "Laxmi Puja", price: 800, date: "2025-10-18", time: "11:30 AM" }
      ]
    }
  ];

  const cartTable = document.getElementById("cartTable");
  const modal = document.getElementById("itemModal");
  const modalItems = document.getElementById("modalItems");

  function renderTable() {
    cartTable.innerHTML = "";

    cartData.forEach((order, index) => {
      const expandId = "expand-" + index;
      const totalPrice = order.items.reduce((sum, item) => sum + item.price, 0);

      const row = document.createElement("tr");
      row.innerHTML = `
        <td class="p-3 text-center border-b border-[#FFD699]">
          <button class="px-3 py-1 bg-[#7A3E00] text-white rounded hover:bg-[#5e2f00]" 
            onclick="toggleExpand('${expandId}', this)">+</button>
        </td>
        <td class="p-3 font-medium border-b border-[#FFD699]">${order.client.name}</td>
        <td class="p-3 border-b border-[#FFD699]">${order.client.id}</td>
        <td class="p-3 border-b border-[#FFD699]">${order.client.phone}</td>
        <td class="p-3 border-b border-[#FFD699]">
          <button onclick="viewItems(${index})" 
                  class="px-3 py-1 bg-blue-700 text-white rounded hover:bg-blue-800">
            View
          </button>
        </td>
        <td class="p-3 font-semibold border-b border-[#FFD699]">₹${totalPrice}</td>
      `;

      const expandRow = document.createElement("tr");
      expandRow.id = expandId;
      expandRow.classList.add("hidden", "bg-[#FFF9F3]");
      expandRow.innerHTML = `
        <td colspan="7" class="p-4 text-center">
          <button onclick="window.location.href='puja_booked'" 
                  class="px-6 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-700">
            Book Now
          </button>
        </td>
      `;

      cartTable.appendChild(row);
      cartTable.appendChild(expandRow);
    });
  }

  renderTable();

  function toggleExpand(id, el) {
    const row = document.getElementById(id);
    row.classList.toggle("hidden");
    el.textContent = row.classList.contains("hidden") ? "+" : "-";
  }

  function viewItems(orderIndex) {
    const order = cartData[orderIndex];
    modalItems.innerHTML = "";

    order.items.forEach((item, idx) => {
      const li = document.createElement("li");
      li.className = "border border-gray-300 p-3 rounded-lg bg-gray-50 hover:bg-gray-100 transition";

      li.innerHTML = `
        <div class="flex justify-between items-start">
          <div class="text-left">
            <p class="font-semibold text-[#7A3E00]">${item.name}</p>
            <p class="text-sm text-gray-600">Date: <span class="font-medium">${item.date}</span></p>
            <p class="text-sm text-gray-600">Time: <span class="font-medium">${item.time}</span></p>
            <p class="text-sm font-semibold text-green-700 mt-1">₹${item.price}</p>
          </div>
          <button onclick="removeItem(${orderIndex}, ${idx})" class="text-red-600 hover:text-red-800 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </button>
        </div>
      `;

      modalItems.appendChild(li);
    });

    modal.classList.remove("hidden");
    modal.classList.add("flex");
  }

  function removeItem(orderIndex, itemIndex) {
    cartData[orderIndex].items.splice(itemIndex, 1);
    viewItems(orderIndex);
    renderTable();
  }

  function closeModal() {
    modal.classList.add("hidden");
  }
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('input[placeholder="Search Client ID..."]');
  const tableRows = document.querySelectorAll('tbody tr');

  if (!searchInput || tableRows.length === 0) {
    console.error('Search input or table rows not found.');
    return;
  }

  function filterClients() {
    const searchValue = searchInput.value.toLowerCase().trim();

    tableRows.forEach(row => {
      const cells = row.querySelectorAll('td');
      const clientIdCell = cells[2]; // index 2 → 3rd column
      const clientId = clientIdCell ? clientIdCell.textContent.toLowerCase().trim() : '';

      row.style.display =
        clientId.includes(searchValue) || searchValue === '' ? '' : 'none';
    });
  }

  // Listen for typing
  searchInput.addEventListener('input', filterClients);
});
</script>
<script>
    if (window.location.search.includes('success=1')) {
        document.getElementById('successAlert').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    }
</script>
<?php include("layouts/footer.php"); ?>
