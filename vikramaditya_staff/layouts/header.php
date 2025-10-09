<?php
    $currentPage = basename($_SERVER['PHP_SELF'], ".php");
    $appointmentPages = ['appointment','appointment_upcoming','appointment_book'];
    $clientsPages = ['all_clients','add_clients'];
    $repairPages = ['repair_detail','repair_intake'];
    $complainPages = ['complain','complain_entry'];

    

    $isClientsOpen = in_array($currentPage, ['all_clients', 'add_clients']);
    $isAppointmentOpen = in_array($currentPage, ['appointment','appointment_upcoming','appointment_book']);
    $isRepairOpen = in_array($currentPage, ['repair_detail','repair_intake']);
    $isComplainOpen = in_array($currentPage, ['complain','complain_entry']);
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

    <title>Staff</title>
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
     style="--select-button-svg: url('data:image/svg+xml;...'); font-family: Inter; background: linear-gradient(180deg, #fac36bff, #ffeabcff);">
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
                      <strong>User Role:</strong> Staff<br />
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
                      <a href="appointment" class="block py-1 hover:text-white <?php echo $currentPage == 'appointment' ? 'text-white' : 'hover:text-white' ?>">Appointment</a>
                      <a href="appointment_upcoming" class="block py-1 hover:text-white <?php echo $currentPage == 'appointment_upcoming' ? 'text-white' : 'hover:text-white' ?>">Upcoming Appointment</a>
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
                      <a href="add_clients" class="block py-1 hover:text-white <?php echo $currentPage == 'add_clients' ? 'text-white' : 'hover:text-white' ?>">Add Client</a>
                    </div>
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

                  <div class="flex flex-col" x-data="{ open: <?php echo $isRepairOpen ? 'true' : 'false'; ?> }">
                    <div @click="open = !open" class="flex items-center gap-3 px-4 py-2 cursor-pointer hover:bg-[#3B3023] rounded-full transition-colors duration-200 <?php echo in_array($currentPage, $repairPages) ? 'bg-[#3a3027]' : 'hover:bg-[#3B3023] rounded-full' ?>">
                      <div class="text-white" data-icon="Nut" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                          d="M128,80a48,48,0,1,0,48,48A48.06,48.06,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm95.68-93.85L135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17h0a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,224,40,175.82V80.18L128,32l88,48.17v95.64Z"
                          ></path>
                        </svg>
                      </div>
                      <p class="text-white text-sm font-medium leading-normal">Repair</p>
                      <svg class="ml-auto w-4 h-4 transform transition-transform duration-300"
                        :class="{ 'rotate-180': open }" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                      </svg>
                    </div>
                    <div x-show="open" x-transition class="ml-10 mt-1 space-y-1 text-sm text-[#ffb366]">
                      <a href="repair_detail" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_detail' ? 'text-white' : 'hover:text-white' ?>">Detailed</a>
                      <a href="repair_intake" class="block py-1 hover:text-white <?php echo $currentPage == 'repair_intake' ? 'text-white' : 'hover:text-white' ?>">Repair Intake Form</a>
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
                      <a href="complain" class="block py-1 hover:text-white <?php echo $currentPage == 'complain' ? 'text-white' : 'hover:text-white' ?>">All Complaints</a>
                      <a href="complain_entry" class="block py-1 hover:text-white <?php echo $currentPage == 'complain_entry' ? 'text-white' : 'hover:text-white' ?>">Add Complain</a>
                    </div>    
                  </div>
                </div>
              </div>
              </template>
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
              <h1 class="text-white text-2xl font-bold">Staff</h1>
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
              <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 bg-[#f0f2f4] text-[#111518] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                <div class="text-[#111518]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path>
                  </svg>
                </div>
              </button>
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

