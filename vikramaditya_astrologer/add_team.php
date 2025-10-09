<?php
include("layouts/header.php");
?>
<div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Add New Team Member</h1>

    <div class="bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699]">
        <form id="teamForm" class="space-y-6" onsubmit="return saveTeamMember(event)">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Full Name</label>
                    <input type="text" id="fullName" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Full Name">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Phone Number</label>
                    <input type="text" id="phoneNumber" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Phone Number">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Email</label>
                    <input type="email" id="email" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" placeholder="Enter Email">
                </div>
                <div>
                    <label class="block text-[#7A3E00] font-semibold mb-1">Role</label>
                    <select id="roleSelect" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" onchange="handleRoleChange(this)">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="astrologer">Astrologer</option>
                        <option value="counselor">Counselor</option>
                        <option value="telecaller">Telecaller</option>
                        <option value="Other">Other</option>
                    </select>
                    <div id="otherRoleInput" class="mt-2 hidden">
                        <input type="text" id="customRole" placeholder="Enter custom role" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400">
                    </div>
                    <p id="roleMessage" class="text-red-500 text-sm mt-1 hidden">Please select a valid role.</p>
                </div>
            </div>

            <div>
                <label class="block text-[#7A3E00] font-semibold mb-1">Additional Notes</label>
                <textarea id="notes" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-400" rows="4" placeholder="Any remarks or team member details..."></textarea>
            </div>

            <div>
                <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Save Team Member</button>
            </div>
        </form>

        <!-- Success Popup -->
        <div id="successPopup" class="hidden fixed top-10 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-3 rounded shadow-lg z-50">
            Team member saved successfully!
        </div>

    </div>
</div>
<script>
    function handleRoleChange(select) {
        const otherInputDiv = document.getElementById('otherRoleInput');
        const roleMessage = document.getElementById('roleMessage');

        if (select.value === "Other") {
            otherInputDiv.classList.remove('hidden');
            roleMessage.classList.add('hidden');
        } else {
            otherInputDiv.classList.add('hidden');
            roleMessage.classList.add('hidden');
        }
    }

    function saveTeamMember(event) {
        event.preventDefault();

        const role = document.getElementById('roleSelect').value;
        const customRole = document.getElementById('customRole').value.trim();
        const roleMessage = document.getElementById('roleMessage');

        if (role === '') {
            roleMessage.classList.remove('hidden');
            return false;
        }

        if (role === 'Other' && customRole === '') {
            alert("Please enter a custom role.");
            return false;
        }

        const popup = document.getElementById('successPopup');
        popup.classList.remove('hidden');

        setTimeout(() => {
            popup.classList.add('hidden');
            document.getElementById('teamForm').reset();
            document.getElementById('otherRoleInput').classList.add('hidden');
            roleMessage.classList.add('hidden');
        }, 2000);

        return false;
    }
</script>


<?php include("layouts/footer.php"); ?>