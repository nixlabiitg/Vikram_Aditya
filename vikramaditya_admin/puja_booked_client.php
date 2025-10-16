<?php include("layouts/header.php"); ?>

<div class="main-content p-6 min-h-screen">
  
  <div x-data="{ tab: 'booked' }" class="p-6">
    <!-- Heading -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-bold text-[#7A3E00] flex items-center gap-2">
        <svg viewBox="0 0 24 24" class="w-12 h-12 text-orange-600" aria-hidden="true">
          <path fill="currentColor" d="M5 15h14l-1.2 4.2a2 2 0 0 1-1.92 1.4H8.12a2 2 0 0 1-1.92-1.4L5 15z"/>
          <rect x="4" y="13" width="16" height="2" rx="0.5" fill="currentColor"/>
          <path fill="currentColor" d="M12 6c2.7 2.3 3.8 4.6 3.2 6.7-.5 1.8-2 2.9-3.9 2.9s-3.4-1.1-3.9-2.9C6.8 10.6 9.1 8.7 12 6z"/>
          <path fill="white" fill-opacity=".8" d="M12 9.2c1.3 1.2 1.8 2.3 1.5 3.3-.3 1-1.1 1.6-2.1 1.6s-1.8-.6-2.1-1.6c-.3-1 .2-2.1 1.5-3.3.2-.2.5-.2.7 0z"/>
        </svg>
        Booked Puja
      </h1>

      <button onclick="window.location.href='puja'" class="bg-[#FF7F50] hover:bg-[#E67300] text-white px-4 py-2 rounded shadow text-sm">
        + Book Puja
      </button>
    </div>

    <!-- Success Alert -->
    <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
        <div>
            <span class="font-bold">Success!</span>
            <span>Puja Booked successfully.</span>
        </div>
        <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
    </div>

    <!-- Tabs -->
    <div class="flex mb-6 space-x-4 border-b border-orange-200">
      <button @click="tab = 'booked'" 
          :class="tab === 'booked' ? 'border-b-2 border-orange-500 text-orange-600 font-semibold' : 'text-gray-600'" 
          class="px-4 py-2">
          Booked
      </button>
      <button @click="tab = 'waiting'" 
          :class="tab === 'waiting' ? 'border-b-2 border-orange-500 text-orange-600 font-semibold' : 'text-gray-600'" 
          class="px-4 py-2">
          Waiting
      </button>
      <button @click="tab = 'done'" 
          :class="tab === 'done' ? 'border-b-2 border-orange-500 text-orange-600 font-semibold' : 'text-gray-600'" 
          class="px-4 py-2">
          Done
      </button>
    </div>

    <!-- Tab Content -->
    <div x-show="tab === 'booked'" class="space-y-6 bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
      <h2 class="text-xl font-semibold mb-4">Booked Appointments</h2>
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
            <tr>
              <td class="px-4 py-3 font-medium text-gray-800">VK0022</td>
              <td class="px-4 py-3 font-medium text-gray-800">Rajesh Kumar</td>
              <td class="px-4 py-3 font-medium text-gray-800">Guru Puja</td>
              <td class="px-4 py-3 text-gray-600">+91 98765 12345</td>
              <td class="px-4 py-3">2025-08-06</td>
              <td class="px-4 py-3">9:00am-12:00pm</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div x-show="tab === 'waiting'" class="space-y-6 bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
      <h2 class="text-xl font-semibold mb-4">Waiting Appointments</h2>
      <p>List of waiting appointments here.</p>
    </div>

    <div x-show="tab === 'done'" class="space-y-6 bg-white shadow-lg rounded-2xl p-6 mb-6 border border-orange-200">
      <h2 class="text-xl font-semibold mb-4">Completed Appointments</h2>
      <p>List of completed appointments here.</p>
    </div>
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