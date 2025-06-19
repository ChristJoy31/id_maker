    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                       
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-gray-700">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-notification-3-line"></i>
                            </div>           
                        </button>
                        <div class="h-6 border-r border-gray-200"></div>
                   <div class="relative flex items-center space-x-2" id="user-dropdown-wrapper">
                  <span class="text-sm font-medium" id="fullName">Loading...</span>
                    <button id="user-dropdown-btn"
                        class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center focus:outline-none transition duration-200 hover:bg-gray-300">
                        <i class="ri-user-line text-gray-500 text-lg transition duration-200 group-hover:text-gray-700"></i>
                    </button>
                    <div id="user-dropdown-menu"
                        class="absolute right-0 mt-12 w-40 bg-white rounded-md shadow-lg border border-gray-200 hidden z-10 overflow-hidden transition-all duration-300 ease-in-out">
                       <a href="#"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition duration-200">
                            <i class="ri-user-line mr-2 text-base"></i>
                            Profile
                        </a>
                       <a href="#"
                        id="logout-btn"
                        class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition duration-200">
                            <i class="ri-logout-box-r-line mr-2 text-base"></i>
                            Logout
                        </a>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const dropdownBtn = document.getElementById("user-dropdown-btn");
        const dropdownMenu = document.getElementById("user-dropdown-menu");

        dropdownBtn.addEventListener("click", function (e) {
            e.stopPropagation(); // prevent click from bubbling
            dropdownMenu.classList.toggle("hidden");
        });

        // Close dropdown if clicked outside
        document.addEventListener("click", function (e) {
            const dropdownWrapper = document.getElementById("user-dropdown-wrapper");
            if (!dropdownWrapper.contains(e.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    });



      document.addEventListener("DOMContentLoaded", function () {
        const logoutBtn = document.getElementById("logout-btn");

        logoutBtn.addEventListener("click", function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Logout?',
                text: "Are you sure you want to logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Yes, logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    const token = localStorage.getItem("auth_token");
                    if (!token) {
                        Swal.fire('Error', 'No token found', 'error');
                        return;
                    }

                    fetch("http://idmakerbackend.test/api/logout", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Authorization": "Bearer " + token
                        }
                    })
                    .then(response => {
                        if (!response.ok) throw new Error("Logout failed");
                        return response.json();
                    })
                    .then(data => {
                        Swal.fire({
                            title: 'Logged out!',
                            text: data.message,
                            icon: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            localStorage.removeItem("auth_token");
                            window.location.href = "index.php"; // redirect to login
                        });
                    })
                    .catch(error => {
                        console.error("Logout failed:", error);
                        Swal.fire('Logout Failed', 'Something went wrong.', 'error');
                    });
                }
            });
        });
    });


        document.addEventListener("DOMContentLoaded", () => {
        const token = localStorage.getItem("auth_token");

        if (!token) return;

        fetch("http://idmakerbackend.test/api/profile", {
            method: "GET",
            headers: {
            "Authorization": `Bearer ${token}`,
            "Accept": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            const nameElement = document.getElementById("fullName");
            if (nameElement && data.full_name) {
            nameElement.textContent = data.full_name;
            }
        })
        .catch(error => {
            console.error("Error fetching profile:", error);
        });
        });

    </script>