<?php include('layouts/header.php'); ?>

<script src="https://unpkg.com/@heroicons/vue@2.0.16/outline/esm/index.js"></script>

<div class="main-content p-6 min-h-screen">
    <div id="repair-reports" class="mb-10">
        <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-8 text-center flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3a3.75 3.75 0 00-3.75 3.75v10.5A3.75 3.75 0 009.75 21h4.5a3.75 3.75 0 003.75-3.75V6.75A3.75 3.75 0 0014.25 3h-4.5z" />
            </svg>
            Repair Reports & Analytics
        </h1>

        <!-- KPI Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-br from-orange-100 to-yellow-50 p-6 rounded-2xl shadow-xl border border-orange-200">
                <p class="text-sm text-gray-600 mb-1 flex items-center gap-1">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M3 11h18M5 19h14a2 2 0 002-2v-5H3v5a2 2 0 002 2z" /></svg>
                    Total Repairs This Month
                </p>
                <h2 class="text-3xl font-extrabold text-[#7A3E00]">128</h2>
            </div>
            <div class="bg-gradient-to-br from-red-100 to-red-50 p-6 rounded-2xl shadow-xl border border-red-200">
                <p class="text-sm text-gray-600 mb-1 flex items-center gap-1">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Delayed Repairs
                </p>
                <h2 class="text-3xl font-extrabold text-red-600">12</h2>
            </div>
            <div class="bg-gradient-to-br from-blue-100 to-blue-50 p-6 rounded-2xl shadow-xl border border-blue-200">
                <p class="text-sm text-gray-600 mb-1 flex items-center gap-1">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    Energy Recharges
                </p>
                <h2 class="text-3xl font-extrabold text-blue-600">47</h2>
            </div>
            <div class="bg-gradient-to-br from-green-100 to-green-50 p-6 rounded-2xl shadow-xl border border-green-200">
                <p class="text-sm text-gray-600 mb-1 flex items-center gap-1">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.388 2.462a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.388-2.462a1 1 0 00-1.175 0l-3.388 2.462c-.784.57-1.838-.196-1.539-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.425 9.394c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.286-3.967z" /></svg>
                    Repair Success Score
                </p>
                <h2 class="text-3xl font-extrabold text-green-600">92%</h2>
            </div>
        </div>

        <!-- Chart Placeholders -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 justify-content-center item-center rounded-xl shadow-xl border border-gray-200">
                <h3 class="text-xl font-semibold text-[#7A3E00] mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3v18M4 6h16M4 12h16M4 18h16" /></svg>
                    Defect Ratio (Returns vs Sold)
                </h3>
                <div class="w-full max-w-md h-50 sm:h-76">
                    <canvas id="defectChart" class="h-64"></canvas>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-xl border border-gray-200">
                <h3 class="text-xl font-semibold text-[#7A3E00] mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    Repair Load by Staff
                </h3>
                <canvas id="repairChart" class="h-64"></canvas>
            </div>
        </div>

        <!-- Lists -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-white p-6 rounded-xl shadow-xl border border-gray-200">
                <h3 class="text-xl font-semibold text-[#7A3E00] mb-4">Trending Repair Types</h3>
                <ul class="list-disc pl-6 text-sm text-gray-700 space-y-1">
                    <li>Thread Replacement - 36%</li>
                    <li>Bead Damage - 22%</li>
                    <li>Lock Replacement - 17%</li>
                    <li>Energy Recharge Only - 25%</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-xl border border-gray-200">
                <h3 class="text-xl font-semibold text-[#7A3E00] mb-4">Common Delay Reasons</h3>
                <ul class="list-disc pl-6 text-sm text-gray-700 space-y-1">
                    <li>Client not reachable</li>
                    <li>Staff overload</li>
                    <li>Courier delay</li>
                    <li>Pending energy expert approval</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
  new Chart(document.getElementById('defectChart'), {
    type: 'doughnut',
    data: {
      labels: ['Sold', 'Returned'],
      datasets: [{
        data: [85, 15],
        backgroundColor: ['#34D399', '#EF4444'],
      }]
    },
    options: {
      plugins: {
        legend: { position: 'bottom' }
      }
    }
  });

  new Chart(document.getElementById('repairChart'), {
    type: 'bar',
    data: {
      labels: ['John', 'Amit', 'Sara', 'Priya', 'Ravi'],
      datasets: [{
        label: 'Repairs Handled',
        data: [12, 19, 7, 14, 9],
        backgroundColor: '#f59e0b'
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>
<?php include('layouts/footer.php'); ?>
