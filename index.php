<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Bulonera Master | Tu ferretería de confianza</title>
    <!-- Font Awesome 6 (gratis, llamativo) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: modernas y atractivas -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7fc;
            color: #1e2a3e;
            line-height: 1.4;
        }

        /* HEADER estilos llamativos */
        .hero {
            background: linear-gradient(135deg, #0b2b40 0%, #1c5d7a 100%);
            padding: 2rem 1.5rem;
            text-align: center;
            color: white;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .hero h1 {
            font-size: 2.6rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .hero h1 i {
            color: #ffd966;
            margin-right: 8px;
        }
        .hero p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
            opacity: 0.9;
            font-weight: 500;
        }
        .badge {
            background: #ffb347;
            display: inline-block;
            padding: 0.3rem 1rem;
            border-radius: 40px;
            font-weight: 700;
            margin-top: 0.8rem;
            font-size: 0.9rem;
            color: #1e2a3e;
        }

        /* Navegación pestañas */
        .tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            background: white;
            padding: 0.8rem 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            flex-wrap: wrap;
            border-bottom: 2px solid #e2e8f0;
        }
        .tab-btn {
            background: transparent;
            border: none;
            font-size: 1.2rem;
            font-weight: 700;
            padding: 0.7rem 1.8rem;
            border-radius: 60px;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #2c3e50;
        }
        .tab-btn i {
            font-size: 1.2rem;
        }
        .tab-btn.active {
            background: #1c5d7a;
            color: white;
            box-shadow: 0 6px 12px rgba(28,93,122,0.3);
        }
        .tab-btn:hover:not(.active) {
            background: #eef2f5;
            transform: translateY(-2px);
        }

        /* contenido pestañas */
        .tab-content {
            display: none;
            padding: 2rem 1.5rem;
            max-width: 1400px;
            margin: 0 auto;
            animation: fadeIn 0.3s ease;
        }
        .tab-content.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px);}
            to { opacity: 1; transform: translateY(0);}
        }

        /* buscador productos */
        .search-box {
            margin-bottom: 2rem;
            display: flex;
            justify-content: center;
        }
        .search-box input {
            width: 100%;
            max-width: 500px;
            padding: 0.9rem 1.5rem;
            border-radius: 60px;
            border: 2px solid #cbd5e1;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: 0.2s;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        .search-box input:focus {
            outline: none;
            border-color: #1c5d7a;
            box-shadow: 0 0 0 3px rgba(28,93,122,0.2);
        }

        /* grid productos */
        .productos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 2rem;
            margin-top: 1rem;
        }
        .product-card {
            background: white;
            border-radius: 28px;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 12px 24px -12px rgba(0,0,0,0.1);
            border: 1px solid #eef2f5;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -12px rgba(0,0,0,0.2);
        }
        .product-img {
            background: #f8fafc;
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid #eef2f5;
        }
        .product-img i {
            font-size: 4rem;
            color: #1c5d7a;
        }
        .product-img img {
            max-width: 100%;
            height: auto;
            width: 110px;
            object-fit: contain;
        }
        .product-info {
            padding: 1.2rem 1.2rem 1.5rem;
        }
        .product-info h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .precio {
            font-size: 1.7rem;
            font-weight: 800;
            color: #0b2b40;
            margin: 0.5rem 0;
        }
        .precio small {
            font-size: 0.8rem;
            font-weight: 500;
            color: #5b6e8c;
        }
        .btn-agregar {
            background: #ffb347;
            border: none;
            width: 100%;
            padding: 0.8rem;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            color: #1e2a3e;
            cursor: pointer;
            transition: 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-agregar:hover {
            background: #ff9f1c;
            transform: scale(0.98);
        }

        /* carrito */
        .carrito-vacio {
            text-align: center;
            padding: 3rem;
            background: white;
            border-radius: 2rem;
            color: #5b6e8c;
        }
        .carrito-items {
            background: white;
            border-radius: 2rem;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        .carrito-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #e2e8f0;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .cart-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 2;
        }
        .cart-info i {
            font-size: 2rem;
            color: #1c5d7a;
        }
        .cart-details h4 {
            font-weight: 700;
        }
        .cart-price {
            font-weight: 600;
        }
        .cart-qty {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }
        .cart-qty button {
            background: #eef2f5;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.2rem;
            cursor: pointer;
        }
        .cart-qty span {
            font-weight: 700;
            min-width: 30px;
            text-align: center;
        }
        .remove-item {
            background: none;
            border: none;
            color: #e07c4c;
            font-size: 1.3rem;
            cursor: pointer;
            padding: 0 8px;
        }
        .cart-total {
            background: #f8fafc;
            padding: 1.2rem 1.8rem;
            border-radius: 1.5rem;
            display: flex;
            justify-content: space-between;
            font-weight: 800;
            font-size: 1.4rem;
            margin-top: 1rem;
        }
        .btn-comprar {
            background: #2c7a4d;
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 60px;
            font-weight: bold;
            font-size: 1.1rem;
            width: 100%;
            margin-top: 1rem;
            cursor: pointer;
            transition: 0.2s;
        }
        .btn-comprar:hover {
            background: #1f5e3a;
        }

        /* sección info adicional (pestaña inicio) */
        .info-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 1.8rem;
            margin-top: 2rem;
            justify-content: center;
        }
        .card-info {
            background: white;
            border-radius: 2rem;
            padding: 1.8rem;
            flex: 1;
            min-width: 200px;
            text-align: center;
            box-shadow: 0 6px 14px rgba(0,0,0,0.05);
        }
        .card-info i {
            font-size: 2.5rem;
            color: #ffb347;
            margin-bottom: 1rem;
        }

        /* botón flotante whatsapp */
        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 32px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
            text-decoration: none;
        }
        .whatsapp-float:hover {
            transform: scale(1.08);
            background-color: #20b358;
        }

        footer {
            background: #0b2b40;
            color: #ccc;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        @media (max-width: 650px) {
            .hero h1 { font-size: 1.9rem; }
            .tab-btn { padding: 0.5rem 1.2rem; font-size: 1rem; }
            .productos-grid { gap: 1rem; }
        }
    </style>
