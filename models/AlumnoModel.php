<?php
    require '../db/Connection.php';
    require 'Alumno.php';

    class EmpleadoModel extends Connection {
        public $error;
        function __construct()
        {
            parent::__construct();
        }

        //Index : List of alumnos
        function getAlumnos() {
            try {
                $query = 'select * from alumnos';
                $stmt = $this->connection->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $alumnos = [];

                foreach($result as $row) {
                    $alumno = new Alumno($row['id'],$row['nombre'],$row['apellido'],$row['email'],$row['fecha_nacimiento']);
                    $alumnos[] = $alumno;
                }

                return $alumnos;
            } catch (PDOException $e) {
                echo "Error al obtener empleados: " . $e->getMessage();
                return null;
            }
        }

        //Index : List of alumnos
        function findAlumno($id) {
            try {
                $query = 'select * from alumnos where id = :id';
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if(!$result) {
                    return null;
                }

                foreach($result as $row) {
                    $alumno = new Alumno($row['id'],$row['nombre'],$row['apellido'],$row['email'],$row['fecha_nacimiento']);
                }

                return $alumno;
            } catch (PDOException $e) {
                echo "Error al obtener empleado: " . $e->getMessage();
                return null;
            }
        }

        //Update Alumno
        function updateAlumno(Alumno $alumno) {
            try {
                $query = 'Update alumnos set nombre = :nombre, apellido = :apellido, email = :email, fecha_nacimiento = :fecha_nacimiento where id = :id';
                //preparar la sentencia
                $stmt = $this->connection->prepare($query);

                //Bind de los prams
                $stmt->bindParam(':nombre', $alumno->getNombre());
                $stmt->bindParam(':apellido', $alumno->getApellido());
                $stmt->bindParam(':email', $alumno->getEmail());
                $stmt->bindParam(":fecha_nacimiento", $alumno->getFechaNacimiento());
                $stmt->bindParam(":id", $alumno->getId());

                $stmt->execute();

                if($stmt->rowCount() > 0) {
                    return 'success';
                } else {
                    return 'Not Updated';
                }
            } catch (PDOException  $th) {
                echo "Error al actualizar el alumno: " . $th->getMessage();
            }
        }

        //Store Alumno
        function storeAlumno(Alumno $alumno) {
            try {
                $query = 'insert into alumnos (nombre, apellido, email, fecha_nacimiento) values (:nombre, :apellido, :email, :fecha_nacimiento)';
                $command = $this->connection->prepare($query);
                $command->bindParam(':nombre', $alumno->getNombre());
                $command->bindParam(':apellido', $alumno->getApellido());
                $command->bindParam(':email', $alumno->getEmail());
                $command->bindParam(':fecha_nacimiento', $alumno->getFechaNacimiento());

                $command->execute();


            } catch (PDOException $th) {
                echo "Error al actualizar el alumno: " . $th->getMessage();
            }
        }

        function deleteAlumno($id) {
            try {
                $query = "delete from alumnos where id = :id";
                
                $command = $this->connection->prepare($query);
                $command->bindParam(':id', $id);
                $command->execute();

            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
    }