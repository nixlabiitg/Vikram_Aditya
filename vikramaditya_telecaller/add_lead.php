<?php include('layouts/header.php'); ?>

<div class="p-6">
  <h2 class="text-2xl font-semibold text-gray-700 mb-6">Lead Entry</h2>
    
  <!-- Tabs -->
  <div x-data="leadTabs">

    <div class="flex space-x-4 border-b border-gray-200 mb-6">
      <button 
        @click="tab = 'manual'" 
        :class="tab === 'manual' ? 'border-b-2 border-green-600 text-green-800' : 'text-gray-500'" 
        class="pb-2 font-medium">
        Manual
      </button>
      <button 
        @click="tab = 'bulk'" 
        :class="tab === 'bulk' ? 'border-b-2 border-green-600 text-green-800' : 'text-gray-500'" 
        class="pb-2 font-medium">
        Bulk Import
      </button>
      <button 
        @click="tab = 'auto'" 
        :class="tab === 'auto' ? 'border-b-2 border-green-600 text-green-800' : 'text-gray-500'" 
        class="pb-2 font-medium">
        Auto-Connect
      </button>
    </div>

    <!-- Manual Entry -->
    <div x-show="tab === 'manual'">
      <!-- You can paste your existing Manual Form here -->
      <div class="bg-white rounded-xl shadow p-6">
        <form class="space-y-6" onsubmit="return saveManual(event);">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Full Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Full Name">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Phone Number</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Phone Number">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Email">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Lead Source</label>
                    <select class="w-full border border-gray-300 rounded px-4 py-2">
                        <option>Website</option>
                        <option>Facebook</option>
                        <option>WhatsApp</option>
                        <option>Referral</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Service Interested</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Eg: Horoscope, Numerology">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Assigned To</label>
                    <select class="w-full border border-gray-300 rounded px-4 py-2">
                        <option>Rina Sharma</option>
                        <option>Sushil Verma</option>
                        <option>Priya Desai</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Additional Notes</label>
                <textarea class="w-full border border-gray-300 rounded px-4 py-2" rows="4" placeholder="Enter any remarks or client requirements..."></textarea>
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Save Lead</button>
            </div>
        </form>
    </div>
    </div>

    <!-- Bulk Import -->
    <div x-show="tab === 'bulk'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-4" onsubmit="return saveBulk(event);">
        <div>
            <label class="block text-sm font-medium text-gray-700">Upload CSV</label>
            <input type="file" class="w-full border border-gray-300 rounded-lg px-3 py-2">
        </div>
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700">Upload & Continue</button>
      </form>
    </div>

    <!-- Auto Connect -->
    <div x-show="tab === 'auto'" class="bg-white rounded-xl shadow p-6">
      <form class="space-y-4" onsubmit="return saveAuto(event);">
         <div>
            <label class="block text-sm font-medium text-gray-700">API Key</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Integration Type</label>
            <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                <option>CRM Direct</option>
                <option>WhatsApp Bot</option>
                <option>Other</option>
            </select>
        </div>

        <button type="submit" class="px-4 py-2 bg-yellow-700 text-white rounded-lg shadow hover:bg-yellow-900">Save Integration</button>
    </form>
    </div>

  </div>
</div>
<script>
    function saveManual(event) {
        event.preventDefault();
        alert("Manual lead saved successfully!");
        window.location.href = "view_stages.php";
        
        return false;
    }

    function saveBulk(event) {
        event.preventDefault();
        alert("Bulk import saved successfully!");
        window.location.href = "view_stages.php";
        
        return false;
    }

    function saveAuto(event) {
        event.preventDefault();
        alert("Integration saved successfully!");
        window.location.href = "view_stages.php";
        
        return false;
    }
</script>

<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("leadTabs", () => ({
            tab: window.location.hash ? window.location.hash.replace("#", "") : "manual"
        }))
    });
</script>


<?php include('layouts/footer.php'); ?>
