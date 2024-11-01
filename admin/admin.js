document.addEventListener('DOMContentLoaded', function() {
    loadKamarData();
});

function loadKamarData() {
    fetch('get_kamar.php')
        .then(response => response.json())
        .then(data => {
            const kamarTableBody = document.querySelector('#kamarTable tbody');
            kamarTableBody.innerHTML = '';

            data.forEach(kamar => {
                const row = `
                    <tr>
                        <td>${kamar.nama_kamar}</td>
                        <td>${kamar.tarif_perbulan} / bln - ${kamar.tarif_pertahun} / thn</td>
                        <td>
                            <button class="editButton" data-id="${kamar.id_kamar}">Edit</button>
                            <button class="deleteButton" data-id="${kamar.id_kamar}">Delete</button>
                        </td>
                    </tr>
                `;
                kamarTableBody.insertAdjacentHTML('beforeend', row);
            });
        });
}
