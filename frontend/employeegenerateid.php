<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>
<style>
    /* From Uiverse.io by AbanoubMagdy1 */
.wave-group {
  position: relative;
  width: 100%;
  max-width: 250px;
}

.wave-group .input {
  font-size: 16px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 100%;
  border: none;
  border-bottom: 1px solid #515151;
  background: transparent;
}

.wave-group .input:focus {
  outline: none;
}

.wave-group .label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  display: flex;
}

.wave-group .label-char {
  transition: 0.2s ease all;
  transition-delay: calc(var(--index) * .05s);
}

.wave-group .input:focus ~ .label .label-char,
.wave-group .input:valid ~ .label .label-char {
  transform: translateY(-20px);
  font-size: 14px;
  color: #5264AE;
}

.wave-group .bar {
  position: relative;
  display: block;
  width: 100%;
}

.wave-group .bar:before,
.wave-group .bar:after {
  content: '';
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #5264AE;
  transition: 0.2s ease all;
}

.wave-group .bar:before {
  left: 50%;
}

.wave-group .bar:after {
  right: 50%;
}

.wave-group .input:focus ~ .bar:before,
.wave-group .input:focus ~ .bar:after {
  width: 50%;
}


.wave-group {
  position: relative;
  width: 100%;
  max-width: 250px;
}

.wave-group .input {
  font-size: 16px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 100%;
  border: none;
  border-bottom: 1px solid #515151;
  background: transparent;
}

.wave-group .input:focus {
  outline: none;
}

.wave-group .label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  display: flex;
}

.wave-group .label-char {
  transition: 0.2s ease all;
  transition-delay: calc(var(--index) * .05s);
}

.wave-group .input:focus ~ .label .label-char,
.wave-group .input:valid ~ .label .label-char {
  transform: translateY(-20px);
  font-size: 14px;
  color: #5264AE;
}

.wave-group .bar {
  position: relative;
  display: block;
  width: 100%;
}

.wave-group .bar:before,
.wave-group .bar:after {
  content: '';
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #5264AE;
  transition: 0.2s ease all;
}

.wave-group .bar:before {
  left: 50%;
}

.wave-group .bar:after {
  right: 50%;
}

.wave-group .input:focus ~ .bar:before,
.wave-group .input:focus ~ .bar:after {
  width: 50%;
}


</style>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Notyf CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css" />
<!-- Notyf JS -->
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
          <div class="p-3 relative mt-1">
                <div class="mb-4">
                   <label for="employee_name" class="block text-sm font-medium text-gray-700 mb-1">Enter Employee Name:</label>
                    <input type="text" id="employee_name" placeholder="e.g. Juan Dela Cruz"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300">
                    <ul id="employee_dropdown" class="absolute z-10 mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-auto hidden"></ul>
                    <p id="employee_name" class="mt-1 text-sm text-green-600"></p>
                </div>
            </div>

        <div class="flex justify-center py-4 px-2">
    <div id="id_template" class="hidden w-full max-w-xl bg-white border rounded-xl shadow-md p-6">
        <!-- Name + QR side by side -->
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-4">
            <!-- QR Code -->
            <div class="flex-shrink-0">
                <img id="qr_image" src="" alt="QR Code" class="w-28 h-28 rounded border shadow-sm" />
            </div>

            <!-- Info -->
            <div class="text-gray-700 text-sm space-y-1">
                <h4 id="template_name" class="text-base font-semibold text-gray-800">Employee Name</h4>
                <p><span id="template_address"></span></p>
                <p><span id="template_birthdate"></span></p>
                <p><span id="template_contact"></span></p>
            </div>
        </div>

        <!-- Inputs -->
        <div class="mt-3 grid grid-cols-1 md:grid-cols-2 gap-3 text-left">
           <div class="wave-group mt-4">
                <input required type="text" id="employee_id" name="employee_id" class="input" />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">E</span>
                    <span class="label-char" style="--index: 1">m</span>
                    <span class="label-char" style="--index: 2">p</span>
                    <span class="label-char" style="--index: 3">l</span>
                    <span class="label-char" style="--index: 4">o</span>
                    <span class="label-char" style="--index: 5">y</span>
                    <span class="label-char" style="--index: 6">e</span>
                    <span class="label-char" style="--index: 7">e</span>
                    <span class="label-char" style="--index: 8"> </span>
                    <span class="label-char" style="--index: 9">I</span>
                    <span class="label-char" style="--index: 10">D</span>
                </label>
                </div>
            <div class="wave-group mt-4">
                <input required list="positionList" id="position" name="position" class="input" placeholder=" " />
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">P</span>
                    <span class="label-char" style="--index: 1">o</span>
                    <span class="label-char" style="--index: 2">s</span>
                    <span class="label-char" style="--index: 3">i</span>
                    <span class="label-char" style="--index: 4">t</span>
                    <span class="label-char" style="--index: 5">i</span>
                    <span class="label-char" style="--index: 6">o</span>
                    <span class="label-char" style="--index: 7">n</span>
                </label>
                <datalist id="positionList">
                    <option value="Officer">
                    <option value="Instructor">
                    <option value="Cashier">
                    <option value="Registrar">
                    <option value="Admin Assistant">
                    <option value="Security">
                    <option value="Maintenance">
                    <option value="Security-Guard">
                </datalist>
                </div>

        </div>

        <!-- Save button -->
        <div class="mt-6 flex justify-center">
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

