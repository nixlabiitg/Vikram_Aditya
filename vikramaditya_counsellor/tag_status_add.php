<?php include("layouts/header.php"); ?>
<div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Add New Lead Status</h1>

    <form method="POST" class="space-y-4 bg-[#FFF9F0] p-6 rounded border border-[#FFD699] shadow max-w-xl">
        <div>
            <label class="block text-[#7A3E00] font-semibold mb-1">Status Name</label>
            <input type="text" name="status_name" class="w-full border rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-[#7A3E00] font-semibold mb-1">Status Color</label>
            <input type="color" name="status_color" class="w-16 h-10 rounded" value="#3B82F6">
        </div>
        <div>
            <label class="block text-[#7A3E00] font-semibold mb-1">Status Type</label>
            <select name="status_type" class="w-full border rounded px-4 py-2">
                <option value="Lead">Lead</option>
                <option value="Client">Client</option>
            </select>
        </div>
        <div>
            <button type="submit" name="save_status" class="bg-[#FF7F50] text-white px-4 py-2 rounded hover:bg-[#E67300]">Save Status</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['save_status'])) {

    echo "<script>
        alert('Status saved successfully!');
        window.location.href = 'tags_leads.php#status-section';
    </script>";
}
?>
