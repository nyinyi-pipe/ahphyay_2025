<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta Paradiso | Premium Pasta Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-black': '#121212',
                        'secondary-black': '#1e1e1e',
                        'accent-black': '#2a2a2a',
                        'pure-white': '#ffffff',
                        'off-white': '#f5f5f5',
                        'gold-accent': '#ffd700',
                        'pasta-orange': '#ff8c42',
                    },
                    animation: {
                        'float': 'float 8s ease-in-out infinite',
                        'float-pasta': 'float-pasta 15s linear infinite',
                        'micro-pop': 'micro-pop 0.5s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0) rotateX(5deg) rotateY(-5deg)' },
                            '50%': { transform: 'translateY(-20px) rotateX(3deg) rotateY(3deg)' },
                        },
                        'float-pasta': {
                            '0%': { transform: 'translateY(0) rotate(0deg)' },
                            '100%': { transform: 'translateY(-100vh) rotate(360deg)' },
                        },
                        'micro-pop': {
                            '0%': { transform: 'scale(0)', opacity: '1' },
                            '100%': { transform: 'scale(10)', opacity: '0' },
                        },
                    },
                    backdropBlur: {
                        xs: '2px',
                        sm: '5px',
                        md: '12px',
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-gradient {
                @apply bg-gradient-to-r from-gold-accent to-pasta-orange bg-clip-text text-transparent;
            }
            .bg-glass {
                @apply bg-opacity-85 backdrop-blur-md;
            }
            .transition-slow {
                transition: all 0.6s ease;
            }
        }
    </style>
