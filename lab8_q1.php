<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 8 Q1</title> 
</head> 
<body> 
    <?php  
        $name = "NUR ANIS ATHIRAH BINTI YUSRI";
        $matric_num = "CI230133";
        $course = "BACHELOR OF COMPUTER SCIENCE (SOFTWARE ENGINEERING) WITH HONOURS";
        $yearOfStudy = "3";
        $address = "no 54-8, Lorong Melur, Parit Jelutong, 86400 Batu Pahat, Johor";
    ?> 
    <table> 
        <tr> 
            <td>Name :</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
        <tr>
            <td>Matric ID :</td> 
            <td><?php echo "$matric_num"; ?></td>
        </tr>
        <tr>
             <td>Course :</td> 
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study :</td> 
            <td><?php echo "$yearOfStudy"; ?> year</td>
        </tr>
        <tr>
            <td>Address :</td> 
            <td><?php echo "$address"; ?></td>
        </tr>
    </table> 
</body> 
</html>