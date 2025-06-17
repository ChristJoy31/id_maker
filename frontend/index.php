
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config={theme:{extend:{colors:{primary:'#4A90E2',secondary:'#6c757d'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <!-- Notyf CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
        }
        
        .form-input {
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #4A90E2;
        }
        
        .form-input:focus + .floating-label,
        .form-input:not(:placeholder-shown) + .floating-label {
            transform: translateY(-24px) scale(0.85);
            color: #4A90E2;
        }
        
        .floating-label {
            transform-origin: left top;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .toggle-password {
            transition: color 0.3s ease;
        }
        
        .toggle-password:hover {
            color: #4A90E2;
        }
        
        .social-btn {
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
        }
        
        .custom-checkbox {
            position: relative;
            cursor: pointer;
        }
        
        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        
        .checkmark {
            transition: all 0.2s ease;
            border: 2px solid #d1d5db;
        }
        
        .custom-checkbox input:checked ~ .checkmark {
            background-color: #4A90E2;
            border-color: #4A90E2;
        }
        
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        
        .custom-checkbox input:checked ~ .checkmark:after {
            display: block;
        }
        
        .primary-btn {
            background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%);
            transition: all 0.3s ease;
        }
        
        .primary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(74, 144, 226, 0.3);
        }
        
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

         .spinner {
          border: 2px solid transparent;
          border-top: 2px solid white;
          border-radius: 50%;
          width: 20px;
          height: 20px;
          animation: spin 0.6s linear infinite;
          display: inline-block;
          vertical-align: middle;
        }

        @keyframes spin {
          to { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8 transition-all duration-300">
        <div class="text-center mb-8">
            <h1 class="font-['Pacifico'] text-3xl text-primary mb-1">ID Maker</h1>
            <h2 class="text-2xl font-bold text-gray-800 mt-6">Welcome</h2>
            <p class="text-gray-500 mt-2">Please enter your credentials to continue</p>
        </div>
        
        <form id="loginForm" class="space-y-6">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                      <i class="ri-mail-open-line"></i>
                    </div>
                </div>
                <input type="email" id="email" class="form-input w-full pl-10 pr-3 py-3 border-b-2 border-gray-200 focus:outline-none text-gray-700" placeholder=" " autocomplete="off">
                <label for="email" class="floating-label absolute text-gray-500 left-10 top-3">Email Address</label>
            </div>
            
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                        <i class="ri-lock-line text-lg"></i>
                    </div>
                </div>
                <input type="password" id="password" class="form-input w-full pl-10 pr-10 py-3 border-b-2 border-gray-200 focus:outline-none text-gray-700" placeholder=" ">
                <label for="password" class="floating-label absolute text-gray-500 left-10 top-3">Password</label>
                <button type="button" id="togglePassword" class="toggle-password absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-eye-line"></i>
                    </div>
                </button>
            </div>
            
            <div class="flex items-center justify-between">
                <label class="custom-checkbox flex items-center">
                    <input type="checkbox" class="hidden">
                    <span class="checkmark w-4 h-4 rounded inline-block mr-2"></span>
                    <span class="text-sm text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-sm text-primary hover:underline whitespace-nowrap">Forgot Password?</a>
            </div>
            
           <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded" id="loginBtn">
             <span id="loginBtnText">Sign In</span>
           </button>
            <div id="message" class="text-sm text-center"></div>
        </form>
    </div>

    <script>
      document.getElementById("togglePassword").addEventListener("click", function () {
        const password = document.getElementById("password");
        const icon = this.querySelector("i");
        const isPassword = password.type === "password";
        password.type = isPassword ? "text" : "password";
        icon.classList.toggle("ri-eye-line", !isPassword);
        icon.classList.toggle("ri-eye-off-line", isPassword);
      });

       const notyf = new Notyf({
        duration: 3000,
        position: { x: 'right', y: 'top' },
        types: [
          {
            type: 'custom-error',
            background: '#FF3E3E',
            icon: {
              className: 'ri-error-warning-line',
              tagName: 'i',
              color: 'white'
            }
          },
          {
            type: 'success',
            background: '#4BB543',
            icon: false
          }
        ]
      });

      document.getElementById("loginForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const loginBtn = document.getElementById("loginBtn");
        const loginBtnText = document.getElementById("loginBtnText");

        if (!email || !password) {
      if (!email || !password) {
          notyf.open({
            type: 'custom-error',
            message: 'Please enter email and password.'
          });
          return;
        }
        }
        loginBtn.disabled = true;
        loginBtnText.innerHTML = `<span class="spinner"></span>`;

        fetch("http://127.0.0.1:8000/api/login", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
          },
          body: JSON.stringify({ email, password })
        })
          .then(response =>
            response.json().then(data => ({
              ok: response.ok,
              body: data
            }))
          )
          .then(result => {
            if (result.ok) {
              localStorage.setItem("auth_token", result.body.token);
              localStorage.setItem("user_role", result.body.role);
              notyf.success(result.body.message || "Login successful!");

              setTimeout(() => {
                window.location.href = "dashboard.php";
              }, 1000);
            } else {
              notyf.error(result.body.message || "Invalid email or password.");
            }
          })
          .catch(error => {
            console.error("Login Error:", error);
            notyf.error("Something went wrong. Please try again later.");
          })
          .finally(() => {
            loginBtn.disabled = false;
            loginBtnText.innerHTML = "Sign In";
          });
      });
    </script>
</body>
</html>