<?php
include("layouts/header.php");
?>
<div class="main-content p-6">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-4 md:mb-6 space-y-2 md:space-y-0">
        <h1 class="text-2xl font-bold text-[#7A3E00]">Register Client</h1>
    </div>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699]">
        <form id="clientForm" class="space-y-3 bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699]" onsubmit="return saveClient(event);">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Full Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Full Name">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Phone Number</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Phone Number">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Referred by</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Referred by">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Service Interested</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Speak with Vikramaditya Or buy an Astro Product">
                </div>
                
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-2">Appointment With</label>
                    <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-2 sm:space-y-0">
                        <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Astrologer</span>
                            <input type="checkbox" name="referred_to[]" value="astrologer" class="hidden">
                        </div>

                        <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Counsellor</span>
                            <input type="checkbox" name="referred_to[]" value="counsellor" class="hidden">
                        </div>

                        <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Both</span>
                            <input type="checkbox" name="referred_to[]" value="both" class="hidden">
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-2">Gender</label>
                    <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-2 sm:space-y-0">
                        <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="radio" name="gender" value="female" class="hidden peer">
                        <div class="h-5 w-5 rounded-full border-2 border-gray-400 peer-checked:border-[#7A3E00] peer-checked:bg-[#7A3E00]"></div>
                        <span>Female</span>
                        </label>

                        <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="radio" name="gender" value="male" class="hidden peer">
                        <div class="h-5 w-5 rounded-full border-2 border-gray-400 peer-checked:border-[#7A3E00] peer-checked:bg-[#7A3E00]"></div>
                        <span>Male</span>
                        </label>

                        <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="radio" name="gender" value="other" class="hidden peer">
                        <div class="h-5 w-5 rounded-full border-2 border-gray-400 peer-checked:border-[#7A3E00] peer-checked:bg-[#7A3E00]"></div>
                        <span>Other</span>
                        </label>

                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Appointment Date</label>
                    <input type="date" class="w-full border border-gray-300 rounded px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Branch</label>
                    <select class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                        <option value="">Select Location</option>
                        <option value="guwahati">Guwahati</option>
                        <option value="pathshala">Pathshala</option>
                        <option value="other">Others</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Number of Kushti</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Kushti">
                </div> 
            </div>

            <div>
                <label class="block text-[#7A3E00] font-semibold mb-1">Additional Notes</label>
                <textarea class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" rows="4" placeholder="Any remarks or client details..."></textarea>
            </div>
            <div>
                <button type="submit" class="px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Save Client</button>
            </div>
        </form>
    </div>
</div>
<script>
function toggleSelect(el) {
    const checkbox = el.querySelector('input[type="checkbox"]');
    el.classList.toggle('selected');
    checkbox.checked = !checkbox.checked;
}
</script>
<script>
    function saveClient(event) {
        event.preventDefault();

        alert("Client saved successfully!");

        window.location.href = "client_view";

        return false;
    }
</script>

<?php include("layouts/footer.php");