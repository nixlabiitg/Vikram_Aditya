<?php include("layouts/header.php"); ?>
<div class="p-6">
  <h2 class="text-2xl font-semibold text-gray-800 mb-6">Schedule Follow-Up</h2>

  <div class="bg-white shadow-md rounded-2xl p-6">
    <form class="space-y-6" onsubmit="return false;">

      <!-- Lead & Follow-Up Type -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Select Lead/Client</label>
          <select class="w-full border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
            <option>Select Lead/Client</option>
            <option>Lead 101 - Rajesh</option>
            <option>Client 202 - Priya</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Follow-Up Type</label>
          <select class="w-full border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
            <option>Call</option>
            <option>Meeting</option>
            <option>Video Call</option>
            <option>WhatsApp</option>
            <option>Email</option>
          </select>
        </div>
      </div>

      <!-- Date, Time & Staff -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
          <input type="date" class="w-full border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
          <input type="time" class="w-full border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Assign To</label>
          <select class="w-full border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none">
            <option>Select Staff</option>
            <option>Astrologer A</option>
            <option>Telecaller B</option>
          </select>
        </div>
      </div>

      <!-- Notes -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Notes / Remarks</label>
        <textarea rows="3" class="w-full border border-gray-300 rounded-xl p-2.5 focus:ring-2 focus:ring-orange-400 focus:outline-none" placeholder="Write follow-up details..."></textarea>
      </div>

      <!-- Reminder -->
      <div class="flex items-center">
        <input id="reminderCheck" type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
        <label for="reminderCheck" class="ml-2 text-sm text-gray-700">Send Reminder (Email/SMS/WhatsApp)</label>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="button" 
          onclick="confirmBooking()"
          class="w-full bg-[#FF7F50] text-white hover:bg-[#E67300] py-3 rounded-xl font-medium transition">
          Save & Notify
        </button>
      </div>

    </form>
  </div>
</div>

<script>
function confirmBooking() {
    window.location.href = "follow_up?success=1";
}
</script>

<?php include("layouts/footer.php"); ?>
