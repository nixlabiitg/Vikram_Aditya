<?php include("layouts/header.php"); ?>

<div class="p-6 min-h-screen">
  <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Accepted Orders</h1>

  <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-300">
    <table class="w-full border-collapse">
      <thead class="bg-[#FFEBD6] text-[#7A3E00] text-center">
        <tr>
          <th class="px-4 py-3 border-b border-[#FFD699]">#</th>
          <th class="px-4 py-3 border-b border-[#FFD699]">Client Details</th>
          <th class="px-4 py-3 border-b border-[#FFD699]">Client Phone</th>
          <th class="px-4 py-3 border-b border-[#FFD699]">Order ID</th>
          <th class="px-4 py-3 border-b border-[#FFD699]">Items</th>
          <th class="px-4 py-3 border-b border-[#FFD699]">Order Amount</th>
          <th class="px-4 py-3 border-b border-[#FFD699]">Paid Amount</th>
        </tr>
      </thead>
      <tbody id="acceptedOrderTable" class="text-gray-700">
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
const acceptedOrders = [
  {
    id:1, client:"Abc Sharma", phone:"9876543210", orderId:"ORD2501",
    items: [
        { name: "Mala", price: 500 },
        { name: "Gemstone", price: 1200 }
    ],
    orderAmt:"₹42,600.00", paid:"₹42,600.00"
  },
  {
    id:2, client:"Jagriti", phone:"9864102986", orderId:"ORD2502",
    items:[
      {name:"Mala", price:"₹10,000"},
      {name:"Rudraksh", price:"₹5,000"}
    ],
    orderAmt:"₹15,000.00", paid:"₹15,000.00"
  },
  {
    id:3, client:"Jugal", phone:"9864102986", orderId:"ORD2503",
    items:[
      
      {name:"Mala", price:"₹3,500"}
    ],
    orderAmt:"₹38,500.00", paid:"₹38,500.00"
  }
];

function renderAcceptedOrders() {
  const table = document.getElementById("acceptedOrderTable");
  table.innerHTML = "";
  acceptedOrders.forEach((o, i) => {
    const expandId = `expandAcc${i}`;
    const row = `
      <tr class="hover:bg-gray-50 text-center">
        <td class="px-4 py-3 border-b border-[#FFD699] text-center">
          <button class="w-7 h-7 flex items-center justify-center bg-[#7A3E00] text-white rounded hover:bg-[#5e2f00]" 
            onclick="toggleExpand('${expandId}', this)">+</button>
        </td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.client}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.phone}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.orderId}</td>
        <td class="px-4 py-3 border-b border-[#FFD699] text-blue-600 cursor-pointer hover:underline"
            onclick="viewItems(${i})">View</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.orderAmt}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.paid}</td>
      </tr>
      <tr id="${expandId}" class="hidden bg-gray-50">
        <td colspan="7" class="px-6 py-4 border">
          <div class="space-y-3">
            <p class="text-gray-800"><strong>Balance Amount:</strong> ₹0.00</p>
            <a href="invoice.pdf" target="_blank" 
               class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
              Payment: Invoice
            </a>
            <p class="text-gray-800"><strong>Order Status:</strong> 
              <span class="text-blue-600 font-semibold">Booked</span>
            </p>
          </div>
        </td>
      </tr>
    `;
    table.insertAdjacentHTML("beforeend", row);
  });
}

function toggleExpand(id, el) {
  const row = document.getElementById(id);
  row.classList.toggle("hidden");
  el.textContent = row.classList.contains("hidden") ? "+" : "-";
}

const modal = document.getElementById("itemModal");
const modalItems = document.getElementById("modalItems");

function viewItems(orderIndex) {
  const order = acceptedOrders[orderIndex];
  modalItems.innerHTML = "";
  order.items.forEach((item, idx) => {
    modalItems.innerHTML += `
      <li class="flex justify-between items-center pb-2">
        <span>${item.name}</span>
        <span class="font-semibold">${item.price}</span>
        <button onclick="removeItem(${orderIndex}, ${idx})" class="ml-3 text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
        </button>
      </li>`;
  });
  modal.classList.remove("hidden");
  modal.classList.add("flex");
}

function closeModal() {
  modal.classList.add("hidden");
  modal.classList.remove("flex");
}

function removeItem(orderIndex, itemIndex) {
  acceptedOrders[orderIndex].items.splice(itemIndex, 1);
  viewItems(orderIndex); 
}

renderAcceptedOrders();
</script>

<?php include("layouts/footer.php"); ?>
