<?php include("layouts/header.php"); ?>

<div class="main-content p-6 min-h-screen">
 
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
    <h1 class="text-2xl sm:text-3xl font-extrabold text-[#7A3E00]">Client Promises</h1>

    <div class="w-full sm:w-80">
      <label class="relative block">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
          
          <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="M21 21l-3.5-3.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </span>
        <input id="searchInput" type="text"
          class="w-full rounded-xl border border-[#FFD699] bg-white pl-10 pr-3 py-2 text-sm outline-none focus:ring-2 focus:ring-orange-300"
          placeholder="Search by client or ID..." oninput="filterRows()">
      </label>
    </div>
  </div>

  <div class="overflow-x-auto bg-white rounded-2xl shadow-md border border-[#FFD699]">
    <table class="min-w-full text-sm">
      <thead class="bg-[#FFEBD6] text-[#5a2d00] font-semibold">
        <tr>
          <th class="px-5 py-3 text-left">Client ID</th>
          <th class="px-5 py-3 text-left">Client Name</th>
          <th class="px-5 py-3 text-left">Promise</th>
          <th class="px-5 py-3 text-left">Date</th>
          <th class="px-5 py-3 text-center">Action</th>
        </tr>
      </thead>
      <tbody id="promiseTable" class="divide-y divide-[#FFE3BF]">
        
        <tr class="hover:bg-[#FFF7EB]">
          <td class="px-5 py-3 font-medium">CL001</td>
          <td class="px-5 py-3"><a href="client_view">Rajesh Kumar</a></td>
          <td class="px-5 py-3">Weekly Astrology Guidance</td>
          <td class="px-5 py-3">2025-08-20</td>
          <td class="px-5 py-3 text-center">
            <button type="button"
              class="view-btn inline-flex items-center gap-1 px-4 py-2 rounded-lg bg-orange-500 text-white hover:bg-orange-600 shadow"
              data-client-id="CL001"
              data-client-name="Rajesh Kumar"
              data-promise="Weekly Astrology Guidance"
              data-date="2025-08-20"
              data-notes="Delivered by email with PDF report.">
             
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              View
            </button>
          </td>
        </tr>

        <tr class="hover:bg-[#FFF7EB]">
          <td class="px-5 py-3 font-medium">CL002</td>
          <td class="px-5 py-3"><a href="client_view">Anita Sharma</a></td>
          <td class="px-5 py-3">Monthly Horoscope Report</td>
          <td class="px-5 py-3">2025-08-10</td>
          
          <td class="px-5 py-3 text-center">
            <button type="button"
              class="view-btn inline-flex items-center gap-1 px-4 py-2 rounded-lg bg-orange-500 text-white hover:bg-orange-600 shadow"
              data-client-id="CL002"
              data-client-name="Anita Sharma"
              data-promise="Monthly Horoscope Report"
              data-date="2025-08-10"
              data-notes="Draft prepared; final review scheduled.">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              View
            </button>
          </td>
        </tr>

        <tr class="hover:bg-[#FFF7EB]">
          <td class="px-5 py-3 font-medium">CL003</td>
          <td class="px-5 py-3"><a href="client_view">Manoj Das</a></td>
          <td class="px-5 py-3">Puja Ceremony Arrangement</td>
          <td class="px-5 py-3">2025-09-15</td>
          <td class="px-5 py-3 text-center">
            <button type="button"
              class="view-btn inline-flex items-center gap-1 px-4 py-2 rounded-lg bg-orange-500 text-white hover:bg-orange-600 shadow"
              data-client-id="CL003"
              data-client-name="Manoj Das"
              data-promise="Puja Ceremony Arrangement"
              data-date="2025-09-15"
              data-notes="Venue booked; pandit confirmed.">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              View
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div id="promiseModal" class="hidden fixed inset-0 z-50 grid place-items-center">

  <div class="absolute inset-0 bg-black/50" data-close-modal></div>

  <div id="modalCard"
       class="relative w-[92%] sm:w-[560px] bg-white rounded-2xl shadow-2xl border border-[#FFD699] p-6
              transform transition-all duration-200 scale-95 opacity-0">
    <button id="modalClose"
      class="absolute top-3 right-3 inline-flex items-center justify-center w-9 h-9 rounded-full
             hover:bg-gray-100 text-gray-500" aria-label="Close">
     
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M6 6l12 12M18 6l-12 12" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button>

    <div class="mb-4">
      <h2 class="text-xl font-bold text-[#7A3E00]">Promise Details</h2>
      <p id="mClient" class="text-sm text-gray-600 mt-1"></p>
    </div>

    <div class="space-y-3">
      <p><span class="font-semibold">Promise:</span> <span id="mTitle"></span></p>
      <p><span class="font-semibold">Date:</span> <span id="mDate"></span></p>
      <div>
        <p class="font-semibold">Notes:</p>
        <p id="mNotes" class="text-gray-700 mt-1"></p>
      </div>
    </div>

    <div class="mt-6 flex justify-end gap-2">
      <button class="px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200" data-close-modal>Close</button>
      <a href="#" id="mViewClient"
         class="px-4 py-2 rounded-lg bg-orange-500 hover:bg-orange-600 text-white">Open Client</a>
    </div>
  </div>
</div>

<script>
  function statusClass(s) {
    s = (s || '').toLowerCase();
    if (s.includes('complete')) return 'bg-green-100 text-green-700';
    if (s.includes('progress')) return 'bg-blue-100 text-blue-700';
    if (s.includes('pend'))     return 'bg-yellow-100 text-yellow-700';
    return 'bg-gray-100 text-gray-700';
  }

  (function () {
    const modal = document.getElementById('promiseModal');
    const card  = document.getElementById('modalCard');

    const open = () => {
      modal.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
      requestAnimationFrame(() => {
        card.classList.remove('scale-95','opacity-0');
      });
    };
    const close = () => {
      card.classList.add('scale-95','opacity-0');
      setTimeout(() => {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      }, 180);
    };

    document.addEventListener('click', (e) => {
      const btn = e.target.closest('.view-btn');
      if (btn) {

        const clientId   = btn.dataset.clientId;
        const clientName = btn.dataset.clientName;
        const promise    = btn.dataset.promise;
        const date       = btn.dataset.date;
        const status     = btn.dataset.status;
        const notes      = btn.dataset.notes || '—';

        document.getElementById('mClient').textContent = `${clientName} (${clientId})`;
        document.getElementById('mTitle').textContent  = promise;
        document.getElementById('mDate').textContent   = date;

        const badge = document.getElementById('mStatusBadge');
        badge.textContent = status;
        badge.className = 'px-2 py-1 text-xs rounded-full ' + statusClass(status);

        document.getElementById('mNotes').textContent  = notes;

        document.getElementById('mViewClient').href = `client_view?id=${encodeURIComponent(clientId)}`;

        open();
      }

      if (e.target.matches('[data-close-modal]') || e.target.closest('#modalClose')) close();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) close();
    });

    window.filterRows = function () {
      const q = (document.getElementById('searchInput').value || '').toLowerCase();
      document.querySelectorAll('#promiseTable tr').forEach(tr => {
        tr.style.display = tr.textContent.toLowerCase().includes(q) ? '' : 'none';
      });
    };
  })();
</script>

<?php include("layouts/footer.php"); ?>
