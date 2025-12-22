<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portfolio') - {{ config('app.name', 'Design Portfolio') }}</title>

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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #0f0f0f;
            color: #e5e5e5;
            line-height: 1.6;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            padding: 3rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .portfolio-card {
            background: #1a1a1a;
            border-radius: 2px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            transition: all 0.2s ease;
            cursor: pointer;
            border: 1px solid #2a2a2a;
        }

        .portfolio-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            border-color: #3a3a3a;
        }

        .portfolio-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .portfolio-card-content {
            padding: 1.5rem;
        }

        .portfolio-card-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #ffffff;
            letter-spacing: 0.3px;
        }

        .portfolio-card-category {
            display: inline-block;
            background-color: #2a2a2a;
            color: #999;
            padding: 0.35rem 0.8rem;
            border-radius: 2px;
            font-size: 0.8rem;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .portfolio-card-description {
            color: #999;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .btn-view {
            display: inline-block;
            background-color: transparent;
            color: #e5e5e5;
            padding: 0.5rem 1rem;
            border: 1px solid #3a3a3a;
            border-radius: 2px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.2s ease;
            letter-spacing: 0.3px;
        }

        .btn-view:hover {
            background-color: #1a1a1a;
            border-color: #5a5a5a;
            color: #ffffff;
        }

        header {
            background-color: #0a0a0a;
            border-bottom: 1px solid #2a2a2a;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: 700;
            text-decoration: none;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        nav a {
            text-decoration: none;
            color: #999;
            margin-left: 2.5rem;
            font-weight: 500;
            transition: color 0.2s ease;
            font-size: 0.95rem;
            letter-spacing: 0.2px;
        }

        nav a:hover {
            color: #ffffff;
        }

        .category-filters {
            display: flex;
            gap: 0.75rem;
            padding: 2rem;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1400px;
            margin: 0 auto;
            border-bottom: 1px solid #2a2a2a;
        }

        .filter-btn {
            background-color: transparent;
            border: 1px solid #3a3a3a;
            padding: 0.5rem 1.2rem;
            border-radius: 2px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
            color: #999;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
            text-transform: capitalize;
        }

        .filter-btn:hover {
            border-color: #5a5a5a;
            color: #e5e5e5;
        }

        .filter-btn.active {
            background-color: #ffffff;
            color: #0f0f0f;
            border-color: #ffffff;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero {
            background-color: #0a0a0a;
            color: #e5e5e5;
            padding: 5rem 2rem;
            text-align: center;
            border-bottom: 1px solid #2a2a2a;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            letter-spacing: -1px;
            color: #ffffff;
        }

        .hero p {
            font-size: 1.05rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
            letter-spacing: 0.3px;
        }

        .model-viewer {
            width: 100%;
            height: 250px;
            background: #1a1a1a;
            border-radius: 2px;
            position: relative;
            overflow: hidden;
            border: 1px solid #2a2a2a;
        }

        .model-viewer canvas {
            display: block;
            width: 100%;
            height: 100%;
        }

        .model-viewer-label {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: #999;
            padding: 0.4rem 0.8rem;
            border-radius: 2px;
            font-size: 0.75rem;
            pointer-events: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .model-viewer:hover .model-viewer-label {
            opacity: 1;
        }

        .model-viewer-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #999;
            font-size: 0.85rem;
            background: rgba(0, 0, 0, 0.6);
            padding: 1rem;
            border-radius: 2px;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-container">
            <a href="{{ route('portfolio.index') }}" class="logo">Hugo's 3D Design Portfolio</a>
            <nav>
                <a href="{{ route('portfolio.index') }}">Home</a>
                <a href="{{ route('pictures.index') }}">Pictures</a>
                <a href="{{ route('portfolio.contact') }}">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer style="background-color: #1a1a1a; color: white; padding: 3rem 2rem; text-align: center;">
        <div class="container">
            <p>&copy; {{ date('Y') }} Hugo's 3D Design Portfolio. All rights reserved.</p>
            <p style="margin-top: 0.5rem; opacity: 0.7;">Showcasing premium 3D designs and visualizations.</p>
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
                loader.className = 'model-viewer-loading';
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
                this.scene.background = new THREE.Color(0x1a1a1a);

                this.camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
                this.camera.position.set(0, 0, 100);

                this.renderer = new THREE.WebGLRenderer({ antialias: true });
                this.renderer.setSize(width, height);
                this.renderer.setPixelRatio(window.devicePixelRatio);
                this.renderer.setClearColor(0x1a1a1a, 1);
                this.container.appendChild(this.renderer.domElement);

                this.ambientLight = new THREE.AmbientLight(0xffffff, 0.2);
                this.scene.add(this.ambientLight);

                const hemisphereLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.5);
                this.scene.add(hemisphereLight);

                this.keyLight = new THREE.DirectionalLight(0xffffff, 1.0);
                this.keyLight.position.set(50, 50, 50);
                this.scene.add(this.keyLight);

                this.fillLight = new THREE.DirectionalLight(0xffffff, 0);
                this.fillLight.position.set(-50, 0, 50);
                this.scene.add(this.fillLight);

                this.rimLight = new THREE.DirectionalLight(0xffffff, 0.7);
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

        document.addEventListener('DOMContentLoaded', function () {
            const viewers = [];
            document.querySelectorAll('[data-model-viewer]').forEach(element => {
                const modelPath = element.getAttribute('data-model-path');
                const designId = element.getAttribute('data-design-id');
                const rotX = parseFloat(element.getAttribute('data-rotation-x') || -90);
                const rotY = parseFloat(element.getAttribute('data-rotation-y') || 0);
                const rotZ = parseFloat(element.getAttribute('data-rotation-z') || 0);

                if (modelPath) {
                    const viewer = new ModelViewer(element, modelPath, { x: rotX, y: rotY, z: rotZ }, designId);
                    viewers.push(viewer);
                }
            });

        });
    </script>
</body>

</html>