let employeeData = [];

document.addEventListener("DOMContentLoaded", function () {
    fetch("https://api-portal.mlgcl.edu.ph/api/external/employee-list", {
        method: "GET",
        headers: {
            "x-api-key": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3BvcnRhbC5tbGdjbC5lZHUucGgiLCJhdWQiOiJodHRwOi8vaWRtYWtlci50ZXN0IiwiaWF0IjoxNzMzMjMxMTU5LCJuYmYiOm51bGx9.T-m6B0towMc0NerWVHHk7zgueno-Cb-N5YHZ3sT2-dY",
            "Origin": "http://idmaker.test",
            "Content-Type": "application/json"
        }
    })
    .then(response => response.json())
    .then(data => {
        employeeData = Array.isArray(data) ? data : data.data || [];
    })
    .catch(error => console.error("Fetch error:", error));
});

const input = document.getElementById("employee_name");
const dropdown = document.getElementById("employee_dropdown");

input.addEventListener("input", function () {
    const value = input.value.trim().toLowerCase();
    dropdown.innerHTML = "";
    dropdown.classList.add("hidden");

    if (value.length < 2) return;

    const matches = employeeData.filter(emp => {
        const fullName = `${emp.first_name} ${emp.middle_name || ''} ${emp.last_name}`.toLowerCase();
        return fullName.includes(value);
    });

    if (matches.length > 0) {
        matches.slice(0, 10).forEach(emp => {
            const li = document.createElement("li");
            const fullName = `${emp.first_name} ${emp.middle_name || ''} ${emp.last_name}`;
            li.textContent = fullName;
            li.className = "px-4 py-2 hover:bg-blue-100 cursor-pointer text-sm";

            li.addEventListener("click", () => {
                input.value = fullName;
                dropdown.innerHTML = "";
                dropdown.classList.add("hidden");

                document.getElementById("id_template").classList.remove("hidden");

                document.getElementById("template_name").textContent = fullName;
                document.getElementById("template_address").textContent = `Address: ${emp.full_address || '—'}`;
                document.getElementById("template_birthdate").textContent = `Birthdate: ${emp.birthdate || '—'}`;
                document.getElementById("template_contact").textContent = `Contact #: ${emp.contact_number || '—'}`;
                document.getElementById("qr_image").src = emp.qr_code || '';

                // Store selected for save button
                input.dataset.selectedEmployee = JSON.stringify(emp);
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

const notyf = new Notyf({
  duration: 3000,
  position: { x: 'right', y: 'top' }
});
document.getElementById("save_button").addEventListener("click", async () => {
    const input = document.getElementById("employee_name"); 
    const dataStr = input.dataset.selectedEmployee;
    const employeeIdInput = document.getElementById("employee_id").value.trim();
    const positionInput = document.getElementById("position").value.trim();

   if (!employeeIdInput || !positionInput) {
        notyf.error("Employee ID and Position are required.");
        return;
    }
    if (!dataStr) return;

    const emp = JSON.parse(dataStr);

    const payload = {
            first_name: emp.first_name,
            middle_name: emp.middle_name || '',
            last_name: emp.last_name,
            address: emp.full_address || '—',
            contact: emp.contact_number || '—',
            emergency_contact: {
                name: emp.emergency_contact?.name || '—',
                number: emp.emergency_contact?.number || '—',
            },
            position: positionInput,
            employee_id: employeeIdInput,
            birth_date: emp.birthdate || '2000-01-01',
            signature: null,
            image: null,
            qr: emp.qr_code || ''
            };
    try {
        const response = await fetch("http://127.0.0.1:8000/api/employee-store", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("auth_token")
            },
            body: JSON.stringify(payload)
        });

        const result = await response.json();

        if (response.ok) {
            window.location.href = `employeegenerateedit.php?name=${emp.first_name}`;
        } else {
            console.error("🚨 Save failed:");
            console.error("Status:", response.status);
            console.error("Status Text:", response.statusText);
            console.error("Response:", result);
        }

    } catch (error) {
        console.error("🔥 Fetch crashed (probably no connection to server):");
        console.error(error);
    }
});
</script>








