@extends('layouts.app')
@section('title', 'Error 404 | Page Not Found')
@section('content')

<style>
    .error-404-wrap {
        position: relative;
        min-height: 100vh;
        background: #0a0e14;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }
    #bim-canvas {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .error-404-overlay {
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 40px 20px;
        background: radial-gradient(circle, rgba(10,14,20,0.55) 0%, rgba(10,14,20,0.85) 70%);
        border-radius: 20px;
        max-width: 700px;
    }
    .error-404-code {
        font-size: 7rem;
        font-weight: 800;
        letter-spacing: 4px;
        margin: 0;
        line-height: 1;
        background: linear-gradient(90deg, #EC6502, #ff9a4d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .error-404-sub {
        font-size: 1.6rem;
        font-weight: 600;
        margin: 10px 0 6px;
        color: #fff;
    }
    .error-404-tag {
        font-size: 1rem;
        color: #9aa5b1;
        margin-bottom: 30px;
        letter-spacing: 0.5px;
    }
    .error-404-btns {
        display: flex;
        gap: 16px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .error-404-btns a {
        padding: 14px 28px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        letter-spacing: 0.3px;
    }
    .btn-primary-404 {
        background: #EC6502;
        color: #fff;
        box-shadow: 0 4px 20px rgba(236,101,2,0.4);
    }
    .btn-primary-404:hover {
        background: #d45a00;
        transform: translateY(-2px);
    }
    .btn-outline-404 {
        border: 1.5px solid #EC6502;
        color: #EC6502;
        background: transparent;
    }
    .btn-outline-404:hover {
        background: rgba(236,101,2,0.1);
        transform: translateY(-2px);
    }
    @media (max-width: 576px) {
        .error-404-code { font-size: 4.5rem; }
        .error-404-sub { font-size: 1.2rem; }
    }
</style>

<div class="error-404-wrap">
    <canvas id="bim-canvas"></canvas>
    <div class="error-404-overlay">
        <p class="error-404-code">404 </p>
        <p class="error-404-sub">Page Not Found</p>
        <p class="error-404-tag">The requested page could not be found. It may have been moved, removed, or the URL may be incorrect.</p>
        <div class="error-404-btns">
            <a href="{{ url('/') }}" class="btn-primary-404">Back to Home</a>
            <a href="{{ url('/contact') }}" class="btn-outline-404">Contact Us</a>
        </div>
    </div>
</div>
@include('sections.location')
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
(function() {
    const canvas = document.getElementById('bim-canvas');
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Group for the BIM structure (building wireframe grid)
    const group = new THREE.Group();
    scene.add(group);

    const orangeColor = 0xEC6502;
    const greyColor = 0x2c3e50;

    // Build floors (grid boxes stacked = BIM building structure)
    const floors = 8;
    const gridSize = 5;
    const spacing = 1.6;

    for (let f = 0; f < floors; f++) {
        const floorGeo = new THREE.BoxGeometry(gridSize * spacing, 0.02, gridSize * spacing);
        const edges = new THREE.EdgesGeometry(floorGeo);
        const color = f % 3 === 0 ? orangeColor : greyColor;
        const mat = new THREE.LineBasicMaterial({ color: color, transparent: true, opacity: f % 3 === 0 ? 0.9 : 0.35 });
        const line = new THREE.LineSegments(edges, mat);
        line.position.y = f * spacing - (floors * spacing) / 2;
        group.add(line);
    }

    // Vertical columns connecting floors
    const columnPositions = [
        [-gridSize*spacing/2, -gridSize*spacing/2],
        [gridSize*spacing/2, -gridSize*spacing/2],
        [-gridSize*spacing/2, gridSize*spacing/2],
        [gridSize*spacing/2, gridSize*spacing/2],
    ];
    columnPositions.forEach(pos => {
        const colGeo = new THREE.BufferGeometry().setFromPoints([
            new THREE.Vector3(pos[0], -(floors*spacing)/2, pos[1]),
            new THREE.Vector3(pos[0], (floors*spacing)/2, pos[1])
        ]);
        const colMat = new THREE.LineBasicMaterial({ color: greyColor, transparent: true, opacity: 0.4 });
        group.add(new THREE.Line(colGeo, colMat));
    });

    // Floating nodes (BIM data points)
    const nodeGeo = new THREE.SphereGeometry(0.05, 8, 8);
    const nodeMat = new THREE.MeshBasicMaterial({ color: orangeColor });
    const nodes = [];
    for (let i = 0; i < 25; i++) {
        const node = new THREE.Mesh(nodeGeo, nodeMat.clone());
        node.position.set(
            (Math.random() - 0.5) * gridSize * spacing,
            (Math.random() - 0.5) * floors * spacing,
            (Math.random() - 0.5) * gridSize * spacing
        );
        node.material.opacity = 0.7;
        node.material.transparent = true;
        group.add(node);
        nodes.push(node);
    }

    camera.position.set(9, 3, 9);
    camera.lookAt(0, 0, 0);

    let mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX / window.innerWidth - 0.5);
        mouseY = (e.clientY / window.innerHeight - 0.5);
    });

    function animate() {
        requestAnimationFrame(animate);
        group.rotation.y += 0.0025;
        group.rotation.x = mouseY * 0.15;

        nodes.forEach((n, i) => {
            n.position.y += Math.sin(Date.now() * 0.001 + i) * 0.0015;
            n.material.opacity = 0.4 + Math.abs(Math.sin(Date.now() * 0.001 + i)) * 0.5;
        });

        camera.position.x = 9 + mouseX * 1.5;
        camera.lookAt(0, 0, 0);

        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
})();
</script>
@endpush