</head>
<body class="bg-primary-black text-pure-white overflow-x-hidden" id="page-body">
    <!-- Particle Background -->
    <div id="particles-js" class="fixed w-full h-full z-[-1]"></div>

    <!-- Neuromorphic Navigation -->
    <nav class="navbar fixed top-0 w-full flex justify-between items-center py-6 px-[5%] bg-primary-black/85 bg-glass border-b border-white/10 shadow-2xl z-[1000]">
        <div class="logo text-3xl font-bold text-gradient flex items-center">
            <i class="fas fa-pasta mr-2 text-3xl"></i>
            Pasta Paradiso
        </div>
        
        <div class="nav-links hidden md:flex gap-8">
            <a href="#" class="text-off-white font-medium text-[0.95rem] tracking-wider relative py-2 transition-slow hover:text-white after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r after:from-gold-accent after:to-pasta-orange after:transition-slow hover:after:w-full">Discover</a>
            <a href="#" class="text-off-white font-medium text-[0.95rem] tracking-wider relative py-2 transition-slow hover:text-white after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r after:from-gold-accent after:to-pasta-orange after:transition-slow hover:after:w-full">Menu</a>
            <a href="#" class="text-off-white font-medium text-[0.95rem] tracking-wider relative py-2 transition-slow hover:text-white after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r after:from-gold-accent after:to-pasta-orange after:transition-slow hover:after:w-full">Chefs</a>
            <a href="#" class="text-off-white font-medium text-[0.95rem] tracking-wider relative py-2 transition-slow hover:text-white after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-gradient-to-r after:from-gold-accent after:to-pasta-orange after:transition-slow hover:after:w-full">Experience</a>
        </div>
        
        <div class="nav-actions flex gap-6 items-center">
            <div class="search-bar relative">
                <input type="text" class="bg-secondary-black border border-white/10 rounded-full py-2 px-4 pl-10 text-white text-sm w-[180px] transition-slow focus:w-[220px] focus:border-pasta-orange/40 focus:ring-1 focus:ring-pasta-orange/10" placeholder="Search pasta...">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-white/60 text-sm"></i>
            </div>
            <div class="cart-icon relative text-off-white text-xl cursor-pointer transition-slow hover:text-white">
                <i class="fas fa-shopping-bag"></i>
                <span class="cart-count absolute -top-2 -right-2 bg-pasta-orange text-primary-black rounded-full w-[18px] h-[18px] flex items-center justify-center text-xs font-bold">3</span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero min-h-screen flex items-center px-[10%] relative overflow-hidden pt-20">
        <div class="hero-content w-full md:w-1/2 z-[2]">
            <h1 class="hero-title text-5xl md:text-7xl lg:text-8xl font-extrabold leading-tight mb-6 bg-gradient-to-r from-white to-off-white bg-clip-text text-transparent drop-shadow-lg">
                Artisanal Pasta<br>Crafted with Passion
            </h1>
            <p class="hero-subtitle text-xl leading-relaxed text-white/80 mb-10 max-w-[80%] mx-auto md:mx-0">
                Experience the perfect harmony of traditional Italian craftsmanship and innovative culinary techniques in every bite of our premium pasta selection.
            </p>
            <div class="cta-buttons flex gap-6 justify-center md:justify-start">
                <button class="btn btn-primary py-3 px-8 rounded-full font-semibold tracking-wider cursor-pointer transition-slow relative overflow-hidden border-none text-sm md:text-base flex items-center justify-center bg-gradient-to-r from-pasta-orange to-[#ff6b00] text-white shadow-lg hover:-translate-y-1 hover:shadow-xl before:content-[''] before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-transparent before:via-white/20 before:to-transparent before:transition-slow hover:before:left-full">
                    Order Now
                </button>
                <button class="btn btn-secondary py-3 px-8 rounded-full font-semibold tracking-wider cursor-pointer transition-slow relative overflow-hidden border border-white/20 bg-transparent backdrop-blur-sm text-white hover:bg-white/5 hover:border-white/30">
                    Explore Menu
                </button>
            </div>
        </div>
        
        <div class="hero-image absolute right-[5%] w-[45%] h-[80%] bg-[url('https://images.unsplash.com/photo-1555949258-eb67b1ef0ceb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')] bg-cover bg-center rounded-2xl shadow-2xl animate-float transform-style-preserve-3d z-[1] hidden md:block before:content-[''] before:absolute before:inset-0 before:bg-gradient-to-r before:from-primary-black/70 before:to-pasta-orange/20 before:rounded-2xl after:content-[''] after:absolute after:-bottom-12 after:left-1/2 after:-translate-x-1/2 after:w-4/5 after:h-8 after:bg-radial after:from-black/50 after:to-transparent after:blur-sm after:z-[-1]"></div>
        
        <!-- Floating Pasta Elements -->
        <img src="https://cdn-icons-png.flaticon.com/512/5787/5787094.png" class="floating-pasta absolute top-1/5 left-[5%] w-20 opacity-70 z-0 filter drop-shadow-lg animate-float-pasta hidden md:block">
        <img src="https://cdn-icons-png.flaticon.com/512/5787/5787109.png" class="floating-pasta absolute top-3/5 left-[15%] w-16 opacity-70 z-0 filter drop-shadow-lg animate-float-pasta animate-delay-[-5s] animate-duration-[20s] hidden md:block">
        <img src="https://cdn-icons-png.flaticon.com/512/5787/5787102.png" class="floating-pasta absolute top-1/3 right-[10%] w-24 opacity-70 z-0 filter drop-shadow-lg animate-float-pasta animate-delay-[-8s] animate-duration-[25s] hidden md:block">
        
        <!-- Interactive 3D Pasta Selector -->
        <div class="pasta-selector absolute bottom-[10%] left-1/2 -translate-x-1/2 flex gap-6 z-[10] flex-wrap justify-center">
            <div class="pasta-type w-20 h-20 rounded-full bg-secondary-black flex items-center justify-center cursor-pointer transition-slow border-2 border-transparent shadow-lg hover:-translate-y-2 hover:scale-110 hover:shadow-xl hover:border-pasta-orange relative overflow-hidden group">
                <img src="https://cdn-icons-png.flaticon.com/512/5787/5787109.png" class="w-3/5 h-3/5 object-contain filter brightness-0 invert-80 transition-slow group-hover:brightness-0 group-hover:invert">
                <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-semibold text-white opacity-0 transition-slow group-hover:opacity-100 whitespace-nowrap">Spaghetti</span>
            </div>
            <div class="pasta-type w-20 h-20 rounded-full bg-secondary-black flex items-center justify-center cursor-pointer transition-slow border-2 border-transparent shadow-lg hover:-translate-y-2 hover:scale-110 hover:shadow-xl hover:border-pasta-orange relative overflow-hidden group">
                <img src="https://cdn-icons-png.flaticon.com/512/5787/5787102.png" class="w-3/5 h-3/5 object-contain filter brightness-0 invert-80 transition-slow group-hover:brightness-0 group-hover:invert">
                <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-semibold text-white opacity-0 transition-slow group-hover:opacity-100 whitespace-nowrap">Penne</span>
            </div>
            <div class="pasta-type w-20 h-20 rounded-full bg-gradient-to-br from-secondary-black to-accent-black flex items-center justify-center cursor-pointer transition-slow border-2 border-gold-accent shadow-lg hover:-translate-y-2 hover:scale-110 hover:shadow-xl relative overflow-hidden group active">
                <img src="https://cdn-icons-png.flaticon.com/512/5787/5787094.png" class="w-3/5 h-3/5 object-contain filter brightness-0 invert transition-slow">
                <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-semibold text-white opacity-100 transition-slow whitespace-nowrap">Fusilli</span>
            </div>
            <div class="pasta-type w-20 h-20 rounded-full bg-secondary-black flex items-center justify-center cursor-pointer transition-slow border-2 border-transparent shadow-lg hover:-translate-y-2 hover:scale-110 hover:shadow-xl hover:border-pasta-orange relative overflow-hidden group">
                <img src="https://cdn-icons-png.flaticon.com/512/5787/5787114.png" class="w-3/5 h-3/5 object-contain filter brightness-0 invert-80 transition-slow group-hover:brightness-0 group-hover:invert">
                <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-semibold text-white opacity-0 transition-slow group-hover:opacity-100 whitespace-nowrap">Farfalle</span>
            </div>
            <div class="pasta-type w-20 h-20 rounded-full bg-secondary-black flex items-center justify-center cursor-pointer transition-slow border-2 border-transparent shadow-lg hover:-translate-y-2 hover:scale-110 hover:shadow-xl hover:border-pasta-orange relative overflow-hidden group">
                <img src="https://cdn-icons-png.flaticon.com/512/5787/5787105.png" class="w-3/5 h-3/5 object-contain filter brightness-0 invert-80 transition-slow group-hover:brightness-0 group-hover:invert">
                <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-xs font-semibold text-white opacity-0 transition-slow group-hover:opacity-100 whitespace-nowrap">Rigatoni</span>
            </div>
        </div>
    </section>

    <script>
        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.2,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });

            // Micro-interactions
            document.body.addEventListener('click', function(e) {
                const micro = document.createElement('div');
                micro.className = 'micro-interaction fixed w-2 h-2 bg-gold-accent rounded-full z-[9999] scale-0 animate-micro-pop';
                micro.style.left = e.clientX + 'px';
                micro.style.top = e.clientY + 'px';
                document.body.appendChild(micro);
                
                setTimeout(() => {
                    micro.remove();
                }, 500);
            });

            // Pasta selector interaction
            const pastaTypes = document.querySelectorAll('.pasta-type');
            pastaTypes.forEach(type => {
                type.addEventListener('click', function() {
                    pastaTypes.forEach(t => t.classList.remove('active', 'bg-gradient-to-br', 'from-secondary-black', 'to-accent-black', 'border-gold-accent'));
                    this.classList.add('active', 'bg-gradient-to-br', 'from-secondary-black', 'to-accent-black', 'border-gold-accent');
                    this.querySelector('img').classList.add('brightness-0', 'invert');
                    this.querySelector('span').classList.add('opacity-100');
                });
            });
        });
    </script>
</body>
</html>