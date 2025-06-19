<?php  require_once ('admin-partials/header.php') ?>
<?php  require_once ('admin-partials/sidebar.php') ?>
<?php require_once ('admin-partials/js.php') ?>

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
            <!-- Main Content -->
     
 <div class="id-wrapper">
    <!-- FRONT SIDE -->

<div class="id front">
  <div class="front-bg"></div>
  <div class="id-left">
    <img src="assets/photos/mlg.png" class="logo" alt="Logo">
    <div class="school-info">
      <span class="school-name">MLG COLLEGE<br>OF LEARNING, INC</span>
      <span class="school-address">Brgy. Atabay, Hilongos, Leyte</span>
    </div>
    <img src="assets/photos/qr.png" class="qr" alt="QR Code">
    <img src="assets/photos/signature.png" class="signature" alt="Signature">
  </div>
  <img src="assets/photos/sampleid.jpg" class="student-img" alt="Student Photo">
  <div class="bottom-content">
    <div class="name-block">
      <div class="name">KISTADIO<br><span>JHON BRIX P.</span></div>
      <div class="info-row">
        <div class="info-row-child">
          <span class="label">Date of Birth:</span>
          <span class="value">09/04/2000</span>
        </div>
        <div class="info-row-child">
          <br><span class="address">Brgy. Atabay, Hilongos</span>
        </div>
        
      </div>
    </div>
    <div class="id-row">
      <span class="student-id">21-003149</span>
      <span class="course">BSED-SS</span>
    </div>
    <div class="footer">
      <span>https://mlgcl.edu.ph</span>
      <span>mlg@mlgcl.edu.ph</span>
    </div>
  </div>
</div>

<!-- BACK SIDE -->
    <div class="id back">
        <div class="id-card-back back-top">
            <div class="left-content">
                <div class="left-bar year-strip">
                    <table>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="year-cell"><div class="rotated-text">2024-2025</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="year-cell"><div class="rotated-text">2023-2024</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"><div class="rotated-text">SCHOOL YEAR</div></td>
                        <td class="year-cell"><div class="rotated-text">2022-2023</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="year-cell"><div class="rotated-text">2021-2022</div></td>
                        <td class="empty-cell"></td>
                        <td class="empty-cell"></td>
                        </tr>
                        <tr>
                        <td class="word-school-year"></td>
                        <td class="semester-cell"><div class="rotated-text">Semester</div></td>
                        <td class="first-cell"><div class="rotated-text">First</div></td>
                        <td class="second-cell"><div class="rotated-text">Second</div></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="content right-content">
                <div class="top-text">
                    This is to certify that the person<br>
                    whose picture and signature appear<br>
                    herein is a bonafide student of<br>
                    <b>MLC College of Learning, Inc.</b>
                </div>

                <div class="back-signature">
                    <img src="assets/photos/signature.png" alt="Signature" style="height:24px; margin-bottom:2px;">
                    <div class="signature-name">MARY LILIBETH OUYAN, DEV. ED. D.</div>
                    <div>School Director</div>
                </div>

                <div class="reminders">
                    <b>IMPORTANT REMINDERS</b><br>
                    Always wear this ID while inside<br>
                    the school campus.<br>
                    <b>Do not forget your<br>
                    STUDENT ID NUMBER.</b>
                </div>

                <div class="contact">
                    If lost and found, please surrender<br>
                    this ID to the<br>
                    <b>STUDENT AFFAIRS OFFICE</b>,<br>
                    MLC College of Learning, Inc.,<br>
                    Brgy. Atabay, Hilongos, Leyte
                </div>

                <div class="contact">
                    In case of emergency,<br>
                    please contact
                    <div class="contact-name">EFREN IBAÑEZ</div>
                    <div class="contact-number">0935-121-9395</div>
                </div>

                <div class="qr-box">
                    PLEASE SCAN THE QR<br>
                    CODE AT THE FRONT<br>
                    FOR MORE VALIDATION &<br>
                    CONTACT INFORMATION.
                </div>
            </div>
        </div>
        <div class="facebook-footer back-bottom">
            https://www.facebook.com/mlgcl/
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
