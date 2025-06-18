<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script> 
<style>
    .input-container {
  position: relative;
  display: flex;
  align-items: center;
}

.input {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  border: none;
  outline: none;
  padding: 18px 16px;
  background-color: transparent;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
}

.input::placeholder {
  color: transparent;
}

.input:focus::placeholder,
.input:not(:placeholder-shown)::placeholder {
  color: rgb(131, 128, 128);
}

.input:focus,
.input:not(:placeholder-shown) {
  background-color: #fff;
  border: black;
  width: 290px;
  padding: 18px 16px 18px 45px;
  cursor: text;
}

.icon {
  position: absolute;
  left: 0;
  height: 45px;
  width: 45px;
  background-color: #fff;
  border-radius: 99px;
  z-index: -1;
  fill: rgb(80, 80, 255);
  border: 1px solid rgb(32, 32, 255);
  pointer-events: none;
}

.input:focus + .icon,
.input:not(:placeholder-shown) + .icon {
  z-index: 0;
  background-color: transparent;
  border: none;
}

</style>
        <main class="flex-1 ml-64">
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
                        <a href="#" class="text-gray-500 hover:text-primary">Student List</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
                </div>
            </header>
            <div class="p-4">
               <div class="flex flex-wrap items-center justify-between mb-2">
                    <div class="text-sm text-gray-500">
                      
                    </div>
               <div class="relative">
                <div class="input-container">
                <input
                    type="text"
                    id="search-student-id"
                    name="search-student-id"
                    class="input"
                    placeholder="Search student ID"
                    autocomplete="off"
                />
                <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" class="icon">
                    <rect fill="white" height="24" width="24"></rect>
                    <path fill="" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
                </div>
                </div>
                </div>

             <!-- Table Display -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-4 text-left">
                               Action                            
                            </th>
                            <th class="py-2 px-4 text-left">Student ID</th>
                            <th class="py-2 px-4 text-left">Full Name</th>
                            <th class="py-2 px-4 text-left">Course</th>
                        </tr>
                    </thead>
                    <tbody id="student-table-body" class="text-gray-600 text-sm font-light">
                        <!-- Dynamic rows will be inserted here -->
                    </tbody>
                </table>
            <div id="pagination-controls" class="flex justify-between items-center mt-2">
             <div></div>
                <div class="flex items-center space-x-2">
                    <button id="prev-page" class="flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded">
                        <i class="ri-arrow-left-s-line text-lg mr-1"></i>
                       
                    </button>
                    <span id="page-info" class="text-sm text-gray-600">Page 1 of 1</span>
                    <button id="next-page" class="flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded">
                      
                        <i class="ri-arrow-right-s-line text-lg ml-1"></i>
                    </button>
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
            e.stopPropagation(); 
            dropdownMenu.classList.toggle("hidden");
        });
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

                    fetch("http://127.0.0.1:8000/api/logout", {
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
                            window.location.href = "index.php"; 
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

        fetch("http://127.0.0.1:8000/api/profile", {
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


const notyf = new Notyf({
  duration: 3000,
  position: { x: 'right', y: 'top' }
});
   

 document.addEventListener("DOMContentLoaded", async () => {
    const tableBody = document.getElementById("student-table-body");
    const searchInput = document.getElementById("search-student-id");

    let allStudents = [];

    try {
        const response = await fetch("http://127.0.0.1:8000/api/complete", {
            method: "GET",
            headers: {
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            }
        });

        if (!response.ok) {
            throw new Error("Failed to fetch data");
        }

        allStudents = await response.json();
        renderTable(allStudents);
    } catch (error) {
        console.error("Error loading student data:", error);
    }
    searchInput.addEventListener("input", () => {
        const keyword = searchInput.value.trim().toLowerCase();
        const filtered = allStudents.filter(student =>
            student.student_id && student.student_id.toLowerCase().includes(keyword)
        );
        renderTable(filtered);
    });
    function renderTable(data) {
        tableBody.innerHTML = "";
        data.forEach(student => {
            const row = document.createElement("tr");
            row.className = "border-b border-gray-200 hover:bg-gray-100";

            row.innerHTML = `
                <td class="py-2 px-4">
                    <i class="ri-eye-line text-blue-500 hover:text-blue-700 cursor-pointer text-lg view-icon"></i>
                </td>
                <td class="py-2 px-4">${student.student_id || ''}</td>
                <td class="py-2 px-4">${student.full_name || ''}</td>
                <td class="py-2 px-4">${student.course || ''}</td>
            `;

            tableBody.appendChild(row);
        });
    }
});
</script>

