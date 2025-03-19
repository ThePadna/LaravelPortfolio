<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | My Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.0/dist/vanilla-tilt.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.1;
            z-index: -1;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: scale(1.02);
        }

        .screenshot-frame {
            position: relative;
            padding: 5px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
        }

        .badge {
            font-size: 0.75rem;
            padding: 4px 8px;
            border-radius: 12px;
            color: white;
            font-weight: 500;
        }

        .badge-featured {
            background: #f1c40f;
        }

        .badge-progress {
            background: #3498db;
        }

        .badge-live {
            background: #2ecc71;
        }

        /* Navbar Styles */
        .nav-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 20;
        }

        .nav-button {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-button.active {
            background: rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .nav-menu.open {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                padding: 1rem;
            }

            .hamburger {
                display: block;
                font-size: 1.5rem;
                color: white;
                cursor: pointer;
            }
        }

        @media (min-width: 769px) {
            .hamburger {
                display: none;
            }

            .nav-menu {
                display: flex;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Video Background -->
    <video autoplay loop muted class="video-bg">
        <source src="/videos/bgvid.mp4" type="video/mp4">
    </video>

    <!-- Top Navigation -->
    <nav class="nav-container" x-data="{ open: false }">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <div class="hamburger" @click="open = !open">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-menu" :class="{ 'open': open }">
                <a href="/" class="nav-button" @click="open = false">
                    <i class="fas fa-user"></i> About
                </a>
                <a href="projects" class="nav-button active" @click="open = false">
                    <i class="fas fa-code"></i> Projects
                </a>
                <a href="contact" class="nav-button" @click="open = false">
                    <i class="fas fa-envelope"></i> Contact
                </a>
                <a href="resume" class="nav-button" @click="open = false">
                    <i class="fas fa-file-alt"></i> Resume
                </a>
            </div>
        </div>
    </nav>

    <!-- Projects Section -->
    <section class="container mx-auto py-20 px-4 mt-20">
        <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-12 text-shadow-lg" 
            data-aos="fade-down" data-aos-duration="1000">
            My Web Projects
        </h1>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" 
             x-data="{ selectedProject: null }">
            @foreach($projects as $project)
                <div class="project-card" 
                     data-tilt 
                     data-tilt-max="15" 
                     data-tilt-speed="400" 
                     data-tilt-glare="true" 
                     data-tilt-max-glare="0.2"
                     data-aos="fade-in" 
                     data-aos-duration="600" 
                     data-aos-delay="{{ $loop->index * 100 }}"
                     @click="selectedProject = {{ json_encode($project) }}">
                    <div class="screenshot-frame">
                        <img src="{{ asset('images/projects/' . $project['image']) }}" 
                             alt="{{ $project['title'] }}" 
                             class="w-full h-56 object-cover rounded-b-md" 
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-xl font-semibold text-white">{{ $project['title'] }}</h3>
                            @if(isset($project['badge']))
                                <span class="badge badge-{{ $project['badge'] }}">{{ ucfirst($project['badge']) }}</span>
                            @endif
                        </div>
                        <p class="text-gray-300 text-sm">{{ $project['short_description'] }}</p>
                        <a href="{{ $project['url'] }}" 
                           target="_blank" 
                           class="mt-4 inline-block text-blue-400 hover:text-blue-300 transition-colors">
                            Visit Site <i class="fas fa-external-link-alt ml-1"></i>
                        </a>
                    </div>
                </div>
            @endforeach

            <!-- Project Modal -->
            <div x-show="selectedProject" 
                 class="fixed inset-0 modal flex items-center justify-center z-50"
                 @click.away="selectedProject = null"
                 data-aos="zoom-in" 
                 data-aos-duration="400">
                <div class="bg-gray-900 rounded-xl p-6 max-w-3xl w-full mx-4" 
                     @click.stop>
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center gap-2">
                            <h2 class="text-2xl font-bold text-white" x-text="selectedProject?.title"></h2>
                            <template x-if="selectedProject?.badge">
                                <span class="badge badge-" x-bind:class="'badge-' + selectedProject?.badge" x-text="selectedProject?.badge.charAt(0).toUpperCase() + selectedProject?.badge.slice(1)"></span>
                            </template>
                        </div>
                        <button @click="selectedProject = null" class="text-white text-2xl">×</button>
                    </div>
                    <div class="screenshot-frame mb-4">
                        <img :src="selectedProject ? '{{ asset('images/projects/') }}/' + selectedProject.image : ''" 
                             class="w-full h-80 object-cover rounded-b-md" 
                             loading="lazy">
                    </div>
                    <p class="text-gray-300 mb-4" x-text="selectedProject?.description"></p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-sm text-gray-400">Technologies:</span>
                            <span class="text-sm text-white" x-text="selectedProject?.technologies"></span>
                        </div>
                        <a :href="selectedProject?.url" 
                           target="_blank" 
                           class="text-blue-400 hover:text-blue-300 transition-colors">
                            Visit Live Site <i class="fas fa-external-link-alt ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init();
            VanillaTilt.init(document.querySelectorAll(".project-card"), {
                max: 15,
                speed: 400,
                glare: true,
                "max-glare": 0.2,
            });
        });
    </script>
</body>
</html>