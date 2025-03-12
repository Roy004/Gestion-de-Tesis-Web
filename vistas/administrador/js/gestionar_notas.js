function gestionarNotas() {
    const selectedCheckboxes = document.querySelectorAll('.row-checkbox:checked');
    if (selectedCheckboxes.length === 0) {
        alert('Por favor, seleccione al menos una tesis para gestionar notas');
        return;
    }

    // Create modal if it doesn't exist
    let modal = document.getElementById('notasModal');
    if (!modal) {
        modal = document.createElement('div');
        modal.id = 'notasModal';
        modal.className = 'modal fade';
        modal.innerHTML = `
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Gestionar Notas</h4>
                    </div>
                    <div class="modal-body" id="notasModalBody">
                        <!-- Content will be dynamically added here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="guardarNotas()">Guardar cambios</button>
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(modal);
    }

    // Get selected thesis data and populate modal
    const modalBody = document.getElementById('notasModalBody');
    modalBody.innerHTML = '';
    
    const tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];
    const selectedTheses = Array.from(selectedCheckboxes).map(checkbox => {
        const index = parseInt(checkbox.getAttribute('data-index'));
        return { index, ...tesisList[index] };
    });

    selectedTheses.forEach(tesis => {
        const thesisForm = document.createElement('div');
        thesisForm.className = 'thesis-grade-form';
        thesisForm.innerHTML = `
            <h5>${tesis.titulo}</h5>
            <div class="form-group">
                <label>Corte 1:</label>
                <div class="input-group">
                    <input type="number" class="form-control" value="${tesis.corte1 || 0}" 
                           min="0" max="5" step="0.1" data-index="${tesis.index}" data-field="corte1">
                    <span class="input-group-addon ${tesis.corte1 ? 'bg-success' : 'bg-warning'}">
                        <i class="fa ${tesis.corte1 ? 'fa-check' : 'fa-clock-o'}"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label>Corte 2:</label>
                <div class="input-group">
                    <input type="number" class="form-control" value="${tesis.corte2 || 0}" 
                           min="0" max="5" step="0.1" data-index="${tesis.index}" data-field="corte2"
                           ${!tesis.corte1 ? 'disabled' : ''}>
                    <span class="input-group-addon ${tesis.corte2 ? 'bg-success' : 'bg-warning'}">
                        <i class="fa ${tesis.corte2 ? 'fa-check' : 'fa-clock-o'}"></i>
                    </span>
                </div>
                ${!tesis.corte1 ? '<small class="text-muted">Complete Corte 1 primero</small>' : ''}
            </div>
            <div class="form-group">
                <label>Nota Comité:</label>
                <div class="input-group">
                    <input type="number" class="form-control" value="${tesis.notaComite || 0}" 
                           min="0" max="5" step="0.1" data-index="${tesis.index}" data-field="notaComite"
                           ${!tesis.corte2 ? 'disabled' : ''}>
                    <span class="input-group-addon ${tesis.notaComite ? 'bg-success' : 'bg-warning'}">
                        <i class="fa ${tesis.notaComite ? 'fa-check' : 'fa-clock-o'}"></i>
                    </span>
                </div>
                ${!tesis.corte2 ? '<small class="text-muted">Complete Corte 2 primero</small>' : ''}
            </div>
            <div class="form-group">
                <label>Nota Final:</label>
                <div class="input-group">
                    <input type="number" class="form-control" value="${tesis.notaFinal || 0}" 
                           readonly data-index="${tesis.index}" data-field="notaFinal">
                    <span class="input-group-addon ${tesis.notaFinal ? 'bg-success' : 'bg-warning'}">
                        <i class="fa ${tesis.notaFinal ? 'fa-check' : 'fa-clock-o'}"></i>
                    </span>
                </div>
            </div>
            <hr>
        `;
        modalBody.appendChild(thesisForm);

        // Add event listeners to calculate final grade and handle dependencies
        const inputs = thesisForm.querySelectorAll('input[type="number"]:not([readonly])');
        inputs.forEach(input => {
            input.addEventListener('change', () => {
                const form = input.closest('.thesis-grade-form');
                const corte1Input = form.querySelector('[data-field="corte1"]');
                const corte2Input = form.querySelector('[data-field="corte2"]');
                const notaComiteInput = form.querySelector('[data-field="notaComite"]');
                
                const corte1 = parseFloat(corte1Input.value) || 0;
                const corte2 = parseFloat(corte2Input.value) || 0;
                const notaComite = parseFloat(notaComiteInput.value) || 0;

                // Update status indicators
                corte1Input.nextElementSibling.className = `input-group-addon ${corte1 ? 'bg-success' : 'bg-warning'}`;
                corte1Input.nextElementSibling.innerHTML = `<i class="fa ${corte1 ? 'fa-check' : 'fa-clock-o'}"></i>`;

                // Enable/disable Corte 2 based on Corte 1
                corte2Input.disabled = !corte1;
                if (corte1) {
                    corte2Input.nextElementSibling.className = `input-group-addon ${corte2 ? 'bg-success' : 'bg-warning'}`;
                    corte2Input.nextElementSibling.innerHTML = `<i class="fa ${corte2 ? 'fa-check' : 'fa-clock-o'}"></i>`;
                }

                // Enable/disable Nota Comité based on Corte 2
                notaComiteInput.disabled = !corte2;
                if (corte2) {
                    notaComiteInput.nextElementSibling.className = `input-group-addon ${notaComite ? 'bg-success' : 'bg-warning'}`;
                    notaComiteInput.nextElementSibling.innerHTML = `<i class="fa ${notaComite ? 'fa-check' : 'fa-clock-o'}"></i>`;
                }

                // Calculate final grade if all components are available
                if (corte1 && corte2 && notaComite) {
                    const sumCortes = corte1 + corte2;
                    const notaFinal = ((sumCortes / 2) + notaComite) / 2;
                    const notaFinalInput = form.querySelector('[data-field="notaFinal"]');
                    notaFinalInput.value = Math.round(notaFinal * 100) / 100;
                    notaFinalInput.nextElementSibling.className = 'input-group-addon bg-success';
                    notaFinalInput.nextElementSibling.innerHTML = '<i class="fa fa-check"></i>';
                }
            });
        });
    });

    // Show modal
    $(modal).modal('show');
}

function guardarNotas() {
    const forms = document.querySelectorAll('.thesis-grade-form');
    const tesisList = JSON.parse(localStorage.getItem('tesisList')) || [];

    forms.forEach(form => {
        const inputs = form.querySelectorAll('input[type="number"]');
        const index = parseInt(inputs[0].getAttribute('data-index'));
        
        tesisList[index] = {
            ...tesisList[index],
            corte1: parseFloat(form.querySelector('[data-field="corte1"]').value) || 0,
            corte2: parseFloat(form.querySelector('[data-field="corte2"]').value) || 0,
            notaComite: parseFloat(form.querySelector('[data-field="notaComite"]').value) || 0,
            notaFinal: parseFloat(form.querySelector('[data-field="notaFinal"]').value) || 0
        };
    });

    localStorage.setItem('tesisList', JSON.stringify(tesisList));
    $('#notasModal').modal('hide');
    alert('Notas guardadas correctamente');
}