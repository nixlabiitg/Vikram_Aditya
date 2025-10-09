<?php include("layouts/header.php"); ?>

<div class="main-content p-6 min-h-screen">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-[#7A3E00] flex items-center gap-2">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3v4m0 0V3m0 4H6a2 2 0 00-2 2v11a2 2 0 002 2h12a2 2 0 002-2v-5" />
      </svg>
      Proposals Sent
    </h1>

    <button onclick="window.location.href='proposal_sent'" class="bg-[#FF7F50] hover:bg-[#E67300] text-white px-4 py-2 rounded shadow text-sm">
      + Send New Proposal
    </button>
  </div>

  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Proposal sent successfully.</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>

  <div id="proposal-table" class="overflow-x-auto bg-white shadow rounded-xl">
    <table class="min-w-full divide-y divide-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-700 font-semibold">
        <tr>
          <th class="px-4 py-3 text-left">Name</th>
          <th class="px-4 py-3 text-left">Phone</th>
          <th class="px-4 py-3 text-left">Date Sent</th>
          <th class="px-4 py-3 text-left">Method</th>
          <th class="px-4 py-3 text-center">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <tr>
          <td class="px-4 py-3 font-medium text-gray-800">Kiran Das</td>
          <td class="px-4 py-3 text-gray-600">+91 98765 12345</td>
          <td class="px-4 py-3">2025-08-06</td>
          <td class="px-4 py-3">WhatsApp</td>
          <td class="px-4 py-3 text-center">
            <div class="flex justify-center gap-2 flex-wrap">
              <button class="bg-blue-500 text-white px-3 py-1 text-xs rounded hover:bg-blue-600">Resend</button>
              
              <button 
                class="bg-green-500 text-white px-3 py-1 text-xs rounded hover:bg-green-600 view-btn"
                data-proposal='{
                  "id": 1,
                  "client": "Kiran Das",
                  "contact": "+91 98765 12345",
                  "sent_by": "Astrologer Rahul",
                  "sent_on": "2025-08-06",
                  "channel": "WhatsApp",
                  "greeting": "Dear Kiran, thank you for connecting...",
                  "services": [
                    { "name": "Kundali Reading", "desc": "Detailed analysis", "duration": "1 hour" },
                    { "name": "Marriage Consultation", "desc": "Personal guidance", "duration": "30 mins" }
                  ]
                }'>
                View
              </button>
              <button onclick="window.location.href='proposal_pdf'" class="bg-red-500 text-white px-3 py-1 text-xs rounded hover:bg-red-600">PDF</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="proposalModal" 
     class="fixed inset-0 flex items-center justify-center bg-black/30 bg-opacity-50 z-50 hidden">
  <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
    <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">✖</button>
    <h2 class="text-lg font-semibold text-[#7A3E00] mb-4">Proposal Details</h2>
    <!-- Basic Info -->
    <div class="grid grid-cols-2 gap-4 text-sm mb-4">
      <p><strong>Client:</strong> <span id="modalClient"></span></p>
      <p><strong>Contact:</strong> <span id="modalContact"></span></p>
      <p><strong>Sent By:</strong> <span id="modalSentBy"></span></p>
      <p><strong>Sent On:</strong> <span id="modalSentOn"></span></p>
      <p><strong>Channel:</strong> <span id="modalChannel"></span></p>
    </div>
    <!-- Greeting -->
    <div class="mb-4">
      <p class="font-medium text-[#7A3E00] mb-1">Greeting Message:</p>
      <p id="modalGreeting" class="bg-gray-50 p-3 rounded text-gray-700 text-sm"></p>
    </div>
    <!-- Services -->
    <h3 class="text-sm font-medium text-[#7A3E00] mb-2">Services</h3>
    <table class="w-full border border-orange-200 text-sm rounded-lg">
      <thead class="bg-orange-50 text-[#7A3E00]">
        <tr>
          <th class="px-3 py-2 border">#</th>
          <th class="px-3 py-2 border">Name</th>
          <th class="px-3 py-2 border">Description</th>
          <th class="px-3 py-2 border">Duration</th>
        </tr>
      </thead>
      <tbody id="modalServices"></tbody>
    </table>
  </div>
</div>
<script>
  document.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const data = JSON.parse(this.dataset.proposal);

      document.getElementById('modalClient').textContent = data.client;
      document.getElementById('modalContact').textContent = data.contact;
      document.getElementById('modalSentBy').textContent = data.sent_by;
      document.getElementById('modalSentOn').textContent = data.sent_on;
      document.getElementById('modalChannel').textContent = data.channel;
      document.getElementById('modalGreeting').textContent = data.greeting;

      const tbody = document.getElementById('modalServices');
      tbody.innerHTML = "";
      data.services.forEach((srv, i) => {
        tbody.innerHTML += `
          <tr>
            <td class="px-3 py-2 border">${i+1}</td>
            <td class="px-3 py-2 border">${srv.name}</td>
            <td class="px-3 py-2 border">${srv.desc}</td>
            <td class="px-3 py-2 border">${srv.duration}</td>
          </tr>
        `;
      });
      document.getElementById('proposalModal').classList.remove('hidden');
    });
  });

  function closeModal() {
    document.getElementById('proposalModal').classList.add('hidden');
  }
</script>

<script>
    if (window.location.search.includes('success=1')) {
        document.getElementById('successAlert').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    }
</script>
<?php include("layouts/footer.php"); ?>

