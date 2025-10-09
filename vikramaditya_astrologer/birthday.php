<?php
include("layouts/header.php");
?>

    <div class="shadow rounded-lg p-4 mb-6 border border-[#E67300]">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-[#A05000]">Birthday Reminder</h2>
        </div>
        <div class="grid grid-cols-4 gap-8">
            <div class="col-span-3 bg-white/80 backdrop-blur-md shadow-2xl rounded-2xl p-6 border border-orange-200">
                <div id="calendar" class="rounded-xl overflow-hidden"></div>
            </div>
            <div class="col-span-1 bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-orange-200">
                <h2 class="text-xl font-bold text-amber-700">Birthdays</h2>
                <div class="space-y-6 max-h-[600px] overflow-y-auto pr-2">
                    <div>
                        <p class="font-semibold text-amber-600">02 Sept, 2025</p>
                        <ul class="ml-4 mt-1 space-y-1 text-gray-700">
                            <li>Ravi Sharma</li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-semibold text-amber-600">03 Sept, 2025</p>
                        <ul class="ml-4 mt-1 space-y-1 text-gray-700">
                            <li>Priya Patel</li>
                            <li>Sunil Mehra</li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-semibold text-amber-600">05 Sept, 2025</p>
                        <ul class="ml-4 mt-1 space-y-1 text-gray-700">
                            <li>Kavita Joshi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="birthdayList">
        <h2 class="text-xl font-semibold text-[#7A3E00] mt-4 mb-4">Birthdays on Selected Date</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-[#FFF9F0] border border-[#FFD699] rounded-lg shadow p-4 hover:shadow-md transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-[#FFEBD6] flex items-center justify-center text-xl text-[#7A3E00] font-bold">R</div>
                    <div class="ml-4">
                        <h2 class="font-semibold text-[#7A3E00]">Rajesh Kumar</h2>
                        <p class="text-sm text-[#5C3B00]">+91 9876543210</p>
                        <p class="text-sm text-[#5C3B00]">Birthday: 6th August</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="flex-1 px-3 py-1 bg-blue-500 text-white rounded">Call</button>
                    <button class="flex-1 px-3 py-1 bg-green-500 text-white rounded">WhatsApp</button>
                    <button class="flex-1 px-3 py-1 bg-yellow-500 text-white rounded">Send Wishes</button>
                </div>
            </div>
            <div class="bg-[#FFF9F0] border border-[#FFD699] rounded-lg shadow p-4 hover:shadow-md transition">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-[#FFEBD6] flex items-center justify-center text-xl text-[#7A3E00] font-bold">P</div>
                    <div class="ml-4">
                        <h2 class="font-semibold text-[#7A3E00]">Priya Desai</h2>
                        <p class="text-sm text-[#5C3B00]">+91 9123456780</p>
                        <p class="text-sm text-[#5C3B00]">Birthday: 7th August</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="flex-1 px-3 py-1 bg-blue-500 text-white rounded">Call</button>
                    <button class="flex-1 px-3 py-1 bg-green-500 text-white rounded">WhatsApp</button>
                    <button class="flex-1 px-3 py-1 bg-yellow-500 text-white rounded">Send Wishes</button>
                </div>
            </div>
        </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 'auto',
        fixedWeekCount: false,
        showNonCurrentDates: false,
        expandRows: true,          

        dateClick: function(info) {
            const clickedDate = info.dateStr;
            const events = calendar.getEvents();
            const eventsOnDate = events.filter(event => event.startStr === clickedDate);

            if (eventsOnDate.length > 0) {
                let message = `Birthday Reminder ${clickedDate}:\n\n`;
                eventsOnDate.forEach(e => {
                    message += `- ${e.title}\n`;
                });
                alert(message); 
            } else {
                alert(`No Birthday on ${clickedDate}`);
            }
        },

        dayCellDidMount: function(info) {
            
            info.el.style.backgroundColor = '#FFF9F0';
            info.el.style.border = '2px solid #FFAA80';
            info.el.style.transition = 'background-color 0.3s ease';

            if (info.date.toDateString() === new Date().toDateString()) {
                info.el.style.background = '#f5ad41ff';
                info.el.style.border = '2px solid #FFAA80';
                info.el.style.borderRadius = '6px';
            }

            info.el.addEventListener('mouseenter', function() {
                if (info.date.toDateString() !== new Date().toDateString()) {
                    info.el.style.backgroundColor = '#b99066ff';
                    info.el.style.borderRadius = '6px';
                }
            });
            info.el.addEventListener('mouseleave', function() {
                if (info.date.toDateString() !== new Date().toDateString()) {
                    info.el.style.backgroundColor = '#FFF9F0';
                }
            });
        },

        events: [
            {
                title: 'Rajesh',
                start: '2025-08-05',
                color: '#0d9b20ff'
            },
            {
                title: 'Aniket',
                start: '2025-08-06',
                color: '#0f79faff'
            },
            {
                title: 'Priya',
                start: '2025-08-07',
                color: '#d8ad02ff'
            },
            {
                title: 'Ankit',
                start: '2025-08-08',
                color: '#d30404ff'
            }
        ]
    });

    calendar.render();
});
</script>
<?php include('layouts/footer.php'); ?>