</head>
<body>

<div class="hero">
    <h1><i class="fas fa-tools"></i> Bulonera Master</h1>
    <p>Todo para tu proyecto: tornillos, tuercas, herramientas y más</p>
    <div class="badge"><i class="fas fa-truck-fast"></i> Envíos a todo el país | Ofertas mayoristas</div>
</div>

<div class="tabs">
    <button class="tab-btn active" data-tab="inicio"><i class="fas fa-home"></i> Inicio</button>
    <button class="tab-btn" data-tab="productos"><i class="fas fa-barcode"></i> Productos</button>
    <button class="tab-btn" data-tab="carrito"><i class="fas fa-shopping-cart"></i> Carrito <span id="cartCountBadge" style="background:#ffb347; color:#1e2a3e; border-radius:20px; padding:0px 8px; margin-left:5px;">0</span></button>
</div>

<!-- Pestaña INICIO (informativa) -->
<div id="inicio" class="tab-content active">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2rem;"><i class="fas fa-hard-hat"></i> Más de 20 años de experiencia</h2>
        <p style="margin: 1rem 0; font-size: 1.1rem;">Somos la buloneria líder en la zona, ofrecemos productos de alta resistencia y asesoramiento técnico. Calidad garantizada.</p>
    </div>
    <div class="info-cards">
        <div class="card-info"><i class="fas fa-medal"></i><h3>Materiales Premium</h3><p>Acero, inox, galvanizado</p></div>
        <div class="card-info"><i class="fas fa-clock"></i><h3>Horario extendido</h3><p>Lun a Sab 8 a 20hs</p></div>
        <div class="card-info"><i class="fas fa-hand-holding-usd"></i><h3>Mejor precio</h3><p>Precios directo de fábrica</p></div>
        <div class="card-info"><i class="fas fa-truck"></i><h3>Envíos Rápidos</h3><p>Entrega en 24/48hs</p></div>
    </div>
    <div style="margin-top: 2rem; background:#ffffffcc; border-radius: 2rem; padding: 1.5rem; text-align: center;">
        <i class="fas fa-phone-alt" style="font-size: 1.8rem; color:#1c5d7a;"></i>
        <p><strong>Consultas al 11 2345-6789</strong> | Visitanos en Av. Siempre Viva 1234</p>
    </div>
