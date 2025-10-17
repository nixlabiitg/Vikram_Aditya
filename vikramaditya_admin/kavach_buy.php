<?php include("layouts/header.php"); ?>

<div class=" p-6 font-sans text-gray-800">

  <div class="max-w-6xl mx-auto">

    <!-- Page header -->
    <header class="mb-6">
      <h1 class="text-2xl font-bold text-[#7A3E00]">Kavach — Buy • Submit • Shuddhi</h1>
      <p class="text-sm text-gray-600">Manage buying, submission and purification of Kavach items.</p>
    </header>

    <!-- Tabs -->
    <nav class="mb-6">
      <div class="inline-flex bg-white rounded-lg shadow-sm border border-orange-200">
        <button id="tab-buy" class="px-4 py-2 rounded-l-lg bg-orange-100 text-orange-800 font-medium">Buy Kavach</button>
        <button id="tab-submit" class="px-4 py-2">Submit Kavach</button>
        <button id="tab-shuddhi" class="px-4 py-2 rounded-r-lg">Kavach Shuddhi</button>
      </div>
    </nav>

    <!-- Container -->
    <div class="space-y-6">

      <!-- BUY Kavach -->
      <section id="panel-buy" class="bg-white rounded-2xl shadow p-6 border border-orange-200">
        <div class="grid md:grid-cols-3 gap-6">

          <!-- Left: Item selection -->
          <div class="md:col-span-2 space-y-4">
            <h2 class="text-lg font-semibold text-[#7A3E00]">Buy Kavach</h2>
            <p class="text-sm text-gray-600">Select kavach items to add to cart.</p>
            <div class="relative">
                <label class="block text-sm text-gray-700 mb-1">Search Client ID</label>
                <div class="flex gap-2">
                    <input id="buyClientID" placeholder="Enter Client ID..." class="flex-1 border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-orange-300 focus:border-orange-400"/>
                    <button onclick="searchClient('buy')" type="button" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Search</button>
                </div>
                <div id="buyClientInfo" class="hidden mt-3 bg-orange-50 border border-orange-200 rounded p-3 text-sm text-gray-700">
                    <p><strong>Name:</strong> <span id="buyClientName">—</span></p>
                    <p><strong>Phone:</strong> <span id="buyClientPhone">—</span></p>
                    <p><strong>Client ID:</strong> <span id="buyClientCode">—</span></p>
                </div>
            </div>

            <h2 class="text-lg font-semibold text-[#7A3E00]">Buy Kavach</h2>
            <p class="text-sm text-gray-600">Select kavach items to add to cart.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
              <!-- Example kavach items -->
              <button onclick="addToCart('Hanuman Kavach', 750)" class="bg-white border border-orange-200 p-3 rounded-lg hover:shadow-md text-left">
                <div class="font-medium">Hanuman Kavach</div>
                <div class="text-sm text-orange-600">₹750</div>
              </button>

              <button onclick="addToCart('Narayan Kavach', 990)" class="bg-white border border-orange-200 p-3 rounded-lg hover:shadow-md text-left">
                <div class="font-medium">Narayan Kavach</div>
                <div class="text-sm text-orange-600">₹990</div>
              </button>

              <button onclick="addToCart('Guru Kavach', 780)" class="bg-white border border-orange-200 p-3 rounded-lg hover:shadow-md text-left">
                <div class="font-medium">Guru Kavach</div>
                <div class="text-sm text-orange-600">₹780</div>
              </button>

              <button onclick="addToCart('Graha Kavach', 810)" class="bg-white border border-orange-200 p-3 rounded-lg hover:shadow-md text-left">
                <div class="font-medium">Graha Kavach</div>
                <div class="text-sm text-orange-600">₹810</div>
              </button>
            </div>

          </div>

          <!-- Right: Cart & client / payment -->
          <aside class="bg-[#FFF9F0] rounded-lg p-4 border border-orange-200">
            <h3 class="text-sm font-semibold text-[#7A3E00]">Cart</h3>

            <div id="cartList" class="mt-3 max-h-48 overflow-auto space-y-2"></div>

            <div class="mt-4 border-t border-orange-100 pt-3 space-y-2">
              <div class="flex justify-between text-sm text-gray-600">
                <div>Subtotal</div><div id="subtotal">₹0</div>
              </div>
              <div class="flex justify-between text-sm text-gray-600">
                <div>Consultation Fee</div><div id="consultFee">₹0</div>
              </div>
              <div class="flex justify-between font-semibold text-lg text-orange-700">
                <div>Total</div><div id="grandTotal">₹0</div>
              </div>
            </div>

            <!-- Payment -->
            <div class="mt-4 flex gap-2">
              <button onclick="openPayment()" class="flex-1 bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700">Pay Now</button>
              <button onclick="saveOrder()" class="flex-1 bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700">Save Order</button>
            </div>
          </aside>
        </div>
      </section>

      <!-- SUBMIT Kavach -->
      <section id="panel-submit" class="hidden bg-white rounded-2xl shadow p-6 border border-orange-200">
        <h2 class="text-lg font-semibold text-[#7A3E00]">Submit Kavach</h2>
        <p class="text-sm text-gray-600">Record kavach submission (for storage, repair, or other reasons).</p>
        <div class="relative">
            <label class="block text-sm text-gray-700 mb-1">Search Client ID</label>
            <div class="flex gap-2">
                <input id="submitClientID" placeholder="Enter Client ID..." class="flex-1 border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-orange-300 focus:border-orange-400"/>
                <button onclick="searchClient('submit')" type="button" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Search</button>
            </div>
            <div id="submitClientInfo" class="hidden mt-3 bg-orange-50 border border-orange-200 rounded p-3 text-sm text-gray-700">
                <p><strong>Name:</strong> <span id="submitClientName">—</span></p>
                <p><strong>Phone:</strong> <span id="submitClientPhone">—</span></p>
                <p><strong>Client ID:</strong> <span id="submitClientCode">—</span></p>
            </div>
        </div>

        <div id="submitForm" class="mt-4 grid md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm text-gray-700">Kavach Name</label>
            <input id="submitKavachName" class="w-full mt-1 border border-gray-300 rounded px-3 py-2" placeholder="e.g. Hanuman Kavach"/>
          </div>

          <div>
            <label class="block text-sm text-gray-700">Purpose of Submission</label>
            <select id="submitPurpose" class="w-full mt-1 border border-gray-300 rounded px-3 py-2">
              <option value="">-- Select Purpose --</option>
              <option value="storage">Storage</option>
              <option value="repair">Repair</option>
              <option value="resanctify">Re-sanctify</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div>
            <label class="block text-sm text-gray-700">Submission Date</label>
            <input id="submitDate" type="date" class="w-full mt-1 border border-gray-300 rounded px-3 py-2" />
          </div>

          <div>
            <label class="block text-sm text-gray-700">Expected Return Date</label>
            <input id="returnDate" type="date" class="w-full mt-1 border border-gray-300 rounded px-3 py-2" />
          </div>

          <div class="md:col-span-2 flex items-center gap-3 mt-1">
            <button type="button" onclick="submitKavach()"  class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Submit Kavach</button>
            <button class="bg-gray-200 px-4 py-2 rounded" type="button" onclick="clearSubmitForm()">Reset</button>
          </div>
        </div>

        <div class="mt-6">
          <h3 class="text-sm font-semibold text-gray-700">Recent Submissions</h3>
          <div id="submissionsList" class="mt-2 space-y-2"></div>
        </div>
      </section>

      <!-- SHUDDHI / Purification -->
      <section id="panel-shuddhi" class="hidden bg-white rounded-2xl shadow p-6 border border-orange-200">
        <h2 class="text-lg font-semibold text-[#7A3E00]">Kavach Shuddhi (Purification)</h2>
        <p class="text-sm text-gray-600">Send kavach for shuddhi (ready in 7-10 days).</p>
        <div class="relative">
            <label class="block text-sm text-gray-700 mb-1">Search Client ID</label>
            <div class="flex gap-2">
                <input id="shuddhiClientID" placeholder="Enter Client ID..." class="flex-1 border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-orange-300 focus:border-orange-400"/>
                <button onclick="searchClient('shuddhi')" type="button" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Search</button>
            </div>
            <div id="shuddhiClientInfo" class="hidden mt-3 bg-orange-50 border border-orange-200 rounded p-3 text-sm text-gray-700">
                <p><strong>Name:</strong> <span id="shuddhiClientName">—</span></p>
                <p><strong>Phone:</strong> <span id="shuddhiClientPhone">—</span></p>
                <p><strong>Client ID:</strong> <span id="shuddhiClientCode">—</span></p>
            </div>
        </div>
        <div class="mt-4 grid md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm text-gray-700">Kavach Name</label>
            <input id="shuddhiKavachName" class="w-full mt-1 border border-gray-300 rounded px-3 py-2"/>
          </div>

          <div>
            <label class="block text-sm text-gray-700">Submission Date</label>
            <input id="shuddhiDate" type="date" class="w-full mt-1 border border-gray-300 rounded px-3 py-2" onchange="updateShuddhiReady()" />
          </div>

          <div>
            <label class="block text-sm text-gray-700">Notes (optional)</label>
            <input id="shuddhiNotes" class="w-full mt-1 border border-gray-300 rounded px-3 py-2"/>
          </div>

          <div class="md:col-span-2">
            <div id="shuddhiReadyBox" class="mt-3 p-3 rounded border border-orange-100 bg-orange-50 hidden">
              <p class="text-sm text-gray-700">Expected ready window: <strong id="shuddhiWindow">—</strong></p>
              <p class="text-sm text-gray-600 mt-1">You can mark status as <em>Making → Done → Delivered</em> when applicable.</p>
            </div>

            <div class="mt-4 flex gap-2">
              <button onclick="createShuddhiRecord()" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">Send for Shuddhi</button>
              <button onclick="clearShuddhiForm()" class="bg-gray-200 px-4 py-2 rounded">Reset</button>
            </div>
          </div>
        </div>

        <div class="mt-6">
          <h3 class="text-sm font-semibold text-gray-700">Kavach Shuddhi Queue</h3>
          <div id="shuddhiList" class="mt-3 space-y-3"></div>
        </div>
      </section>
    </div>
  </div>

  <!-- Payment modal -->
  <div id="paymentModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-md border border-orange-200">
      <h3 class="text-lg font-semibold text-[#7A3E00]">Payment</h3>
      <div class="mt-3">
        <label class="block text-sm text-gray-700">Client</label>
        <input id="paymentClient" class="w-full mt-1 border border-gray-300 rounded px-3 py-2"/>
      </div>

      <div class="mt-3 grid grid-cols-2 gap-3">
        <div>
          <label class="block text-sm text-gray-700">Amount</label>
          <input id="paymentAmount" type="number" class="w-full mt-1 border border-gray-300 rounded px-3 py-2"/>
        </div>
        <div>
          <label class="block text-sm text-gray-700">Method</label>
          <select id="paymentMethod" class="w-full mt-1 border border-gray-300 rounded px-3 py-2">
            <option value="cash">Cash</option>
            <option value="card">Card</option>
            <option value="upi">UPI</option>
          </select>
        </div>
      </div>

      <div class="mt-4 flex justify-end gap-2">
        <button onclick="closePayment()" class="px-4 py-2 rounded border">Cancel</button>
        <button onclick="completePayment()" class="px-4 py-2 rounded bg-green-600 text-white">Complete</button>
      </div>
    </div>
  </div>
