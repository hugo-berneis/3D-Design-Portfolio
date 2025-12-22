<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hugo Berneis Design Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&family=inter:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/STLLoader.js"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <style>
        /* Custom model viewer styles that might be hard to replicate with pure utility classes alone if dynamic */
        .model-viewer-label {
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .model-viewer:hover .model-viewer-label {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-white text-neutral-800 dark:bg-neutral-950 dark:text-neutral-200 leading-relaxed font-sans antialiased transition-colors duration-300">
    <header class="bg-white/80 dark:bg-neutral-950/80 border-b border-neutral-200 dark:border-neutral-800 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-[1400px] mx-auto px-8 py-6 flex justify-between items-center">
            <a href="{{ route('portfolio.index') }}"
                class="text-xl font-bold text-neutral-900 dark:text-white no-underline tracking-tighter">Hugo's 3D Design Portfolio</a>
            <nav>
                <a href="{{ route('portfolio.index') }}"
                    class="text-neutral-500 dark:text-neutral-400 no-underline ml-10 font-medium transition-colors duration-200 text-[0.95rem] tracking-wide hover:text-neutral-900 dark:hover:text-white">Home</a>
                <a href="{{ route('pictures.index') }}"
                    class="text-neutral-500 dark:text-neutral-400 no-underline ml-10 font-medium transition-colors duration-200 text-[0.95rem] tracking-wide hover:text-neutral-900 dark:hover:text-white">Pictures</a>
                <a href="{{ route('portfolio.cv') }}"
                    class="text-neutral-500 dark:text-neutral-400 no-underline ml-10 font-medium transition-colors duration-200 text-[0.95rem] tracking-wide hover:text-neutral-900 dark:hover:text-white">CV</a>
                <a href="{{ route('portfolio.contact') }}"
                    class="text-neutral-500 dark:text-neutral-400 no-underline ml-10 font-medium transition-colors duration-200 text-[0.95rem] tracking-wide hover:text-neutral-900 dark:hover:text-white">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer class="bg-neutral-50 dark:bg-neutral-900 text-neutral-600 dark:text-white py-12 px-8 text-center border-t border-neutral-200 dark:border-transparent">
        <div class="max-w-[1400px] mx-auto">
            <p>&copy; {{ date('Y') }} Hugo's 3D Design Portfolio. All rights reserved.</p>
            <p class="mt-2 opacity-70">Showcasing premium 3D designs and visualizations.</p>
        </div>
    </footer>

    <script>
        class ModelViewer {
            constructor(container, modelPath, initialRotation, designId) {
                this.container = container;
                this.modelPath = modelPath;
                this.designId = designId;
                this.scene = null;
                this.camera = null;
                this.renderer = null;
                this.model = null;
                this.isHovering = false;
                this.mouseX = 0;
                this.mouseY = 0;

                // Rotation state
                this.baseRotationX = initialRotation.x;
                this.baseRotationY = initialRotation.y;
                this.baseRotationZ = initialRotation.z;

                this.targetRotationX = this.baseRotationX;
                this.targetRotationY = this.baseRotationY;
                this.targetRotationZ = this.baseRotationZ;

                this.currentRotationX = this.baseRotationX;
                this.currentRotationY = this.baseRotationY;
                this.currentRotationZ = this.baseRotationZ;

                this.rotationSpeed = 0.005;
                this.isLoading = true;
                this.loadingIndicator = null;
                this.isDebugMode = false;

                this.ambientLight = null;
                this.keyLight = null;
                this.fillLight = null;
                this.rimLight = null;

                this.init();
            }

            createLoadingIndicator() {
                const loader = document.createElement('div');
                loader.className =
                    'absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-neutral-400 text-sm bg-black/60 p-4 rounded-sm pointer-events-none';
                loader.textContent = 'Loading 3D model...';
                this.container.appendChild(loader);
                this.loadingIndicator = loader;
            }

            removeLoadingIndicator() {
                if (this.loadingIndicator) {
                    this.loadingIndicator.remove();
                    this.loadingIndicator = null;
                }
                this.isLoading = false;
            }

            init() {
                const width = this.container.clientWidth;
                const height = this.container.clientHeight;

                this.scene = new THREE.Scene();
                this.updateThemeColors();

                this.camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
                this.camera.position.set(0, 0, 100);

                this.renderer = new THREE.WebGLRenderer({
                    antialias: true
                });
                this.renderer.setSize(width, height);
                this.renderer.setPixelRatio(window.devicePixelRatio);
                this.updateThemeColors(); // Apply to renderer too
                this.container.appendChild(this.renderer.domElement);

                // Listen for theme changes
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    this.updateThemeColors();
                });

                this.ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
                this.scene.add(this.ambientLight);

                this.hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 1.0);
                this.scene.add(this.hemiLight);

                this.keyLight = new THREE.DirectionalLight(0xffffff, 1.2);
                this.keyLight.position.set(50, 50, 50);
                this.scene.add(this.keyLight);

                this.fillLight = new THREE.DirectionalLight(0xffffff, 0.3);
                this.fillLight.position.set(-50, 0, 50);
                this.scene.add(this.fillLight);

                this.rimLight = new THREE.DirectionalLight(0xffffff, 0.8);
                this.rimLight.position.set(0, 50, -50);
                this.scene.add(this.rimLight);

                this.loadModel();

                this.container.addEventListener('mouseenter', () => this.isHovering = true);
                this.container.addEventListener('mouseleave', () => {
                    this.isHovering = false;
                });
                this.container.addEventListener('mousemove', (e) => this.onMouseMove(e));

                window.addEventListener('resize', () => this.onWindowResize());

                this.animate();
                this.createLoadingIndicator();
            }

            loadModel() {
                const loader = new THREE.STLLoader();

                loader.load(
                    this.modelPath,
                    (geometry) => {
                        geometry.computeBoundingBox();
                        geometry.center();

                        const material = new THREE.MeshStandardMaterial({
                            color: 0xeeeeee,
                            roughness: 0.4,
                            metalness: 0.2,
                        });

                        this.model = new THREE.Mesh(geometry, material);
                        this.updateThemeColors(); // Apply theme-aware colors and lighting
                        this.scene.add(this.model);

                        const boundingBox = new THREE.Box3().setFromObject(this.model);
                        const size = boundingBox.getSize(new THREE.Vector3());
                        const maxDim = Math.max(size.x, size.y, size.z);
                        let scale = 50 / maxDim;

                        // Apply specific scaling
                        if (this.modelPath.includes('LaserCutSquirrel')) scale *= 2.0;
                        else if (this.modelPath.includes('cat-keychain')) scale *= 1.5;
                        else if (this.modelPath.includes('CafeWaterDispenser.stl')) scale *= 1.3;
                        else if (this.modelPath.includes('rv.stl') ||
                            this.modelPath.includes('kitchen.stl') ||
                            this.modelPath.includes('RVSinkAndToilet.stl') ||
                            this.modelPath.includes('RVcouch.stl') ||
                            this.modelPath.includes('Cafe')) scale *= 2.0;

                        this.model.scale.multiplyScalar(scale);

                        // Initial rotation from DB
                        this.model.rotation.x = THREE.Math.degToRad(this.baseRotationX);
                        this.model.rotation.y = THREE.Math.degToRad(this.baseRotationY);
                        this.model.rotation.z = THREE.Math.degToRad(this.baseRotationZ);

                        this.targetRotationX = this.model.rotation.x;
                        this.targetRotationY = this.model.rotation.y;
                        this.targetRotationZ = this.model.rotation.z;
                        this.currentRotationX = this.targetRotationX;
                        this.currentRotationY = this.targetRotationY;
                        this.currentRotationZ = this.targetRotationZ;

                        this.removeLoadingIndicator();
                    },
                    (progress) => {
                        const percentComplete = Math.round((progress.loaded / progress.total) * 100);
                        if (this.loadingIndicator) {
                            this.loadingIndicator.textContent = 'Loading ' + percentComplete + '%...';
                        }
                    },
                    (error) => {
                        console.error('Error loading STL model:', error);
                        if (this.loadingIndicator) {
                            this.loadingIndicator.textContent = 'Error loading model';
                            this.loadingIndicator.style.color = '#ff6666';
                        }
                    }
                );
            }

            updateThemeColors() {
                const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                const bgColor = isDark ? 0x0a0a0a : 0xf9fafb; // neutral-950 vs neutral-50

                if (this.scene) {
                    this.scene.background = new THREE.Color(bgColor);
                }
                if (this.renderer) {
                    this.renderer.setClearColor(bgColor, 1);
                }

                // Adjust light intensities for balanced contrast and brightness in dark mode
                if (this.ambientLight) {
                    this.ambientLight.intensity = isDark ? 0.27 : 0.4;
                }
                if (this.hemiLight) {
                    this.hemiLight.intensity = isDark ? 0.55 : 0.8;
                }
                if (this.keyLight) {
                    this.keyLight.intensity = isDark ? 0.9 : 0.9;
                }
                if (this.fillLight) {
                    this.fillLight.intensity = isDark ? 0.15 : 0.2;
                }
                if (this.rimLight) {
                    this.rimLight.intensity = isDark ? 0.5 : 0.6;
                }

                if (this.model && this.model.material) {
                    // Middle ground color and roughness
                    this.model.material.color.set(isDark ? 0xaaaaaa : 0x707070);
                    this.model.material.roughness = isDark ? 0.5 : 0.4;
                    this.model.material.needsUpdate = true;
                }
            }

            onMouseMove(event) {
                if (!this.isHovering || this.isDebugMode) return;

                const rect = this.container.getBoundingClientRect();
                this.mouseX = ((event.clientX - rect.left) / rect.width) * 2 - 1;
                this.mouseY = -((event.clientY - rect.top) / rect.height) * 2 + 1;

                const baseRadX = THREE.Math.degToRad(this.baseRotationX);
                const baseRadZ = THREE.Math.degToRad(this.baseRotationZ);

                this.targetRotationX = baseRadX + this.mouseY * (Math.PI * 0.5);
                this.targetRotationY = THREE.Math.degToRad(this.baseRotationY);
                this.targetRotationZ = baseRadZ + this.mouseX * (Math.PI * 0.5);
            }

            animate() {
                requestAnimationFrame(() => this.animate());

                if (this.model) {
                    if (this.isDebugMode && window.debugValues) {
                        this.model.rotation.x = THREE.Math.degToRad(window.debugValues.rotation.x);
                        this.model.rotation.y = THREE.Math.degToRad(window.debugValues.rotation.y);
                        this.model.rotation.z = THREE.Math.degToRad(window.debugValues.rotation.z);

                        this.model.material.roughness = window.debugValues.material.roughness;
                        this.model.material.metalness = window.debugValues.material.metalness;

                        if (this.ambientLight) this.ambientLight.intensity = window.debugValues.lighting.ambient;
                        if (this.keyLight) this.keyLight.intensity = window.debugValues.lighting.key;
                        if (this.fillLight) this.fillLight.intensity = window.debugValues.lighting.fill;
                        if (this.rimLight) this.rimLight.intensity = window.debugValues.lighting.rim;
                    } else if (this.isHovering) {
                        this.currentRotationX += (this.targetRotationX - this.currentRotationX) * 0.1;
                        this.currentRotationY += (this.targetRotationY - this.currentRotationY) * 0.1;
                        this.currentRotationZ += (this.targetRotationZ - this.currentRotationZ) * 0.1;

                        this.model.rotation.x = this.currentRotationX;
                        this.model.rotation.y = this.currentRotationY;
                        this.model.rotation.z = this.currentRotationZ;
                    } else {
                        // Return to base rotation softly
                        const baseRadX = THREE.Math.degToRad(this.baseRotationX);
                        const baseRadY = THREE.Math.degToRad(this.baseRotationY);
                        const baseRadZ = THREE.Math.degToRad(this.baseRotationZ);

                        this.model.rotation.x += (baseRadX - this.model.rotation.x) * 0.05;
                        this.model.rotation.y += (baseRadY - this.model.rotation.y) * 0.05;
                        this.model.rotation.z += (baseRadZ - this.model.rotation.z) * 0.05;
                    }
                }

                this.renderer.render(this.scene, this.camera);
            }

            onWindowResize() {
                const width = this.container.clientWidth;
                const height = this.container.clientHeight;
                this.camera.aspect = width / height;
                this.camera.updateProjectionMatrix();
                this.renderer.setSize(width, height);
            }

            setDebugMode(enabled) {
                this.isDebugMode = enabled;
                if (!enabled) {
                    // Reset to base on disable
                    this.currentRotationX = THREE.Math.degToRad(this.baseRotationX);
                    this.currentRotationY = THREE.Math.degToRad(this.baseRotationY);
                    this.currentRotationZ = THREE.Math.degToRad(this.baseRotationZ);
                }
            }

            updateBaseRotation(x, y, z) {
                this.baseRotationX = x;
                this.baseRotationY = y;
                this.baseRotationZ = z;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const viewers = [];
            document.querySelectorAll('[data-model-viewer]').forEach(element => {
                const modelPath = element.getAttribute('data-model-path');
                const designId = element.getAttribute('data-design-id');
                const rotX = parseFloat(element.getAttribute('data-rotation-x') || -90);
                const rotY = parseFloat(element.getAttribute('data-rotation-y') || 0);
                const rotZ = parseFloat(element.getAttribute('data-rotation-z') || 0);

                if (modelPath) {
                    const viewer = new ModelViewer(element, modelPath, {
                        x: rotX,
                        y: rotY,
                        z: rotZ
                    }, designId);
                    viewers.push(viewer);
                }
            });

        });
    </script>
</body>

</html>
