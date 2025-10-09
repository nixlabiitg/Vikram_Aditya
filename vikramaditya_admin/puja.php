<?php include("layouts/header.php") ?>
<div class="min-h-screen text-gray-800">
  
  <!-- Header -->
  <header class="flex justify-between items-center p-6 border-b border-orange-300">
    <h1 class="text-2xl font-bold text-yellow-900">Puja</h1>
  </header>

  <!-- Main Layout -->
  <form action="save_puja_booking.php" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6 p-6">
    
    <!-- Left Section -->
    <div class="lg:col-span-2 bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
      <div class="p-4 border-b border-orange-200">
        <h2 class="font-semibold text-gray-800">Select Date, Time & Puja Category</h2>
      </div>
      
      <div class="p-6 space-y-6">
        
        <!-- Categories -->
        <div>
          <p class="text-sm mb-3 font-medium text-gray-700">Choose Puja Category</p>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Category Card -->
            <label class="cursor-pointer">
              <input type="radio" name="puja_category" value="Guru Puja" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Guru Puja</span>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="puja_category" value="Mangal Puja" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Mangal Puja</span>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="puja_category" value="Rudra Abhishek" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Rudra Abhishek</span>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="puja_category" value="Nava Graha Shanti" class="hidden peer">
              <div class="h-35 flex flex-col justify-between p-4 bg-gradient-to-br from-[#fffaf6] to-[#ffe2d0] border border-orange-300 rounded-xl shadow peer-checked:border-2 peer-checked:border-orange-700 text-center">
                <img src="assets/img/puja.png" class="w-15 h-15 mx-auto mb-2">
                <span class="text-sm font-medium">Nava Graha Shanti</span>
              </div>
            </label>

          </div>
        </div>

        <!-- Choose Date -->
        <div>
          <p class="text-sm mb-2 font-semibold text-gray-700 flex items-center gap-2">
            <!-- Calendar Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                class="w-5 h-5 text-orange-600">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Choose Date
          </p>
          <input 
              type="date" 
              name="puja_date" 
              class="w-full p-3 border border-orange-300 rounded-lg 
                    bg-gradient-to-br from-[#fffaf6] to-[#ffe9d6] shadow-sm 
                    focus:outline-none focus:ring-2 focus:ring-orange-700 focus:border-orange-800
                    transition duration-200 ease-in-out text-gray-700 font-medium"
            >
        </div>

        <!-- Slots -->
        <div>
          <p class="text-sm mb-2 font-semibold text-gray-700 flex items-center gap-2">
            <!-- Clock Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                class="w-5 h-5 text-orange-600">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Choose Time Slot
          </p>
          <select name="puja_slot" class="w-full p-3 border border-orange-300 rounded-lg 
                    bg-gradient-to-br from-[#fffaf6] to-[#ffe9d6] shadow-sm 
                    focus:outline-none focus:ring-2 focus:ring-orange-700 focus:border-orange-800
                    transition duration-200 ease-in-out text-gray-700 font-medium">
            <option value="">-- Select Slot --</option>
            <option value="06:00-07:00">06:00 - 07:00 AM</option>
            <option value="08:00-09:00">08:00 - 09:00 AM</option>
            <option value="10:00-11:00">10:00 - 11:00 AM</option>
            <option value="16:00-17:00">04:00 - 05:00 PM</option>
          </select>
        </div>

        <!-- Book Button -->
        <div class="text-center">
          <button type="submit" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-xl font-semibold shadow-lg hover:scale-105 transition">
             Book Puja
          </button>
        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="space-y-6">
      <!-- Booking Summary -->
      <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
        <div class="p-4 border-b border-orange-200 flex justify-between items-center">
          <h3 class="font-semibold text-gray-800">Booking Summary</h3>
          <button type="button" class="px-3 py-1 border border-orange-400 text-xs rounded hover:bg-orange-100">Toggle</button>
        </div>
        <div class="p-6 text-gray-400 text-center">No Data Found</div>
      </div>

      <!-- Booked Members -->
      <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
        <div class="p-4 border-b border-orange-200 font-semibold text-gray-800">Booked Members</div>
        <div id="booked-members" class="p-6 text-gray-400 text-center">No Data Found</div>
      </div>

      <!-- Mini Dashboard -->
      <div class="bg-white/90 backdrop-blur rounded-2xl shadow-lg border border-orange-200">
        <div class="p-4 border-b border-orange-200 font-semibold text-gray-800">Mini Dashboard</div>
        <div class="p-6 text-sm space-y-2">
          <p>Total Bookings Today: <span id="total-bookings" class="text-indigo-500 font-semibold">0</span></p>
          <p>Slots Filled: <span id="slots-filled" class="text-green-500 font-semibold">0</span></p>
          <p>Available Slots: <span id="available-slots" class="text-red-500 font-semibold">8</span></p>
          <p>Popular Puja: <span class="text-pink-500 font-semibold">Durga Puja</span></p>
        </div>
      </div>

    </div>
  </form>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const pujaRadios = document.querySelectorAll("input[name='puja_category']");
  const bookedContainer = document.querySelector("#booked-members");
  const availableSlots = document.querySelector("#available-slots");
  const slotsFilled = document.querySelector("#slots-filled");
  const totalBookings = document.querySelector("#total-bookings");

  // Dummy puja slot data with date & time
  const pujaSlots = {
    "Guru Puja": { 
      total: 10, 
      booked: [
        { name: "Ramesh", date: "2025-09-01", time: "10:00 AM" },
        { name: "Sita", date: "2025-09-01", time: "11:30 AM" },
        { name: "Anil", date: "2025-09-02", time: "02:00 PM" }
      ] 
    },
    "Mangal Puja": { 
      total: 8, 
      booked: [
        { name: "Pooja", date: "2025-09-03", time: "09:00 AM" }
      ] 
    },
    "Rudra Abhishek": { 
      total: 6, 
      booked: [
        { name: "Amit", date: "2025-09-04", time: "06:00 AM" },
        { name: "Kiran", date: "2025-09-04", time: "08:00 AM" },
        { name: "Rahul", date: "2025-09-04", time: "10:00 AM" },
        { name: "Sneha", date: "2025-09-05", time: "04:00 PM" }
      ] 
    },
    "Nava Graha Shanti": { total: 5, booked: [] }
  };

  pujaRadios.forEach(radio => {
    radio.addEventListener("change", () => {
      const selected = radio.value;
      const data = pujaSlots[selected];

      // update numbers
      totalBookings.textContent = data.booked.length;
      slotsFilled.textContent = data.booked.length;
      availableSlots.textContent = data.total - data.booked.length;

      // update booked members
      if (data.booked.length > 0) {
        bookedContainer.innerHTML = "";
        data.booked.forEach(entry => {
          bookedContainer.innerHTML += `
            <p class="text-sm text-gray-700">
              <span class="font-medium">${entry.name}</span> 
              <span class="text-gray-500">- ${entry.date}, ${entry.time}</span>
            </p>`;
        });
      } else {
        bookedContainer.innerHTML = `<p class="text-gray-400 text-center">No Bookings Yet</p>`;
      }
    });
  });
});
</script>


<?php include("layouts/footer.php") ?>
