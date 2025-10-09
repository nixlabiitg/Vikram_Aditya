<?php include("layouts/header.php"); ?>

<div class="p-6 space-y-8">

  <!-- Page Title -->
  <h1 class="text-2xl font-bold text-[#7A3E00]">Reports & Analytics</h1>

  <!-- KPI Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-[#FFF9F0] shadow rounded-xl p-6 border border-[#FFD699]">
      <h2 class="text-gray-600 text-sm">Total Clients</h2>
      <p class="text-2xl font-bold text-[#7A3E00] mt-2">128</p>
    </div>
    <div class="bg-[#FFF9F0] shadow rounded-xl p-6 border border-[#FFD699]">
      <h2 class="text-gray-600 text-sm">Total Leads</h2>
      <p class="text-2xl font-bold text-[#7A3E00] mt-2">354</p>
    </div>
    <div class="bg-[#FFF9F0] shadow rounded-xl p-6 border border-[#FFD699]">
      <h2 class="text-gray-600 text-sm">Payments Collected</h2>
      <p class="text-2xl font-bold text-[#7A3E00] mt-2">₹1,25,000</p>
    </div>
    <div class="bg-[#FFF9F0] shadow rounded-xl p-6 border border-[#FFD699]">
      <h2 class="text-gray-600 text-sm">Follow-ups Completed</h2>
      <p class="text-2xl font-bold text-[#7A3E00] mt-2">210</p>
    </div>
  </div>

  <!-- Charts Section -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Lead Funnel -->
    <div class="bg-white shadow rounded-xl p-6 border border-[#FFD699]">
      <h2 class="font-semibold text-gray-700 mb-4">Lead Funnel</h2>
      <canvas id="funnelChart" class="h-64"></canvas>
    </div>

    <!-- Payment Trend -->
    <div class="bg-white shadow rounded-xl p-6 border border-[#FFD699]">
      <h2 class="font-semibold text-gray-700 mb-4">Payment Collection Trend</h2>
      <canvas id="paymentChart" class="h-64"></canvas>
    </div>
  </div>

  <!-- Staff Performance Table -->
  <div class="bg-white shadow rounded-xl p-6 border border-[#FFD699]">
    <h2 class="font-semibold text-gray-700 mb-4">Top Performing Staff</h2>
    <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
      <table class="min-w-[700px] md:min-w-full sm:min-w-full text-center">
        <thead>
          <tr class="bg-[#FFF9F0] text-gray-700">
            <th class="p-3 border-b border-orange-300">Name</th>
            <th class="p-3 border-b border-orange-300">Leads Closed</th>
            <th class="p-3 border-b border-orange-300">Payments Collected</th>
            <th class="p-3 border-b border-orange-300">Follow-ups</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-[#FFF5E5]">
            <td class="p-3 border-b border-orange-300">Rohit Sharma</td>
            <td class="p-3 border-b border-orange-300">45</td>
            <td class="p-3 border-b border-orange-300">₹35,000</td>
            <td class="p-3 border-b border-orange-300">52</td>
          </tr>
          <tr class="hover:bg-[#FFF5E5]">
            <td class="p-3 border-b border-orange-300">Anjali Verma</td>
            <td class="p-3 border-b border-orange-300">38</td>
            <td class="p-3 border-b border-orange-300">₹28,000</td>
            <td class="p-3 border-b border-orange-300">46</td>
          </tr>
          <tr class="hover:bg-[#FFF5E5]">
            <td class="p-3 border-b border-orange-300">Karan Singh</td>
            <td class="p-3 border-b border-orange-300">30</td>
            <td class="p-3 border-b border-orange-300">₹22,000</td>
            <td class="p-3 border-b border-orange-300">41</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Funnel Chart
  new Chart(document.getElementById('funnelChart'), {
    type: 'bar',
    data: {
      labels: ['New', 'Contacted', 'Qualified', 'Converted', 'Lost'],
      datasets: [{
        label: 'Leads',
        data: [120, 90, 65, 40, 30],
        backgroundColor: '#F6AD55'
      }]
    },
    options: { responsive: true }
  });

  // Payment Collection Trend
  new Chart(document.getElementById('paymentChart'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Payments (₹)',
        data: [10000, 15000, 20000, 18000, 25000, 30000],
        fill: true,
        borderColor: '#DD6B20',
        backgroundColor: 'rgba(253, 187, 45, 0.2)'
      }]
    },
    options: { responsive: true }
  });

</script>

<?php include("layouts/footer.php"); ?>
