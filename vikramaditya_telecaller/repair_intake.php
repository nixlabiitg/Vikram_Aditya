<?php include("layouts/header.php"); ?>
  
        <div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Repair Intake Form</h1>

    <div class="bg-[#FFF9F0] border border-[#FFD699] rounded-lg p-6 shadow">
        <form class="space-y-6" onsubmit="return saveIntake(event);">
            <!-- Auto Ticket ID -->
             <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label class="block text-[#7A3E00] font-semibold mb-1">Ticket ID</label>
                  <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 bg-gray-100" value="AUTO12345" readonly>
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Client Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Name">
                </div>
              </div>
            <!-- Client Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Phone Number</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Phone">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Email</label>
                    <input type="email" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Email">
                </div>
            </div>

            <!-- Product & Complaint -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Product Received</label>
                    <select class="w-full border border-gray-300 rounded px-4 py-2">
                        <option>Choose Product</option>
                        <option>Rudraksha Mala</option>
                        <option>Yantra</option>
                        <option>Gemstone</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Purchase Reference ID</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Optional">
                </div>
            </div>

            <!-- Complaint Description -->
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-1">Complaint Description</label>
                <textarea class="w-full border border-gray-300 rounded px-4 py-2" rows="3" placeholder="Describe issue..."></textarea>
            </div>

            <!-- Upload Product Photo -->
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-1">Upload Product Photo</label>
                <input type="file" class="w-full border border-gray-300 rounded px-4 py-2">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Submit Intake</button>
            </div>
        </form>
    </div>
</div>

<script>
    function saveIntake(event) {
        event.preventDefault();

        alert("lead saved successfully!");

        window.location.href = "repair_intake.php";

        return false;
    }
</script>

<?php include('layouts/footer.php'); ?>