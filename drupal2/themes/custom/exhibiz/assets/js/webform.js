docReady(function() {
  var edit_cedula = document.getElementById("edit-cedula-");

  if (edit_cedula !== null)
  {
    edit_cedula.addEventListener("blur", function() {
      document.getElementById("edit-tipo-de-identificacion");
      var e = document.getElementById("edit-tipo-de-identificacion");
      //valido cedula
      if (e.value === "cedula") {
        var id = document.getElementById("edit-cedula-").value;
        var path = "https://api.uazuay.edu.ec/api/persona?access-token=y0zUn6J3rnFv3n924L8_bniLUb0rQU_qwpZKegbE5l4le4Hi_42kit_OBIQR4j6vAydcf3sIsqAQKYtQpTF5m4aS0__tDeQvH3w9OrKd9fJtmsl-4HDAeSc7OuLyUMz6dgg6hVtzMWJNP1_zXy-JZAFHRQ1FzVURQonRAfhxx5BN5uDjjZK4FZ5rNnYTEOkRm8uWLMSiK227e2rhqoO5ygoaAAWI6afXjsgQOEP8Z6ApKY_R4VtJHUVPK_p8Ftmq1z2i5Bw.eyJraWQiOiJ0b2tlbi1kZXYtMTIzIn0&cedula=" + id;
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", path);
        xhttp.responseType = 'json';
        xhttp.onload = function(e) {
          if (this.status == 200) {
            datos = this.response;
            if (datos.length > 0) {
              document.getElementById("edit-name--2").value = datos[0].nombres;
              document.getElementById("edit-apellidos-").value = datos[0].apellidos;
              document.getElementById("edit-email-confirmacion-mail-1").value = datos[0].email;
              if (window.datos[0].telefono !== undefined) {
                var edit_celular = document.getElementById("edit-celular");
                if (edit_celular !== null) {
                  document.getElementById("edit-celular").value = datos[0].telefono;
                }
              }
              if (window.datos[0].codigo !== undefined) {
                var edit_codigo_estudiante = document.getElementById("edit-codigo-estudiante");
                if (edit_codigo_estudiante !== null) {
                  document.getElementById("edit-codigo-estudiante").value = datos[0].codigo;
                }
              }
            }
          }
        };
        xhttp.send();
      }
    });
  }

});

function docReady(fn) {
  if (document.readyState === "complete" || document.readyState === "interactive") {
    setTimeout(fn, 1);
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
}
