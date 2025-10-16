<?php include("layouts/header.php"); ?>

<div class="p-6 min-h-screen">
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
    <h1 class="text-2xl font-bold text-[#7A3E00] flex items-center gap-2 mb-6">
      <svg viewBox="0 0 24 24" class="w-12 h-12 text-orange-600" aria-hidden="true">
        <path fill="currentColor" d="M5 15h14l-1.2 4.2a2 2 0 0 1-1.92 1.4H8.12a2 2 0 0 1-1.92-1.4L5 15z"/>
        <rect x="4" y="13" width="16" height="2" rx="0.5" fill="currentColor"/>
        <path fill="currentColor" d="M12 6c2.7 2.3 3.8 4.6 3.2 6.7-.5 1.8-2 2.9-3.9 2.9s-3.4-1.1-3.9-2.9C6.8 10.6 9.1 8.7 12 6z"/>
        <path fill="white" fill-opacity=".8" d="M12 9.2c1.3 1.2 1.8 2.3 1.5 3.3-.3 1-1.1 1.6-2.1 1.6s-1.8-.6-2.1-1.6c-.3-1 .2-2.1 1.5-3.3.2-.2.5-.2.7 0z"/>
      </svg>Completed
    </h1>
    <input type="text" placeholder="Search Client ID..." class="bg-white border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
  </div>

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
        <!-- Dynamic rows -->
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div id="itemModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6 relative">
    <h3 class="text-lg font-semibold text-[#7A3E00] mb-4">Completed Puja</h3>
    <ul id="modalItems" class="space-y-3"></ul>
    <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-red-500">✖</button>
  </div>
</div>
<script>
const acceptedOrders = [
  {
    id: 1,
    client: "Abc Sharma",
    phone: "9876543210",
    orderId: "ORD2501",
    items: [
      { name: "Ganesh Puja", price: 5000, date: "12 Oct 2025", time: "10:00 AM" }
    ],
    orderAmt: 42600,
    paidAmt: 20000 
  },
  {
    id: 2,
    client: "Jagriti",
    phone: "9864102986",
    orderId: "ORD2502",
    items: [
      { name: "Ganesh Puja", price: 10000, date: "13 Oct 2025", time: "11:00 AM" },
      { name: "Narayan Puja", price: 5000, date: "13 Oct 2025", time: "12:00 PM" }
    ],
    orderAmt: 15000,
    paidAmt: 15000 
  }
];

function renderAcceptedOrders() {
  const table = document.getElementById("acceptedOrderTable");
  table.innerHTML = "";

  acceptedOrders.forEach((order, i) => {
    const expandId = `expandAcc${i}`;
    const balance = order.orderAmt - order.paidAmt;
    const isPaid = balance <= 0;

    const row = `
      <tr class="hover:bg-gray-50 text-center">
        <td class="px-4 py-3 border-b border-[#FFD699] text-center">
          <button class="w-7 h-7 flex items-center justify-center bg-[#7A3E00] text-white rounded hover:bg-[#5e2f00]" 
            onclick="toggleExpand('${expandId}', this)">+</button>
        </td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${order.client}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${order.phone}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${order.orderId}</td>
        <td class="px-4 py-3 border-b border-[#FFD699] text-blue-600 cursor-pointer hover:underline"
            onclick="viewItems(${i})">View</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">₹${order.orderAmt.toLocaleString()}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">₹${order.paidAmt.toLocaleString()}</td>
      </tr>
      <tr id="${expandId}" class="hidden bg-gray-50">
        <td colspan="7" class="px-6 py-4 border border-orange-300">
          <div class="space-y-3">
            <p class="text-gray-800"><strong>Balance Amount:</strong> ₹<span id="balance-${i}">${balance.toLocaleString()}</span></p>
            <div id="payment-actions-${i}">
              ${
                isPaid
                  ? `<a href="invoice.pdf" target="_blank" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Payment: Invoice</a>`
                  : `<button onclick="payNow(${i})" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Pay Now</button>
                     <button onclick="reminder(${i})" class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Reminder</button>
                     <button onclick="callClient(${i})" class="px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700">Call</button>`
              }
            </div>
            <p class="text-gray-800"><strong>Status:</strong> 
              <span class="text-blue-600 font-semibold">${isPaid ? "Completed" : "Pending"}</span>
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
    const isPaid = order.paidAmt >= order.orderAmt;
    modalItems.innerHTML += `
      <li class="flex justify-between items-center border-b border-gray-300 pb-2">
        <div>
          <div class="font-semibold">${item.name}</div>
          <div class="text-gray-600 text-sm">${item.date} | ${item.time}</div>
        </div>
        <span class="font-semibold">₹${item.price.toLocaleString()}</span>
        
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
  const newOrderAmt = acceptedOrders[orderIndex].items.reduce((sum, i) => sum + i.price, 0);
  acceptedOrders[orderIndex].orderAmt = newOrderAmt;
  if (acceptedOrders[orderIndex].paidAmt > newOrderAmt) {
    acceptedOrders[orderIndex].paidAmt = newOrderAmt;
  }
  renderAcceptedOrders();
  viewItems(orderIndex);
}

function payNow(orderIndex) {
  const order = acceptedOrders[orderIndex];
  let payAmt = prompt(`Enter amount to pay (Balance: ₹${(order.orderAmt - order.paidAmt).toLocaleString()})`, order.orderAmt - order.paidAmt);
  if (!payAmt) return;
  payAmt = parseFloat(payAmt);
  if (isNaN(payAmt) || payAmt <= 0) return alert("Enter a valid amount");

  order.paidAmt += payAmt;
  if (order.paidAmt > order.orderAmt) order.paidAmt = order.orderAmt;

  renderAcceptedOrders();
}

function reminder(orderIndex) {
  alert(`Reminder sent to ${acceptedOrders[orderIndex].client}`);
}
function callClient(orderIndex) {
  alert(`Calling ${acceptedOrders[orderIndex].phone}...`);
}

renderAcceptedOrders();
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('input[placeholder="Search Client ID..."]');

  if (!searchInput) {
    console.error('Search input not found.');
    return;
  }

  function filterOrders() {
    const searchValue = searchInput.value.toLowerCase().trim();
    const tableRows = document.querySelectorAll('#acceptedOrderTable tr'); 

    tableRows.forEach(row => {
      const cells = row.querySelectorAll('td');
      if (!cells.length) return;

      const orderIdCell = cells[3];
      const orderId = orderIdCell ? orderIdCell.textContent.toLowerCase().trim() : '';

      row.style.display = orderId.includes(searchValue) || searchValue === '' ? '' : 'none';
    });
  }

  searchInput.addEventListener('input', filterOrders);
});
</script>

<?php include("layouts/footer.php"); ?>
