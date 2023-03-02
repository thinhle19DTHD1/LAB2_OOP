<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="author" content="quocthinh"/>
    <link href="/LAB2/site.css" rel="stylesheet"/>
    <title>OOP PHP</title>
</head>
<body>
    <div id="wrapper">
    <?php
        require_once("userclass.php");
        $quocthinh = new user('quoc thinh','thinh@gmail.com');
        //output
        echo "<h2>---User info--</h2>";
        echo "UserID: ".$quocthinh->GetUserID()."<br/>";
        echo "UserName: ".$quocthinh->GetUserName()."<br/>";
        //add more
        $quocthinhmore = new user("Nguyen Van A ", "anguyenvan@gmail.com");
        echo "<h2>---More user--</h2>";
        echo "UserID: ".$quocthinhmore->GetUserID()."<br/>";
        echo "UserName: ".$quocthinhmore->GetuserName()."<br/>"."<br/>";

        include("employeeclass.php");
        $person_a = new Person("Nguyen Van B",1234);
        echo "<h2>More OPP PHP</h2>";
        echo "PersonName: ".$person_a->Getname()."</br>";
        echo "PersionID: ".$person_a->GetNationalID()."</br>";

        echo "<h2>Employee</h2>";
        $employe_a = new Employee("Nguyen Van C",5678,"Security");
        echo "Employee ID: ".$employe_a->GetEmployeeID()."</br>";
        echo "Employee Name: ".$employe_a->Getname()."</br>";
        echo "Employee Department: ".$employe_a->GetDepartment()."</br>";
        echo "<h2>More Employee</h2>";
        $employe_b = new Employee("Nguyen Van D",112233,"Offical");
        echo "Employee ID: ".$employe_b->GetEmployeeID()."</br>";
        echo "Employee Name: ".$employe_b->Getname()."</br>";
        echo "Employee Department: ".$employe_b->GetDepartment()."</br>";
    ?>
    </div>
    <footer>
        &#169; 2016 - Quoc Thinh - Faculty of Infomation Technology (HUTECH)
    </footer>
</body>
</html>