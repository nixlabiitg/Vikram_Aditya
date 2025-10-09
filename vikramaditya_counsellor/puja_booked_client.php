<?php include("layouts/header.php"); ?>

<div class="main-content p-6 min-h-screen">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#7A3E00] flex items-center gap-2">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3v4m0 0V3m0 4H6a2 2 0 00-2 2v11a2 2 0 002 2h12a2 2 0 002-2v-5" />
      </svg>
      Booked Puja
    </h1>

    <button onclick="window.location.href='puja'" class="bg-[#FF7F50] hover:bg-[#E67300] text-white px-4 py-2 rounded shadow text-sm">
      + Book Puja
    </button>
  </div>

  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Puja Booked successfully.</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

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
        <td class="px-4 py-3 font-medium text-gray-800">VK0022</td>
        <td class="px-4 py-3 font-medium text-gray-800">Rajesh Kumar</td>
        <td class="px-4 py-3 font-medium text-gray-800">Guru Puja</td>
        <td class="px-4 py-3 text-gray-600">+91 98765 12345</td>
        <td class="px-4 py-3">2025-08-06</td>
        <td class="px-4 py-3">9:00am-12:00pm</td>
      </tbody>
    </table>
  </div>
</div>

<script>
    if (window.location.search.includes('success=1')) {
        document.getElementById('successAlert').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    }
</script>
<?php include("layouts/footer.php"); ?>