<?php
    $currentPage = basename($_SERVER['PHP_SELF'], ".php");
    $appointmentPages = ['appointment','appointment_upcoming','appointment_book','all_appointments','appointment_today'];
    $clientsPages = ['all_clients','client_active','client_inactive','client_add_promises','client_promises'];
    $teamPages = ['team','view_team','add_team','task'];
    $leadPages = ['all_leads','lost_lead'];
    $repairPages = ['repair_dashboard','repair_detail','repair_intake','repair_module','repair_timeline','repair_setting'];
    $complainPages = ['complain_dashboard','complain','complain_entry','complain_feedback','catagory_wise_analytics','staff_performance','complain_tracker','complain_resolution'];
    $orderPages = ['order_referred','order_cart','order_accepted','order_completed'];
    $pujaPages =  ['puja_all','puja_waiting','puja_booked','puja_completed','puja'];
    $kavachPages =  ['kavach_buy','kavach_submit','kavach_shuddhikaran','kavach_preparation'];
    
    $isClientsOpen = in_array($currentPage, ['all_clients', 'client_active', 'client_inactive','client_add_promises','client_promises']);
    $isAppointmentOpen = in_array($currentPage, ['appointment','appointment_upcoming','appointment_book','all_appointments','appointment_today']);
    $isTeamOpen = in_array($currentPage, ['team','view_team','add_team','task']);
    $isLeadOpen = in_array($currentPage, ['all_leads','lost_leads']);
    $isRepairOpen = in_array($currentPage, ['repair_dashboard','repair_detail','repair_intake','repair_module','repair_timeline','repair_setting']);
    $isComplainOpen = in_array($currentPage, ['complain_dashboard','complain','complain_entry','complain_feedback','catagory_wise_analytics','staff_performance','complain_tracker','complain_resolution']);
    $isOrderOpen = in_array($currentPage, ['order_referred','order_cart','order_accepted','order_completed']);
    $isPujaOpen = in_array($currentPage, ['puja_all','puja_waiting','puja_booked','puja_completed','puja']);
    $isKavachOpen = in_array($currentPage, ['kavach_buy','kavach_submit','kavach_shuddhikaran','kavach_preparation']);
    ?>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Counsellor</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>[x-cloak]{display:none !important}</style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- FullCalendar CSS + JS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
     <style>
    .dragging { opacity: 0.5; }
    .drop-hover { background-color: rgba(0,0,0,0.05); }

    .highlight {
  background-color: #ffd966;
  font-weight: bold;
  color: #111518;
}

  </style>

  <style>
    #sidebar.collapsed { width: 4.5rem !important; } 
    #sidebar.collapsed .text-sm,
    #sidebar.collapsed .text-xs,
    #sidebar.collapsed .min-w-72 { display: none !important; }
    #sidebar.collapsed svg { display: block; margin: 0 auto; }

    main { transition: margin-left .2s ease; }
    
  </style>
  <style>
    @keyframes marquee {
      0% { transform: translateX(100%) }
      100% { transform: translateX(-100%) }
    }
    .animate-marquee {
      animation: marquee 20s linear infinite;
    }
  </style>

  </head>
  <body x-data="{ sidebarOpen: false, sidebarCollapsed: false }">
    <div
     class="min-h-screen flex group/design-root overflow-x-hidden w-full md:w-auto"
     style="--select-button-svg: url('data:image/svg+xml;...'); font-family: Inter; background: linear-gradient(180deg, #ab92f0, #fff9ec);">
      <div class="layout-container flex h-full grow flex-col w-full min-w-0">
        <!-- ↓ reduce mobile padding a bit; desktop stays px-6 -->
        <div class="gap-1 px-4 md:px-6 flex flex-1 justify-center py-5 w-full min-w-0">
          <div class="layout-content-container flex flex-col w-80 fixed top-0 left-0 h-screen">
            <div class="flex h-full min-h-[700px] flex-col justify-between p-4">
              
              <template x-teleport="body">
              <!-- left side menubar start -->
              <div id="sidebar" x-cloak class="fixed inset-y-0 left-0 z-[9999] w-64 h-screen bg-[#181410] text-white transform transition-transform duration-300
                -translate-x-full md:translate-x-0 border-r overflow-y-auto" :class="{ 'translate-x-0': sidebarOpen, 'collapsed': sidebarCollapsed}"
                style="scrollbar-width: none; -ms-overflow-style: none;" @click.stop>

                <!-- Close button for mobile -->
                <button class="md:hidden absolute top-4 right-4 p-2" @click="sidebarOpen = false" aria-label="Close menu">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                  </svg>
                </button>
                <!-- Profile Dropdown Wrapper -->
                <div class="relative" x-data="{ open: false }">
                
                  <!-- Profile Button -->
                  <button @click="open = !open" class="flex items-center space-x-2 hover:bg-[#3B3023] px-3 py-2 rounded-md">
                    <img src="assets/img/VK_logo.png" alt="avatar" class="w-45" />
                    
                    <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="white" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>

                  <!-- Dropdown Menu -->
                  <div x-show="open" @click.outside="open = false"
                    class="absolute right-0 z-20 mt-2 w-64 bg-[#3B3023] hover:bg-[#3B3023] rounded-md shadow-xl border border-gray-200 p-3 space-y-2">
                    <div class="text-sm text-white">
                      <strong>User Role:</strong> Admin<br />
                      <strong>Shift:</strong> 9:00 AM - 6:00 PM<br />
                      <strong>Status:</strong> Present (Biometric)
                    </div>
                    <hr />
                    <a href="/profile" class="block px-3 py-1 rounded-full hover:bg-black text-white text-sm">Profile Info</a>
                    <a href="/support" class="block px-3 py-1 rounded-full hover:bg-black text-white text-sm">Support</a>
                    <a href="/change-password" class="block px-3 py-1 rounded-full hover:bg-black text-white text-sm">Change Password</a>
                    <a href="/logout" class="block px-3 py-1 rounded-full hover:bg-black text-sm text-white">Logout</a>
                  </div>
                </div>

                <!-- Leftside Menu List start -->
                <div class="flex flex-col gap-2" x-data="{ open: false }">
                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'index' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="index"><div class="text-white" data-icon="House" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4.5 10.5V21h15V10.5" />
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="index">Dashboard</a></p>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'add_clients' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="add_clients"><div class="text-white" data-icon="House" data-size="24px" data-weight="fill">
                      <!-- Registration Form Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" 
                          viewBox="0 0 24 24" fill="none" stroke="white" 
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                          class="w-6 h-6 text-[#7A3E00]">
                        <!-- Paper/Form -->
                        <rect x="4" y="3" width="16" height="18" rx="2" ry="2"></rect>
                        <!-- Form lines -->
                        <line x1="8" y1="9" x2="16" y2="9"></line>
                        <line x1="8" y1="13" x2="16" y2="13"></line>
                        <line x1="8" y1="17" x2="12" y2="17"></line>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="add_clients">Registration</a></p>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isAppointmentOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $appointmentPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="CalendarClock" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2">
                          <!-- Calendar body (cut short to leave space for clock) -->
                          <path d="M6 8 h22 a3 3 0 0 1 3 3 v14 v9 a3 3 0 0 1 -3 3 H9 a3 3 0 0 1 -3 -3 V11 a3 3 0 0 1 3 -3 Z" />

                          <!-- Top header line -->
                          <line x1="6" y1="16" x2="28" y2="16" />
                          <line x1="14" y1="4" x2="14" y2="12" />
                          <line x1="22" y1="4" x2="22" y2="12" />

                          <!-- Clock (sitting over bottom-right corner) -->
                          <circle cx="36" cy="36" r="10" fill="#181410" />
                          <circle cx="36" cy="36" r="10" />
                          <line x1="36" y1="32" x2="36" y2="36" />
                          <line x1="36" y1="36" x2="40" y2="38" />
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Appointment</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="appointment_book" class="block py-1 hover:text-white <?php echo $currentPage == 'appointment_book' ? 'text-white' : 'hover:text-white' ?>">Book Appointment</a>
                      <a href="appointment" class="block py-1 hover:text-white <?php echo $currentPage == 'appointment' ? 'text-white' : 'hover:text-white' ?>">View Appointments</a>
                      <a href="appointment_today" class="block py-1 hover:text-white <?php echo $currentPage == 'appointment_today' ? 'text-white' : 'hover:text-white' ?>">Today's Appointments</a>
                      <a href="appointment_upcoming" class="block py-1 hover:text-white <?php echo $currentPage == 'appointment_upcoming' ? 'text-white' : 'hover:text-white' ?>">Upcoming Appointments</a>
                      <a href="all_appointments" class="block py-1 hover:text-white <?php echo $currentPage == 'all_appointments' ? 'text-white' : 'hover:text-white' ?>">All Appointments</a>
                    </div>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isTeamOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $teamPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="Users" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path>
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Team</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                      :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="team" class="block py-1 hover:text-white <?php echo $currentPage == 'team' ? 'text-white' : 'hover:text-white' ?>">Team List</a>
                      <a href="view_team" class="block py-1 hover:text-white <?php echo $currentPage == 'view_team' ? 'text-white' : 'hover:text-white' ?>">Team Performance</a>
                      <a href="add_team" class="block py-1 hover:text-white <?php echo $currentPage == 'add_team' ? 'text-white' : 'hover:text-white' ?>">Add New Team Member</a>
                      <a href="task" class="block py-1 hover:text-white <?php echo $currentPage == 'task' ? 'text-white' : 'hover:text-white' ?>">Task</a>
                    </div>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isClientsOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $clientsPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="UsersThree" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"
                          ></path>
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Clients</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="all_clients" class="block py-1 hover:text-white <?php echo $currentPage == 'all_clients' ? 'text-white' : 'hover:text-white' ?>">All Clients</a>
                      <a href="client_active" class="block py-1 hover:text-white <?php echo $currentPage == 'client_active' ? 'text-white' : 'hover:text-white' ?>">Active Client</a>
                      <a href="client_inactive" class="block py-1 hover:text-white <?php echo $currentPage == 'client_inactive' ? 'text-white' : 'hover:text-white' ?>">Inactive Client</a>
                      <a href="client_add_promises" class="block py-1 hover:text-white <?php echo $currentPage == 'client_add_promises' ? 'text-white' : 'hover:text-white' ?>">Add Promises</a>
                      <a href="client_promises" class="block py-1 hover:text-white <?php echo $currentPage == 'client_promises' ? 'text-white' : 'hover:text-white' ?>">Promises</a>
                    </div>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'add_lead' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="add_lead"><div class="text-white" data-icon="Plus" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="add_lead">Lead Entry</a></p>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isLeadOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $leadPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="UsersThree" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                          d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"
                          ></path>
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Leads</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="all_leads" class="block py-1 hover:text-white <?php echo $currentPage == 'all_leads' ? 'text-white' : 'hover:text-white' ?>">All Leads</a>
                      <a href="lost_leads" class="block py-1 hover:text-white <?php echo $currentPage == 'lost_leads' ? 'text-white' : 'hover:text-white' ?>">Lost Leads</a>
                    </div>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'follow_up' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                    <a href="follow_up"><div class="text-white" data-icon="ListBullets" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-8 h-8 stroke-current" fill="none" stroke="currentColor" stroke-width="2">
                        <defs>
                          <mask id="doc-mask">
                            <rect width="64" height="64" fill="white"/>
                            <!-- Shifted Speech Bubble (right by 4) -->
                            <path d="M16 12a12 12 0 1 1 0 24l-2 4v-4a12 12 0 0 1 2-24z" fill="black"/>
                            <path d="M42 38l10 10-4 4-10-10z" fill="black"/>
                          </mask>
                        </defs>

                        <!-- Document with mask -->
                        <rect x="20" y="16" width="24" height="32" rx="2" ry="2" mask="url(#doc-mask)"/>

                        <!-- Document lines -->
                        <line x1="24" y1="22" x2="40" y2="22"/>
                        <line x1="24" y1="28" x2="40" y2="28"/>
                        <line x1="24" y1="34" x2="38" y2="34"/>
                        <line x1="24" y1="40" x2="36" y2="40"/>

                        <!-- Shifted Speech Bubble -->
                        <path d="M16 12a12 12 0 1 1 0 24l-2 4v-4a12 12 0 0 1 2-24z"/>

                        <!-- Speech Bubble Lines (centered inside shifted bubble) -->
                        <line x1="12" y1="20" x2="28" y2="20"/>
                        <line x1="12" y1="24" x2="28" y2="24"/>
                        <line x1="12" y1="28" x2="28" y2="28"/>

                        <!-- Pencil -->
                        <path d="M42 38l10 10-4 4-10-10z"/>
                        <line x1="44" y1="40" x2="48" y2="44"/>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="follow_up">Follow Up</a></p>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'view_stages' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                    <a href="view_stages"><div class="text-white" data-icon="ListBullets" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M80,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H88A8,8,0,0,1,80,64Zm136,56H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM44,52A12,12,0,1,0,56,64,12,12,0,0,0,44,52Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,116Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,180Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="view_stages">Stages View</a></p>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'POS' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="POS"><div class="text-white" data-icon="Plus" data-size="24px" data-weight="regular">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <path d="M9 6h6M9 10h6M9 14h2"/>
                        <path d="M5 18h14l-2 3-2-3-2 3-2-3-2 3-2-3-2 3z"/>
                      </svg>

                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="POS">POS</a></p>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isOrderOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $orderPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="UsersThree" data-size="24px" data-weight="regular">
                        <!-- Sparkle-like Gem -->
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" 
                                d="M6 3h12l3 6-9 12-9-12 3-6z" />
                        </svg>

                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Orders</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="order_referred" class="block py-1 hover:text-white <?php echo $currentPage == 'order_referred' ? 'text-white' : 'hover:text-white' ?>">Referred</a>
                      <a href="order_cart" class="block py-1 hover:text-white <?php echo $currentPage == 'order_cart' ? 'text-white' : 'hover:text-white' ?>">Cart</a>
                      <a href="order_accepted" class="block py-1 hover:text-white <?php echo $currentPage == 'order_accepted' ? 'text-white' : 'hover:text-white' ?>">Accepted</a>
                      <a href="order_completed" class="block py-1 hover:text-white <?php echo $currentPage == 'order_completed' ? 'text-white' : 'hover:text-white' ?>">Completed</a>
                    </div>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isPujaOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $pujaPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="UsersThree" data-size="24px" data-weight="regular">
                        
                        <svg viewBox="0 0 24 24" class="w-5 h-5 text-white" aria-hidden="true">
                          <path fill="currentColor" d="M5 15h14l-1.2 4.2a2 2 0 0 1-1.92 1.4H8.12a2 2 0 0 1-1.92-1.4L5 15z"/>
                          <rect x="4" y="13" width="16" height="2" rx="0.5" fill="currentColor"/>
                          <path fill="currentColor" d="M12 6c2.7 2.3 3.8 4.6 3.2 6.7-.5 1.8-2 2.9-3.9 2.9s-3.4-1.1-3.9-2.9C6.8 10.6 9.1 8.7 12 6z"/>
                          <path fill="white" fill-opacity=".8" d="M12 9.2c1.3 1.2 1.8 2.3 1.5 3.3-.3 1-1.1 1.6-2.1 1.6s-1.8-.6-2.1-1.6c-.3-1 .2-2.1 1.5-3.3.2-.2.5-.2.7 0z"/>
                        </svg>

                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Puja</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="puja" class="block py-1 hover:text-white <?php echo $currentPage == 'puja' ? 'text-white' : 'hover:text-white' ?>">Puja</a>
                      <a href="puja_all" class="block py-1 hover:text-white <?php echo $currentPage == 'puja_all' ? 'text-white' : 'hover:text-white' ?>">All List</a>
                      <a href="puja_waiting" class="block py-1 hover:text-white <?php echo $currentPage == 'puja_waiting' ? 'text-white' : 'hover:text-white' ?>">Waiting</a>
                      <a href="puja_booked" class="block py-1 hover:text-white <?php echo $currentPage == 'puja_booked' ? 'text-white' : 'hover:text-white' ?>">Booked</a>
                      <a href="puja_completed" class="block py-1 hover:text-white <?php echo $currentPage == 'puja_completed' ? 'text-white' : 'hover:text-white' ?>">Completed</a>
                    </div>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isKavachOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $kavachPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="Nut" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z" />
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Kavach</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="kavach_buy" class="block py-1 hover:text-white <?php echo $currentPage == 'kavach_buy' ? 'text-white' : 'hover:text-white' ?>">Buy Kavach</a>
                      <a href="kavach_submit" class="block py-1 hover:text-white <?php echo $currentPage == 'kavach_submit' ? 'text-white' : 'hover:text-white' ?>">Submit Kavach</a>
                      <a href="kavach_shuddhikaran" class="block py-1 hover:text-white <?php echo $currentPage == 'kavach_shuddhikaran' ? 'text-white' : 'hover:text-white' ?>">kavach Shuddhikaran</a>
                      <a href="kavach_preparation" class="block py-1 hover:text-white <?php echo $currentPage == 'kavach_preparation' ? 'text-white' : 'hover:text-white' ?>">Kavach preparation</a>
                    </div>  
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'birthday' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="birthday"><div class="text-white" data-icon="Calendar" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="birthday">Birthday</a></p>
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isRepairOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $repairPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="Nut" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                          d="M128,80a48,48,0,1,0,48,48A48.06,48.06,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm95.68-93.85L135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17h0a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,224,40,175.82V80.18L128,32l88,48.17v95.64Z"
                          ></path>
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Item Rejuvenation</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="repair_intake" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_intake' ? 'text-white' : 'hover:text-white' ?>">Repair Intake Form</a>
                      <a href="repair_module" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_module' ? 'text-white' : 'hover:text-white' ?>">Check and repair note</a>
                      <a href="repair_detail" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_detail' ? 'text-white' : 'hover:text-white' ?>">Detailed</a>
                      <a href="repair_timeline" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_timeline' ? 'text-white' : 'hover:text-white' ?>">tracking</a>
                      <a href="repair_dashboard" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_dashboard' ? 'text-white' : 'hover:text-white' ?>">Repair Dashboard</a>
                      <a href="repair_setting" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_setting' ? 'text-white' : 'hover:text-white' ?>">setting</a>
                    </div> 
                  </div>

                  <div class="flex flex-col" x-data="{ open: <?php echo $isComplainOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $complainPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="Megaphone" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                          d="M240,120a48.05,48.05,0,0,0-48-48H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48.07,48.07,0,0,0,240,120ZM40,199.93V40h0c42.81,35.91,86.63,45,104,47.24v65.48C126.65,155,82.84,164.07,40,199.93Zm131,8,0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z"
                          ></path>
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Complaints</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="complain_entry" class="block py-1 hover:text-white <?php echo $currentPage == 'complain_entry' ? 'text-white' : 'hover:text-white' ?>">Add Complain</a>
                      <a href="complain" class="block py-1 hover:text-white <?php echo $currentPage == 'complain' ? 'text-white' : 'hover:text-white' ?>">All Complaints</a>
                      <a href="catagory_wise_analytics" class="block py-1 hover:text-white <?php echo $currentPage == 'catagory_wise_analytics' ? 'text-white' : 'hover:text-white' ?>">Catagory Wise</a>
                      <a href="complain_dashboard" class="block py-1 hover:text-white <?php echo $currentPage == 'complain_dashboard' ? 'text-white' : 'hover:text-white' ?>">Complaints Summary</a>
                      <a href="complain_tracker" class="block py-1 hover:text-white <?php echo $currentPage == 'complain_tracker' ? 'text-white' : 'hover:text-white' ?>">Track</a>
                      <a href="staff_performance" class="block py-1 hover:text-white <?php echo $currentPage == 'staff_performance' ? 'text-white' : 'hover:text-white' ?>">Staff Performance</a>
                      <a href="complain_feedback" class="block py-1 hover:text-white <?php echo $currentPage == 'complain_feedback' ? 'text-white' : 'hover:text-white' ?>">Feedback</a>
                      <a href="complain_resolution" class="block py-1 hover:text-white <?php echo $currentPage == 'complain_resolution' ? 'text-white' : 'hover:text-white' ?>">Resolution Effectiveness</a>
                    </div>   
                  </div>
              
                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'payment' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="payment"><div class="text-white" data-icon="Tag" data-size="24px" data-weight="regular">
                      <!-- Payment Status (INR Rupee Icon) -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M184 64a8 8 0 0 1-8 8h-40.78a48 48 0 0 1 3.62 16H176a8 8 0 0 1 0 16h-37.35a48 48 0 0 1-45.7 32H104l68.69 68.69a8 8 0 1 1-11.31 11.31l-80-80A8 8 0 0 1 88 128h4a32 32 0 0 0 31.95-28H88a8 8 0 0 1 0-16h35.95a32 32 0 0 0-5.41-12H88a8 8 0 0 1 0-16h88a8 8 0 0 1 8 8Z"/>
                      </svg>

                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="payment">Payment Status</a></p>
                  </div>
                
                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'tags_leads' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="tags_leads"><div class="text-white" data-icon="Tag" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="tags_leads">Tags &amp; Status</a></p>
                  </div>
                                  
                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'library' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="library"><div class="text-white" data-icon="BookOpen" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,48H160a40,40,0,0,0-32,16A40,40,0,0,0,96,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H96a24,24,0,0,1,24,24,8,8,0,0,0,16,0,24,24,0,0,1,24-24h64a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM96,192H32V64H96a24,24,0,0,1,24,24V200A39.81,39.81,0,0,0,96,192Zm128,0H160a39.81,39.81,0,0,0-24,8V88a24,24,0,0,1,24-24h64Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="library">Library</a></p>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'proposal' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="proposal"><div class="text-white" data-icon="File" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="proposal">Proposals</a></p>
                  </div>

                  <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'report' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="report"><div class="text-white" data-icon="PresentationChart" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176ZM104,120v24a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0Zm32-16v40a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm32-16v56a8,8,0,0,1-16,0V88a8,8,0,0,1,16,0Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="report">Reports</a></p>
                  </div>

                  <!-- <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo $currentPage == 'settings' ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full'; ?>">
                    <a href="settings"><div class="text-white" data-icon="Gear" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"
                        ></path>
                      </svg>
                    </div></a>
                    <p class="text-white text-sm font-medium leading-normal"><a href="settings">Settings</a></p>
                  </div> -->
                </div>
                <!-- Leftside menu list end -->
              </div>
              </template>
               <!-- ✅ Overlay stays outside -->
              <div x-cloak
                x-show="sidebarOpen"
                x-transition.opacity
                @click="sidebarOpen = false"
                class="fixed inset-0 z-[9998] bg-black/40 md:hidden">
              </div>
            </div>            
          </div>
        </div>
          
        <!-- Header -->
        <header 
          class="fixed top-0 z-[100] flex items-center justify-between bg-[#181410] px-6 py-4 border-b border-[#f0f2f4] transition-all duration-300 w-full"
          :class="sidebarCollapsed 
            ? 'lg:left-18 lg:w-[calc(100%-5rem)]' 
            : 'lg:left-64 lg:w-[calc(100%-16rem)]'">

            <!-- Mobile hamburger (visible only on mobile) -->
            <button class="md:hidden p-2 rounded-md text-white" @click="sidebarOpen = true" aria-label="Open menu">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>


            <!-- Desktop collapse button -->
            <div class="hidden md:flex items-center gap-2">
              <button @click="sidebarCollapsed = !sidebarCollapsed" class="p-2 rounded-md text-white" title="Collapse sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M4 6h16M4 12h8M4 18h16" />
                </svg>
              </button>
            </div>

            <div>
              <h1 class="text-white text-2xl font-bold">Counsellor</h1>
            </div>

            <div class="hidden md:block text-white tracking-light text-[32px] font-bold leading-tight min-w-72"></div>

            <div class="flex flex-1 justify-end gap-8">
              <label class="flex flex-col min-w-40 !h-10 max-w-64">
                <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                  <div class="text-[#617789] flex border-none bg-[#f0f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Search"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111518] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-full placeholder:text-[#617789] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
                </div>
              </label>
              <a href="notification" class="text-decoration-none"><button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 bg-[#f0f2f4] text-[#111518] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                <div class="text-[#111518]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path>
                  </svg>
                </div>
              </button></a>
            </div>

          </header>
          <!-- header with search & bell ends -->
            
          <main
            class="flex-1 p-4 md:p-6 transition-all duration-300 ml-0 md:ml-64 md:w-auto w-full"
            :class="{
              'md:ml-64': !sidebarCollapsed && !sidebarOpen,
              'md:ml-20': sidebarCollapsed && !sidebarOpen,
              'ml-0': sidebarOpen
            }"
            style="margin-top: 20px;">

