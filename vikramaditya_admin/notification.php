<?php include("layouts/header.php"); ?>


<div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Notifications</h1>

    <div class="bg-white shadow rounded-lg p-6 border border-[#FFD699]">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-[#7A3E00]">Recent Notifications</h2>
            <button class="text-sm text-[#7A3E00] hover:underline" onclick="clearNotifications()">Clear All</button>
        </div> 
        <div id="notificationList" class="space-y-4">
        </div>
    </div>   
<?php include("layouts/footer.php"); ?>