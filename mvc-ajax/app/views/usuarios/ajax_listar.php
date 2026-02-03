<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios con AJAX (MVC)</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
    <h1>Listado de usuarios sin recargar (AJAX + JSON)</h1>

    <button id="btnCargar">Cargar usuarios</button>
    <p id="estado"></p>

    <div id="resultado">
        <!-- AQUÍ se debe inyectar la tabla -->
    </div>

    <script>
        const btn = document.getElementById("btnCargar");
        const estado = document.getElementById("estado");
        const resultado = document.getElementById("resultado");


        //Carga usuarios desde el servidor (sin recargar la pagina)
        async function cargarUsuarios() {
            estado.textContent = "Cargando usuarios...";

            try {
                //Llamada AJAX al controlador que devuelve JSON

                const res = await fetch("index.php?url=api/usuarios");

                if (!res.ok) throw new Error("Error HTTP: " + res.status);

                const usuarios = await res.json(); //JSON -> Objeto JS

                //INYECCIÓN / ACTUALIZACIÓN DEL CONTENIDO
                if (usuarios.length === 0) {
                    resultado.innerHTML = "<p>No hay usuarios</p>";
                    estado.textContent = "Listo."
                    return;
                }

                let html = `
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                            <tr/>
                        </thead>
                        <tbody>
                `;
                usuarios.forEach(u => {
                    html += `
                        <tr>
                            <td>${u.id}</td>
                            <td>${u.usuario}</td>
                            <td>${u.correo}</td>
                        </tr>
                    `;
                });

                html += `
                    </tbody>
                </table>
                `;
                resultado.innerHTML = html;
                estado.textContent = "Listo. Usuarios cargados.";

            } catch (err) {
                estado.textContent = "Ocurrió un error: " + err.message;
            }
        }
        btn.addEventListener("click", cargarUsuarios);
    </script>

</body>

</html>