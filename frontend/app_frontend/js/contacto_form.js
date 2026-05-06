/* definici+on de varaiables*/
const contactoForm = document.forms["contactoForm"];

/* definici+on de métodos o funciones*/
const getContactoForm = () => {
  const contacto = {
    nombre: contactoForm["nombre"].value,
    email: contactoForm["email"].value,
    telefono: contactoForm["telefono"].value,
  };
  return contacto;
};

const setContactoForm = (contacto) => {
  contactoForm["nombre"].value = contacto.nombre;
  contactoForm["email"].value = contacto.email;
  contactoForm["telefono"].value = contacto.telefono;
};

const registrarContacto = async () => {
  try {
    const response = await fetch("http://127.0.0.1:8000/contactos-v2", {
      method: "post",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(getContactoForm()),
    });
    const body = await response.json();
    const status = response.status;
    if (status == 201) {
      //alert("Datos guardados");
      showModal("Datos guardados");
      contactos.push({
        id: body.id,
        nombre: body.nombre,
        email: body.email,
        telefono: body.telefono,
      });
      mostrarContactos();
      contactoForm.reset();
    }
  } catch (ex) {
    console.error("Error en el servicio");
  }
  console.log("Fin del request...");
};

const actualizarContacto = async () => {
  try {
    const id = contacto.id;
    const response = await fetch("http://127.0.0.1:8000/contactos-v2/" + id, {
      method: "put",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(getContactoForm()),
    });
    const body = await response.json();
    const status = response.status;
    if (status == 200) {
      //alert("Datos guardados");
      showModal("Datos guardados");
      consultarContacto();
      contacto = null;
      contactoForm.reset();
    }
  } catch (ex) {
    console.error("Error en el servicio");
  }
  console.log("Fin del request...");
};

const validarInputs = (contactoForm) => {
  const msgInputNombre = document.getElementById('msgInputNombre');
  if (!contactoForm.nombre) {
    msgInputNombre.style.display = 'block';
  } else {
    msgInputNombre.style.display = 'none';
  }
}

/* definici+on de eventos*/
contactoForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const contactoForm = getContactoForm();
  validarInputs(contactoForm);
  if (!contactoForm.nombre || !contactoForm.email || !contactoForm.telefono) {
    showModal("Todos los campos son obligatorios", 'error');
  } else {
    contacto ? actualizarContacto() : registrarContacto();
  }
});

contactoForm.addEventListener("reset", (event) => {
  contacto = null;
});

contactoForm["nombre"].addEventListener("keyup", () => {
  const contactoForm = getContactoForm();
  validarInputs(contactoForm);
});

/* llamado de funciones por defecto*/
