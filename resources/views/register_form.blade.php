<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #2779e2;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">

                <h1 class="text-white mb-4 text-center">Registrati per la candidatura</h1>

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body">

                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Nome</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="text" id="nome" name="nome" class="form-control form-control-lg"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Cognome</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="text" id="cognome" name="cognome" class="form-control form-control-lg"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Email</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                       placeholder="example@example.com"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Conferma la tua Email</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="email" id="email-repited" name="email-repited"
                                       class="form-control form-control-lg"
                                       placeholder="example@example.com"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Upload CV</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input class="form-control form-control-lg" id="file" name="file" type="file"/>
                                <div class="small text-muted mt-2">
                                    Sono ammessi pdf,jpeg,png
                                </div>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Telefono</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="number" id="telefono" name="telefono" class="form-control form-control-lg"
                                       placeholder="333333333333"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Regione di Residenza</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <select name="regione" id="regione-residenza" multiple>
                                    <option value="valle-daosta">Valle D'Aosta</option>
                                    <option value="piemonte">Piemonte</option>
                                    <option value="liguria">Liguria</option>
                                    <option value="lombardia">Lombardia</option>
                                    <option value="trentino-alto-adige">Trentino-Alto Adige</option>
                                    <option value="veneto">Venento</option>
                                    <option value="friuli-venezia-giulia">Friuli-Venezia Giulia</option>
                                    <option value="emilia-romagna">Emilia Romagna</option>
                                    <option value="toscana">Toscana</option>
                                    <option value="umbria">Umbria</option>
                                    <option value="marche">Marche</option>
                                    <option value="lazio">Lazio</option>
                                    <option value="abruzzo">Abruzzo</option>
                                    <option value="molise">Molise</option>
                                    <option value="campania">Campania</option>
                                    <option value="puglia">Puglia</option>
                                    <option value="basilicata">Basilicata</option>
                                    <option value="calabria">Calabria</option>
                                    <option value="sicilia">Sicilia</option>
                                    <option value="sardegna">Sardegna</option>
                                </select>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Regione in cui vorresti lavorare</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <select name="regione-desiderata" id="regione-desiderata" multiple>
                                    <option value="valle-daosta">Valle D'Aosta</option>
                                    <option value="piemonte">Piemonte</option>
                                    <option value="liguria">Liguria</option>
                                    <option value="lombardia">Lombardia</option>
                                    <option value="trentino-alto-adige">Trentino-Alto Adige</option>
                                    <option value="veneto">Venento</option>
                                    <option value="friuli-venezia-giulia">Friuli-Venezia Giulia</option>
                                    <option value="emilia-romagna">Emilia Romagna</option>
                                    <option value="toscana">Toscana</option>
                                    <option value="umbria">Umbria</option>
                                    <option value="marche">Marche</option>
                                    <option value="lazio">Lazio</option>
                                    <option value="abruzzo">Abruzzo</option>
                                    <option value="molise">Molise</option>
                                    <option value="campania">Campania</option>
                                    <option value="puglia">Puglia</option>
                                    <option value="basilicata">Basilicata</option>
                                    <option value="calabria">Calabria</option>
                                    <option value="sicilia">Sicilia</option>
                                    <option value="sardegna">Sardegna</option>
                                </select>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Informazioni utili</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="text" id="informazioni-utili" name="informazioni-utili" maxlength="200"
                                       class="form-control form-control-lg"
                                       placeholder="Informazioni utili (max 200 caratteri)"/>

                            </div>
                        </div>

                        <div class="px-5 py-4">
                            <button type="submit" class="btn btn-primary btn-lg" onclick="submitData()">Invia</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
<script>
    function validateData(formObject) {
        let valid = true;

        // check if every value is not empty
        if ((formObject.get("nome").value === ""
                ||
                formObject.get("nome").value == null)
            ||
            (formObject.get("cognome").value === ""
                ||
                formObject.get("cognome").value == null)
            ||
            (formObject.get("email").value === ""
                ||
                formObject.get("email").value == null)
            ||
            (formObject.get("email-repited").value === ""
                ||
                formObject.get("email-repited").value == null)
            ||
            (formObject.get("file").value === null)
            ||
            (formObject.get("telefono").value === ""
                ||
                formObject.get("telefono").value == null)
            ||
            (formObject.get("regione-residenza").value === ""
                ||
                formObject.get("regione-residenza").value == null)
            ||
            (formObject.get("regione-desiderata").value === ""
                ||
                formObject.get("regione-desiderata").value == null)
            ||
            (formObject.get("informazioni-utili").value === ""
                ||
                formObject.get("informazioni-utili").value == null)) {
            alert("Compila tutti i campi");
            valid = false;
        }

        // check if email is valid
        let emailSplitName = formObject.get("email").value.split("@");
        let emailSplitDomain = emailSplitName[1].split(".");
        if (emailSplitName.length !== 2
            ||
            emailSplitDomain.length !== 2) {
            alert("Inserisci una email valida");
            valid = false;

        }

        // check if email repeated is equal to email
        if (formObject.get("email").value !== formObject.get("email-repited").value) {
            alert("Le email non corrispondono");
            valid = false;
        }

        //check if file extension is valid
        let file = formObject.get("file").value;
        let fileSplit = file.split(".");
        if (fileSplit.length !== 2) {
            alert("Inserisci un file valido");
            valid = false;
        } else {
            let extension = fileSplit[1];
            if (extension !== "pdf" && extension !== "doc" && extension !== "docx") {
                alert("Inserisci un file valido");
                valid = false;
            }
        }

        // check if phone number is valid
        let phoneNumber = formObject.get("telefono").value;
        if (phoneNumber.length !== 10) {
            alert("Inserisci un numero di telefono valido");
            valid = false;
        }

        return valid;

    }

    function submitData() {
        const formObject = new FormData();

        // append all data
        formObject.append('nome', document.getElementById('nome').value);
        formObject.append('cognome', document.getElementById('cognome').value);
        formObject.append('email', document.getElementById('email').value);
        formObject.append('email-repited', document.getElementById('email-repited').value);
        formObject.append('file', document.getElementById('file').files[0]);
        formObject.append('telefono', document.getElementById('telefono').value);
        formObject.append('regione-residenza', document.getElementById('regione-residenza').value);
        formObject.append('regione-desiderata', document.getElementById('regione-desiderata').value);
        formObject.append('informazioni-utili', document.getElementById('informazioni-utili').value);

        const isValid = validateData(formObject);

        if (isValid) {
            const xmlhttp = new XMLHttpRequest();

            xmlhttp.open("POST", "/api/register-candidature", true);

            xmlhttp.send(formObject);

            xmlhttp.onload = function () {
                if (this.status === 200) {
                    alert("Dati inviati con successo");
                } else {
                    alert("Errore nell'invio dei dati");
                }
            };
        }
    }
</script>
</html>
