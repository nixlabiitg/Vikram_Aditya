<?php include("layouts/header.php"); ?>
<div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Add New Tag</h1>

    <form method="POST" class="space-y-4 bg-[#FFF9F0] p-6 rounded border border-[#FFD699] shadow max-w-xl">
        <div>
            <label class="block text-[#7A3E00] font-semibold mb-1">Tag Name</label>
            <input type="text" name="tag_name" class="w-full border rounded px-4 py-2" required>
        </div>
        <div>
            <label class="block text-[#7A3E00] font-semibold mb-1">Tag Color</label>
            <input type="color" name="tag_color" class="w-16 h-10 rounded" value="#22C55E">
        </div>
        <div>
            <button type="submit" name="save_tag" class="bg-[#FF7F50] text-white px-4 py-2 rounded hover:bg-[#E67300]">Save Tag</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['save_tag'])) {

    echo "<script>
        alert('Tag saved successfully!');
        window.location.href = 'tags_leads.php#tag-section';
    </script>";
}
?>
