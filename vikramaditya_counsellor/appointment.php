<?php include("layouts/header.php") ?>
  
  <style>
    /* Calendar Styling */
    .fc-theme-standard td, 
    .fc-theme-standard th {
      border: none !important;
    }
    .fc-toolbar-title {
      font-size: 1.5rem !important;
      font-weight: 700 !important;
      color: #b45309 !important; 
    }
    .fc-daygrid-day-number {
      font-weight: 500;
      color: #374151; 
    }
    .fc-day-today {
      background: transparent !important;
      position: relative;
    }
    .fc-day-today .fc-daygrid-day-number {
      background: #fcd34d;
      color: #78350f !important;
      border-radius: 50%;
      padding: 4px 8px;
      box-shadow: 0 0 10px rgba(251, 191, 36, 0.6);
    }
    .fc-event {
      border: none !important;
      border-radius: 8px !important;
      padding: 2px 6px !important;
      font-size: 0.8rem !important;
      font-weight: 500 !important;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .fc-event:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
</style>
<div class="main-content p-6">
  <div class="flex items-center justify-between md:flex-row md:items-center md:justify-between mb-6">
      <h1 class="text-2xl md:text-2xl font-bold text-[#7A3E00]">Appointments</h1>
      <div class="flex flex-col sm:flex-row gap-2">
          <a href="appointment_book"><button class="w-full sm:w-auto px-4 py-2 bg-[#FF7F50] text-white rounded hover:bg-[#E67300]">
              + Add Appointment
          </button></a>
          <select class="w-full sm:w-auto border rounded px-3 py-2">
          <option>Today</option>
          <option>Tomorrow</option>
          <option>This Week</option>
          <option>Custom Range</option>
          </select>
      </div>
  </div>

  <div class="grid grid-cols-4 gap-8">

    <div class="col-span-3 bg-white/80 backdrop-blur-md shadow-2xl rounded-2xl p-6 border border-orange-200">
      
      <div id="calendar" class="rounded-xl overflow-hidden"></div>
    </div>
    <div class="col-span-1 bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-6 border border-orange-200">
      <h2 class="text-xl font-bold text-amber-700">Appointments</h2>
      <div class="space-y-6 max-h-[600px] overflow-y-auto pr-2">

        <div>
          <p class="font-semibold text-amber-600">02 Sept, 2025</p>
          <ul class="ml-4 mt-1 space-y-1 text-gray-700">
            <li>Ravi Sharma - Consultation</li>
          </ul>
        </div>

        <div>
          <p class="font-semibold text-amber-600">03 Sept, 2025</p>
          <ul class="ml-4 mt-1 space-y-1 text-gray-700">
            <li>Priya Patel - Follow-up</li>
            <li>Sunil Mehra - New Booking</li>
          </ul>
        </div>

        <div>
          <p class="font-semibold text-amber-600">05 Sept, 2025</p>
          <ul class="ml-4 mt-1 space-y-1 text-gray-700">
            <li>Kavita Joshi - Rescheduled</li>
          </ul>
        </div>

      </div>
    </div>
  </div>

    <div class="bg-gradient-to-r from-[#FFF7E0] via-[#FFE4B5] to-[#FFD580] shadow rounded-lg p-4 border border-[#E67300] mt-4">
        <h2 class="text-lg font-semibold mb-4 text-[#A05000]">Appointments Timeline (Today & Tomorrow)</h2>
        <div class="space-y-4">
            
          <div class="flex items-center justify-between p-3 border border-[#E67300] rounded hover:bg-[#FFE6C0]">
              <div class="flex items-center gap-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                  </svg>

                  <div>
                      <p class="font-medium text-[#A05000]">10:30 AM - Rajesh</p>
                      <p class="text-sm text-[#5C3B00]">Horoscope | Staff: Sushil | Done</p>
                  </div>
              </div>
              <a href="messanger"><button class="text-sm px-3 py-1 bg-[#FF7F50] text-white rounded">Send Reminder</a></button>
          </div>
          
          <div class="flex items-center justify-between p-3 border border-[#E67300] rounded hover:bg-[#FFE6C0]">
              <div class="flex items-center gap-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>

                  <div>
                      <p class="font-medium text-[#A05000]">12:00 PM - Priya</p>
                      <p class="text-sm text-[#5C3B00]">Compatibility | Staff: Rina | Reminder Sent</p>
                  </div>
              </div>
              <a href="messanger"><button class="text-sm px-3 py-1 bg-[#FF7F50] text-white rounded">Send Reminder</a></button>
          </div>
          
          <div class="flex items-center justify-between p-3 border border-[#E67300] rounded hover:bg-[#FFE6C0]">
              <div class="flex items-center gap-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>

                  <div>
                      <p class="font-medium text-[#A05000]">3:00 PM - Ankit</p>
                      <p class="text-sm text-[#5C3B00]">Numerology | Staff: Meera | Missed</p>
                  </div>
              </div>
              <a href="messanger"><button class="text-sm px-3 py-1 bg-[#FF7F50] text-white rounded">Send Reminder</a></button>
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
                let message = `Appointments on ${clickedDate}:\n\n`;
                eventsOnDate.forEach(e => {
                    message += `- ${e.title}\n`;
                });
                alert(message); 
            } else {
                alert(`No appointments on ${clickedDate}`);
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
                title: 'Rajesh - Booked',
                start: '2025-08-05',
                color: '#0d9b20ff'
            },
            {
                title: 'Available Slot',
                start: '2025-08-06',
                color: '#0f79faff'
            },
            {
                title: 'Priya - Rescheduled',
                start: '2025-08-07',
                color: '#d8ad02ff'
            },
            {
                title: 'Ankit - Cancelled',
                start: '2025-08-08',
                color: '#d30404ff'
            }
        ]
    });

    calendar.render();
});
</script>

<?php include("layouts/footer.php"); ?>
