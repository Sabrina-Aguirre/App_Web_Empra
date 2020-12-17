<section class="col-8 my-4 mx-auto">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Registro de Turnos</h1>
        </div>

        <table class="table my-3">
            <tr class="bg-primary text-white">
                <td>ID</td>
                <td>Tipo de Masaje</td>
                <td>Fecha</td>
                <td>Hora</td>
            </tr>
            <?php
            global $conexion;
            try {
                $sql ="SELECT *FROM turno WHERE id_tuno = ?, masaje = ?, fecha = ?, horario = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bindParam(1,$id_turno, PDO::PARAM_INT);
                $stmt->bindParam(2,$masaje, PDO::PARAM_STR);
                $stmt->bindParam(3,$fecha, PDO::PARAM_STR);
                $stmt->bindParam(4,$horario, PDO::PARAM_STR);
                $stmt->execute();

                while ($persona = $stmt -> fetch()) {
                    
                ?>
                <tr>
                    <td><?php echo $stmt['id_turno'] ?></td>
                    <td><?php echo $stmt['masaje'] ?></td>
                    <td><?php echo $stmt['fecha'] ?></td>
                    <td><?php echo $stmt['horario'] ?></td>
                </tr>
                <?php
                }
            }
            catch (PDOException $e) {
                echo "Error: " . $e -> getMessage();
            }
            ?>
        </table>
    </section>
</body>
</html>