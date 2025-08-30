<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jeewantha Priyasad</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/ProfilePage.jpg') }}">
    <!-- Use Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Use Inter font -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #374151;
        }

    </style>
</head>

<body class="antialiased">

    <!-- Container for the entire page content -->
    <div class="flex flex-col lg:flex-row min-h-screen">

        <!-- Left Sidebar - Fixed on desktop, collapsible on mobile -->
        <aside
            class="w-full lg:w-80 bg-white p-6 shadow-lg rounded-xl lg:rounded-r-none lg:fixed h-auto lg:h-full lg:overflow-y-auto z-10">
            <!-- Profile Section -->
            <div class="flex flex-col items-center text-center">
                <img src="{{ asset('images/profilePage.jpg') }}" alt="Profile Photo"
                    class="w-32 h-32 rounded-full mb-4 ring-2 ring-gray-200">
                <h1 class="text-2xl font-bold text-gray-800">Jeewantha Priyasad</h1>
                <p class="text-sm text-gray-500">Software Engineer</p>
            </div>

            <!-- Social Icons -->
            <div class="flex justify-center space-x-2 mt-4">

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


            <!-- Navigation Links -->
            <nav class="mt-8">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('Website.Resume') }}"
                            class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                            <i class="fa-solid fa-file"></i>
                            <span class="ml-2">Resume</span>
                        </a>
                    </li>
                    <a href="{{ route('Website.HomePage') }}"
                        class="flex items-center p-2 text-sm md:text-base font-semibold text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors duration-300">
                        <i class="fa-solid fa-backward"></i>
                        <span class="ml-2">Back</span>
                    </a>
                    </li>

                </ul>
            </nav>

            <!-- Footer -->

        </aside>

        <!-- Main Content Area -->
        <main class="lg:ml-80 w-full p-8 mt-4 lg:mt-0">
            <!-- About Section -->
            <section id="about" class="bg-white p-6 md:p-8 rounded-xl shadow-lg mb-8 relative">
                <!-- Home Button -->
                <a href="{{ route('Website.HomePage') }}"
                    class="absolute top-4 right-4 bg-blue-500 text-white text-sm px-2 py-1 rounded shadow hover:bg-blue-600 transition-all">
                    Home
                </a>


                <main class="flex-1 p-8 overflow-y-auto  bg-white">
                    <div class="flex flex-col gap-12">
                        <!-- Summary (center) -->
                        <div class="flex justify-center">
                            <div class="max-w-3xl text-center">
                                <h1 class="text-3xl md:text-4xl font-extrabold text-black ">Resume</h1>
                                <h2 class="text-xl md:text-2xl font-bold text-black text-left">Summary</h2>
                                <div class="border-l-2 border-blue-500 pl-4 space-y-4 text-left">
                                    <div>
                                        <h3 class="font-semibold text-black text-lg">Jeewantha Priyasad</h3>
                                        <p class="italic text-gray-600 mt-2">
                                            "Software Engineering undergraduate passionate about full-stack development,
                                            skilled in building scalable web apps, and eager to apply knowledge to
                                            real-world projects."
                                        </p><br>
                                        <p>124, Alhena,</p>
                                        <p> Katavala,</p>
                                        <p> Lewla, Kandy</p>
                                        <p>jeewanthapriyasad536@gmail.com</p>
                                        <p> +94 766329365</p>


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
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <h3 class="font-bold  text-black text-lg">
                                            Sri Lanka Institute of Advanced Technological Education</h3>
                                        <span class=" text-sm text-gray-500">2025 - Present</span>
                                        <p class="text-gray-600 italic">"Currently pursuing a Software Engineering
                                            HNDIT at the Sri Lanka Institute of Advanced Technological Education
                                            (SLIATE-ATI Nawalapitiya)."
                                        </p><br>
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ asset('images/sliate.jpg') }}"
                                                alt="SLIATE Logo" class="w-20 h-20 object-contain rounded-md shadow-md">

                                            <img src="{{ asset('images/ati.jpg') }}" alt="ATI Logo"
                                                class="w-20 h-20 object-contain rounded-md shadow-md">
                                        </div>


                                    </div><br>



                                    <div class="relative pl-6">
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <h3 class="font-bold text-black text-lg">Berrewaerts Collage Kandy</h3>
                                        <span class="text-sm text-gray-500">2006 - 2021</span>

                                        <p class="text-gray-600 italic">Academic journey from Grade 5 Scholarship (2010)
                                            to GCE O/L (2017) and A/L (2021), building a solid foundation for further
                                            studies.
                                        </p><br>
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ asset('images/school.jpg') }}"
                                                alt="SLIATE Logo" class="w-20 h-20 object-contain rounded-md shadow-md">

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- University Projects -->
                            <div class="flex-1">
                                <h2 class="text-2xl font-bold italic text-black mb-4">University Projects</h2>
                                <div class="border-l-2 border-blue-500 pl-4 space-y-6">
                                    <div class="relative pl-6">
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <h3 class="font-bold text-black text-lg">Python GUI-based Data Collection
                                            System With Excel Output</h3>
                                        <span class=" text-sm text-gray-500">January 2023</span>
                                        <p class="text-gray-600 italic">1st Year Individual Project</p>
                                    </div>

                                    <div class="relative pl-6">
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <h3 class="font-bold text-black text-lg">Student Management System</h3>
                                        <span class=" text-sm text-gray-500">March 2024</span>
                                    </div>

                                    <div class="relative pl-6">
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <h3 class="font-bold text-black text-lg">Gym Management System</h3>
                                        <span class=" text-sm text-gray-500">September 2024</span>
                                        <p class="text-gray-600 italic">1st Year Project</p>
                                    </div>


                                    <div class="relative pl-6">
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <h3 class="font-bold text-black text-lg">Cake Business Web Application</h3>
                                        <span class=" text-sm text-gray-500">July 2024</span>
                                        <p class="text-gray-600 italic">1st Year Group Project</p>
                                    </div>

                                    <div class="relative pl-6">
                                        <span class="absolute -left-3 top-1 w-2 h-2 bg-blue-500 rounded-full"></span>
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






                <section id="skills" class="bg-white p-8 rounded-xl shadow-lg mb-8">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">My Skills</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">"The tools I master to build creative solutions.
                        Skills
                        that shape ideas into reality. Crafted with
                        code, driven by creativity. These are the technologies I work with every day – turning knowledge
                        into
                        impactful solutions. My stack of skills brings projects to life, from concepts to execution."
                    </p>
                    <br>
                    <!-- Skill 1 -->
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">HTML</span>
                            <span class="text-sm text-gray-500">94%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>

                    <!-- Skill 2 -->
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">CSS</span>
                            <span class="text-sm text-gray-500">90%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-green-500 h-3 rounded-full" style="width: 80%"></div>
                        </div>
                    </div>

                    <!-- Skill 3 -->
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">JavaScript</span>
                            <span class="text-sm text-gray-500">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-yellow-500 h-3 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>


                    <!-- Skill 4 -->
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">React</span>
                            <span class="text-sm text-gray-500">70%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-purple-500 h-3 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">PHP</span>
                            <span class="text-sm text-gray-500">80%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gray-500 h-3 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">Java</span>
                            <span class="text-sm text-gray-500">70%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-orange-500 h-3 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-gray-700">Laravel</span>
                            <span class="text-sm text-gray-500">70%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-red-500 h-3 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>

                </section>





        </main>
    </div>

</body>

</html>
