<?php
 $currentPage = basename($_SERVER['PHP_SELF']);
?>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">


<style>
      
        .sidebar-dropdown-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .sidebar-dropdown-menu.open {
            max-height: 200px;
        }
        .rotate-icon {
            transition: transform 0.3s ease;
        }
        .rotate-icon.open {
            transform: rotate(180deg);
        }

        /* ID maker logo */

    .id-maker-animated {
        display: flex;
        gap: 6px;
        font-size: 1.5rem;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        }

        .word {
        opacity: 0;
        transform: translateY(10px);
        animation: riseIn 0.5s forwards;
        }

        .word.id {
        animation-delay: 0.2s;
        color: #2563eb; 
        }

        .word.maker {
        animation-delay: 0.6s;
        color:#2563eb; 
        }

        @keyframes riseIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .sidebar-dropdown-menu {
    transition: all 0.3s ease;
}


</style>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <aside id="sidebar" class="fixed h-full bg-white shadow-md z-30 transition-all duration-300 w-64">
            <div class="flex flex-col h-full">
             <div class="p-6 border-b border-gray-100 flex items-center">
                <img src="assets/img/log.png" alt="Logo" style="width: 50px; margin-right: 10px;">
                <div class="id-maker-animated">
                    <span class="word id">ID</span>
                    <span class="word maker">Maker</span>
                </div>
            </div>
                <nav class="flex-1 py-4 overflow-y-auto custom-scrollbar">
                    <ul class="space-y-1 px-3">
                        <li>
                           <a href="dashboard.php"
                             class="sidebar-link flex items-center px-4 py-3 rounded-md 
                                    <?= $currentPage == 'dashboard.php' ? 'text-primary font-bold bg-gray-100' : 'text-gray-700' ?>">
                                <div class="w-6 h-6 flex items-center justify-center mr-3">
                                    <i class="ri-dashboard-line"></i>
                                </div>
                                <span>Dashboard</span>
                             </a>
                        </li>
                        <li>
                        <div class="sidebar-dropdown">
                            <button class="sidebar-link flex items-center px-4 py-3 rounded-md w-full justify-between text-gray-700 hover:bg-gray-50">
                                <div class="flex items-center">
                                    <div class="w-6 h-6 flex items-center justify-center mr-3">
                                        <i class="ri-group-line"></i>
                                    </div>
                                    <span>Students</span>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <i class="ri-arrow-down-s-line rotate-icon"></i>
                                </div>
                            </button>
                            <ul class="sidebar-dropdown-menu ml-9 space-y-1 mt-1">
                                <li>
                                    <a href="students.php" class="flex items-center px-4 py-2 text-sm rounded-md text-gray-600 hover:bg-gray-100">
                                       <i class="ri-user-3-line mr-2 text-lg text-blue-500 "></i>   
                                          Student List
                                    </a>
                                </li>
                                <li>
                                    <a href="generateid.php" class="flex items-center px-4 py-2 text-sm rounded-md text-gray-600 hover:bg-gray-100">
                                     <i class="ri-id-card-line mr-2 text-lg text-green-500"></i>   
                                    Generate ID
                                    </a>
                                </li>
                            </ul>
                        </div>

                        </li>
                        <li>
                            <div class="sidebar-dropdown">
                            <button class="sidebar-link flex items-center px-4 py-3 rounded-md w-full justify-between text-gray-700 hover:bg-gray-50">
                                <div class="flex items-center">
                                    <div class="w-6 h-6 flex items-center justify-center mr-3">
                                        <i class="ri-team-line"></i>
                                    </div>
                                    <span>Employees</span>
                                </div>
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <i class="ri-arrow-down-s-line rotate-icon"></i>
                                </div>
                            </button>
                            <ul class="sidebar-dropdown-menu ml-9 space-y-1 mt-1">
                                <li>
                                    <a href="employees.php" class="flex items-center px-4 py-2 text-sm rounded-md text-gray-600 hover:bg-gray-100">
                                     <i class="ri-team-line mr-2 text-lg text-purple-500"></i>   
                                    Employee List
                                    </a>
                                </li>
                                <li>
                                    <a href="employeegenerateid.php" class="flex items-center px-4 py-2 text-sm rounded-md text-gray-600 hover:bg-gray-100">
                                     <i class="ri-id-card-line mr-2 text-lg text-teal-500"></i>  
                                    Generate ID
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </li>
                        <li>
                            <a href="#" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-md">
                                <div class="w-6 h-6 flex items-center justify-center mr-3">
                                    <i class="ri-user-line"></i>
                                </div>
                                <span>Users</span>
                            </a>
                        </li>
                     
                        <li>
                            <a href="#" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-md">
                                <div class="w-6 h-6 flex items-center justify-center mr-3">
                                    <i class="ri-settings-line"></i>
                                </div>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>              
            </div>
        </aside>

          <script id="sidebar-dropdown-script">
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButtons = document.querySelectorAll('.sidebar-dropdown button');
            
            dropdownButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dropdownMenu = this.nextElementSibling;
                    const icon = this.querySelector('.rotate-icon');
                    
                    dropdownMenu.classList.toggle('open');
                    icon.classList.toggle('open');
                });
            });
        });
    </script>
