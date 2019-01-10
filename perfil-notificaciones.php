<?php $page_int = "notificaciones" ?>

<?php include('perfil-submenu.php'); ?>
<?php include('indice.php'); ?>


<section class="notificaciones">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title hidden-xs">Notificaciones</div>
                <div class="perfil-box">
                    <form>
                        <div class="full">
                            <table>
                                <thead>
                                    <tr>
                                        <th><div class="table-title">Seleccione las novedades que desea recibir</div></th>
                                        <th>Resumen diario</th>
                                        <th>Informe semanal</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td><p>Core Journal</p></td>
                                        <td><input type="radio" name="core" value="diario"></td>
                                        <td><input type="radio" name="core" value="semanal" checked></td>
                                    </tr>
                                    <tr>
                                        <td><p>Central de inteligencia Médica</p></td>
                                        <td><input type="radio" name="central" value="diario"></td>
                                        <td><input type="radio" name="central" value="semanal" checked></td>
                                    </tr>
                                    <tr>
                                        <td><p>Reporte para Investigadores</p></td>
                                        <td><input type="radio" name="reporte" value="diario"></td>
                                        <td><input type="radio" name="reporte" value="semanal"></td>
                                    </tr>
                                    <tr>
                                        <td><p>Guías de Práctica Clínica</p></td>
                                        <td><input type="radio" name="guias" value="diario" checked></td>
                                        <td><input type="radio" name="guias" value="semanal"></td>
                                    </tr>
                                    <tr>
                                        <td><p>Medline Pearls</p></td>
                                        <td><input type="radio" name="medline" value="diario"></td>
                                        <td><input type="radio" name="medline" value="semanal" checked></td>
                                    </tr>
                                    <tr>
                                        <td><p>Seguridad del Paciente</p></td>
                                        <td><input type="radio" name="seguridad" value="diario"></td>
                                        <td><input type="radio" name="seguridad" value="semanal"></td>
                                    </tr>
                                    <tr>
                                        <td><p>Medical Mobile</p></td>
                                        <td><input type="radio" name="medical" value="diario"></td>
                                        <td><input type="radio" name="medical" value="semanal" checked></td>
                                    </tr>
                                    <tr>
                                        <td><p>Sotobosque</p></td>
                                        <td><input type="radio" name="sotobosque" value="diario"></td>
                                        <td><input type="radio" name="sotobosque" value="semanal" checked></td>
                                    </tr>
                                    <tr>
                                        <td><p>Otros (mails infirmativos y novedades)</p></td>
                                        <td><input type="radio" name="otros" value="diario"></td>
                                        <td><input type="radio" name="otros" value="semanal"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="marcar-todos">
                                <p>Marcar todos los casilleros</p>
                                <label class="switch">
                                  <input type="checkbox" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>
                            <input type="submit" value="Actualizar datos" class="btn-full blue-bg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
