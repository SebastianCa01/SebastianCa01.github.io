<?php
    require_once 'includes/connect.php';//for var $conn

    $patientID = $_POST['patientID'];
    $date = $_POST['dateAppointment'];
    $startTime = $_POST['startTimeAppointment'];
    $endTime = $_POST['endTimeAppointment'];
    $type = $_POST['appointmentType'];
    $roomID = $_POST['roomID'];

    $sql = "INSERT INTO rendez_vous (p_id, date, h_debut, h_fin, type_rendez_vous, chambre_id) 
            VALUES ('$patientID', '$date', '$startTime', '$endTime', '$type', '$roomID');";

    $res = pg_query($conn,$sql);

    if($res){
        echo "Saved";
    }
    
?>