<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>

<style>
.input {
  line-height: 28px;
  border: 2px solid transparent;
  border-bottom-color: #777;
  padding: .2rem 0;
  outline: none;
  background-color: transparent;
  color: #0d0c22;
  transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
  width: 250px; 
}

.input:focus,
.input:hover {
  outline: none;
  padding: .2rem 1rem;
  border-radius: 1rem;
  border-color: #7a9cc6;
}

.input::placeholder {
  color: #777;
}

.input:focus::placeholder {
  opacity: 0;
  transition: opacity .3s;
}
main{
     
}

</style>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
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
                        <a href="#" class="text-gray-500 hover:text-primary">Generate ID</a>
                        <div class="w-4 h-4 flex items-center justify-center text-gray-400 mx-1">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <span class="text-gray-700">Page</span>
                    </div>
                </div>
            </header>
            <div class="p-4 relative mt-1 flex justify-end">
                <div class="mb-4">
                    <label for="student_id" class="block text-sm font-medium text-gray-700 mb-1">
                    Enter Student ID:
                    </label>
                    <input
                    type="text"
                    id="student_id"
                    placeholder="e.g. 24-003738"
                    class="input"
                    required
                    >
                    <ul
                    id="student_dropdown"
                    class="absolute z-10 mt-0 bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden"
                    style="width: 250px;"
                    ></ul>
                    <p id="student_name" class="mt-1 text-sm text-green-600"></p>
                </div>
           </div>

    <div class="flex justify-center py-5 px-2">
        <div id="id_template" class="hidden w-full max-w-xl bg-white border rounded-xl shadow-md p-5">
            <h2 id="template_name" class="text-base font-semibold text-gray-800 mb-4 text-center">Name</h2>
            <div class="flex items-start gap-6">
            <div class="flex flex-col items-center">
                <p class="text-sm text-gray-700"><span class="font-medium"></span> <span id="template_id"></span></p>
                <img id="qr_image" src="" alt="QR Code" class="w-24 h-24 rounded border shadow-sm mb-2" />
        </div>
        <div class="flex-1 space-y-1 text-gray-700 text-sm">
            <p><span class="font-medium"></span> <span id="template_course"></span></p>
            <p><span class="font-medium"></span> <span id="template_year"></span></p>
            <p><span class="font-medium"></span> <span id="template_address"></span></p>
            <p><span class="font-medium"></span> <span id="template_birthdate"></span></p>
            <p><span class="font-medium"></span> <span id="template_contact"></span></p>
        </div>
        </div>
        <div class="mt-5">
            <button id="save_button"
                class="w-full px-6 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-700 transition duration-200">
                Edit
             </button>
        </div>
       </div>
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


let studentData = [];

document.addEventListener("DOMContentLoaded", function () {
    fetch("https://api-portal.mlgcl.edu.ph/api/external/student-list", {
        method: "GET",
        headers: {
            "x-api-key": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3BvcnRhbC5tbGdjbC5lZHUucGgiLCJhdWQiOiJodHRwOi8vaWRtYWtlci50ZXN0IiwiaWF0IjoxNzMzMjMxMTU5LCJuYmYiOm51bGx9.T-m6B0towMc0NerWVHHk7zgueno-Cb-N5YHZ3sT2-dY",
            "Origin": "http://idmaker.test",
            "Content-Type": "application/json"
        }
    })
    .then(response => response.json())
    .then(data => {
        studentData = Array.isArray(data) ? data : data.data || [];
    })
    .catch(error => console.error("Fetch error:", error));
});

const input = document.getElementById("student_id");
const dropdown = document.getElementById("student_dropdown");
const nameDisplay = document.getElementById("student_name");

input.addEventListener("input", function () {
    const value = input.value.trim().toLowerCase();
    dropdown.innerHTML = "";
    dropdown.classList.add("hidden");
    nameDisplay.textContent = "";

    if (value.length < 2) return;

    const matches = [];

    studentData.forEach(student => {
        student.student_identification_number?.forEach(idObj => {
            if (idObj.student_id.toLowerCase().includes(value)) {
                matches.push({
                    student_id: idObj.student_id,
                    displayName: `${student.first_name} ${student.middle_name} ${student.last_name}`
                });
            }
        });
    });

    if (matches.length > 0) {
        matches.slice(0, 10).forEach(match => {
            const li = document.createElement("li");
            li.textContent = match.displayName;
            li.className = "px-4 py-2 hover:bg-blue-100 cursor-pointer text-sm";
      
            li.addEventListener("click", () => {
                input.value = match.student_id;
        
                dropdown.innerHTML = "";
                dropdown.classList.add("hidden");

                const selectedStudent = studentData.find(s =>
                    s.student_identification_number?.some(idObj => idObj.student_id === match.student_id)
                );

                if (selectedStudent) {
                    document.getElementById("id_template").classList.remove("hidden");

                    const fullName = `${selectedStudent.first_name} ${selectedStudent.middle_name} ${selectedStudent.last_name}`;
                    document.getElementById("template_name").textContent = fullName;
                    document.getElementById("template_id").textContent = `ID: ${match.student_id}`;
                    document.getElementById("template_course").textContent = `Course: ${selectedStudent.course?.description || "N/A"}`;
                    document.getElementById("qr_image").src = selectedStudent.qr_code || "";
                    document.getElementById("template_address").textContent = `Address: ${selectedStudent.full_address || "—"}`;
                    document.getElementById("template_birthdate").textContent = `Birthdate: ${selectedStudent.birthdate || "—"}`;
                    document.getElementById("template_contact").textContent = `Contact #: ${selectedStudent.contact_number || "—"}`;
                }
            });

            dropdown.appendChild(li);
        });
        dropdown.classList.remove("hidden");
    }
});

document.addEventListener("click", function (e) {
    if (!input.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.add("hidden");
    }
});

//// Save button functionality

document.getElementById("save_button").addEventListener("click", async () => {
    const studentIdText = document.getElementById("template_id").textContent;
    const studentId = studentIdText.replace("ID: ", "").trim();

    const selectedStudent = studentData.find(s =>
        s.student_identification_number?.some(idObj => idObj.student_id === studentId)
    );

    if (!selectedStudent) {
        return; // No redirect, no alert
    }

    const payload = {
        first_name: selectedStudent.first_name,
        last_name: selectedStudent.last_name,
        middle_name: selectedStudent.middle_name,
        address: selectedStudent.full_address || "—",
        course: selectedStudent.course?.description || "N/A",
        student_id: studentId,
        contact: selectedStudent.contact_number || "—",
        emergency_contact: {
            name: "N/A",
            number: "N/A"
        },
        birth_date: selectedStudent.birthdate || "2000-01-01",
        signature: null,
        image: null,
        qr_code: selectedStudent.qr_code || ""
    };

    try {
        const response = await fetch("http://127.0.0.1:8000/api/store", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            },
            body: JSON.stringify(payload)
        });

        if (response.ok || response.status === 409) {
            // success or already exists — either way, redirect
            window.location.href = `editgenerateid.php?student_id=${studentId}`;
        } else {
            console.error("Save failed:", await response.json());
        }

    } catch (error) {
        console.error("Server error:", error);
    }
});
</script>





