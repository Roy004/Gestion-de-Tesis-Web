function agregarFila(event) {
    event.preventDefault();

    // Get form values
    const titulo = document.getElementById('titulo').value;
    const autor = document.getElementById('autor').value;
    const tutorSelect = document.getElementById('tutor');
    const tutor = tutorSelect.options[tutorSelect.selectedIndex].text;
    const cotutorSelect = document.getElementById('cotutor');
    const cotutor = cotutorSelect.value ? cotutorSelect.options[cotutorSelect.selectedIndex].text : '';
    const tipoTrabajoSelect = document.getElementById('tipo-trabajo');
    const tipoTrabajo = tipoTrabajoSelect.options[tipoTrabajoSelect.selectedIndex].text;

    // Validate required fields
    if (!titulo || !autor || tutorSelect.value === '' || tipoTrabajoSelect.value === '') {
        alert('Por favor, complete todos los campos obligatorios');
        return;
    }

    // Store the thesis data in localStorage
    const tesis = {
        titulo,
        autor,
        tutor,
        cotutor: cotutor || 'N/A',
        tipoTrabajo,
        corte1: 0,
        corte2: 0,
        notaComite: 0,
        notaFinal: 0
    };

    let tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
    tesisList.push(tesis);
    localStorage.setItem('tesisList', JSON.stringify(tesisList));

    // Clear form
    document.getElementById('adicionar_tesis').reset();

    // Show success message
    alert('Tesis agregada correctamente');

    // Redirect to mostrar_tesis.html
    window.location.href = 'mostrar_tesis.html';
}