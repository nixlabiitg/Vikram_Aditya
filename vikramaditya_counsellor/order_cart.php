<?php include("layouts/header.php"); ?>

<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-xl p-6 mt-6">
  <h2 class="text-2xl font-bold text-[#7A3E00] mb-6">Cart</h2>

  <div class="overflow-x-auto">
    <table class="w-full text-center border-b border-[#FFD699] rounded-lg overflow-hidden">
      <thead class="bg-[#FFF4E5] text-[#7A3E00]">
        <tr class="border-b border-[#FFD699]">
          <th class="p-3">#</th>
          <th class="p-3">Client Details</th>
          <th class="p-3">Client ID</th>
          <th class="p-3">Client Phone</th>
          <th class="p-3">Items Ordered</th>
          <th class="p-3">Price (Total)</th>
          <th class="p-3">Quantity</th>
        </tr>
      </thead>
      <tbody id="cartTable" class="text-gray-700">
      </tbody>
    </table>
  </div>
</div>

<div id="itemModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6 relative">
    <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Items Ordered</h3>
    <ul id="modalItems" class="space-y-3"></ul>
    <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-red-500">✖</button>
  </div>
</div>

<script>
  const cartData = [
    {
      client: { name: "Ravi Sharma", id: "C1023", phone: "+91 9876543210" },
      items: [
        { name: "Mala", price: 500 },
        { name: "Gemstone", price: 1200 }
      ]
    },
    {
      client: { name: "Priya Desai", id: "C1044", phone: "+91 9123456780" },
      items: [
        { name: "Rudraksha", price: 800 }
      ]
    },
    {
      client: { name: "Ankit Mehra", id: "C1099", phone: "+91 9988776655" },
      items: [
        { name: "Gemstone", price: 1200 },
        { name: "Rudraksha", price: 800 },
        { name: "Mala", price: 500 }
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
        <td class="p-3 border-b border-[#FFD699]">${order.items.length}</td>
      `;

      const expandRow = document.createElement("tr");
      expandRow.id = expandId;
      expandRow.classList.add("hidden", "bg-[#FFF9F3]");
      expandRow.innerHTML = `
        <td colspan="7" class="p-4 text-center">
          <button onclick="window.location.href='order_accepted'" 
                  class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
            Accept Order
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

  if (row.classList.contains("hidden")) {
    el.textContent = "+";
  } else {
    el.textContent = "-";
  }
}

  function viewItems(orderIndex) {
    const order = cartData[orderIndex];
    modalItems.innerHTML = "";

    order.items.forEach((item, idx) => {
      const li = document.createElement("li");
      li.className = "flex justify-between items-center border border-gray-300 p-2 rounded";
      li.innerHTML = `
        <span>${item.name} - ₹${item.price}</span>
        <button onclick="removeItem(${orderIndex}, ${idx})" class="text-red-600 hover:text-red-800">
          <!-- Trash SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" 
            class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </button>
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

<?php include("layouts/footer.php"); ?>
