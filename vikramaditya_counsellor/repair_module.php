
  <?php include("layouts/header.php") ?>
    
        <div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Product Check & Repair Notes</h1>

    <div class="bg-[#FFF9F0] border border-[#FFD699] rounded-lg p-6 shadow">
        <form class="space-y-6" onsubmit="return saveNote(event);">
            <!-- Ticket ID & Client Details -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Ticket ID</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter ticket id">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Client Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Clients Name">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Product</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Product Name">
                </div>
            </div>

            <!-- Visual Check & Diagnosis -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Visual Check by Staff</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Inspector Name">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Issue Diagnosed</label>
                    <select class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                        <option>Select Issue</option>
                        <option>Bead Broken</option>
                        <option>Thread Loosened</option>
                        <option>Energy Recharge Required</option>
                    </select>
                </div>
            </div>

            <!-- Repair Type & Action Notes -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Type of Repair</label>
                    <select class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                        <option>Physical Repair</option>
                        <option>Energy Recharge</option>
                        <option>Replacement</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Assign Work To</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Artisan/Staff Name">
                </div>
            </div>

            <!-- Action Needed & Cost Estimation -->
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-1">Action Needed</label>
                <textarea class="w-full border border-gray-300 rounded px-4 py-2" rows="3" placeholder="Describe repair actions..."></textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Estimated Repair Cost</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Rs. 500">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Estimated Repair Time</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="3 Days">
                </div>
            </div>

            <!-- Return Preference -->
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-1">Client Return Preference</label>
                <select class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                    <option>Pickup</option>
                    <option>Courier</option>
                    <option>Session Delivery</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Save Repair Note</button>
            </div>
        </form>
    </div>
</div>

<script>
    function saveNote(event) {
        event.preventDefault();

        alert("Note saved successfully!");

        window.location.href = "repair_module.php";

        return false;
    }
</script>

<?php include('layouts/footer.php'); ?>