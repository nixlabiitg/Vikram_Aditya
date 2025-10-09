<?php include("layouts/header.php") ?>

<div class="max-w-5xl mx-auto py-10 px-6">
  <h1 class="text-3xl font-extrabold text-center text-orange-700 mb-8 flex items-center justify-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
    </svg>
    Book a Puja
  </h1>

  <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-orange-100">
    <table class="w-full border-collapse">
      <thead class="bg-orange-50">
        <tr class="text-left text-orange-700 font-semibold">
          <th class="py-3 px-4">
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2v6a2 2 0 004 0v-6c0-1.1-.9-2-2-2z"/>
              </svg>
              Puja Name
            </div>
          </th>
          <th class="py-3 px-4">
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              Select Date
            </div>
          </th>
          <th class="py-3 px-4">
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
              Action
            </div>
          </th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <?php 
        $pujas = ["Ganesh Puja", "Mangal Puja", "Guru Puja", "Graha Puja"];
        foreach($pujas as $index => $puja): ?>
          <tr class="hover:bg-orange-50 transition">
            <td class="py-3 px-4 font-medium text-gray-700">
              <?= $puja ?>
            </td>

            <td class="py-3 px-4">
              <div class="flex items-center border rounded-lg px-2 bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <input type="date" id="date-<?= $index ?>"
                  class="w-full bg-transparent outline-none py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
              </div>
            </td>
            <td class="py-3 px-4">
              <button onclick="bookPuja('<?= $puja ?>', <?= $index ?>)"
                class="flex items-center gap-2 bg-gradient-to-r from-orange-500 to-orange-600 text-white px-4 py-2 rounded-lg shadow-md hover:from-orange-600 hover:to-orange-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Book
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<div id="toastContainer" class="fixed bottom-6 right-6 flex flex-col gap-3 z-50"></div>

<script>
function bookPuja(pujaName, index) {
  const date = document.getElementById(`date-${index}`).value;
  if (!date) {
    showAlert("error", `Please select a date for ${pujaName}`);
    return;
  }
  showAlert("success", `${pujaName} booked successfully on ${date}`);
}

function showAlert(type, message) {
  const toastContainer = document.getElementById("toastContainer");
  const toast = document.createElement("div");

  toast.className =
    "flex items-center gap-3 max-w-sm w-full bg-white shadow-2xl rounded-xl p-4 border-l-4 transform transition duration-300 translate-y-4 opacity-0";

  if (type === "error") {
    toast.classList.add("bg-yellow-50", "border-yellow-500");
    toast.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M12 5a7 7 0 110 14a7 7 0 010-14z"/>
      </svg>
      <div class="flex-1 text-sm font-medium text-gray-800">${message}</div>
    `;
  } else if (type === "success") {
    toast.classList.add("bg-green-50", "border-green-500");
    toast.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
      </svg>
      <div class="flex-1 text-sm font-medium text-gray-800">${message}</div>
    `;
  }

  toastContainer.appendChild(toast);

  setTimeout(() => {
    toast.classList.remove("translate-y-4", "opacity-0");
    toast.classList.add("translate-y-0", "opacity-100");
  }, 50);

  setTimeout(() => {
    toast.classList.remove("translate-y-0", "opacity-100");
    toast.classList.add("translate-y-4", "opacity-0");
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}
</script>

<?php include("layouts/footerr.php") ?>
