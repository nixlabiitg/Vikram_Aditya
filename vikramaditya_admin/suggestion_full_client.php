<?php include("layouts/header.php"); ?>
<style>
  @media print {
    body * {
      visibility: hidden; 
    }

    #reportContainer, #reportContainer * {
      visibility: visible; 
    }

    #reportContainer {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
    }

    body, #reportContainer {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
    }

    .no-print, button, .download-btn {
      display: none !important;
      visibility: hidden !important;
    }
  }
</style>
  <div id="successAlert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between mb-4" role="alert">
      <div>
          <span class="font-bold">Success!</span>
          <span>Suggestion saved successfully.</span>
      </div>
      <button onclick="document.getElementById('successAlert').style.display='none'" class="text-green-900 font-bold">✕</button>
  </div>
<div id="reportContainer" class="max-w-5xl mx-auto bg-white shadow-xl overflow-hidden my-10">

  <div class="relative bg-gradient-to-r from-orange-600 to-yellow-500 text-white px-8 py-6">
    <h1 class="text-3xl font-bold">Astrology Consultation Report</h1>
    <p class="text-sm opacity-90">Guidance & Remedies Based on Planetary Positions</p>

    <button onclick="window.print()" 
      class="absolute top-4 right-6 px-4 py-2 bg-white text-orange-600 font-medium text-sm rounded-lg shadow hover:bg-gray-100 transition download-btn no-print">
      Download
    </button>
  </div>

  <!-- Content -->
  <div class="p-8 space-y-6">

    <!-- Client Info + Note -->
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-orange-50 p-4 rounded-xl shadow-sm">
        <h2 class="flex items-center text-lg font-semibold text-[#7A3E00] mb-2">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.364 4.56a9 9 0 01-13.243 13.243z" /></svg>
          Client Information
        </h2>
        <p><strong>Name:</strong> Kiran Das</p>
        <p><strong>ID:</strong> CLT-1023</p>
        <p><strong>Phone:</strong> +91 98765 12345</p>
        <p><strong>Address:</strong> Guwahati, Assam</p>
      </div>
      <div class="bg-orange-50 p-4 rounded-xl shadow-sm">
        <h2 class="flex items-center text-lg font-semibold text-[#7A3E00] mb-2">
          <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4h9M4 12h16" /></svg>
          Astrologer's Note
        </h2>
        <p class="text-sm text-gray-700">
          Based on your planetary positions and dosh phases, this report provides remedies 
          for stability, harmony, and growth.
        </p>
      </div>
    </div>

    <!-- Problem -->
    <div>
      <h2 class="text-lg font-semibold text-[#7A3E00] border-l-4 border-orange-500 pl-3 mb-3">Problem</h2>
      <div class="grid grid-cols-2 gap-4 text-sm">
        <div class="bg-orange-50 p-3 rounded-lg shadow-sm">
          <strong>Type:</strong> Career
        </div>
        <div class="bg-orange-50 p-3 rounded-lg shadow-sm">
          <strong>Name:</strong> Job Instability
        </div>
      </div>
    </div>

    <!-- Investigation -->
    <div>
      <h2 class="text-lg font-semibold text-[#7A3E00] border-l-4 border-orange-500 pl-3 mb-3">Investigation</h2>
      <div class="grid grid-cols-2 gap-4 text-sm">
        <div class="bg-orange-50 p-3 rounded-lg shadow-sm"><strong>Dosh:</strong> Shani Dosh</div>
        <div class="bg-orange-50 p-3 rounded-lg shadow-sm"><strong>Phase:</strong> Sade Sati</div>
      </div>
    </div>

    <!-- Remedies -->
    <div>
      <h2 class="text-lg font-semibold text-[#7A3E00] border-l-4 border-orange-500 pl-3 mb-3">Remedies</h2>
      <table class="w-full text-sm shadow-sm rounded-lg overflow-hidden">
        <thead class="bg-orange-100 text-orange-800">
          <tr>
            <th class="px-4 py-2 text-left">Planet</th>
            <th class="px-4 py-2 text-left">Remedy</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-orange-100">
          <tr class="bg-orange-50/40">
            <td class="px-4 py-2">Saturn</td>
            <td class="px-4 py-2">Chant Hanuman Chalisa every Saturday</td>
          </tr>
          <tr>
            <td class="px-4 py-2">Mars</td>
            <td class="px-4 py-2">Offer red flowers on Tuesdays</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Kavach -->
    <div class="bg-orange-50 p-4 rounded-xl shadow-sm">
      <h2 class="text-lg font-semibold text-[#7A3E00] mb-2">Kavach</h2>
      <p class="text-sm text-gray-700">Navagraha Kavach recommended for protection.</p>
    </div>

    <!-- Dravya -->
    <div>
      <h2 class="text-lg font-semibold text-[#7A3E00] border-l-4 border-orange-500 pl-3 mb-3">Dravya</h2>
      <table class="w-full text-sm shadow-sm rounded-lg overflow-hidden">
        <thead class="bg-orange-100 text-orange-800">
          <tr>
            <th class="px-4 py-2">Dravya</th>
            <th class="px-4 py-2">Upadravya</th>
          </tr>
        </thead>
        <tbody class="divide-y text-center divide-orange-100">
          <tr class="bg-orange-50/40">
            <td class="px-4 py-2">Tulsi</td>
            <td class="px-4 py-2">Gangajal</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Puja -->
    <div class="bg-orange-50 p-4 rounded-xl shadow-sm">
      <h2 class="text-lg font-semibold text-[#7A3E00] mb-2">Puja</h2>
      <p class="text-sm text-gray-700">Perform Shani Shanti Puja on Amavasya.</p>
    </div>

    <!-- Planet Positions -->
    <div>
      <h2 class="text-lg font-semibold text-[#7A3E00] border-l-4 border-orange-500 pl-3 mb-3">Planet Positions</h2>
      <table class="w-full text-sm shadow-sm rounded-lg overflow-hidden">
        <thead class="bg-orange-100 text-orange-800">
          <tr>
            <th class="px-4 py-2">Planet</th>
            <th class="px-4 py-2">Position</th>
          </tr>
        </thead>
        <tbody class="divide-y text-center divide-orange-100">
          <tr class="bg-orange-50/40">
            <td class="px-4 py-2">Saturn</td>
            <td class="px-4 py-2">7th House</td>
          </tr>
          <tr>
            <td class="px-4 py-2">Jupiter</td>
            <td class="px-4 py-2">2nd House</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Notes -->
    <div class="bg-orange-50 p-4 rounded-xl shadow-sm">
      <h2 class="text-lg font-semibold text-[#7A3E00] mb-2">Additional Notes</h2>
      <p class="text-sm text-gray-700">Follow a disciplined lifestyle and meditate daily for balance and inner peace.</p>
    </div>
  </div>

  <!-- Footer -->
  <div class="bg-gradient-to-r from-orange-600 to-yellow-500 text-white text-center text-sm py-4">
    Astrology Consultation Report • Prepared with Care
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
