<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
        <body>
                    <header>
                        <h1>ESTE ES UN ESPACIO PARA QUE REALICES TUS PETICIONES, QUEJAS, DENUNCIAS, SUGERENCIAS O RECONOCIMIENTOS.
                            PARA EL LLENADO DE LA MISMA, TOMA EN CONSIDERACIÓN LOS SIGUIENTES REQUISITOS:
                            </h1>
                    </header>

                    <main>
                    <form action="{{ route('queja.store') }}" method="POST">
                        @csrf

                        <label for="datos"><h3>a.- Datos del peticionario, quejoso o denunciante</h3></label>
                        <input type="text" class="form-control" id="datos" name="nombre_peticionario">

                        <label for="direccion"><h3>Dirección</h3></label>
                        <textarea name="direccion" id="direccion" cols="30" rows="10"></textarea>

                        <label for="phone"><h3>Teléfono fijo:</h3></label>
                        <input type="tel" name="telefono_fijo" id="phone">

                        <article>
                            <label for="celular"><h3>Teléfono celular:</h3></label>
                            <h1>NOTA MOVER EL INPUT DEL TELÉFONO CELULAR EN MEDIO DE LA PANTALLA POR FAVOR</h1>
                            <input type="tel" name="telefono_celular" id="celular">
                        </article>

                        <label for="correo"><h3>Correo electrónico:</h3></label>
                        <input type="email" name="correo" id="correo">

                        <label for="datos2"><h1>b.- Datos del servidor público Denunciado o Reconocido.</h1></label>
                        <input type="text" name="nombre_servidor_publico" id="nombre">

                        <label for="cargo"><h3>Cargo:</h3></label>
                        <input type="text" name="cargo_servidor_publico" id="cargo">

                        <label for="dependencia"><h3>Dependencia en la que labora:</h3></label>
                        <input type="text" name="dependencia" id="dependencia">

                        <label for="nota"><h3>Nota: En caso de no contar con los datos anteriores favor de proporcionar la media filiación tales como: (sexo, estatura, complexión, tez (color de piel), lugar donde sucedieron los hechos)</h3></label>
                        <textarea name="nota" id="nota" cols="250" rows="10"></textarea>

                        <label for="narracion"><h1>c.- Narración de los hechos (lugar, día, hora, modo y circunstancias que originan la presente queja, petición o reconocimiento). Asimismo, proporcionar datos de las personas involucradas, su participación y sus características. Si se cuenta con elementos de pruebas, especificar en qué consisten las mismas, al igual si se cuenta con testigos, proporcionar sus datos. Sugerencia: si se cuenta con pruebas anexarlas a la presente en un sobre (tamaño carta u oficio) o enviarlas al correo electrónico: buzoncontraloria@bacalar.gob.mx</h1></label>

                        <label for="hechos"><h2>NARRACIÓN DE LOS HECHOS</h2></label>
                        <textarea name="narracion_hechos" id="hechos" cols="250" rows="10"></textarea>

                        <label for="firma"><h3>Firma:</h3></label>
                        <input type="text" class="form-control" id="firma" name="firma">
                    <div class = " ">
                    <button type="button" class="btn btn-success">Success</button>
                    </div>
                        

                    </main>
        </body>
</html>