<?php include('layouts/header.php'); ?>

<div class="p-6 min-h-screen">
  <!-- Page Heading -->
  <div class="flex items-center gap-2 mb-6">
    <svg class="w-7 h-7 text-[#A05000]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M11.983 13.834a1.85 1.85 0 1 0 0-3.7 1.85 1.85 0 0 0 0 3.7z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M20.5 13.2a8.463 8.463 0 0 0 0-2.4l2.15-1.67a.55.55 0 0 0 .13-.7l-2-3.46a.55.55 0 0 0-.67-.24l-2.54 1a8.67 8.67 0 0 0-2.08-1.2l-.38-2.7a.56.56 0 0 0-.55-.46h-4a.56.56 0 0 0-.55.46l-.38 2.7a8.52 8.52 0 0 0-2.08 1.2l-2.54-1a.55.55 0 0 0-.67.24l-2 3.46a.55.55 0 0 0 .13.7L3.5 10.8a8.463 8.463 0 0 0 0 2.4l-2.15 1.67a.55.55 0 0 0-.13.7l2 3.46c.15.25.45.35.67.24l2.54-1a8.67 8.67 0 0 0 2.08 1.2l.38 2.7c.04.27.27.46.55.46h4c.28 0 .51-.19.55-.46l.38-2.7a8.52 8.52 0 0 0 2.08-1.2l2.54 1c.22.11.52.01.67-.24l2-3.46a.55.55 0 0 0-.13-.7L20.5 13.2z"/>
    </svg>
    <h1 class="text-2xl font-semibold text-gray-700">Settings & Control Panel</h1>
  </div>

  <!-- Top Navigation Tabs -->
  <div class="overflow-x-auto scrollbar-hide">
  <div class="flex space-x-4 border-b border-[#FFD699] mb-6" id="tabs">
    <!-- Users -->
    <button class="tab-btn flex items-center gap-2 py-2 px-4 text-[#7A3E00] font-medium border-b-2 border-transparent hover:border-[#E67300]" data-tab="users">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A6.978 6.978 0 0112 15c1.657 0 3.165.576 4.365 1.535M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
      Users
    </button>

    <!-- Working Hours -->
    <button class="tab-btn flex items-center gap-2 py-2 px-4 text-[#7A3E00] font-medium border-b-2 border-transparent hover:border-[#E67300]" data-tab="hours">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      Working Hours
    </button>

    <!-- Services -->
    <button class="tab-btn flex items-center gap-2 py-2 px-4 text-[#7A3E00] font-medium border-b-2 border-transparent hover:border-[#E67300]" data-tab="services">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m6.364.636l-1.414 1.414M21 12h-2m-.636 6.364l-1.414-1.414M12 21v-2M6.636 17.364l1.414-1.414M3 12h2M6.636 6.636L8.05 8.05" />
      </svg>
      Services
    </button>
    
    <!-- Appointment Booking -->
    <button class="tab-btn flex items-center gap-2 py-2 px-4 text-[#7A3E00] font-medium border-b-2 border-transparent hover:border-[#E67300]" data-tab="appointment">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10m-12 4h14m-14 4h14M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      Appointment
    </button>

    <!-- Integrations -->
    <button class="tab-btn flex items-center gap-2 py-2 px-4 text-[#7A3E00] font-medium border-b-2 border-transparent hover:border-[#E67300]" data-tab="integrations">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.071 4.929a10 10 0 010 14.142M4.929 19.071a10 10 0 010-14.142" />
      </svg>
      Integrations
    </button>

    <!-- Workflow -->
    <button class="tab-btn flex items-center gap-2 py-2 px-4 text-[#7A3E00] font-medium border-b-2 border-transparent hover:border-[#E67300]" data-tab="workflow">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      Workflow
    </button>
  </div>
  </div>

  <!-- Content Sections -->
  <div id="tab-content">
    <!-- Users -->
    <div class="tab-pane bg-white rounded-xl shadow p-6" id="users">
      <h2 class="text-lg font-semibold text-[#A05000] mb-3">User Management</h2>
      <ul class="list-disc pl-6 space-y-1 text-gray-700">
        <li>Admin - Full Access</li>
        <li>Astrologer - Limited to Horoscope & Clients</li>
        <li>Telecaller - Leads & Follow-Ups</li>
        <li>Counselor - Sessions & Notes</li>
      </ul>
      <button onclick="window.location.href='add_team'" class="mt-4 bg-[#E67300] text-white px-4 py-2 rounded-lg hover:bg-[#A05000]">+ Add User</button>
      <button onclick="window.location.href='team_edit'" class="mt-4 bg-[#E67300] text-white px-4 py-2 rounded-lg hover:bg-[#A05000]">Manage</button>
    </div>

    <!-- Hours -->
    <div class="tab-pane bg-white rounded-xl shadow p-6 hidden" id="hours">
      <h2 class="text-lg font-semibold text-[#A05000] mb-3">Working Hours</h2>
      <p class="text-gray-700">Default Timing: <b>10:00 AM - 6:00 PM</b></p>
      <p class="text-gray-700">Weekend Support: <b>Saturday 10:00 AM - 2:00 PM</b></p>
      <button onclick="window.location.href='working'" class="mt-4 bg-[#E67300] text-white px-4 py-2 rounded-lg hover:bg-[#A05000]">Update Hours</button>
    </div>

    <!-- Services -->
    <div class="tab-pane hidden bg-white rounded-xl shadow p-6" id="services">
      <h2 class="text-lg font-semibold text-[#A05000] mb-3">Services Offered</h2>
      <ul class="list-disc pl-6 space-y-1 text-gray-700">
        <li>Kundli Matching</li>
        <li>Horoscope Reading</li>
        <li>Puja Booking</li>
        <li>Astrology Consultation</li>
      </ul>
      <button onclick="openServiceModal()" class="mt-4 bg-[#E67300] text-white px-4 py-2 rounded-lg hover:bg-[#A05000]">+ Add Service</button>
    </div>

    <!-- Appointment Booking -->
    <div class="tab-pane hidden bg-white rounded-xl shadow p-6" id="appointment">
      <h2 class="text-lg font-semibold text-[#A05000] mb-3">Appointment Booking</h2>

      <!-- Maximum Appointments Per Day -->
      <div class="mb-4">
        <label for="dailyAppointments" class="block text-gray-700 font-medium mb-1">Maximum number of Appointments Per Day</label>
        <input type="number" id="dailyAppointments" name="dailyAppointments" placeholder="e.g. 20"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#E67300] focus:border-[#E67300] text-sm">
      </div>

      <!-- Maximum Kushti (Kundli) Per Day -->
      <div class="mb-4">
        <label for="dailyKushti" class="block text-gray-700 font-medium mb-1">Maximum number of Kushti Per Day</label>
        <input type="number" id="dailyKushti" name="dailyKushti" placeholder="e.g. 10"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#E67300] focus:border-[#E67300] text-sm">
      </div>

      <!-- Save Settings Button -->
      <div class="text-right">
        <button onclick="saveAppointmentSettings()"
          class="mt-2 bg-[#E67300] hover:bg-[#A05000] text-white px-4 py-2 rounded-lg text-sm font-medium">
          Save Settings
        </button>
      </div>
    </div>


    <!-- Integrations -->
    <div class="tab-pane hidden bg-white rounded-xl shadow p-6" id="integrations">
      <h2 class="text-lg font-semibold text-[#A05000] mb-3">Integrations</h2>
      <p class="text-gray-700">WhatsApp API: <b>Connected</b></p>
      <p class="text-gray-700">Email SMTP: <b>Active</b></p>
      <p class="text-gray-700">Payment Gateway: <b>Pending Setup</b></p>
      <button onclick="openIntegrationModal()" class="mt-4 bg-[#E67300] text-white px-4 py-2 rounded-lg hover:bg-[#A05000]">Manage Integrations</button>
    </div>

    <!-- Workflow -->
    <div class="tab-pane hidden bg-white rounded-xl shadow p-6" id="workflow">
      <h2 class="text-lg font-semibold text-[#A05000] mb-3">Workflow Rules</h2>
      <ul class="list-disc pl-6 space-y-1 text-gray-700">
        <li>Auto Reminder after 3 days of no response</li>
        <li>Auto Assign Leads to Telecaller Queue</li>
        <li>Birthday Notification at 9:00 AM</li>
      </ul>
      <button onclick="openWorkflowModal()" class="mt-4 bg-[#E67300] text-white px-4 py-2 rounded-lg hover:bg-[#A05000]">Edit Workflow</button>
    </div>
  </div>
