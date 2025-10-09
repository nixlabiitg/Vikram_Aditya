<?php include('layouts/header.php'); ?>

<div class="main-content p-6">
    <!-- Search Section -->
    <div id="search-section" class="flex items-center justify-center min-h-[70vh]">
        <div>
            <h1 class="text-2xl font-bold text-[#7A3E00] mb-6 text-center">Track Your Repair</h1>
            <div class="mb-4">
                <label class="block text-[#7A3E00] font-semibold mb-2 text-center">Enter Ticket ID</label>
                <input id="ticketInput" type="text" class="border rounded px-4 py-2 w-80 mx-auto block" placeholder="e.g. AUTO12345">
            </div>
            <div class="text-center">
                <button onclick="searchTicket()" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Search</button>
            </div>
        </div>
    </div>

    <!-- Timeline Section (Initially Hidden) -->
    <div id="timeline-section" class="hidden mt-10">
        <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Repair Timeline & Tracking</h1>

        <!-- Ticket Information -->
        <div class="mb-6 bg-[#FFF9F0] border border-[#FFD699] rounded-lg p-4">
            <p><strong>Ticket ID:</strong> <span id="ticket-id">AUTO12345</span></p>
            <p><strong>Client Name:</strong> <span id="client-name">Rajesh Kumar</span></p>
            <p><strong>Product:</strong> <span id="product-name">Rudraksha Mala</span></p>
        </div>

        <!-- Kanban Tracker -->
        <div class="grid grid-cols-2 md:grid-cols-7 gap-4" id="stage-tracker">
            <!-- JS will populate this -->
        </div>

        <!-- Notes Section -->
        <form class="mt-8" onsubmit="return saveNote(event);">
            <label class="block text-[#7A3E00] font-semibold mb-2">Stage Notes / Updates</label>
            <textarea class="w-full border rounded px-4 py-2 bg-white" rows="4" placeholder="Add updates or remarks..."></textarea>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">Save Notes</button>
            </div>
        </form>
    </div>
</div>
<script>
// Load existing data from localStorage if available
let ticketData = JSON.parse(localStorage.getItem("ticketData")) || {
    "AUTO12345": {
        client_name: "Rajesh Kumar",
        product: "Rudraksha Mala",
        stages: [
            { name: "Received", status: "Completed", color: "bg-green-500", note: "05 Aug 2025" },
            { name: "Checked", status: "Completed", color: "bg-green-500", note: "06 Aug 2025" },
            { name: "Work Started", status: "In Progress", color: "bg-yellow-500", note: "In Progress" },
            { name: "Energy Recharge", status: "Pending", color: "bg-gray-300", note: "Pending" },
            { name: "Quality Checked", status: "Pending", color: "bg-gray-300", note: "Pending" },
            { name: "Ready for Dispatch", status: "Pending", color: "bg-gray-300", note: "Pending" },
            { name: "Delivered", status: "Pending", color: "bg-gray-300", note: "Pending" }
        ],
        notes: []
    }
};

function searchTicket() {
    const ticketId = document.getElementById('ticketInput').value.trim().toUpperCase();

    if (ticketData[ticketId]) {
        document.getElementById('search-section').classList.add('hidden');
        document.getElementById('timeline-section').classList.remove('hidden');

        document.getElementById('ticket-id').innerText = ticketId;
        document.getElementById('client-name').innerText = ticketData[ticketId].client_name;
        document.getElementById('product-name').innerText = ticketData[ticketId].product;

        renderStages(ticketId);
    } else {
        alert("Ticket ID not found. Please check and try again.");
    }
}

function renderStages(ticketId) {
    const tracker = document.getElementById('stage-tracker');
    tracker.innerHTML = "";

    ticketData[ticketId].stages.forEach((stage, index) => {
        tracker.innerHTML += `
            <div onclick="updateStage('${ticketId}', ${index})" 
                 class="bg-white border rounded-lg p-4 text-center shadow hover:shadow-md transition cursor-pointer">
                <div class="text-sm font-semibold text-[#7A3E00] mb-2">${stage.name}</div>
                <div class="w-4 h-4 mx-auto rounded-full ${stage.color}"></div>
                <p class="text-xs text-gray-500 mt-2">${stage.note}</p>
            </div>
        `;
    });
}

function updateStage(ticketId, stageIndex) {
    let stage = ticketData[ticketId].stages[stageIndex];

    if (stage.status === "Pending") {
        stage.status = "In Progress";
        stage.color = "bg-yellow-500";
        stage.note = "In Progress";
    } else if (stage.status === "In Progress") {
        stage.status = "Completed";
        stage.color = "bg-green-500";
        stage.note = new Date().toLocaleDateString();
    } else {
        stage.status = "Pending";
        stage.color = "bg-gray-300";
        stage.note = "Pending";
    }

    // 🔹 Save updates to localStorage
    localStorage.setItem("ticketData", JSON.stringify(ticketData));

    renderStages(ticketId);
}

function saveNote(event) {
    event.preventDefault();

    const ticketId = document.getElementById('ticket-id').innerText;
    const noteText = document.querySelector("textarea").value.trim();

    if (!noteText) {
        alert("Please enter a note before saving.");
        return false;
    }

    if (!ticketData[ticketId].notes) {
        ticketData[ticketId].notes = [];
    }

    ticketData[ticketId].notes.push({
        text: noteText,
        date: new Date().toLocaleString()
    });

    // 🔹 Save notes also
    localStorage.setItem("ticketData", JSON.stringify(ticketData));

    alert("Note saved successfully!");
    window.location.href = "repair_detail.php?id=" + ticketId;
    return false;
}
</script>

<?php include('layouts/footer.php'); ?>
