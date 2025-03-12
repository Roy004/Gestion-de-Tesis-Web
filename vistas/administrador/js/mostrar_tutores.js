document.addEventListener('DOMContentLoaded', function() {
    // Get tutors list from localStorage
    const tutorsList = JSON.parse(localStorage.getItem('tutorsList')) || [];

    // Get table body element
    const tableBody = document.querySelector('table tbody');

    // Clear existing table rows
    tableBody.innerHTML = '';

    // Add each tutor to the table
    tutorsList.forEach((tutor, index) => {
        const row = document.createElement('tr');
        
        // Create table cells
        row.innerHTML = `
            <td><input type="checkbox" class="row-checkbox" data-index="${index}"></td>
            <td>${tutor.nombre}</td>
            <td>${tutor.primer_apellido}</td>
            <td>${tutor.segundo_apellido}</td>
            <td>${tutor.grado_militar || '-'}</td>
            <td>${tutor.grado_academico}</td>
            <td>
                <a href="editar_tutor.html?index=${index}" class="btn btn-primary btn-xs" style="margin-right: 2px;">
                    <i class="fa fa-pencil"></i>
                </a>
                <button onclick="eliminarTutor(${index})" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash-o"></i>
                </button>
            </td>
        `;

        // Add row to table
        tableBody.appendChild(row);
    });

    // Add header checkbox for selecting all rows
    const headerCheckbox = document.querySelector('thead input[type="checkbox"]');
    if (headerCheckbox) {
        headerCheckbox.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.row-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = headerCheckbox.checked;
            });
        });
    }
});

function eliminarTutor(index) {
    if (confirm('¿Está seguro de que desea eliminar este tutor?')) {
        // Get current tutors list
        let tutorsList = JSON.parse(localStorage.getItem('tutorsList')) || [];
        
        // Remove tutor at specified index
        tutorsList.splice(index, 1);
        
        // Save updated list back to localStorage
        localStorage.setItem('tutorsList', JSON.stringify(tutorsList));
        
        // Reload page to refresh table
        location.reload();
    }
}

function eliminarSeleccionados() {
    const checkboxes = document.querySelectorAll('.row-checkbox:checked');
    if (checkboxes.length === 0) {
        alert('Por favor, seleccione al menos un tutor para eliminar');
        return;
    }

    if (confirm('¿Está seguro de que desea eliminar los tutores seleccionados?')) {
        let tutorsList = JSON.parse(localStorage.getItem('tutorsList')) || [];
        const indices = Array.from(checkboxes)
            .map(checkbox => parseInt(checkbox.getAttribute('data-index')))
            .sort((a, b) => b - a);

        indices.forEach(index => {
            tutorsList.splice(index, 1);
        });

        localStorage.setItem('tutorsList', JSON.stringify(tutorsList));
        location.reload();
    }
}