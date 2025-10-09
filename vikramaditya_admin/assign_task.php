<?php include("layouts/header.php"); ?>
<div class="p-6">
  <h2 class="text-2xl font-semibold mb-6">Assign Task</h2>

  <div class="bg-white text-gray-800 shadow rounded-2xl p-6">
    <form class="space-y-5">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block mb-1 font-medium">Assign To</label>
          <select class="w-full border border-gray-300 rounded-lg p-2">
            <option>Select Staff/Astrologer</option>
            <option>Astrologer A</option>
            <option>Telecaller B</option>
            <option>Admin C</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-medium">Task Title</label>
          <input type="text" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Task Title">
        </div>
      </div>

      <div>
        <label class="block mb-1 font-medium">Task Description</label>
        <textarea rows="3" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Describe the task..."></textarea>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
          <label class="block mb-1 font-medium">Priority</label>
          <select class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
            <option>Urgent</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-medium">Due Date</label>
          <input type="date" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
        </div>
        <div>
          <label class="block mb-1 font-medium">Due Time</label>
          <input type="time" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block mb-1 font-medium">Linked Lead/Client</label>
          <select class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
            <option>Select Lead/Client</option>
            <option>Client 1</option>
            <option>Client 2</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-medium">Task Status</label>
          <select class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
            <option>Pending</option>
            <option>In Progress</option>
            <option>Completed</option>
          </select>
        </div>
      </div>

      <button type="button" 
          onclick="confirmBooking()"class="w-full py-2 rounded-lg bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
        Assign Task
      </button>
    </form>
  </div>
</div>


<script>
function confirmBooking() {
    window.location.href = "task?success=1";
}
</script>

<?php include("layouts/footer.php"); ?>