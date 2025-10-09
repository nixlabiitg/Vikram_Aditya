<?php include('layouts/header.php'); ?>

<div class="main-content p-6 min-h-screen">
    <h1 class="text-3xl font-extrabold text-[#7A3E00] mb-8 text-center flex items-center justify-center gap-2">
        <svg class="w-8 h-8 text-[#7A3E00]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0V9a4 4 0 00-4-4H9a4 4 0 00-4 4v8" />
        </svg>
        New Complaint Entry
    </h1>

    <form action="#" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md" onsubmit="return saveComplain(event);">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Complaint ID</label>
                <input type="text" value="ASTRO-CMP-2025-0101" readonly class="w-full border-gray-300 rounded px-4 py-2 bg-gray-100" />
            </div>
            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Date & Time</label>
                <input type="text" value="<?php echo date('d M Y, h:i A'); ?>" readonly class="w-full border-gray-300 rounded px-4 py-2 bg-gray-100" />
            </div>

            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Complainant Name</label>
                <input type="text" name="name" class="w-full border rounded px-4 py-2" required />
            </div>
            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Contact Info</label>
                <input type="text" name="contact" class="w-full border rounded px-4 py-2" required />
            </div>

            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Booking Reference ID</label>
                <input type="text" name="booking_id" class="w-full border rounded px-4 py-2" />
            </div>
            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Astrologer Name</label>
                <select name="astrologer" class="w-full border rounded px-4 py-2">
                    <option>Select Astrologer</option>
                    <option>Pt. Ramesh</option>
                    <option>Smt. Neha</option>
                    <option>Acharya Om</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Complaint Type</label>
                <select name="type" class="w-full border rounded px-4 py-2">
                    <option>Minor</option>
                    <option>Major</option>
                    <option>Urgent</option>
                </select>
            </div>
            <div>
                <label class="block font-semibold text-sm text-gray-700 mb-1">Category</label>
                <select name="category" class="w-full border rounded px-4 py-2">
                    <option>Delay</option>
                    <option>Communication Issue</option>
                    <option>Incorrect Prediction</option>
                    <option>Refund Request</option>
                    <option>Misbehavior</option>
                    <option>Technical Problem</option>
                    <option>Rebooking Request</option>
                </select>
            </div>
        </div>

        <div class="mt-6">
            <label class="block font-semibold text-sm text-gray-700 mb-1">Complaint Description</label>
            <textarea name="description" rows="4" maxlength="800" class="w-full border rounded px-4 py-2" required></textarea>
        </div>

        <div class="mt-6">
            <label class="block font-semibold text-sm text-gray-700 mb-1">Attachments (Screenshot, Invoice, etc.)</label>
            <input type="file" name="attachments[]" multiple class="w-full border rounded px-4 py-2" />
        </div>

        <div class="mt-8 text-right">
            <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Submit Complaint</button>
        </div>
    </form>
</div>

<script>
    function saveComplain(event) {
        event.preventDefault();

        alert("Complaint saved successfully!");

        window.location.href = "complain_entry";

        return false;
    }
</script>

<?php include('layouts/footer.php'); ?>
