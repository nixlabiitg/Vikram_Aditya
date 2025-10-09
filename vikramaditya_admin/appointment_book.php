<?php include("layouts/header.php"); ?>

<div class="main-content p-6">
    <h1 class="text-2xl font-bold text-[#7A3E00] mb-6">Appointment Booking</h1>
   
    <div class="flex items-center justify-between mb-6" id="stepper">
        <div class="flex-1 text-center" data-step="1">
            <div class="text-sm font-semibold step-label text-[#7A3E00]">Step 1</div>
            <div class="text-lg step-title text-[#7A3E00]">Select Client</div>
        </div>
        <div class="flex-1 text-center" data-step="2">
            <div class="text-sm font-semibold step-label text-gray-400">Step 2</div>
            <div class="text-lg step-title text-gray-400">Select Service</div>
        </div>
        <div class="flex-1 text-center" data-step="3">
            <div class="text-sm font-semibold step-label text-gray-400">Step 3</div>
            <div class="text-lg step-title text-gray-400">Schedule Appointment</div>
        </div>
    </div>

    <!-- Step 1: Select Client -->
    <div id="step1" class="step bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699]">
        <label class="block text-[#7A3E00] font-semibold mb-2">Search Client</label>
        <input type="text" placeholder="Enter Client Name or Phone." class="w-full border border-gray-300 rounded px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400" oninput="searchClient(this.value)">
        <div id="clientResults" class="space-y-2"></div>
    </div>

    <!-- Step 2: Select Service -->
    <div id="step2" class="step hidden bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699]">
        <label class="block text-[#7A3E00] font-semibold mb-4">Appointment for <span class="text-blue-500"> <a href="add_family">(Add Family)</a></span></label>
        <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-2 sm:space-y-0 mb-4">
    
            <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Rajesh Kumar(self)</span>
                <input type="checkbox" name="referred[]" value="self" class="hidden">
            </div>

            <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>family</span>
                <input type="checkbox" name="referred[]" value="family" class="hidden">
            </div>
        </div>
        <label class="block text-[#7A3E00] font-semibold mb-4">Appointment with</label>
        <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-2 sm:space-y-0 mb-4">
            
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
            <!-- Product -->
            <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Product Purchase</span>
                <input type="checkbox" name="referred_to[]" value="product" class="hidden">
            </div>
            <!-- Repair -->
            <div class="flex items-center space-x-2 cursor-pointer group" onclick="toggleSelect(this)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 group-[.selected]:text-[#7A3E00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Repair</span>
                <input type="checkbox" name="referred_to[]" value="repair" class="hidden">
            </div>
        </div>
        <script>
            function toggleSelect(el) {
                const checkbox = el.querySelector('input[type="checkbox"]');
                el.classList.toggle('selected');
                checkbox.checked = !checkbox.checked;
            }
            </script>

        <div class="text-center">
            <button class="px-6 py-2 bg-[#FF7F50] text-white hover:bg-[#E67300] rounded mr-2" onclick="goToStep(1)">Back</button>
            <button class="px-6 py-2 bg-[#24784b] text-white rounded hover:bg-[#03fc45]" onclick="goToStep(3)">Next</button>
        </div>
    </div>

    <!-- Step 3: Schedule Appointment -->
    <div id="step3" class="step hidden bg-[#FFF9F0] shadow rounded-lg p-6 border border-[#FFD699]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-2">Select Date</label>
                <input type="date" class="w-full text-gray-700 border border-gray-300 rounded px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-2">Select Time Slot</label>
                <select class="w-full text-gray-700 border border-gray-300 rounded px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                    <option>10:00 AM - 10:30 AM</option>
                    <option>11:00 AM - 11:30 AM</option>
                    <option>2:00 PM - 2:30 PM</option>
                    <option>4:00 PM - 4:30 PM</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-2">Branch</label>
                <select class="w-full text-gray-700 border border-gray-300 rounded px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400">
                    <option value="">Select Location</option>
                    <option value="guwahati">Guwahati</option>
                    <option value="pathshala">Pathshala</option>
                    <option value="other">Others</option>
                </select>
            </div>
            <div>
                <label class="block text-[#7A3E00] font-semibold mb-2">Number of Kushti</label>
                <input type="text" class="w-full border border-gray-300 rounded px-4 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Kushti">
            </div>
        </div>

        <div class="text-center">
            <button class="px-6 py-2 bg-[#FF7F50] text-white hover:bg-[#E67300] rounded mr-2" onclick="goToStep(2)">Back</button>
            <button class="px-6 py-2 bg-[#24784b] text-white rounded hover:bg-[#03fc45]" onclick="confirmBooking()">Confirm Booking</button>
        </div>
    </div>
</div>

<script>
    const dummyClients = [
        { name: 'Rajesh Kumar', phone: '9876543210' },
        { name: 'Priya Sharma', phone: '9123456789' },
        { name: 'Ankit Desai', phone: '9988776655' },
        { name: 'Meera Joshi', phone: '9876543211' },
    ];

    function searchClient(query) {
        const resultsDiv = document.getElementById('clientResults');
        resultsDiv.innerHTML = '';

        if (query.trim() === '') return;

        const filteredClients = dummyClients.filter(client =>
            client.name.toLowerCase().includes(query.toLowerCase()) ||
            client.phone.includes(query)
        );

        if (filteredClients.length === 0) {
            resultsDiv.innerHTML = '<p class="text-sm text-red-500">No matching clients found.</p>';
        } else {
            filteredClients.forEach(client => {
                resultsDiv.innerHTML += `
                    <div class="flex justify-between items-center p-2 border border-[#FFD699] rounded bg-[#FFF9F0]">
                        <div>
                            <p class="font-medium">${client.name}</p>
                            <p class="text-sm text-gray-600">${client.phone}</p>
                        </div>
                        <button class="px-4 py-1 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]" onclick="selectClient('${client.name}')">Select</button>
                    </div>`;
            });
        }
    }

    function selectClient(clientName) {
        console.log('Selected Client:', clientName);
        goToStep(2);
    }

    function goToStep(step) {
        document.querySelectorAll('.step').forEach(el => el.classList.add('hidden'));
        document.getElementById('step' + step).classList.remove('hidden');

        document.querySelectorAll('#stepper [data-step]').forEach(el => {
            const label = el.querySelector('.step-label');
            const title = el.querySelector('.step-title');
            if (parseInt(el.getAttribute('data-step')) === step) {
                label.classList.remove('text-gray-400'); label.classList.add('text-[#7A3E00]');
                title.classList.remove('text-gray-400'); title.classList.add('text-[#7A3E00]');
            } else {
                label.classList.add('text-gray-400'); label.classList.remove('text-[#7A3E00]');
                title.classList.add('text-gray-400'); title.classList.remove('text-[#7A3E00]');
            }
        });

        history.replaceState(null, null, '#step' + step);
    }

    window.addEventListener('DOMContentLoaded', () => {
        const hash = window.location.hash;
        if (hash.startsWith('#step')) {
            const stepNum = parseInt(hash.replace('#step', ''));
            if (stepNum >= 1 && stepNum <= 3) goToStep(stepNum);
        }
    });

    function confirmBooking() {
    window.location.href = "appointment_upcoming?success=1";
}
     
</script>

<?php include("layouts/footer.php"); ?>
