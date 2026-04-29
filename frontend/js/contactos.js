const contactos = [
    { nombre: "Pepe", telefono: "12345", email: 'test1@test.com' },
    { nombre: "Pepe 2", telefono: "12345", email: 'test2@test.com' },
    { nombre: "Pepe 3", telefono: "12345", email: 'test3@test.com' }
];

document.getElementsByTagName('h1')[0].textContent = 'Hola mundo desde js';
document.getElementById('titulo').textContent = "Hola mundo desde js !!!!!!"

// document.getElementById('tbodyContactos').innerHTML = '<tr><td>Ejemplo</td></tr>';
//document.getElementById('contactosTb').getElementsByTagName('tbody')[0]

for (let contacto of contactos) {
    tbody = "<tr>";
    tbody += "  <td>" + contacto.nombre + "</td>";
    tbody += "  <td>" + contacto.telefono + "</td>";
    tbody += "  <td>" + contacto.email + "</td>";
    //tbody = tbody + "</tr>";
    tbody += "</tr>";
    document.getElementById('tbodyContactos').innerHTML += tbody;
}