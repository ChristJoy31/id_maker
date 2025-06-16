    <!-- Main Content -->
        <main class="flex-1 ml-64">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button id="toggle-sidebar" class="mr-4 text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-menu-line"></i>
                            </div>
                        </button>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                                    <i class="ri-search-line"></i>
                                </div>
                            </div>
                            <input type="text" class="bg-gray-50 border-none pl-10 pr-4 py-2 rounded-lg text-sm w-64 focus:outline-none focus:ring-2 focus:ring-primary/20" placeholder="Search...">
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-notification-3-line"></i>
                            </div>
                            <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                        </button>
                        <button class="relative text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span class="absolute top-0 right-0 h-2 w-2 bg-primary rounded-full"></span>
                        </button>
                        <div class="h-6 border-r border-gray-200"></div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                <i class="ri-user-line text-gray-500"></i>
                            </div>
                            <span class="text-sm font-medium">Admin Admin</span>
                            <div class="w-5 h-5 flex items-center justify-center ml-1">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-2 border-t border-gray-100">
                    <div class="flex items-center text-sm">
                        <a href="#" class="text-gray-500 hover:text-primary">Dashboard</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Overview</span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-6">
                <!-- Date and Actions -->
                <div class="flex flex-wrap items-center justify-between mb-6">
                    <div class="text-sm text-gray-500">
                        <div class="flex items-center">
                            <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-2 sm:mt-0">
                        <button class="bg-primary text-white px-4 py-2 rounded-button text-sm font-medium flex items-center whitespace-nowrap">
                            <div class="w-4 h-4 flex items-center justify-center mr-2">
                                <i class="ri-add-line"></i>
                            </div>
                            Student ID
                        </button>
                    </div>
                </div>
                <!--Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow-sm p-6 transition-all hover:shadow-md">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">ID</p>            
                            </div>                        
                        </div>                     
                    </div>


                    <div class="bg-white rounded-lg shadow-sm p-6 transition-all hover:shadow-md">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">ID</p>                            
                            </div>                          
                        </div>                     
                    </div>

                    <!-- New Customers -->
                    <div class="bg-white rounded-lg shadow-sm p-6 transition-all hover:shadow-md">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-gray-500 text-sm">ID</p>
                            </div>                        
                        </div>                  
                    </div>             
                </div>

            

          

            </div>
        </main>
    </div>