</div>
<!-- Modal Background -->
<div id="serviceModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden flex items-center justify-center z-50">
  <!-- Modal Content -->
  <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
    <h2 class="text-xl font-bold text-[#7A3E00] mb-4">Add New Service</h2>

    <form id="serviceForm" class="space-y-4">
      <!-- Service Name -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Service Name</label>
        <input type="text" name="serviceName" required 
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
      </div>

      <!-- Service Price -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Service Price</label>
        <input type="number" name="servicePrice" required 
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
      </div>

      <!-- Description -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Description</label>
        <textarea name="serviceDescription" rows="3"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]"></textarea>
      </div>

      <!-- Buttons -->
      <div class="flex justify-end space-x-3">
        <button type="button" onclick="closeServiceModal()" 
          class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">Cancel</button>
        <button type="submit" 
          class="px-4 py-2 bg-[#7A3E00] text-white rounded-lg shadow hover:bg-[#5a2d00]">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
function openServiceModal() {
  document.getElementById("serviceModal").classList.remove("hidden");
}

function closeServiceModal() {
  document.getElementById("serviceModal").classList.add("hidden");
}

document.getElementById("serviceForm").addEventListener("submit", function(e) {
  e.preventDefault();
  const name = e.target.serviceName.value;
  const price = e.target.servicePrice.value;
  const desc = e.target.serviceDescription.value;

  alert(`Service Added:\nName: ${name}\nPrice: ₹${price}\nDescription: ${desc}`);


  closeServiceModal();
});
</script>

