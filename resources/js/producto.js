const quantityInput = document.getElementById("quantity");

function updateQuantity() {
    if (quantityInput.value < 1) {
        quantityInput.value = 1;
    }
    quantityInput.value = parseInt(quantityInput.value);
}

function incrementQuantity() {
    quantityInput.value = parseInt(quantityInput.value) + 1;
    updateQuantity();
}

function decrementQuantity() {
    quantityInput.value = parseInt(quantityInput.value) - 1;
    updateQuantity();
}

quantityInput.addEventListener("input", updateQuantity);
document.getElementById("decrement").addEventListener("click", decrementQuantity);
document.getElementById("increment").addEventListener("click", incrementQuantity);

window.addEventListener("load", () => {

    const main_img = document.querySelector('.main-img');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function () {
            const active = document.querySelector('.active');
            active.classList.remove('active');
            thumb.classList.add('active');           
            main_img.src = thumb.src;
        })
    })

    const producto = window.producto;
    const presentaciones = document.getElementById('presentaciones');
    presentaciones.innerHTML = '';
    const tamanos = document.getElementById('tamanos');
    tamanos.innerHTML = '';

    let tamanosSinFiltros = JSON.parse(JSON.stringify(producto));;

    let tamanosFiltraodos = bubbleSortTamano(eliminarRepetidosTamanos(tamanosSinFiltros));

    // Crea los botones de tamaños
    for (let i = 0; i < tamanosFiltraodos.precios.length; i++) {
        if (i == 0) {
            const tamanoHtml = `<button type="button" name="btnTamano[${i}]" id="btnTamano[${i}]" class="btn-pm btn-tamano btn-pm-active me-2">${tamanosFiltraodos.precios[i].tamano.nombre}</button>`;
            tamanos.insertAdjacentHTML('beforeend', tamanoHtml);
        } else {
            const tamanoHtml = `<button type="button" name="btnTamano[${i}]" id="btnTamano[${i}]" class="btn-pm btn-tamano me-2">${tamanosFiltraodos.precios[i].tamano.nombre}</button>`;
            tamanos.insertAdjacentHTML('beforeend', tamanoHtml);
        }
    }

    let tamanoPresentacion = document.getElementById('btnTamano[0]');

    let presentacionesSinFiltros = JSON.parse(JSON.stringify(producto));;

    let presentacionesFiltrados = eliminarRepetidosPresentaciones(presentacionesSinFiltros);

    // Crea los botones de presentaciones de ese tamaño
    let count = 0;
    for (let i = 0; i < presentacionesFiltrados.precios.length; i++) {
        if (presentacionesFiltrados.precios[i].tamano.nombre == tamanoPresentacion.textContent) {
            if (count == 0) {
                const presentacionHtml = `<button type="button" name="btnPresentacion[${i}]" id="btnPresentacion[${i}]" class="btn-pm btn-presentacion btn-pm-active me-2">${presentacionesFiltrados.precios[i].presentacion.nombre}</button>`;
                presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
                const precioActual = parseInt(presentacionesFiltrados.precios[i].precio_actual, 10);
                document.querySelector('h3').textContent = `$ ${precioActual.toLocaleString('en-US')}`;
                count++;
            } else {
                const presentacionHtml = `<button type="button" name="btnPresentacion[${i}]" id="btnPresentacion[${i}]" class="btn-pm btn-presentacion me-2">${presentacionesFiltrados.precios[i].presentacion.nombre}</button>`;
                presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
                count++;
            }
        }
    }

    loadPresentacion();

    loadTamanos();
})

// Función para cargar los eventos de las presentaciones
function loadPresentacion() {
    // Agrega un evento de clic a los botones de presentaciones
    document.querySelectorAll('.btn-presentacion').forEach(el => {
        el.addEventListener('click', function () {

            document.querySelector('.btn-pm-active.btn-presentacion').classList.remove('btn-pm-active');

            // Obtiene el índice del botón de presentación seleccionado
            const index = this.id.replace('btnPresentacion[', '').replace(']', '');

            el.classList.add('btn-pm-active');

            // Obtiene la presentación seleccionada
            const presentacionSeleccionada = this.textContent;

            // Obtiene la tamano seleccionada
            const tamanoSeleccionado = document.querySelector('.btn-pm-active.btn-tamano').textContent;

            // Actualiza el precio
            let precioActual = undefined;

            for (let i = 0; i < producto.precios.length; i++) {
                if (producto.precios[i].presentacion.nombre == presentacionSeleccionada && producto.precios[i].tamano.nombre == tamanoSeleccionado) {
                    precioActual = parseInt(producto.precios[i].precio_actual, 10);
                }
            }


            document.querySelector('h3').textContent = `$ ${precioActual.toLocaleString('en-US')}`;
        });
    });
}

