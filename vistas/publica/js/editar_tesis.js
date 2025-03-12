document.addEventListener('DOMContentLoaded', function() {
    // Get the thesis index from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const index = urlParams.get('index');

    if (index !== null) {
        // Get thesis list from localStorage
        const tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
        const tesis = tesisList[index];

        if (tesis) {
            // Populate form fields with thesis data
            document.getElementById('titulo').value = tesis.titulo;
            document.getElementById('autor').value = tesis.autor;

            // Set tutor
            const tutorSelect = document.getElementById('tutor');
            Array.from(tutorSelect.options).forEach(option => {
                if (option.text === tesis.tutor) {
                    option.selected = true;
                }
            });

            // Set cotutor if exists
            if (tesis.cotutor && tesis.cotutor !== 'N/A') {
                const cotutorSelect = document.getElementById('cotutor');
                Array.from(cotutorSelect.options).forEach(option => {
                    if (option.text === tesis.cotutor) {
                        option.selected = true;
                    }
                });
            }

            // Set tipo trabajo
            const tipoTrabajoSelect = document.getElementById('tipo-trabajo');
            Array.from(tipoTrabajoSelect.options).forEach(option => {
                if (option.text === tesis.tipoTrabajo) {
                    option.selected = true;
                }
            });
        }
    }

    // Add submit event listener to form
    document.getElementById('adicionar_tesis').addEventListener('submit', function(event) {
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

        // Get thesis list and update the selected thesis
        let tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
        tesisList[index] = {
            titulo,
            autor,
            tutor,
            cotutor: cotutor || 'N/A',
            tipoTrabajo
        };

        // Save updated list back to localStorage
        localStorage.setItem('tesisList', JSON.stringify(tesisList));

        // Show success message
        alert('Tesis actualizada correctamente');

        // Redirect to mostrar_tesis.html
        window.location.href = 'mostrar_tesis.html';
    });
});