<!-- Modal -->
<div id="integrationModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden flex items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6">
    <h2 class="text-xl font-bold text-[#7A3E00] mb-4">Manage Integrations</h2>

    <form id="integrationForm" class="space-y-4">
      <!-- WhatsApp API -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">WhatsApp API Key</label>
        <input type="text" name="whatsappApi" placeholder="Enter WhatsApp API Key"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
      </div>

      <!-- Email SMTP -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">SMTP Settings</label>
        <input type="text" name="smtp" placeholder="SMTP Host"
               class="w-full border border-gray-300 rounded px-3 py-2 mb-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
        <input type="text" name="smtpUser" placeholder="SMTP Username"
               class="w-full border border-gray-300 rounded px-3 py-2 mb-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
        <input type="password" name="smtpPass" placeholder="SMTP Password"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
      </div>

      <!-- Payment Gateway -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Payment Gateway</label>
        <select name="paymentGateway" 
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
          <option value="">Select Gateway</option>
          <option value="razorpay">Razorpay</option>
          <option value="stripe">Stripe</option>
          <option value="paypal">PayPal</option>
        </select>
      </div>

      <!-- Buttons -->
      <div class="flex justify-end space-x-3">
        <button type="button" onclick="closeIntegrationModal()" 
          class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">Cancel</button>
        <button type="submit" 
          class="px-4 py-2 bg-[#7A3E00] text-white rounded-lg shadow hover:bg-[#5a2d00]">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
function openIntegrationModal() {
  document.getElementById("integrationModal").classList.remove("hidden");
}

function closeIntegrationModal() {
  document.getElementById("integrationModal").classList.add("hidden");
}

document.getElementById("integrationForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const whatsappApi = e.target.whatsappApi.value;
  const smtp = e.target.smtp.value;
  const smtpUser = e.target.smtpUser.value;
  const smtpPass = e.target.smtpPass.value;
  const gateway = e.target.paymentGateway.value;

  alert(`Integrations Updated \nWhatsApp API: ${whatsappApi}\nSMTP: ${smtp}\nGateway: ${gateway}`);


  closeIntegrationModal();
});
</script>
<!-- Workflow Modal -->
<div id="workflowModal" class="fixed inset-0 bg-black/30 bg-opacity-50 hidden flex items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-6">
    <h2 class="text-xl font-bold text-[#7A3E00] mb-4">Edit Workflow Rules</h2>

    <form id="workflowForm" class="space-y-4">
      <!-- Auto Reminder -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Auto Reminder (days)</label>
        <input type="number" name="reminderDays" placeholder="e.g. 3" 
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
      </div>

      <!-- Lead Assignment -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Assign Leads To</label>
        <select name="leadAssignment" 
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
          <option value="">Select Queue</option>
          <option value="telecaller">Telecaller Queue</option>
          <option value="sales">Sales Queue</option>
          <option value="support">Support Queue</option>
        </select>
      </div>

      <!-- Birthday Notification -->
      <div>
        <label class="block text-[#7A3E00] font-semibold mb-1">Birthday Notification Time</label>
        <input type="time" name="birthdayTime"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#7A3E00]">
      </div>

      <!-- Buttons -->
      <div class="flex justify-end space-x-3">
        <button type="button" onclick="closeWorkflowModal()" 
          class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">Cancel</button>
        <button type="submit" 
          class="px-4 py-2 bg-[#7A3E00] text-white rounded-lg shadow hover:bg-[#5a2d00]">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
function openWorkflowModal() {
  document.getElementById("workflowModal").classList.remove("hidden");
}

function closeWorkflowModal() {
  document.getElementById("workflowModal").classList.add("hidden");
}

document.getElementById("workflowForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const reminderDays = e.target.reminderDays.value;
  const leadAssignment = e.target.leadAssignment.value;
  const birthdayTime = e.target.birthdayTime.value;

  alert(`Workflow Updated\nReminder: ${reminderDays} days\nLeads: ${leadAssignment}\nBirthday: ${birthdayTime}`);


  closeWorkflowModal();
});
</script>

<script>
  // JS Tab Switching
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabPanes = document.querySelectorAll(".tab-pane");

  tabBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      tabBtns.forEach(b => b.classList.remove("border-[#E67300]", "text-[#E67300]"));
      tabPanes.forEach(p => p.classList.add("hidden"));

      btn.classList.add("border-[#E67300]", "text-[#E67300]");
      document.getElementById(btn.dataset.tab).classList.remove("hidden");
    });
  });

  // Default active tab
  tabBtns[0].click();
</script>
<script>
function saveAppointmentSettings() {
  const dailyAppointments = document.getElementById('dailyAppointments').value;
  const dailyKushti = document.getElementById('dailyKushti').value;

  if (!dailyAppointments || !dailyKushti) {
    alert('Please enter all values');
    return;
  }

  localStorage.setItem('dailyAppointments', dailyAppointments);
  localStorage.setItem('dailyKushti', dailyKushti);

  alert('Appointment settings saved successfully!');
}
</script>

<?php include("layouts/footer.php"); ?>
