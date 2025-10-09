<?php include("layouts/header.php"); ?>
<!-- ===================== Proposal Page ===================== -->
<div class="p-6 space-y-6" x-data="proposalPage()">

  <!-- Title -->
  <h2 class="text-xl font-semibold text-[#7A3E00]">Send Proposal</h2>
  <div class="bg-white shadow-md rounded-xl p-8 border border-orange-200 space-y-6">

    <!-- Client Section -->
    <div class="space-y-4">
      <h3 class="text-lg font-medium text-[#7A3E00]">Client Information</h3>

      <!-- Prefilled Client Info (when coming from client_view.php) -->
      <div id="prefilledClient" class="grid grid-cols-1 md:grid-cols-3 gap-4" x-show="fromClientView">
        <div>
          <label class="block text-sm font-medium text-gray-600">Client Name</label>
          <input type="text" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 
                 focus:outline-none focus:ring-2 focus:ring-orange-400" 
                 x-model="client.name" readonly>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Client ID</label>
          <input type="text" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 
                 focus:outline-none focus:ring-2 focus:ring-orange-400" 
                 x-model="client.id" readonly>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Phone</label>
          <input type="text" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 
                 focus:outline-none focus:ring-2 focus:ring-orange-400" 
                 x-model="client.phone" readonly>
        </div>
      </div>

      <!-- Search Client (when opened manually) -->
      <div id="searchClient" x-show="!fromClientView">
        <label class="block text-sm font-medium text-gray-600">Search Client</label>
        <div class="flex gap-2">
          <input type="text" placeholder="Enter client name or phone..."
                 class="flex-1 bg-white border border-gray-300 rounded-lg px-3 py-2 
                        focus:outline-none focus:ring-2 focus:ring-orange-400"
                 x-model="searchQuery">
          <button type="button" 
                  class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700"
                  @click="fetchClient()">Search</button>
        </div>
      </div>
    </div>

    <!-- Greeting Message -->
    <div>
      <label class="block text-sm font-medium text-[#7A3E00]">Greeting Message</label>
      <textarea rows="3" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 
        focus:outline-none focus:ring-2 focus:ring-orange-400" x-model="greeting"></textarea>
    </div>

    <!-- Astrologer Details -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div>
        <label class="block text-sm font-medium text-gray-600">Astrologer</label>
        <input type="text" class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 
               focus:outline-none focus:ring-2 focus:ring-orange-400" value="Astrologer" readonly>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-600">Place</label>
        <input type="text" placeholder="Office / Online"
               class="w-full bg-white border border-gray-300 rounded-lg px-3 py-2 
                      focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-600">Proposed Date & Time</label>
        <input type="datetime-local"
               class="w-full bg-white border border-gray-300 text-gray-400 rounded-lg px-3 py-2 
                      focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>
    </div>

    <!-- Proposal Items Table -->
    <div class="space-y-3">
      <h3 class="text-lg font-medium text-[#7A3E00]">Proposed Services</h3>

      <div class="overflow-x-auto">
        <table class="min-w-full border border-orange-200 rounded-lg overflow-hidden">
          <thead class="bg-orange-50">
            <tr class="text-left text-sm font-semibold text-[#7A3E00]">
              <th class="px-4 py-3 border-b border-orange-200">#</th>
              <th class="px-4 py-3 border-b border-orange-200">Service Name</th>
              <th class="px-4 py-3 border-b border-orange-200">Description</th>
              <th class="px-4 py-3 border-b border-orange-200">Duration</th>
              <th class="px-4 py-3 border-b border-orange-200">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-orange-100 text-sm">
            <template x-for="(item, index) in services" :key="index">
              <tr>
                <td class="px-4 py-3" x-text="index + 1"></td>
                <td class="px-4 py-3">
                  <input type="text" placeholder="Service Name"
                         class="w-full bg-white border border-gray-300 rounded-lg px-2 py-1 
                                focus:outline-none focus:ring-2 focus:ring-orange-400"
                         x-model="item.name">
                </td>
                <td class="px-4 py-3">
                  <input type="text" placeholder="Short Description"
                         class="w-full bg-white border border-gray-300 rounded-lg px-2 py-1 
                                focus:outline-none focus:ring-2 focus:ring-orange-400"
                         x-model="item.desc">
                </td>
                <td class="px-4 py-3">
                  <input type="text" placeholder="e.g. 1 hour"
                         class="w-full bg-white border border-gray-300 rounded-lg px-2 py-1 
                                focus:outline-none focus:ring-2 focus:ring-orange-400"
                         x-model="item.duration">
                </td>
                <td class="px-4 py-3">
                  <button type="button" class="text-red-600 hover:underline" 
                          @click="removeService(index)">Remove</button>
                </td>
              </tr>
            </template>
          </tbody>
        </table>
      </div>

      <button type="button" class="text-sm text-orange-700 hover:underline" @click="addService()">+ Add Another Service</button>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-end gap-3">
      <button class="px-5 py-2 rounded-lg border text-gray-600 hover:bg-gray-100">Save Draft</button>
      <button onclick="sentProposal()" class="px-5 py-2 rounded-lg bg-orange-700 text-white hover:bg-orange-800">Send Proposal</button>
    </div>
  </div>
</div>

<script>
function proposalPage() {
  return {
    fromClientView: false,
    client: { name: "", id: "", phone: "" },
    searchQuery: "",
    greeting: "",
    services: [{ name: "", desc: "", duration: "" }],

    init() {
      const params = new URLSearchParams(window.location.search);
      if (params.get('from') === 'client_view') {
        this.fromClientView = true;
        this.client = {
          id: params.get('clientId') || 'CLT-1023',
          name: params.get('name') || 'Rina Sharma',
          phone: params.get('phone') || '+91 98765 43210'
        };
        this.greeting = `Dear ${this.client.name}, thank you for reaching out. I would like to propose the following consultation plan for you.`;
      } else {
        this.fromClientView = false;
        this.greeting = "";
      }
    },

    fetchClient() {
      this.client = { name: "Demo Client", id: "CLT-9999", phone: "+91 90000 00000" };
      this.greeting = `Dear ${this.client.name}, thank you for reaching out. I would like to propose the following consultation plan for you.`;
      this.fromClientView = true; 
    },

    addService() {
      this.services.push({ name: "", desc: "", duration: "" });
    },

    removeService(index) {
      this.services.splice(index, 1);
    }
  }
}

function sentProposal() {
    window.location.href = "proposal?success=1";
}
</script>

<?php include("layouts/footer.php"); ?>

