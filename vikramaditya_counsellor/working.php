<?php include("layouts/header.php") ?>

<div class="main-content p-6">
  <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Update Working Hours</h1>

  <!-- Card -->
  <div class="bg-white shadow rounded-lg p-6 border border-[#FFD699]">
    <form onsubmit="event.preventDefault(); window.location.href='settings';" class="space-y-6 " >
      <!-- Working Days -->
      <div>
        <label class="block text-gray-700 font-medium mb-2">Working Days</label>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Monday</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Tuesday</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Wednesday</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Thursday</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Friday</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Saturday</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="h-4 w-4 text-[#7A3E00] border-gray-300 rounded">
            <span>Sunday</span>
          </label>
        </div>
      </div>

      <!-- Time Selection -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-gray-700 font-medium mb-2">Start Time</label>
          <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
        <div>
          <label class="block text-gray-700 font-medium mb-2">End Time</label>
          <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
      </div>

      <!-- Break Time -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-gray-700 font-medium mb-2">Break Start</label>
          <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
        <div>
          <label class="block text-gray-700 font-medium mb-2">Break End</label>
          <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
      </div>

      <!-- Save Button -->
      <div class="flex justify-end">
        <button type="submit" class="px-6 py-2 bg-[#7A3E00] text-white font-medium rounded-lg shadow hover:bg-[#5a2d00]">
          Save Changes
        </button>
      </div>
    </form>
  </div>
</div>
<?php include("layouts/footer.php"); ?>