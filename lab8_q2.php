<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 8 Q2</title> 
</head> 
<body> 
    <h2>Students Information</h2>
    <?php  
      $students =[
        [
            'name' => 'Alice',
            'program'=> 'BIP',
            'age'=> 21,

        ],
        [
            'name' => 'Bob',
            'program'=> 'BIS',
            'age'=> 2,

        ],
        [
            'name' => 'Raju',
            'program'=> 'BIT',
            'age'=> 22,

        ]
      ];
    ?> 
    <table border="1" cellpadding="8" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['program']); ?></td>
                    <td><?php echo htmlspecialchars($student['age']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</body> 
</html>