<?php include("layouts/header.php"); ?>

<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl border border-[#FFD699] p-6">
  <h2 class="text-2xl font-bold text-[#7A3E00] mb-6">Referred Items</h2>

  <form id="itemsForm" class="space-y-4">
    <table class="w-full text-left rounded-lg overflow-hidden">
      <thead class="bg-[#FFEBD6] text-[#7A3E00] border-b border-[#FFD699]">
        <tr>
          <th class="p-3 flex items-center gap-2">
            <input type="checkbox" id="selectAll" class="w-5 h-5 accent-[#7A3E00]">
            <label for="selectAll" class="cursor-pointer">Select</label>
          </th>
          <th class="p-3">Item</th>
          <th class="p-3">Price</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-[#FFD699]">
          <td class="p-3">
            <input type="checkbox" name="item" value="Mala" data-price="500" class="w-5 h-5 accent-[#7A3E00] item-checkbox">
          </td>
          <td class="p-3">Mala</td>
          <td class="p-3">₹500</td>
        </tr>
        <tr class="border-b border-[#FFD699]">
          <td class="p-3">
            <input type="checkbox" name="item" value="Gemstone" data-price="1200" class="w-5 h-5 accent-[#7A3E00] item-checkbox">
          </td>
          <td class="p-3">Gemstone</td>
          <td class="p-3">₹1200</td>
        </tr>
        <tr class="border-b border-[#FFD699]">
          <td class="p-3">
            <input type="checkbox" name="item" value="Rudraksha" data-price="800" class="w-5 h-5 accent-[#7A3E00] item-checkbox">
          </td>
          <td class="p-3">Rudraksha</td>
          <td class="p-3">₹800</td>
        </tr>
      </tbody>
    </table>

    <div class="flex justify-between items-center mt-4">
      <span class="text-lg font-semibold text-[#7A3E00]">Total: ₹<span id="total">0</span></span>
      <button type="button" id="addToCartBtn"
        class="bg-[#7A3E00] text-white px-6 py-2 rounded-lg shadow hover:bg-[#5e2f00]">
        Add to Cart
      </button>
    </div>
  </form>
</div>

<script>
  const checkboxes = document.querySelectorAll('.item-checkbox');
  const totalSpan = document.getElementById("total");
  const addToCartBtn = document.getElementById("addToCartBtn");
  const selectAll = document.getElementById("selectAll");

  function updateTotal() {
    let total = 0;
    checkboxes.forEach(cb => {
      if (cb.checked) {
        total += parseInt(cb.dataset.price);
      }
    });
    totalSpan.textContent = total;
  }

  checkboxes.forEach(cb => cb.addEventListener("change", () => {
    updateTotal();
    
    if (!cb.checked) {
      selectAll.checked = false;
    } else if ([...checkboxes].every(x => x.checked)) {
      selectAll.checked = true;
    }
  }));

  selectAll.addEventListener("change", () => {
    checkboxes.forEach(cb => cb.checked = selectAll.checked);
    updateTotal();
  });

  addToCartBtn.addEventListener("click", () => {
    let selectedItems = [];
    checkboxes.forEach(cb => {
      if (cb.checked) {
        selectedItems.push({ name: cb.value, price: cb.dataset.price });
      }
    });

    if (selectedItems.length === 0) {
      alert("Please select at least one item.");
      return;
    }

    localStorage.setItem("cartItems", JSON.stringify(selectedItems));
    window.location.href = "order_cart";
  });
</script>

<?php include("layouts/footer.php"); ?>
