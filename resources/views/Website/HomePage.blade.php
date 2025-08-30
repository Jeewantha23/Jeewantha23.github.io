<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeewantha Priyasad</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/ProfilePage.jpg') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Use Inter font from Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <!-- Load Tailwind CSS from CDN for styling -->

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a202c;
            /* bg-gray-900 */
        }


        .typing-effect::after {
            content: '|';
            animation: blink 0.7s infinite;
        }


        /* Hide scrollbar for the body */
        body::-webkit-scrollbar {
            display: none;
        }

        body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Custom scrollbar for the main content area */
        .main-content-scroll::-webkit-scrollbar {
            width: 8px;
        }

        .main-content-scroll::-webkit-scrollbar-track {
            background: #1a202c;
        }

        .main-content-scroll::-webkit-scrollbar-thumb {
            background: #4a5568;
            border-radius: 4px;
        }

        .main-content-scroll::-webkit-scrollbar-thumb:hover {
            background: #718096;
        }

        #hero {
            width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            /* middle ekedi gahanawa */
            background-size: cover;
            /* default: full screen for background1 */
            transition: background-image 1s ease-in-out;
        }

        .placeholder-bold::placeholder {
            font-weight: bold;
        }

    </style>
</head>

<body class="text-white">

    <!-- Main container with a flex layout for desktop -->
    <div class="min-h-screen flex flex-col md:flex-row">

        <!-- Sidebar section -->
        <!-- On small screens, it becomes a top bar. On medium and larger screens, it's a fixed sidebar. -->
        <aside class="w-full md:w-80 bg-gray-800 p-8 flex flex-col items-center justify-between shadow-lg
           md:rounded-r-xl rounded-b-xl md:rounded-l-none md:my-4 md:ml-4
           fixed top-0 left-0 z-50
           h-screen overflow-y-auto">
            <!-- Sidebar content wrapper -->
            <div class="flex flex-col items-center text-center w-full">
                <!-- Profile Image -->
                <div class="rounded-full overflow-hidden w-24 h-24 md:w-32 md:h-32 border-4 border-gray-600 mb-4">
                    <img src="{{ asset('images/profilePage.jpg') }}" alt="Profile Picture"
                        class="w-full h-full object-cover">
                </div>
                <!-- Name and Title -->
                <h1 class="text-xl md:text-2xl font-bold mb-1">Jeewantha Priyasad</h1>
                <p class="text-sm md:text-base text-gray-400">Software Developer | Web Developer Intern</p>

                <!-- Social Media Links -->

                <div class="flex space-x-2 mt-4">

                    <a href="https://www.facebook.com/share/1AyiEAuFvj/" target="_blank"
                        class="bg-gray-700 hover:bg-blue-600 text-white p-2 rounded-full inline-block transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M22.675 0h-21.35C.596 0 0 .594 0 1.326v21.348C0 23.406.596 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.464.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.764v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.404 24 24 23.406 24 22.674V1.326C24 .594 23.404 0 22.675 0z">
                            </path>
                        </svg>
                    </a>

                    <a href="https://github.com/Jeewantha23" target="_blank"
                        class="bg-gray-700 hover:bg-black text-white p-2 rounded-full inline-block transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.414 2.864 8.163 6.83 9.497.5.092.682-.217.682-.482 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.465-1.11-1.465-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.942 0-1.09.39-1.984 1.029-2.675-.103-.253-.446-1.268.098-2.648 0 0 .84-.27 2.75 1.022.798-.222 1.636-.333 2.47-.337.834.004 1.672.115 2.47.337 1.91-1.292 2.75-1.022 2.75-1.022.546 1.38.202 2.395.098 2.648.64.691 1.029 1.585 1.029 2.675 0 3.84-2.336 4.686-4.563 4.935.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .266.18.57.687.478C21.139 20.17 24 16.42 24 12.017c0-5.533-4.477-10.017-10-10.017z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/in/jeewantha-priyasad-4590a0264" target="_blank"
                        class="bg-gray-700 hover:bg-blue-500 text-white p-2 rounded-full inline-block transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.49 2.5-1.381 0-2.49-1.119-2.49-2.5s1.109-2.5 2.49-2.5c1.38 0 2.49 1.119 2.49 2.5zM.44 7.63h4.5v14.5h-4.5zM21.2 7.63c-2.45 0-3.53 1.05-4.14 2.15v-1.92h-4.22v14.5h4.5v-7.8c0-1.85 1.05-2.43 2.1-2.43 1.05 0 2.1.58 2.1 2.43v7.8h4.5v-8.4c0-4.52-2.56-6.4-5.34-6.4z">
                            </path>
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/invites/contact/?igsh=7y4sqqh7d104&utm_content=3m0ouxd"
                        target="_blank"
                        class="bg-gray-700 hover:bg-pink-500 text-white  p-2 rounded-full inline-block transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.35 3.608 1.325.975.975 1.263 2.242 1.325 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.35 2.633-1.325 3.608-.975.975-2.242 1.263-3.608 1.325-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.35-3.608-1.325-.975-.975-1.263-2.242-1.325-3.608C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.849c.062-1.366.35-2.633 1.325-3.608.975-.975 2.242-1.263 3.608-1.325C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.775.131 4.602.417 3.635 1.384c-.967.967-1.253 2.14-1.312 3.417C2.013 6.332 2 6.741 2 10s.013 3.668.072 4.948c.059 1.277.345 2.45 1.312 3.417.967.967 2.14 1.253 3.417 1.312C8.332 21.987 8.741 22 12 22s3.668-.013 4.948-.072c1.277-.059 2.45-.345 3.417-1.312.967-.967 1.253-2.14 1.312-3.417.059-1.28.072-1.689.072-4.948s-.013-3.668-.072-4.948c-.059-1.277-.345-2.45-1.312-3.417-.967-.967-2.14-1.253-3.417-1.312C15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z">
                            </path>
                        </svg>
                    </a>



                </div>
                <!-- Navigation Links - visible on all screens, but styled differently -->
                <nav class="w-full mt-8">
                    <ul class="flex flex-col space-y-2">
                        <li>
                            <a href="{{ route('Website.HomePage') }}"
                                class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                                <i class="fa-solid fa-house"></i>
                                <span class="ml-2">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Website.About') }}"
                                class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                                <i class="fa-solid fa-user"></i>
                                <span class="ml-2">About</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Website.Resume') }}"
                                class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                                <i class="fa-solid fa-file"></i>
                                <span class="ml-2">Resume</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Website.Project') }}"
                                class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                                <i class="fa-solid fa-diagram-project"></i>
                                <span class="ml-2">Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Website.Memory') }}"
                                class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                                <i class="fa-solid fa-memory"></i>
                                <span class="ml-2">Memory Collection</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Website.Achievement') }}"
                                class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                                <i class="fa-solid fa-trophy"></i>
                                <span class="ml-2">Achievements</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- Copyright Information - hidden on small screens for better space usage -->
            <footer class="text-xs text-gray-500 mt-8 text-center hidden md:block">
                <h1>Developed by Jeewantha Priyasad</h1>
            </footer>
        </aside>

        <!-- Main content section -->
        <!-- On mobile, add padding to account for the fixed top bar -->
        <div class="min-h-screen flex">
            <!-- Sidebar -->
            <aside class="w-80 bg-gray-800 p-8 flex flex-col items-center justify-between shadow-lg
                  fixed h-screen overflow-y-auto">
                <!-- Sidebar content here -->
            </aside>

            <!-- Main Content -->
            <main class="flex-1 ml-80 p-8 overflow-y-auto h-screen main-content-scroll">
                <div class="max-w-4xl mx-auto">
                    <!-- Hero Section -->
                    <section id="hero" class="relative h-96 md:h-96 rounded-xl overflow-hidden shadow-lg mb-12">

                        <div class="absolute inset-0 bg-black opacity-50 z-10"></div>
                        <div class="relative z-20 flex flex-col items-start justify-end h-full p-4 md:p-8 text-white">
                            <!-- Name and Typing Text -->
                            <h1 class="text-3xl md:text-5xl font-extrabold text-white font-sans">
                                Jeewantha Priyasad
                            </h1>
                            <p class="mt-2 text-xl md:text-2xl font-mono text-white-400 typing-effect">
                                <span id="typing-text"></span>
                            </p>

                            <a href="{{ asset('images/Jeewantha_Priyasad.pdf') }}"
                                class="mt-4 inline-block bg-green-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-green-600 transition-transform duration-300 transform hover:scale-105">
                                Download CV
                            </a>
                        </div>


                    </section>

                    <!-- Who I am Section -->
                    <section class="bg-gray-800 p-8 rounded-xl shadow-lg mb-12 animate-pulse">
                        <h2 class="text-2xl md:text-3xl font-bold mb-6">Who I am?</h2>
                        <h2 class="text-4xl md:text-4xl font-extrabold text-center text-gray-500 mb-6">
                            Software Developer Intern
                        </h2>

                        <div class="flex flex-col md:flex-row items-start gap-6">
                            <!-- Image Left Side -->
                            <div class="flex flex-col items-center">
                                <img src="{{ asset('images/background2.jpg') }}" alt="Profile Image"
                                    class="w-42 h-42 md:w-50 md:h-50 object-cover  shadow-lg">
                                <!-- Caption under image -->
                                <span class="text-gray-400 mt-2 text-sm md:text-base">Jeewantha Priyasad</span>
                            </div>

                            <!-- Text Right Side -->
                            <p class="text-gray-300 text-base md:text-lg leading-relaxed">
                                I am an undergraduate student at the Sri Lanka Institute of Advanced Technological
                                Education
                                (SLIATE), pursuing HNDIT in Software Engineering and Technology. My educational journey
                                began at Berrewaerts College Kandy. Currently, I am seeking an opportunity to apply my
                                skills and gain hands-on experience in a professional industry environment.<br><br>

                                I have a strong passion for Full-Stack Development—from designing clean, modern user
                                interfaces (UI) to
                                developing efficient and scalable backend systems. I enjoy turning ideas into functional
                                and
                                user-friendly applications.<br><br>

                                I am always eager to learn new technologies, take on challenges,
                                and grow as a developer while contributing to a dynamic team environment.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('Website.About') }}"
                                class="mt-4 inline-block bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition-transform duration-300 transform hover:scale-105">
                                More About Me
                            </a>
                        </div>
                    </section>


                    <main class="flex-1 p-8 overflow-y-auto  bg-white animate-pulse">
                        <div class="flex flex-col gap-12">
                            <!-- Summary (center) -->
                            <div class="flex justify-center">
                                <div class="max-w-3xl text-center">
                                    <h2 class="text-3xl md:text-4xl font-extrabold text-black mb-6">Summary</h2>
                                    <div class="border-l-2 border-blue-500 pl-4 space-y-4 text-left">
                                        <div>
                                            <h3 class="font-semibold text-black text-lg">Jeewantha Priyasad</h3>
                                            <p class="italic text-gray-600 mt-2">
                                                Passionate and detail-oriented Software Engineering undergraduate with a
                                                strong focus on full-stack development.
                                                Skilled in designing and building modern, scalable web applications
                                                using both front-end and back-end technologies.
                                                Highly motivated to apply academic knowledge to real-world projects,
                                                explore emerging tools, and contribute to
                                                innovative digital solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Education + University Projects (side by side) -->
                            <div class="flex flex-col md:flex-row gap-12">
                                <!-- Education -->
                                <div class="flex-1">
                                    <h2 class="text-2xl font-bold italic text-black mb-4">Education</h2>
                                    <div class="border-l-2 border-blue-500 pl-4 space-y-4">
                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold  text-black text-lg">
                                                Sri Lanka Institute of Advanced Technological Education</h3>
                                            <span class=" text-sm text-gray-500">2025 - Present</span>
                                            <p class="text-gray-600 italic">Higher National Diploma(HNDIT)IN Software
                                                Engineering
                                            </p>
                                        </div>
                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold text-black text-lg">Berrewaerts Collage Kandy</h3>
                                            <span class="text-sm text-gray-500">2006 - 2021</span>
                                            <p class="text-gray-600 italic">GCE (A/L) Examination - 2021
                                            </p>
                                            <p class="text-gray-600 italic">GCE (O/L) Examination - 2017
                                            </p>
                                            <p class="text-gray-600 italic">Grade 5 Scholarship Examination - 2010
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <!-- University Projects -->
                                <div class="flex-1">
                                    <h2 class="text-2xl font-bold italic text-black mb-4">University Projects</h2>
                                    <div class="border-l-2 border-blue-500 pl-4 space-y-6">
                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold text-black text-lg">Python GUI-based Data Collection
                                                System With Excel Output</h3>
                                            <span class=" text-sm text-gray-500">January 2023</span>
                                            <p class="text-gray-600 italic">1st Year Individual Project</p>
                                        </div>

                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold text-black text-lg">Student Management System</h3>
                                            <span class=" text-sm text-gray-500">March 2024</span>
                                        </div>

                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold text-black text-lg">Gym Management System</h3>
                                            <span class=" text-sm text-gray-500">September 2024</span>
                                            <p class="text-gray-600 italic">1st Year Project</p>
                                        </div>


                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold text-black text-lg">Cake Business Web Application</h3>
                                            <span class=" text-sm text-gray-500">July 2024</span>
                                            <p class="text-gray-600 italic">1st Year Group Project</p>
                                        </div>

                                        <div class="relative pl-6">
                                            <span
                                                class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                            <h3 class="font-bold text-black text-lg">Web-Based Doctor Appointment
                                                Booking System</h3>
                                            <span class=" text-sm text-gray-500">June 2025</span>
                                            <p class="text-gray-600 italic">2nd Year Final Project</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>






                    <div class="flex-1 p-8 overflow-y-auto bg-white">
                        <div class="flex flex-col gap-12">
                            <!-- Section Header -->
                            <div class="flex justify-center">
                                <div class="max-w-3xl text-center">
                                    <h2 class="text-3xl md:text-4xl font-extrabold text-black mb-6">Projects</h2>
                                    <div class="border-l-2 border-blue-500 pl-4 space-y-6 text-left">
                                        <div>
                                            <h2 class="italic text-gray-600">
                                                "From concept to completion: My Full-Stack Development projects bring
                                                the latest technological challenges to life. I focus on building
                                                user-centric, functional applications while continuously expanding my
                                                skills and bringing new ideas to reality."
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Projects Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-gray-100 p-4">

                                <!-- Project Card -->
                                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                                    <!-- Title -->
                                    <h6 class="text-xs md:text-sm font-semibold text-center text-gray-500 mb-2">
                                        Doctor Appointment Booking System
                                    </h6>

                                    <!-- Image -->
                                    <img src="{{ asset('images/finalProject.jpg') }}"
                                        alt="Doctor Appointment System" class="w-full h-28 md:h-32 object-contain rounded-lg mb-2 bg-gray-100 
                    transition-transform duration-300 ease-in-out transform hover:scale-105" loading="lazy">

                                    <!-- Caption -->
                                    <p class="text-gray-600 text-xs leading-relaxed">
                                        "A user-friendly Doctor Appointment Booking System developed as a 2nd-year final
                                        project. Enables patients to book appointments seamlessly while helping doctors
                                        manage schedules efficiently."
                                    </p>
                                </div>

                                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                                    <!-- Title -->
                                    <h6 class="text-xs md:text-sm font-semibold text-center text-gray-500 mb-2">
                                        Student Management System
                                    </h6>

                                    <!-- Image -->
                                    <img src="{{ asset('images/studentProject.jpg') }}"
                                        alt="Doctor Appointment System" class="w-full h-28 md:h-32 object-contain rounded-lg mb-2 bg-gray-100 
                    transition-transform duration-300 ease-in-out transform hover:scale-105" loading="lazy">

                                    <!-- Caption -->
                                    <p class="text-gray-600 text-xs leading-relaxed">
                                        "A comprehensive Student Management System developed to streamline academic and
                                        administrative tasks.
                                        It enables students to access information easily while helping teachers and
                                        administrators manage classes,
                                        grades, and records efficiently."
                                    </p>
                                </div>

                                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                                    <!-- Title -->
                                    <h6 class="text-xs md:text-sm font-semibold text-center text-gray-500 mb-2">
                                        Human Value Group Project
                                    </h6>
                                    <!-- Image -->
                                    <img src="{{ asset('images/humanValue.jpg') }}"
                                        alt="Doctor Appointment System" class="w-full h-28 md:h-32 object-contain rounded-lg mb-2 bg-gray-100 
                    transition-transform duration-300 ease-in-out transform hover:scale-105" loading="lazy">

                                    <!-- Caption -->
                                    <p class="text-gray-600 text-xs leading-relaxed">
                                        "This group project on human values aims to promote activities such as
                                        participation, fostering happiness, maintaining cleanliness, and providing
                                        meals.
                                        It is designed to develop empathy, compassion, and social responsibility among
                                        students.
                                        Through this project, students gain a deeper understanding of human values and
                                        their importance
                                        in both personal and professional life, along with engaging in various related
                                        activities and workshops."
                                    </p>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <a href="{{ route('Website.Project') }}" class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg 
            hover:bg-blue-600 transition-transform duration-300 transform hover:scale-105">
                                        More Projects
                                    </a>
                                </div>

                            </div>

                            <section class="bg-white py-12">
                                <div class="max-w-7xl mx-auto px-4">
                                    <!-- Gallery Heading -->
                                    <h2 class="text-3xl md:text-4xl font-extrabold text-black mb-6"> Memory
                                        Collection</h2>
                                    <div class="caption-box">
                                        <h2 class=" text-black">📸 Memory Collection Captions</h2>
                                        <ul class="list-disc text-black pl-5">
                                            <li>"Collecting moments, not things."</li>
                                            <li>"A little bit of magic in every memory."</li>
                                            <li>"This is what our story looks like."</li>
                                            <li>"Reliving the good times, one photo at a time."</li>
                                        </ul>

                                    </div><br>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                        <img src="{{ asset('images/photo1.jpg') }}" alt="Photo 1"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo2.jpg') }}" alt="Photo 2"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo3.jpg') }}" alt="Photo 3"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo4.jpg') }}" alt="Photo 4"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo5.jpg') }}" alt="Photo 5"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo6.jpg') }}" alt="Photo 6"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo7.jpg') }}" alt="Photo 7"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                        <img src="{{ asset('images/photo8.jpg') }}" alt="Photo 8"
                                            class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                                    </div>

                                    <div class="text-center">
                                        <a href="{{ route('Website.Memory') }}"
                                            class="mt-4 inline-block bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition-transform duration-300 transform hover:scale-105">
                                            More Memories
                                        </a>
                                    </div>
                            </section>

                            <!-- Achievements Section -->
                            <h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-800 mb-2">
                                Achievements
                            </h2>

                            <p class="italic text-gray-600 mt-2">
                                I have successfully completed several impactful projects, including a Doctor Appointment
                                Booking System, which showcase my problem-solving, teamwork, and technical skills.
                                Through academic work, internships, and continuous learning, I have gained valuable
                                industry experience and built a strong foundation to grow as a passionate software
                                engineer.
                            </p>



                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-gray-100 p-4">

                                <!-- Project Card -->
                                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                                    <!-- Title -->


                                    <!-- Image -->
                                    <img src="{{ asset('images/cetificate1.jpg') }}"
                                        alt="Achievements1" class="w-full h-28 md:h-32 object-contain rounded-lg mb-2 bg-gray-100 
            transition-transform duration-300 ease-in-out transform hover:scale-105" loading="lazy">

                                    <!-- Caption -->
                                    <p class="text-gray-600 font-bold text-xs leading-relaxed">
                                        I successfully completed the HackerRank course, strengthening my programming and
                                        problem-solving skills while gaining practical experience in coding challenges
                                        and algorithmic thinking.
                                    </p>
                                </div>

                                <!-- Project 2 -->
                                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">

                                    <img src="{{ asset('images/cetificate2.jpg') }}"
                                        alt="Achievements2" class="w-full h-28 md:h-32 object-contain rounded-lg mb-2 bg-gray-100 
            transition-transform duration-300 ease-in-out transform hover:scale-105" loading="lazy">
                                    <p class="text-gray-600 font-bold text-xs leading-relaxed">
                                        I successfully completed the Getting Started with AWS Cloud Essentials course,
                                        gaining foundational knowledge in cloud computing, AWS services, and best
                                        practices for deploying and managing cloud solutions.
                                    </p>
                                </div>

                                <!-- Project 3 -->
                                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">

                                    <img src="{{ asset('images/cetificate3.jpg') }}"
                                        alt="Achievements3" class="w-full h-28 md:h-32 object-contain rounded-lg mb-2 bg-gray-100 
            transition-transform duration-300 ease-in-out transform hover:scale-105" loading="lazy">
                                    <p class="text-gray-600 font-bold text-xs leading-relaxed">
                                        I successfully completed the Introduction to Cybersecurity course offered by the
                                        Cisco Networking Academy. This achievement enhanced my foundational knowledge in
                                        cybersecurity principles, network security, and safe online practices,
                                        strengthening my technical skills and professional growth in the IT field.
                                    </p>

                                </div>
                                <div>
                                    <a href="{{ route('Website.Achievement') }}"
                                        class="mt-4 mx-auto block bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition-transform duration-300 transform hover:scale-105">
                                        More Achievements
                                    </a>
                                </div>

                            </div>

                            <!-- Contact Section -->
                            <div class="py-5" style="background-color:#f8f9fa;">
                                <div class="container">
                                    <!-- Section Title -->
                                    <h6 class="text-2xl md:text-3xl font-semibold text-center text-blue-600 mb-2">
                                        Contact and Feedback
                                    </h6>
                                    <h5 class="text-gray-600 font-bold text-xs leading-relaxed text-center mb-5">
                                        Communication is the bridge that connects ideas and people. I truly value your
                                        thoughts, suggestions,
                                        and questions, as they help me grow and improve. Whether it’s about
                                        collaboration, sharing feedback,
                                        or simply saying hello, I’m always happy to hear from you. Your voice
                                        matters—let’s start a meaningful
                                        conversation today.
                                    </h5>

                                    <!-- Flex Row Start -->
                                    <div class="row g-4 d-flex align-items-stretch justify-content-center">

                                        <!-- Left Side: Contact Info + Map -->
                                        <div class="col-md-6 d-flex">
                                            <div
                                                class="p-4 bg-white rounded shadow-lg w-100 d-flex flex-column justify-content-between">
                                                <div>
                                                    <p class="text-black">
                                                        <i class="fa-solid fa-location-dot text-blue-500 me-2"></i>
                                                        <strong
                                                            class="text-gray-600 font-bold text-sm">Location:</strong><br>
                                                        124, Alhena, Katavala, Lewla, Kandy
                                                    </p><br>
                                                    <p>
                                                        <i class="fa-solid fa-envelope text-blue-500 me-2"></i>
                                                        <strong
                                                            class="text-gray-600 font-bold text-sm">Email:</strong><br>
                                                        <a href="mailto:jeewanthapriyasad536@gmail.com"
                                                            class="text-blue-500 hover:underline">
                                                            jeewanthapriyasad536@gmail.com
                                                        </a>
                                                    </p><br>
                                                    <p class="text-black">
                                                        <i class="fa-solid fa-phone text-blue-500 me-2"></i>
                                                        <strong
                                                            class="text-gray-600 font-bold text-sm">Call:</strong><br>
                                                        +94 766329365
                                                    </p>
                                                </div><br>
                                                <!-- Google Map Embed -->
                                                <div class="mt-3" style="width:100%; max-width:300px;">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.123456789!2d80.670561!3d7.260808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3667a4d956f77%3A0x8da5158beb00b7b7!2sAmpitiya,+Kandy!5e0!3m2!1sen!2slk!4v1755852826174!5m2!1sen!2slk"
                                                        width="100%" height="200" style="border:0; border-radius:10px;"
                                                        allowfullscreen="" loading="lazy">
                                                    </iframe>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <br>


                                        <!-- Right Side: Contact Form -->
                                        <div class="col-md-6 d-flex">
                                            <div
                                                class="p-4 bg-white rounded shadow-lg w-100 d-flex flex-column justify-content-center">
                                                <h6 class="text-2xl md:text-3xl font-extrabold text-blue-600 mb-6">
                                                    Your Feedback
                                                </h6>
                                                <form class="w-100 text-black"
                                                    action="{{ route('Website.store') }}"
                                                    method="POST">


                                                    @csrf
                                                    @if(session('success'))
                                                        <div class="alert alert-success">
                                                            {{ session('success') }}
                                                        </div>
                                                    @endif
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Your Name :</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Enter your name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Your Email :</label>
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Enter your email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <textarea name="message" rows="5"
                                                            class="form-control placeholder-bold"
                                                            placeholder="Message"></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="mt-4 mx-auto block bg-blue-500 text-white font-bold py-3 px-4 rounded-lg shadow-lg hover:bg-blue-600 transition-transform duration-300 transform hover:scale-105">
                                                        Send Message
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Flex Row End -->
                                </div>
                            </div>


                        </div>

                    </div>










                    <!-- JavaScript for the typing effect -->
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const typingTextElement = document.getElementById('typing-text');
                            const hero = document.getElementById('hero');

                            // Typing effect (same as before)
                            const words = ["Software Developer Intern", "Web Developer Intern",
                                "I'm a Singer"
                            ];
                            let wordIndex = 0;
                            let charIndex = 0;
                            let isDeleting = false;
                            let typingSpeed = 150;

                            function type() {
                                const currentWord = words[wordIndex];
                                if (isDeleting) {
                                    typingTextElement.textContent = currentWord.substring(0,
                                        charIndex -
                                        1);
                                    charIndex--;
                                    typingSpeed = 100;
                                } else {
                                    typingTextElement.textContent = currentWord.substring(0,
                                        charIndex +
                                        1);
                                    charIndex++;
                                    typingSpeed = 150;
                                }

                                if (!isDeleting && charIndex === currentWord.length) {
                                    setTimeout(() => isDeleting = true, 1000);
                                } else if (isDeleting && charIndex === 0) {
                                    isDeleting = false;
                                    wordIndex = (wordIndex + 1) % words.length;
                                    typingSpeed = 500;
                                }

                                setTimeout(type, typingSpeed);
                            }

                            type();

                            // Background image rotation
                            const images = [
                                'images/background1.jpg',

                            ];

                            let current = 0;

                            // Immediately show first image
                            hero.style.backgroundImage = `url('${images[current]}')`;

                            function changeBackground() {
                                current = (current + 1) % images.length;
                                hero.style.backgroundImage = `url('${images[current]}')`;
                            }

                            // Change every 4 seconds
                            setInterval(changeBackground, 4000);
                        });

                    </script>


</body>

</html>