<script>
  const clientDatabase = {
    "C101": { name: "Rahul Sharma", phone: "9876543210" },
    "C102": { name: "Priya Das", phone: "9823412356" },
    "C103": { name: "Amit Verma", phone: "9898123456" },
    "C104": { name: "Suman Roy", phone: "9831022211" }
  };

  function searchClient(section) {
    const idInput = document.getElementById(section + "ClientID");
    const infoBox = document.getElementById(section + "ClientInfo");
    const nameSpan = document.getElementById(section + "ClientName");
    const phoneSpan = document.getElementById(section + "ClientPhone");
    const codeSpan = document.getElementById(section + "ClientCode");

    const clientID = idInput.value.trim();
    if (!clientID) return alert("Please enter a Client ID");

    const client = clientDatabase[clientID];
    infoBox.classList.remove("hidden");
    if (client) {
      nameSpan.textContent = client.name;
      phoneSpan.textContent = client.phone;
      codeSpan.textContent = clientID;
    } else {
      nameSpan.textContent = "Not Found";
      phoneSpan.textContent = "—";
      codeSpan.textContent = clientID + " (Not Found)";
    }
  }

  /* -------------------------
     Tabs
  -------------------------*/
  const tabBuy = document.getElementById('tab-buy');
  const tabSubmit = document.getElementById('tab-submit');
  const tabShuddhi = document.getElementById('tab-shuddhi');
  const panelBuy = document.getElementById('panel-buy');
  const panelSubmit = document.getElementById('panel-submit');
  const panelShuddhi = document.getElementById('panel-shuddhi');

  function showPanel(panel) {
    panelBuy.classList.add('hidden');
    panelSubmit.classList.add('hidden');
    panelShuddhi.classList.add('hidden');
    tabBuy.classList.remove('bg-orange-100','text-orange-800');
    tabSubmit.classList.remove('bg-orange-100','text-orange-800');
    tabShuddhi.classList.remove('bg-orange-100','text-orange-800');

    panel.classList.remove('hidden');
    if (panel === panelBuy) tabBuy.classList.add('bg-orange-100','text-orange-800');
    if (panel === panelSubmit) tabSubmit.classList.add('bg-orange-100','text-orange-800');
    if (panel === panelShuddhi) tabShuddhi.classList.add('bg-orange-100','text-orange-800');
  }
  tabBuy.addEventListener('click', () => showPanel(panelBuy));
  tabSubmit.addEventListener('click', () => showPanel(panelSubmit));
  tabShuddhi.addEventListener('click', () => showPanel(panelShuddhi));

  /* -------------------------
     Buy Kavach: Cart
  -------------------------*/
  let cart = [];

  function addToCart(name, price) {
    const idx = cart.findIndex(i => i.name === name);
    if (idx >= 0) cart[idx].qty += 1;
    else cart.push({ name, price, qty: 1 });
    renderCart();
  }


  function removeCartItem(name) {
    cart = cart.filter(i => i.name !== name);
    renderCart();
  }

  function updateQty(index, val) {
    val = parseInt(val) || 1;
    if (val < 1) val = 1;
    cart[index].qty = val;
    renderCart();
  }

  function renderCart() {
    const el = document.getElementById('cartList');
    el.innerHTML = '';
    let subtotal = 0;
    cart.forEach((it, idx) => {
      const itemTotal = it.price * it.qty;
      subtotal += itemTotal;
      const row = document.createElement('div');
      row.className = 'flex items-center justify-between bg-white border border-orange-100 rounded p-2';
      row.innerHTML = `
        <div>
          <div class="font-medium">${it.name}</div>
          <div class="text-xs text-gray-500">₹${it.price} x ${it.qty}</div>
        </div>
        <div class="flex items-center gap-2">
          <input type="number" min="1" value="${it.qty}" class="w-16 border border-gray-300 rounded text-center text-sm" onchange="updateQty(${idx}, this.value)" />
          <button onclick="removeCartItem('${it.name}')" class="text-red-500 text-sm px-2">✖</button>
        </div>
      `;
      el.appendChild(row);
    });

    document.getElementById('subtotal').textContent = `₹${subtotal}`;
    document.getElementById('grandTotal').textContent = `₹${subtotal}`;
  }

  function openPayment() {
    if (cart.length === 0) return alert('Cart is empty');

    const clientName = document.getElementById('buyClientName').textContent;
    const clientID = document.getElementById('buyClientCode').textContent;
    if (!clientName || clientName === '—' || clientName === 'Not Found') {
      return alert('Please search and select a valid client before proceeding to payment.');
    }

    document.getElementById('paymentClient').value = `${clientName} (${clientID})`;
    const grandText = document.getElementById('grandTotal').textContent || '₹0';
    document.getElementById('paymentAmount').value = parseFloat(grandText.replace(/[₹,]/g, '')) || 0;
    document.getElementById('paymentModal').classList.remove('hidden');
    document.getElementById('paymentModal').classList.add('flex');
  }

  function closePayment() {
    document.getElementById('paymentModal').classList.add('hidden');
    document.getElementById('paymentModal').classList.remove('flex');
  }

  function completePayment() {
    const client = document.getElementById('paymentClient').value.trim();
    const amount = parseFloat(document.getElementById('paymentAmount').value) || 0;
    const method = document.getElementById('paymentMethod').value;
    if (!client) return alert('Please enter client before completing payment');

    const order = {
      id: 'KAV' + Date.now().toString().slice(-5),
      client,
      items: JSON.parse(JSON.stringify(cart)),
      amount,
      method,
      date: new Date().toISOString()
    };

    cart = [];
    renderCart();
    closePayment();
    alert('Payment complete — Order ID: ' + order.id);
  }

  function saveOrder() {
    if (cart.length === 0) return alert('Cart is empty');
    const clientName = document.getElementById('buyClientName').textContent;
    const clientID = document.getElementById('buyClientCode').textContent;
    if (!clientName || clientName === '—' || clientName === 'Not Found') {
      return alert('Please search and select a valid client before saving the order.');
    }

    const order = {
      id: 'ORD' + Date.now().toString().slice(-6),
      client: `${clientName} (${clientID})`,
      items: JSON.parse(JSON.stringify(cart)),
      total: parseFloat(document.getElementById('grandTotal').textContent.replace(/[₹,]/g, '')),
      date: new Date().toISOString()
    };

    const orders = JSON.parse(localStorage.getItem('kavach_orders') || '[]');
    orders.unshift(order);
    localStorage.setItem('kavach_orders', JSON.stringify(orders));

    cart = [];
    renderCart();
    alert('Order saved successfully — Order ID: ' + order.id);
  }
</script>
<script>
function submitKavach() {
  window.location.href = "kavach_submit?success=1";
}
</script>
<script>
function createShuddhiRecord() {
  window.location.href = "kavach_shuddhikaran?success=1";
}
</script>
<?php include("layouts/footer.php"); ?>