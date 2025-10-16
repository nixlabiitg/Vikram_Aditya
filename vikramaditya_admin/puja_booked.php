<?php include("layouts/header.php"); ?>

<div class="p-6 min-h-screen">
  <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
    <h1 class="text-2xl font-bold text-[#7A3E00] flex items-center gap-2">
        <svg viewBox="0 0 24 24" class="w-12 h-12 text-orange-600" aria-hidden="true">
        <path fill="currentColor" d="M5 15h14l-1.2 4.2a2 2 0 0 1-1.92 1.4H8.12a2 2 0 0 1-1.92-1.4L5 15z"/>
        <rect x="4" y="13" width="16" height="2" rx="0.5" fill="currentColor"/>
        <path fill="currentColor" d="M12 6c2.7 2.3 3.8 4.6 3.2 6.7-.5 1.8-2 2.9-3.9 2.9s-3.4-1.1-3.9-2.9C6.8 10.6 9.1 8.7 12 6z"/>
        <path fill="white" fill-opacity=".8" d="M12 9.2c1.3 1.2 1.8 2.3 1.5 3.3-.3 1-1.1 1.6-2.1 1.6s-1.8-.6-2.1-1.6c-.3-1 .2-2.1 1.5-3.3.2-.2.5-.2.7 0z"/>
        </svg>
        Booked
    </h1>
    <input type="text" placeholder="Search Order ID..." class="bg-white border border-gray-300 rounded px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" />
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
        { name: "Ganesh Puja", price: 500, date:"12 Oct 2025", time:"10:00 AM" }
    ],
    orderAmt: 42600, paidAmt: 0 
  },
  {
    id:2, client:"Jagriti", phone:"9864102986", orderId:"ORD2502",
    items:[
      {name:"Ganesh Puja", price:10000, date:"13 Oct 2025", time:"11:00 AM"},
      {name:"Narayan Puja", price:5000, date:"13 Oct 2025", time:"12:00 PM"}
    ],
    orderAmt: 15000, paidAmt: 15000
  }
];

function renderAcceptedOrders() {
  const table = document.getElementById("acceptedOrderTable");
  table.innerHTML = "";

  acceptedOrders.forEach((o, i) => {
    const expandId = `expandAcc${i}`;
    const balance = o.orderAmt - o.paidAmt;
    const isPaid = balance <= 0;

    const row = `
      <tr class="hover:bg-gray-50 text-center">
        <td class="px-4 py-3 border-b border-[#FFD699]">
          <button class="w-7 h-7 flex items-center justify-center bg-[#7A3E00] text-white rounded hover:bg-[#5e2f00]" 
            onclick="toggleExpand('${expandId}', this)">+</button>
        </td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.client}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.phone}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">${o.orderId}</td>
        <td class="px-4 py-3 border-b border-[#FFD699] text-blue-600 cursor-pointer hover:underline"
            onclick="viewItems(${i})">View</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">₹${o.orderAmt.toLocaleString()}</td>
        <td class="px-4 py-3 border-b border-[#FFD699]">₹${o.paidAmt.toLocaleString()}</td>
      </tr>
      <tr id="${expandId}" class="hidden bg-gray-50">
        <td colspan="7" class="px-6 py-4 border border-orange-300">
          <div class="space-y-3">
            <p class="text-gray-800"><strong>Balance Amount:</strong> ₹<span id="balance-${i}">${balance.toLocaleString()}</span></p>
            <div id="payment-actions-${i}">
              ${isPaid 
                ? `<a href="invoice.pdf" target="_blank" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Payment: Invoice</a>` 
                : `<input type="number" id="partialPay-${i}" placeholder="Enter amount" class="border px-2 py-1 w-32 mr-2 rounded"/>
                   <button onclick="payPartial(${i})" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Pay Now</button>`
              }
            </div>
            <p class="text-gray-800"><strong>Order Status:</strong> 
              <span class="text-blue-600 font-semibold" id="status-${i}">${isPaid ? 'Paid' : 'Pending'}</span>
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

  const isPaid = order.paidAmt >= order.orderAmt;

  order.items.forEach((item, idx) => {
    modalItems.innerHTML += `
      <li class="flex justify-between items-start pb-2 border-b border-gray-200 last:border-b-0">
        <div class="text-left">
          <div class="font-semibold">${item.name}</div>
          <div class="text-sm text-gray-600">${item.date} | ${item.time}</div>
        </div>
        <div class="flex items-center gap-3">
          <span class="font-semibold">₹${item.price.toLocaleString()}</span>
          ${!isPaid ? `<button onclick="removeItem(${orderIndex}, ${idx})" class="text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-5 h-5 text-red-500 hover:text-red-700 cursor-pointer" 
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </button>` : ''}
        </div>
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
  const order = acceptedOrders[orderIndex];
  const item = order.items[itemIndex];
  order.items.splice(itemIndex, 1);

  // Update Order Amount
  order.orderAmt -= item.price;

  // Update Balance if not fully paid
  const balanceSpan = document.getElementById(`balance-${orderIndex}`);
  if (balanceSpan) balanceSpan.textContent = (order.orderAmt - order.paidAmt).toLocaleString();

  viewItems(orderIndex);
  renderAcceptedOrders();
}

function payPartial(orderIndex) {
  const order = acceptedOrders[orderIndex];
  const input = document.getElementById(`partialPay-${orderIndex}`);
  let amount = parseFloat(input.value);
  if (isNaN(amount) || amount <= 0) return alert("Enter a valid amount");

  if (amount > (order.orderAmt - order.paidAmt)) {
    amount = order.orderAmt - order.paidAmt;
  }

  order.paidAmt += amount;

  const balanceSpan = document.getElementById(`balance-${orderIndex}`);
  balanceSpan.textContent = (order.orderAmt - order.paidAmt).toLocaleString();

  // If fully paid now
  if (order.paidAmt >= order.orderAmt) {
    const paymentActions = document.getElementById(`payment-actions-${orderIndex}`);
    paymentActions.innerHTML = `<a href="invoice.pdf" target="_blank" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Payment: Invoice</a>`;
    document.getElementById(`status-${orderIndex}`).textContent = 'Paid';
  }

  renderAcceptedOrders();
}

renderAcceptedOrders();
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('input[placeholder="Search Order ID..."]');

  const tableRows = document.querySelectorAll('tbody tr');

  if (!searchInput || tableRows.length === 0) {
    console.error('Search input or table rows not found.');
    return;
  }

  function filterOrders() {
    const searchValue = searchInput.value.toLowerCase().trim();

    tableRows.forEach(row => {
      const cells = row.querySelectorAll('td');

      const orderIdCell = cells[3];
      const orderId = orderIdCell ? orderIdCell.textContent.toLowerCase().trim() : '';

      row.style.display = orderId.includes(searchValue) || searchValue === '' ? '' : 'none';
    });
  }
  searchInput.addEventListener('input', filterOrders);
});
</script>

<?php include("layouts/footer.php"); ?>
