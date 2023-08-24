<?php
require 'dml.php';
require 'reservations.php';

$res = new Database_query();

$name = $_SESSION['username'];

$sql = "SELECT * FROM room_reservation where booking_name = '$name'";
$query = mysqli_query($res->connection, $sql);

    if($query)
    {
                    if (mysqli_num_rows($query) > 0)
                    {
                    echo "<table>";
                        echo "<thead>";
                            // echo "<th> Customer_ID </th>";
                            // echo  "<th> Room_ID </th>";
                            echo  "<th> Name </th>";
                            echo  "<th> Category </th>";
                            echo  "<th> Price </th>";
                            echo  "<th> Check-In  Date </th>";
                            echo  "<th> Check-Out Date </th>";
                            echo  "<th> Reservation_ID </th>";
                            echo  "<th> Action </th>";
                        echo "<thead>";

                        while($result = mysqli_fetch_assoc($query))
                        {
                            echo "<tr>";
                                    // echo "<td> $result[customer_id] </td>"; 
                                    // echo "<td> $result[room_id] </td>"; 
                                    echo "<td> $result[booking_name] </td>"; 
                                    echo "<td> $result[category] </td>"; 
                                    echo "<td> $result[price] </td>"; 
                                    echo "<td> $result[start_date] </td>"; 
                                    echo "<td> $result[end_date] </td>"; 
                                    echo "<td> $result[reservation_id] </td>"; 

echo " <td class='cancel'>
        <a href='cancel.php?rid=".$result['reservation_id']."'>CANCEL</a>
        </td>"; 

                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else
                    {
                        echo "NO BOOKINGS AVAILABLE";
                    }
            }
    else
    {
        echo "query failed";
    }

?>


