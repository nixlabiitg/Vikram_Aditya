<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-10 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h3m0 0V7m0 4l-4-4m0 0l4 4" />
        </svg>
        Complaint Summary by Category
    </h1>

    <div class="overflow-hidden rounded-xl shadow-lg">
        <div class="overflow-x-auto -webkit-overflow-scrolling-touch">
        <table class="min-w-[700px] md:min-w-full sm:min-w-full">
            <thead class="bg-[#FFF4E6] text-[#7A3E00] uppercase font-semibold">
                <tr>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Total Complaints</th>
                    <th class="px-6 py-4">Resolved</th>
                    <th class="px-6 py-4">Unresolved</th>
                    <th class="px-6 py-4">Escalated</th>
                    <th class="px-6 py-4 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php
                $categories = [
                    'Late appointment start / Wait time delay',
                    'Prediction felt vague / not explained properly',
                    'Poor client service / rude behavior',
                    'Technical issue with video/audio/tele-call',
                    'Wrong horoscope / birth detail entry',
                    'Payment deducted but service not received',
                    'No follow-up from counselor',
                    'Miscommunication or misinformation',
                    'Service Delay',
                    'Miscommunication',
                    'Technical/Software Glitch',
                    'Payment/Refund Issue',
                    'Appointment Issues',
                    'Staff Behavior',
                    'Other'
                ];

                foreach ($categories as $cat) {
                    echo "<tr class='hover:bg-orange-50'>
                        <td class='px-6 py-4 text-gray-800'>" . htmlspecialchars($cat) . "</td>
                        <td class='px-6 py-4'>" . rand(5, 30) . "</td>
                        <td class='px-6 py-4 text-green-600'>" . rand(2, 10) . "</td>
                        <td class='px-6 py-4 text-red-600'>" . rand(1, 5) . "</td>
                        <td class='px-6 py-4 text-yellow-600'>" . rand(0, 3) . "</td>
                        <td class='px-6 py-4 text-center'>
                           <button onclick=\"viewCategory('" . addslashes($cat) . "')\" 
                                class=\"text-blue-600 hover:underline text-sm\">
                                View
                            </button>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table></div>
    </div>
</div>
<!-- Modal -->
<div id="viewModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden flex items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg shadow-lg w-96">
    <h2 class="text-lg font-semibold mb-4 text-[#7A3E00]">Complaint Details</h2>
    <div id="modalContent" class="text-sm text-gray-700 space-y-2">
      <!-- Dummy data will be inserted here -->
    </div>
    <div class="mt-4 text-right">
      <button onclick="closeModal()" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Close</button>
    </div>
  </div>
</div>
<script>
function viewCategory(category) {
  // Generate dummy values (random for now)
  const data = {
    total: Math.floor(Math.random() * 50) + 10,
    resolved: Math.floor(Math.random() * 20) + 5,
    pending: Math.floor(Math.random() * 10) + 1,
    escalated: Math.floor(Math.random() * 5)
  };

  document.getElementById("modalContent").innerHTML = `
    <p><strong>Category:</strong> ${category}</p>
    <p><strong>Total Complaints:</strong> ${data.total}</p>
    <p><strong>Resolved:</strong> ${data.resolved}</p>
    <p><strong>Pending:</strong> ${data.pending}</p>
    <p><strong>Escalated:</strong> ${data.escalated}</p>
  `;

  document.getElementById("viewModal").classList.remove("hidden");
}

function closeModal() {
  document.getElementById("viewModal").classList.add("hidden");
}
</script>

<?php include('layouts/footer.php'); ?>
