<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
  <h1 class="text-3xl font-bold text-[#7A3E00] mb-6 flex items-center gap-2">
    <svg class="w-7 h-7 text-[#7A3E00]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 018 0v2m-6-6a4 4 0 100-8 4 4 0 000 8z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 14v7" />
    </svg>
    My Reports
  </h1>

  <!-- KPI Cards -->
  <div class="grid grid-cols-2 md:grid-cols-6 gap-4 mb-6">
    <!-- Total Calls -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-4 text-center flex flex-col items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.16 3.483a1 1 0 01-.272 1.06l-2.12 2.12a16.001 16.001 0 006.584 6.584l2.12-2.12a1 1 0 011.06-.272l3.483 1.16a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
      </svg>
      <p class="text-sm text-gray-500">Total Calls</p>
      <h3 class="text-xl font-bold text-blue-600">120</h3>
    </div>

    <!-- New Leads -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-4 text-center flex flex-col items-center gap-2">
      <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
      </svg>
      <p class="text-sm text-gray-500">New Leads</p>
      <h3 class="text-xl font-bold text-green-600">45</h3>
    </div>

    <!-- Follow-Ups -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-4 text-center flex flex-col items-center gap-2">
      <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
      </svg>
      <p class="text-sm text-gray-500">Follow-Ups</p>
      <h3 class="text-xl font-bold text-yellow-600">30</h3>
    </div>

    <!-- Appointments -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-4 text-center flex flex-col items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2zM7 13h10"/>
      </svg>
      <p class="text-sm text-gray-500">Appointments</p>
      <h3 class="text-xl font-bold text-cyan-600">12</h3>
    </div>

    <!-- Conversions -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-4 text-center flex flex-col items-center gap-2">
      <svg class="w-8 h-8 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
      <p class="text-sm text-gray-500">Conversions</p>
      <h3 class="text-xl font-bold text-green-700">5</h3>
    </div>

    <!-- Lost Leads -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-4 text-center flex flex-col items-center gap-2">
      <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <p class="text-sm text-gray-500">Lost Leads</p>
      <h3 class="text-xl font-bold text-red-600">8</h3>
    </div>
  </div>

  <!-- Charts -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <!-- Calls vs Conversions -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-6">
      <h2 class="font-semibold text-gray-700 mb-4 flex items-center gap-2">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18" />
        </svg>
        Calls vs Conversions
      </h2>
      <canvas id="callsChart" class="h-64"></canvas>
    </div>

    <!-- Lead Outcomes -->
    <div class="bg-white border border-orange-200 shadow rounded-xl p-6">
      <!-- Header -->
      <h2 class="font-semibold text-gray-700 mb-4 flex items-center gap-2">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11 11V3h2v8h8v2h-8v8h-2v-8H3v-2h8z" />
        </svg>
        Lead Outcomes
      </h2>

      <!-- Chart + Legends side by side -->
      <div class="flex items-center justify-center">
        <!-- Pie Chart -->
        <div class="w-56 h-56">
          <canvas id="leadChart"></canvas>
        </div>

        <!-- Custom Legends -->
        <div class="ml-6 space-y-2 text-sm">
          <div class="flex items-center">
            <span class="w-3 h-3 inline-block mr-2 rounded-sm" style="background:#22c55e"></span>
            Interested
          </div>
          <div class="flex items-center">
            <span class="w-3 h-3 inline-block mr-2 rounded-sm" style="background:#facc15"></span>
            Follow-Up
          </div>
          <div class="flex items-center">
            <span class="w-3 h-3 inline-block mr-2 rounded-sm" style="background:#ef4444"></span>
            Not Interested
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Call Log -->
  <div class="bg-white border border-orange-200 shadow rounded-xl p-6 mb-6">
    <h2 class="font-semibold text-gray-700 mb-4 flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.16 3.483a1 1 0 01-.272 1.06l-2.12 2.12a16.001 16.001 0 006.584 6.584l2.12-2.12a1 1 0 011.06-.272l3.483 1.16a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
      </svg>
      Daily Call Log
    </h2>
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-600">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-2">Time</th>
            <th class="px-4 py-2">Lead Name</th>
            <th class="px-4 py-2">Phone</th>
            <th class="px-4 py-2">Outcome</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td class="px-4 py-2">10:15 AM</td>
            <td class="px-4 py-2">Ravi Kumar</td>
            <td class="px-4 py-2">9876543210</td>
            <td class="px-4 py-2 text-green-600">Interested</td>
          </tr>
          <tr class="">
            <td class="px-4 py-2">11:05 AM</td>
            <td class="px-4 py-2">Priya Sharma</td>
            <td class="px-4 py-2">9123456780</td>
            <td class="px-4 py-2 text-yellow-600">Follow-Up Scheduled</td>
          </tr>
          <tr>
            <td class="px-4 py-2">01:30 PM</td>
            <td class="px-4 py-2">Sunil Das</td>
            <td class="px-4 py-2">9988776655</td>
            <td class="px-4 py-2 text-red-600">Not Interested</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Follow-Ups -->
  <div class="bg-white border border-orange-200 shadow rounded-xl p-6">
    <h2 class="font-semibold text-gray-700 mb-4 flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2zM7 13h10"/>
    </svg>
    Pending Follow-Ups
  </h2>
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-600">
        <thead class="bg-yellow-50">
          <tr>
            <th class="px-4 py-2">Lead Name</th>
            <th class="px-4 py-2">Phone</th>
            <th class="px-4 py-2">Follow-Up Date</th>
            <th class="px-4 py-2">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td class="px-4 py-2">Anjali Mehta</td>
            <td class="px-4 py-2">9812345678</td>
            <td class="px-4 py-2">2025-08-20</td>
            <td class="px-4 py-2 text-yellow-600">Pending</td>
          </tr>
          <tr>
            <td class="px-4 py-2">Rahul Singh</td>
            <td class="px-4 py-2">9988771122</td>
            <td class="px-4 py-2">2025-08-21</td>
            <td class="px-4 py-2 text-green-600">Scheduled</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<script>
  // Calls vs Conversions (Bar Chart)
  const ctxCalls = document.getElementById('callsChart').getContext('2d');
  new Chart(ctxCalls, {
    type: 'bar',
    data: {
      labels: ['Lead 1', 'Lead 2', 'Lead 3', 'Lead 4', 'Lead 5'],
      datasets: [{
        label: 'Calls Made',
        data: [10, 15, 8, 12, 7],
        backgroundColor: '#FF7F50'
      },{
        label: 'Conversions',
        data: [4, 7, 3, 5, 2],
        backgroundColor: '#7A3E00'
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'top' }
      }
    }
  });

  // Lead Outcomes (Pie Chart)
  const ctxLead = document.getElementById('leadChart').getContext('2d');
  new Chart(ctxLead, {
    type: 'pie',
    data: {
      labels: ['Interested', 'Follow-Up', 'Not Interested'],
      datasets: [{
        data: [12, 5, 3],
        backgroundColor: ['#22c55e', '#facc15', '#ef4444']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'false' }
      }
    }
  });
</script>

<?php include('layouts/footer.php'); ?>
