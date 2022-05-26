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

                                <input type="text" class="form-control form-control-lg"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Cognome</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="text" class="form-control form-control-lg"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Email</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="email" class="form-control form-control-lg"
                                       placeholder="example@example.com"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Conferma la tua Email</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="email" class="form-control form-control-lg"
                                       placeholder="example@example.com"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Upload CV</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input class="form-control form-control-lg" id="formFileLg" type="file"/>
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

                                <input type="number" class="form-control form-control-lg"
                                       placeholder="333333333333"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Regione di Residenza</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <select name="regione" id="regione" multiple>
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

                                <select name="regione" id="regione" multiple>
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

                                <input type="text" maxlength="200" class="form-control form-control-lg"
                                       placeholder="Informazioni utili (max 200 caratteri)"/>

                            </div>
                        </div>

                        <div class="px-5 py-4">
                            <button type="submit" class="btn btn-primary btn-lg">Invia</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
</html>
