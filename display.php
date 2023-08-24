<?php
include 'dis.php';
require 'dml.php';

$res = new Database_query();

$sql = "SELECT * FROM room WHERE status = 'available'";
$query = mysqli_query($res->connection, $sql);

    if($query)
    {
                    if (mysqli_num_rows($query) > 0)
                    {
                    echo "<table>";
                        echo "<thead>";
                            echo "<th> Room_Id </th>";
                            echo  "<th> Description </th>";
                            echo  "<th> Status </th>";
                            echo  "<th> Category </th>";
                            echo  "<th> Price </th>";
                            echo  "<th> Size </th>";
                            // echo  "<th> Image </th>";
                            echo  "<th> Action </th>";
                        echo "<thead>";

                        while($result = mysqli_fetch_assoc($query))
                        {
                            echo "<tr>";
                                    echo "<td> $result[room_id] </td>"; 
                                    echo "<td> $result[description] </td>"; 
                                    echo "<td> $result[status] </td>"; 
                                    echo "<td> $result[category] </td>"; 
                                    echo "<td> $result[price] </td>"; 
                                    echo "<td> $result[size] </td>"; 
                                    // echo "<td> <img src='./Images/book.jpg' width='50px'> </td>"; 
echo " <td class='book'>
        <a href='booking.php?rid=".$result['room_id']."&p=".$result['price']."&cat=".$result['category']."'>BOOK</a>
        </td>"; 

                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else
                    {
                        echo "NO AVAILABLE ROOMS LEFT FOR BOOKING";
                    }
            }
    else
    {
        echo "query failed";
    }

?>


