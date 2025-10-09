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
<div id="reportContainer" class="max-w-4xl mx-auto bg-white shadow-2xl rounded-xl p-10 my-10 relative overflow-hidden">
  
  <div class="absolute inset-0 opacity-5 flex items-center justify-center pointer-events-none">
    <span class="text-8xl font-bold text-orange-700">ASTRO</span>
  </div>

  <div class="flex justify-between items-center border-b-2 border-orange-200 pb-4 mb-6 relative z-10">
    <div>
      <h1 class="text-3xl font-extrabold text-[#7A3E00]">Astrology Proposal</h1>
      <p class="text-sm text-gray-500">Personalized Guidance & Services</p>
    </div>
    <button onclick="window.print()" 
            class="bg-gradient-to-r from-orange-600 to-orange-800 text-white px-5 py-2 rounded-lg shadow hover:from-orange-700 hover:to-orange-900">
      Download PDF
    </button>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm mb-8 relative z-10">
    <div class="bg-orange-50 p-4 rounded-lg border border-orange-100">
      <h3 class="text-[#7A3E00] font-semibold mb-2">Client Information</h3>
      <p><strong>Name:</strong> Kiran Das</p>
      <p><strong>Contact:</strong> +91 98765 12345</p>
      <p><strong>Channel:</strong> WhatsApp</p>
    </div>
    <div class="bg-orange-50 p-4 rounded-lg border border-orange-100">
      <h3 class="text-[#7A3E00] font-semibold mb-2">Astrologer Information</h3>
      <p><strong>Astrologer:</strong> Vikram Aditya</p>
      <p><strong>Date & Time:</strong> 2025-08-06 04:00 PM</p>
      <p><strong>Sent On:</strong> 2025-08-06</p>
    </div>
  </div>

  <div class="mb-8 relative z-10">
    <h2 class="text-xl font-bold text-[#7A3E00] mb-3 border-l-4 border-orange-600 pl-3">Greeting Message</h2>
    <div class="bg-gradient-to-r from-orange-50 to-orange-100 p-5 rounded-lg shadow-inner text-gray-700 leading-relaxed">
      Dear Kiran,  
      Thank you for connecting with us. I am pleased to share the following proposal for your astrological consultation.  
      Looking forward to guiding you towards clarity and positivity.  
    </div>
  </div>

  <div class="mb-8 relative z-10">
    <h2 class="text-xl font-bold text-[#7A3E00] mb-3 border-l-4 border-orange-600 pl-3">Proposed Services</h2>
    <div class="overflow-x-auto rounded-lg border border-orange-200 shadow">
      <table class="w-full text-sm">
        <thead class="bg-gradient-to-r from-orange-100 to-orange-200 text-[#7A3E00] uppercase text-xs tracking-wide">
          <tr>
            <th class="px-4 py-3 border">#</th>
            <th class="px-4 py-3 border">Service Name</th>
            <th class="px-4 py-3 border">Description</th>
            <th class="px-4 py-3 border">Duration</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-orange-100">
          <tr class="hover:bg-orange-50">
            <td class="px-4 py-3 border text-center">1</td>
            <td class="px-4 py-3 border">Kundali Reading</td>
            <td class="px-4 py-3 border">Detailed life analysis with remedies</td>
            <td class="px-4 py-3 border text-center">1 hour</td>
          </tr>
          <tr class="hover:bg-orange-50">
            <td class="px-4 py-3 border text-center">2</td>
            <td class="px-4 py-3 border">Marriage Consultation</td>
            <td class="px-4 py-3 border">Guidance on compatibility & future</td>
            <td class="px-4 py-3 border text-center">30 mins</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="text-center text-gray-600 text-sm mt-10 pt-6 border-t border-gray-200 relative z-10">
    <p class="italic">“The stars may guide you, but your choices define your destiny.”</p>
    <p class="mt-2 font-semibold">Astrologer Vikram Aditya</p>
    <p class="text-xs text-gray-400 mt-1">© 2025 AstroConsult • Confidential Document</p>
  </div>
</div>

<?php include("layouts/footer.php"); ?>