</div>

<!-- Pestaña PRODUCTOS con buscador -->
<div id="productos" class="tab-content">
    <div class="search-box">
        <input type="text" id="buscadorProductos" placeholder="🔍 Buscar producto (ej: tornillo, tuerca, arandela...)">
    </div>
    <div id="productosGrid" class="productos-grid"></div>
</div>

<!-- Pestaña CARRITO -->
<div id="carrito" class="tab-content">
    <div id="carritoContainer"></div>
</div>

<!-- Botón flotante de WhatsApp -->
<a href="https://wa.me/542355541012?text=Hola%20Bulonera%20Master!%20Quisiera%20consultar%20por%20productos" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i>
</a>

<footer>
    <p>© 2025 Bulonera Master - Calidad y confianza para tus proyectos</p>
</footer>

<script>
    // ---------- BASE DE DATOS DE PRODUCTOS (buloneria) ----------
    const productosData = [
        { id: 1, nombre: "Tornillo Hexagonal M8x30", precio: 120, categoria: "tornillos", imagenIcon: "fa-bolt", stock: true },
        { id: 2, nombre: "Tuerca Autofrenante M10", precio: 85, categoria: "tuercas", imagenIcon: "fa-circle", stock: true },
        { id: 3, nombre: "Arandela Plana 1/2\"", precio: 45, categoria: "arandelas", imagenIcon: "fa-ring", stock: true },
        { id: 4, nombre: "Varilla Rosada M12 x 1m", precio: 590, categoria: "varillas", imagenIcon: "fa-charging-station", stock: true },
        { id: 5, nombre: "Perno Cabeza Allen M6x40", precio: 210, categoria: "pernos", imagenIcon: "fa-microchip", stock: true },
        { id: 6, nombre: "Tornillo Autorroscante 4.2x19", precio: 95, categoria: "tornillos", imagenIcon: "fa-screwdriver", stock: true },
        { id: 7, nombre: "Tuerca Hexagonal M12", precio: 110, categoria: "tuercas", imagenIcon: "fa-circle-notch", stock: true },
        { id: 8, nombre: "Arandela Grower M10", precio: 65, categoria: "arandelas", imagenIcon: "fa-cog", stock: true },
        { id: 9, nombre: "Remache Pop 3/16", precio: 140, categoria: "remaches", imagenIcon: "fa-puzzle-piece", stock: true },
        { id: 10, nombre: "Broca para metal 5/32", precio: 180, categoria: "herramientas", imagenIcon: "fa-drill", stock: true }
    ];

    // Carrito (array de objetos {id, nombre, precio, cantidad})
    let cart = [];

    // Referencias DOM
    const productosGrid = document.getElementById('productosGrid');
    const buscadorInput = document.getElementById('buscadorProductos');
    const cartContainer = document.getElementById('carritoContainer');
    const cartCountBadge = document.getElementById('cartCountBadge');

    // Helper: actualizar el badge del carrito
    function updateCartBadge() {
        const totalItems = cart.reduce((sum, item) => sum + item.cantidad, 0);
        cartCountBadge.innerText = totalItems;
    }

    // Guardar carrito en localStorage para demo persistente (opcional)
    function saveCartToLocal() {
        localStorage.setItem('buloneraCart', JSON.stringify(cart));
    }
    function loadCartFromLocal() {
        const stored = localStorage.getItem('buloneraCart');
        if(stored) {
            try {
                cart = JSON.parse(stored);
                // validar estructura
                if(!Array.isArray(cart)) cart = [];
                cart = cart.filter(i => i && typeof i === 'object' && i.id);
            } catch(e) { cart = []; }
        } else cart = [];
        updateCartBadge();
        renderCartTab();
        renderProductos(); // actualizar botones "Agregar" reflejan estado?
    }

    // Renderizar productos con filtro de búsqueda
    function renderProductos() {
        if(!productosGrid) return;
        let filtro = buscadorInput ? buscadorInput.value.toLowerCase().trim() : '';
        let filtered = productosData.filter(prod => prod.nombre.toLowerCase().includes(filtro));
        if(filtered.length === 0) {
            productosGrid.innerHTML = `<div style="grid-column:1/-1; text-align:center; padding:2rem;">No encontramos productos con "${filtro}" 😢</div>`;
            return;
        }
        productosGrid.innerHTML = filtered.map(prod => {
            // verificar si ya está en carrito para mostrar feedback (opcional)
            const inCart = cart.some(item => item.id === prod.id);
            return `
                <div class="product-card">
                    <div class="product-img">
                        <i class="fas ${prod.imagenIcon}"></i>
                    </div>
                    <div class="product-info">
                        <h3>${prod.nombre}</h3>
                        <div class="precio">$${prod.precio} <small>c/u</small></div>
                        <button class="btn-agregar" data-id="${prod.id}" data-nombre="${prod.nombre}" data-precio="${prod.precio}">
                            <i class="fas fa-cart-plus"></i> Agregar
                        </button>
                    </div>
                </div>
            `;
        }).join('');

        // agregar event listeners a cada botón de agregar (event delegation también funciona)
        document.querySelectorAll('.btn-agregar').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const id = parseInt(btn.getAttribute('data-id'));
                const nombre = btn.getAttribute('data-nombre');
                const precio = parseFloat(btn.getAttribute('data-precio'));
                addToCart(id, nombre, precio);
            });
        });
    }

    // Agregar al carrito
    function addToCart(id, nombre, precio) {
        const existing = cart.find(item => item.id === id);
        if(existing) {
            existing.cantidad += 1;
        } else {
            cart.push({ id, nombre, precio, cantidad: 1 });
        }
        updateCartBadge();
        saveCartToLocal();
        renderCartTab();    // actualiza la vista carrito si está visible
        // pequeño feedback visual (toast improvisado)
        showTemporaryMessage(`➕ ${nombre} agregado`);
        // si estamos en pestaña productos no afecta, pero mejoramos
        renderProductos();  // para reflejar posible "in cart" (opcional, pero no cambia botón, queda bien)
    }

    // mensajito flotante rápido
    function showTemporaryMessage(msg) {
        let toast = document.createElement('div');
        toast.innerText = msg;
        toast.style.position = 'fixed';
        toast.style.bottom = '90px';
        toast.style.left = '50%';
        toast.style.transform = 'translateX(-50%)';
        toast.style.backgroundColor = '#1c5d7a';
        toast.style.color = 'white';
        toast.style.padding = '0.7rem 1.5rem';
        toast.style.borderRadius = '40px';
        toast.style.fontWeight = 'bold';
        toast.style.zIndex = '200';
        toast.style.boxShadow = '0 4px 12px rgba(0,0,0,0.2)';
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 1800);
    }

    // Renderizar pestaña carrito
    function renderCartTab() {
        if(!cartContainer) return;
        if(cart.length === 0) {
            cartContainer.innerHTML = `<div class="carrito-vacio"><i class="fas fa-shopping-basket" style="font-size:3rem; opacity:0.5;"></i><p>Tu carrito está vacío. ¡Agrega productos!</p></div>`;
            return;
        }
        let total = 0;
        const itemsHtml = cart.map((item, idx) => {
            const subtotal = item.precio * item.cantidad;
            total += subtotal;
            return `
                <div class="carrito-item" data-id="${item.id}">
                    <div class="cart-info">
                        <i class="fas fa-cube"></i>
                        <div class="cart-details">
                            <h4>${item.nombre}</h4>
                            <div class="cart-price">$${item.precio} c/u</div>
                        </div>
                    </div>
                    <div class="cart-qty">
                        <button class="decrease-qty" data-id="${item.id}">-</button>
                        <span>${item.cantidad}</span>
                        <button class="increase-qty" data-id="${item.id}">+</button>
                        <button class="remove-item" data-id="${item.id}"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <div style="font-weight:700;">$${subtotal}</div>
                </div>
            `;
        }).join('');
        cartContainer.innerHTML = `
            <div class="carrito-items">
                ${itemsHtml}
            </div>
            <div class="cart-total">
                <span>TOTAL</span>
                <span>$${total.toFixed(2)}</span>
            </div>
            <button class="btn-comprar" id="finalizarCompraBtn"><i class="fab fa-whatsapp"></i> Finalizar pedido por WhatsApp</button>
        `;

        // Eventos de cantidad y eliminar
        document.querySelectorAll('.increase-qty').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const id = parseInt(btn.getAttribute('data-id'));
                const item = cart.find(i => i.id === id);
                if(item) {
                    item.cantidad += 1;
                    updateCartBadge();
                    saveCartToLocal();
                    renderCartTab();
                    renderProductos(); // actualiza por si acaso
                }
            });
        });
        document.querySelectorAll('.decrease-qty').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const id = parseInt(btn.getAttribute('data-id'));
                const item = cart.find(i => i.id === id);
                if(item) {
                    if(item.cantidad > 1) {
                        item.cantidad -= 1;
                    } else {
                        // eliminar si llega a 0
                        const idx = cart.findIndex(i => i.id === id);
                        if(idx !== -1) cart.splice(idx,1);
                    }
                    updateCartBadge();
                    saveCartToLocal();
                    renderCartTab();
                    renderProductos();
                }
            });
        });
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const id = parseInt(btn.getAttribute('data-id'));
                const idx = cart.findIndex(i => i.id === id);
                if(idx !== -1) cart.splice(idx,1);
                updateCartBadge();
                saveCartToLocal();
                renderCartTab();
                renderProductos();
                showTemporaryMessage("🗑 Producto eliminado");
            });
        });

        const finalizarBtn = document.getElementById('finalizarCompraBtn');
        if(finalizarBtn) {
            finalizarBtn.addEventListener('click', () => {
                if(cart.length === 0) {
                    alert("Carrito vacío, agrega productos para comprar.");
                    return;
                }
                let mensaje = "Hola! Quisiera comprar:%0A";
                cart.forEach(item => {
                    mensaje += `- ${item.nombre} x${item.cantidad} = $${item.precio * item.cantidad}%0A`;
                });
                const totalPedido = cart.reduce((sum,i)=> sum + (i.precio * i.cantidad),0);
                mensaje += `%0ATOTAL: $${totalPedido}%0A%0AGracias, espero su confirmación.`;
                const url = `https://wa.me/542355541012?text=${mensaje}`;
                window.open(url, '_blank');
            });
        }
    }

    // ----- Sistema de pestañas + eventos -----
    function switchTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('active');
        });
        const activeTab = document.getElementById(tabId);
        if(activeTab) activeTab.classList.add('active');
        // actualizar botones activos
        document.querySelectorAll('.tab-btn').forEach(btn => {
            const btnTab = btn.getAttribute('data-tab');
            if(btnTab === tabId) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
        // Si la pestaña activa es carrito, volver a renderizar (por si cambió desde otro lado)
        if(tabId === 'carrito') {
            renderCartTab();
        } else if(tabId === 'productos') {
            renderProductos();
        }
    }

    // inicializar eventos de tabs
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const tabId = btn.getAttribute('data-tab');
            switchTab(tabId);
        });
    });

    // escuchar cambios en buscador productos
    if(buscadorInput) {
        buscadorInput.addEventListener('input', () => {
            if(document.getElementById('productos').classList.contains('active')) {
                renderProductos();
            } else {
                // igual lo renderiza pero no es necesario visualmente, pero se fuerza al cambiar pestaña
            }
            renderProductos();
        });
    }

    // Cargar carrito desde localStorage y renderizar todo
    loadCartFromLocal();
    renderProductos();    // primera carga productos
    // Asegurar que se vea la pestaña inicio (activa por defecto)
    // Si el carrito tiene items, el badge ya se actualiza.
    // Sincronización extra: Cada vez que se rendericen productos, el carrito badge se mantiene.
    // También actualizar el carrito cuando se agrega desde productos.
    window.addEventListener('load', () => {
        renderCartTab(); // sincroniza vista carrito por si hay datos guardados
    });
</script>
</body>
</html>