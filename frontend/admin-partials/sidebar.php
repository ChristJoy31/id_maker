<?php
 $currentPage = basename($_SERVER['PHP_SELF']);
?>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed h-full bg-white shadow-md z-30 transition-all duration-300 w-64">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="p-6 border-b border-gray-100">
                    <h1 class="text-2xl font-['Pacifico'] text-primary">ID Maker</h1>
                </div>
                
                <!-- Navigation -->
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
                           <a href="students.php"
                             class="sidebar-link flex items-center px-4 py-3 rounded-md
                                    <?= $currentPage == 'students.php' ? 'text-primary font-bold bg-gray-100' : 'text-gray-700' ?>">
                                <div class="w-6 h-6 flex items-center justify-center mr-3">
                                    <i class="ri-group-line"></i>
                                </div>
                                <span>Students</span>
                            </a>
                        </li>
                        <li>
                            <a href="employees.php"
                             class="sidebar-link flex items-center px-4 py-3 rounded-md
                                    <?= $currentPage == 'employees.php' ? 'text-primary font-bold bg-gray-100' : 'text-gray-700' ?>">
                                <div class="w-6 h-6 flex items-center justify-center mr-3">
                                    <i class="ri-team-line"></i>
                                </div>
                                <span>Employees</span>
                            </a>
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
                
                <!-- Bottom section -->
                <div class="p-4 border-t border-gray-100">
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                        <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white mr-3">
                            <i class="ri-user-line"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium">Admin Admin</p>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center ml-auto">
                            <i class="ri-logout-box-line text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </aside>