// Función para cargar los eventos de los tamaños
function loadTamanos() {
    // Agrega un evento de clic a los botones de tamano
    document.querySelectorAll('.btn-tamano').forEach(el => {
        el.addEventListener('click', function () {
            // Obtiene el índice del botón de tamano seleccionado

            document.querySelector('.btn-pm-active.btn-tamano').classList.remove('btn-pm-active');

            const index = this.id.replace('btnTamano[', '').replace(']', '');

            el.classList.add('btn-pm-active');

            // Obtiene la tamano seleccionada
            const tamanoSeleccionado = this.textContent;

            const presentacionesFiltrados = [];

            // Filtra las opciones de presentaciones según la tamano seleccionada
            producto.precios.forEach(precioItem => {
                if (precioItem.tamano.nombre === tamanoSeleccionado) {
                    presentacionesFiltrados.push(precioItem);
                }
            })

            // Actualiza las opciones de presentaciones
            const presentaciones = document.getElementById('presentaciones');
            presentaciones.innerHTML = '';
            presentacionesFiltrados.forEach((precioItem, index) => {
                if (index == 0) {
                    const presentacionHtml = `<button id="btnPresentacion[${index}]" name="btnPresentacion[${index}]" class="btn-pm btn-presentacion btn-pm-active me-2">${precioItem.presentacion.nombre}</button>`;
                    presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
                } else {
                    const presentacionHtml = `<button id="btnPresentacion[${index}]" name="btnPresentacion[${index}]"
        class="btn-pm btn-presentacion me-2">${precioItem.presentacion.nombre}</button>`;
                    presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
                }
            });

            // Actualiza el precio
            const precioActual = parseInt(presentacionesFiltrados[0].precio_actual, 10);
            document.querySelector('h3').textContent = `$ ${precioActual.toLocaleString('en-US')}`;
            loadPresentacion();
        });
    });
}

// Función para ordenar las presentaciones
function bubbleSortPresentacion() {
    let swapped = false;
    for (let i = producto.precios.length; i > 0; i--) {
        swapped = true;
        for (let j = 0; j < i - 1; j++) {
            const nombre1 = parseInt(producto.precios[j].presentacion.nombre.replace(/\D/g, ''));
            const nombre2 = parseInt(producto.precios[j + 1].presentacion.nombre.replace(/\D/g, ''));
            if (nombre1 > nombre2) {
                swapped = false;

                const temp = producto.precios[j];
                producto.precios[j] = producto.precios[j + 1];
                producto.precios[j + 1] = temp;
            }
        }
        if (swapped) break;
    }
}

// Función para ordenar los tamaños
function bubbleSortTamano(arr) {
    let swapped = false;
    let length = arr.precios.length;
    for (let i = length; i > 0; i--) {
        swapped = true;
        for (let j = 0; j < i - 1; j++) {
            const nombre1 = parseInt(arr.precios[j].tamano.nombre.replace(/\D/g, ''));
            const nombre2 = parseInt(arr.precios[j + 1].tamano.nombre.replace(/\D/g, ''));
            if (nombre1 > nombre2) {

                swapped = false;
                const temp = arr.precios[j];
                arr.precios[j] = arr.precios[j + 1];
                arr.precios[j + 1] = temp;
            }
        }
        if (swapped) break;
    }

    return arr;
}

// Función para eliminar los tamaños repetidos
function eliminarRepetidosTamanos(array) {
    let arraySinRepetidos = [];
    array.precios.forEach(precioItem => {
        if (!arraySinRepetidos.some(precio => precio.tamano.id === precioItem.tamano.id)) {
            arraySinRepetidos.push(precioItem);
        }
    });
    array.precios = arraySinRepetidos;
    return array;
}

function eliminarRepetidosPresentaciones(array) {
    let arraySinRepetidos = [];
    array.precios.forEach(precioItem => {
        if (!arraySinRepetidos.some(precio => precio.presentacion.id === precioItem.presentacion.id)) {
            arraySinRepetidos.push(precioItem);
        }
    });
    array.precios = arraySinRepetidos;
    return array;
}

