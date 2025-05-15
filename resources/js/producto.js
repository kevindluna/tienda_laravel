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
    const producto = window.producto;
    const presentaciones = document.getElementById('presentaciones');
    presentaciones.innerHTML = '';
    const tamanos = document.getElementById('tamanos');
    tamanos.innerHTML = '';

    let presentacionesSinFiltros = producto;

    let presentacionesFiltrados = eliminarRepetidosPresentaciones(presentacionesSinFiltros);
    for (let i = 0; i < presentacionesFiltrados.precios.length; i++) {
        if (i == 0) {
            const presentacionHtml = `<button type="button" name="btnPresentacion[${i}]" id="btnPresentacion[${i}]" class="btn-pm btn-pm-active me-2">${presentacionesFiltrados.precios[i].presentacion.nombre}</button>`;
            presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
        } else {
            const presentacionHtml = `<button type="button" name="btnPresentacion[${i}]" id="btnPresentacion[${i}]" class="btn-pm me-2">${presentacionesFiltrados.precios[i].presentacion.nombre}</button>`;
            presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
        }
    }

    let tamanosSinFiltros = producto;

    let tamanosFiltraodos = bubbleSortTamano(eliminarRepetidos(tamanosSinFiltros));

    for(let i = 0; i < tamanosFiltraodos.precios.length; i++) {
        if (i == 0) {
            const tamanoHtml = `<button type="button" name="btnTamano[${i}]" id="btnTamano[${i}]" class="btn-pm btn-pm-active me-2">${tamanosFiltraodos.precios[i].tamano.nombre}</button>`;
            tamanos.insertAdjacentHTML('beforeend', tamanoHtml);
        } else {
            const tamanoHtml = `<button type="button" name="btnTamano[${i}]" id="btnTamano[${i}]" class="btn-pm me-2">${tamanosFiltraodos.precios[i].tamano.nombre}</button>`;
            tamanos.insertAdjacentHTML('beforeend', tamanoHtml);
        }
    }

    // Agrega un evento de clic a los botones de tamano
    document.querySelectorAll('.btn-pm').forEach(el => {
        el.addEventListener('click', function () {
            console.log("click");
            // Obtiene el índice del botón de tamano seleccionado

            document.querySelector('.btn-pm-active').classList.remove('btn-pm-active');

            const index = this.id.replace('btnTamano[', '').replace(']', '');

            el.classList.add('btn-pm-active');

            // Obtiene la tamano seleccionada
            const tamanoSeleccionada = this.textContent;
            console.log(tamanoSeleccionada);

            const presentacionesFiltrados = [];

            // Filtra las opciones de presentaciones según la tamano seleccionada
            producto.precios.forEach(precioItem => {
                console.log(precioItem);
                if (precioItem.tamano.nombre === tamanoSeleccionada) {
                    // console.log(precioItem);
                    presentacionesFiltrados.push(precioItem);
                }
            })

            // Actualiza las opciones de presentaciones
            document.querySelectorAll('.btn-pm[name="btnPresentacion[]"]').forEach(el => el.remove());
            const presentaciones = document.getElementById('presentaciones');
            presentaciones.innerHTML = '';
            presentacionesFiltrados.forEach((precioItem, index) => {
                if (index == 0) {
                    const presentacionHtml = `<button id="btnPresentacion[${index}]" name="btnPresentacion[${index}]" class="btn-pm btn-pm-active me-2">${precioItem.presentacion.nombre}</button>`;
                    presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
                } else {
                    const presentacionHtml = `<button id="btnPresentacion[${index}]" name="btnPresentacion[${index}]"
        class="btn-pm me-2">${precioItem.presentacion.nombre}</button>`;
                    presentaciones.insertAdjacentHTML('beforeend', presentacionHtml);
                }
            });

            // Actualiza el precio
            const precioActual = parseInt(presentacionesFiltrados[0].precio_actual, 10);
            document.querySelector('h3').textContent = `$ ${precioActual.toLocaleString('en-US')}`;
        });
    });
})

function bubbleSortPresentacion() {
    let swapped = false;
    for (let i = producto.precios.length; i > 0; i--) {
        swapped = true;
        for (let j = 0; j < i - 1; j++) {

            const nombre1 = parseInt(producto.precios[j].presentacion.nombre.replace(/\D/g, ''));
            const nombre2 = parseInt(producto.precios[j + 1].presentacion.nombre.replace(/\D/g, ''));
            if (nombre1 > nombre2) {
                // Utilizamos ES6 para de-estructurar e intercambiar los valores a la vez
                //[producto[j], producto[j + 1]] = [producto[j + 1], producto[j]]
                swapped = false;
                // Para intercambiar los valores imperativamente, quitale los comentarios
                // a las próximas lineas y comenta la línea de ES6
                const temp = producto.precios[j];
                producto.precios[j] = producto.precios[j + 1];
                producto.precios[j + 1] = temp;
            }
        }
        if (swapped) break;
    }
}

function bubbleSortTamano(arr) {

    let swapped = false;
    let length = arr.precios.length;
    for (let i = length; i > 0; i--) {
        swapped = true;
        for (let j = 0; j < i - 1; j++) {
            const nombre1 = parseInt(arr.precios[j].tamano.nombre.replace(/\D/g, ''));
            console.log(j, nombre1);
            const nombre2 = parseInt(arr.precios[j + 1].tamano.nombre.replace(/\D/g, ''));
            console.log(j, nombre2);
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

function eliminarRepetidos(array) {
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

