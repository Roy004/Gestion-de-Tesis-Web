function agregarTutor(event) {
    event.preventDefault();

    // Get form values
    const nombre = document.getElementById('nombre').value;
    const primer_apellido = document.getElementById('primer_apellido').value;
    const segundo_apellido = document.getElementById('segundo_apellido').value;
    const grado_militar = document.getElementById('grado_militar').value;
    const grado_academico = document.getElementById('grado_academico').value;

    // Validate required fields
    if (!nombre || !primer_apellido || !segundo_apellido || !grado_militar || !grado_academico) {
        alert('Por favor, complete todos los campos obligatorios');
        return;
    }

    // Store the tutor data in localStorage
    const tutor = {
        nombre,
        primer_apellido,
        segundo_apellido,
        grado_militar,
        grado_academico
    };

    let tutorsList = JSON.parse(localStorage.getItem('tutorsList')) || [];
    tutorsList.push(tutor);
    localStorage.setItem('tutorsList', JSON.stringify(tutorsList));

    // Clear form
    document.getElementById('adicionar_tutor').reset();

    // Show success message
    alert('Tutor agregado correctamente');

    // Redirect to mostrar_tutores.html
    window.location.href = 'mostrar_tutores.html';
}