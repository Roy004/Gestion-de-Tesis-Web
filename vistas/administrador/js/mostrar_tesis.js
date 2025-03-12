document.addEventListener('DOMContentLoaded', function() {
    // Get the thesis list from localStorage
    const tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
    
    // Get the table body element
    const tableBody = document.querySelector('#table1 tbody');
    
    // Clear existing rows
    tableBody.innerHTML = '';
    
    // Add each thesis to the table
    tesisList.forEach((tesis, index) => {
        const row = document.createElement('tr');
        row.className = 'table-flag-blue';
        
        row.innerHTML = `
            <td><input type="checkbox" class="row-checkbox" data-index="${index}" /></td>
            <td>${index + 1}</td>
            <td>${tesis.titulo}</td>
            <td>${tesis.autor}</td>
            <td>${tesis.tutor}</td>
            <td>${tesis.cotutor}</td>
            <td>${tesis.tipoTrabajo}</td>
            <td class="text-center">
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-info show-tooltip" title="Edit" onclick="editarTesis(${index})">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button class="btn btn-danger show-tooltip" title="Delete" onclick="eliminarTesis(${index})">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </div>
            </td>
        `;
        
        tableBody.appendChild(row);
    });
});

function eliminarTesis(index) {
    if (confirm('¿Está seguro de que desea eliminar esta tesis?')) {
        // Get current thesis list
        let tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
        
        // Remove thesis at specified index
        tesisList.splice(index, 1);
        
        // Save updated list back to localStorage
        localStorage.setItem('tesisList', JSON.stringify(tesisList));
        
        // Reload page to refresh table
        location.reload();
    }
}

function editarTesis(index) {
    window.location.href = `editar_tesis.html?index=${index}`;
}

function eliminarSeleccionados() {
    const selectedCheckboxes = document.querySelectorAll('.row-checkbox:checked');
    if (selectedCheckboxes.length === 0) {
        alert('Por favor, seleccione al menos una tesis para eliminar');
        return;
    }

    if (confirm('¿Está seguro de que desea eliminar las tesis seleccionadas?')) {
        let tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
        const indicesToRemove = Array.from(selectedCheckboxes)
            .map(checkbox => parseInt(checkbox.getAttribute('data-index')))
            .sort((a, b) => b - a); // Sort in descending order to remove from end first

        indicesToRemove.forEach(index => {
            tesisList.splice(index, 1);
        });

        localStorage.setItem('tesisList', JSON.stringify(tesisList));
        location.reload();
    }
}