function ventana() {
    // Crear elementos para el contenido del modal
    var content = document.getElementById('content');
    var container = document.createElement('div');
    var label = document.createElement('label');
    var input = document.createElement('input');
    
    // Asignar atributos y clases
    input.name = 'envio';
    input.setAttribute('type', 'email');
    input.setAttribute('placeholder', 'Ingresa tu correo');
    container.classList.add('modal-content');
    
    // Asignar contenido al modal
    label.textContent = "Correo electrónico:";
    container.textContent = "Bienvenido a kokomi-store! Ingresa tu correo electrónico para recibir nuestras ofertas.";
    
    // Añadir elementos al contenido del modal
    container.appendChild(label);
    container.appendChild(input);
    content.appendChild(container);

    // Mostrar el modal y el fondo
    document.getElementById('modal').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closeModal() {
    // Cerrar el modal y el fondo oscuro
    document.getElementById('modal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

// Llamar a la función ventana al cargar la página
window.onload = function() {
    ventana();
}
