/* definici+on de varaiables*/
const contactos = [];
const contactosTabla = document.getElementById("contactosTB");

/* definici+on de métodos o funciones*/
const mostrarContactos = () => {
  const tbody = contactosTabla.getElementsByTagName("tbody")[0];
  tbody.innerHTML = "";
  for (let item of contactos) {
    const tr = document.createElement("tr");

    const nombreTd = document.createElement("td");
    nombreTd.textContent = item.nombre;

    const emailTd = document.createElement("td");
    emailTd.textContent = item.email;

    const telTd = document.createElement("td");
    telTd.textContent = item.telefono;

    const accionesTd = document.createElement("td");
    const eliminarBtn = document.createElement("button");
    eliminarBtn.textContent = "Borrar";
    eliminarBtn.addEventListener("click", () => borrarContacto(item.id));

    accionesTd.appendChild(eliminarBtn);

    tr.appendChild(nombreTd);
    tr.appendChild(emailTd);
    tr.appendChild(telTd);
    tr.appendChild(accionesTd);

    tbody.appendChild(tr);
  }
};

const borrarContacto = async (id) => {
  try {
    const response = await fetch("http://127.0.0.1:8000/contactos-v2/" + id, {
      method: "delete",
    });
    const status = response.status;
    if (status == 200) {
      alert("Datos borrador");
      consultarContacto();
    }
  } catch (ex) {
    console.error("Error en el servicio");
  }
  console.log("Fin del request...");
};

const consultarContactoThen = () => {
  fetch("http://127.0.0.1:8000/contactos-v2")
    .then((response) => response.json())
    .then((body) => {
      body.forEach((item) =>
        contactos.push({
          id: item.id,
          nombre: item.nombre,
          email: item.email,
          telefono: item.telefono,
        }),
      );
      mostrarContactos();
    })
    .catch((error) => console.error("Error en el servicio"))
    .finally(() => console.log("Fin del request..."));
};

const consultarContacto = async () => {
  try {
    if(contactos.length>0){
        contactos.splice(0, contactos.length);
    }
    const response = await fetch("http://127.0.0.1:8000/contactos-v2");
    const body = await response.json();
    body.forEach((item) =>
      contactos.push({
        id: item.id,
        nombre: item.nombre,
        email: item.email,
        telefono: item.telefono,
      }),
    );
    mostrarContactos();
  } catch (ex) {
    console.error("Error en el servicio");
  }
  console.log("Fin del request...");
};

/* definici+on de eventos*/
/* llamado de funciones por defecto*/
consultarContacto();
